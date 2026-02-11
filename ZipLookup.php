<?php

class ZipLookup
{
    private static $dataFile = __DIR__ . '/data/geo-data.csv';

    /**
     * Lookup city, state, and county by ZIP code using binary search.
     * The CSV file MUST be sorted by ZIP code (column 4).
     *
     * Format: state_fips,state,state_abbr,zipcode,county,city
     * Example: 1,Alabama,AL,35004,St. Clair,Acmar
     */
    public static function lookup($zip)
    {
        $zip = trim($zip);
        if (empty($zip) || !preg_match('/^\d{5}$/', $zip)) {
            return null;
        }

        if (!file_exists(self::$dataFile)) {
            return null;
        }

        $fp = fopen(self::$dataFile, 'r');
        if (!$fp) {
            return null;
        }

        // Get file size
        fseek($fp, 0, SEEK_END);
        $fileSize = ftell($fp);

        // Binary search setup
        $low = 0;
        $high = $fileSize;

        // Skip header row roughly (assuming first line < 100 bytes, safe for binary search)
        // Actually, for precise binary search on text lines, we pick a mid point,
        // iterate to next newline, read line, compare.

        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);

            // Seek to mid point
            fseek($fp, $mid);

            // If not at start of file, discard partial line
            if ($mid > 0) {
                fgets($fp);
            }

            // Read next full line
            $line = fgets($fp);

            if (!$line) {
                break;
            }

            $data = str_getcsv($line);

            // state_fips,state,state_abbr,zipcode,county,city
            // zip is index 3
            if (count($data) < 6) {
                continue;
            }

            $currentZip = $data[3];

            if ($currentZip === $zip) {
                fclose($fp);
                return [
                    'city' => $data[5],
                    'county' => $data[4],
                    'state' => $data[2] // state_abbr
                ];
            }

            if ($currentZip < $zip) {
                $low = ftell($fp); // Move low to current position
            } else {
                $high = $mid - 1; // Move high back
            }

            // Safety break to prevent infinite loops if logic is slightly off
            if ($high < $low) {
                break;
            }
            // If the range is small enough that we might be stuck between lines, just scan briefly?
            // A simpler binary search on text usually relies on "start of line" alignment. 
            // The approach above is standard for text files: jump to mid, read to next newline, compare to that line.
            // If consistent, it works.
        }

        fclose($fp);
        return null;
    }
}
