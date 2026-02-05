<?php


/**
 * FB Lead API Integration Class
 *
 * This class handles the submission of lead data to the LeadVantage API
 * Automatically skips optional fields that are empty
 */
class LeadAPI
{
    private $apiUrl = 'https://leadvantage.co/api/251ec0f1b1dc03c8f8c728f537586e51f0db/';
    private $timeout = 120;
    private $maxRedirects = 4;

    /**
     * Submit lead data to the API
     *
     * @param array $data Lead data containing required and optional fields
     * @return array Response containing 'success' (bool) and 'message' (string)
     */
    public function submitLead($data)
    {
        // Validate required fields
        $validation = $this->validateRequiredFields($data);
        if (!$validation['valid']) {
            return [
                'success' => false,
                'message' => 'Validation failed: ' . $validation['message']
            ];
        }

        // Build the post data (only include non-empty fields)
        $postData = $this->buildPostData($data);

        // Submit to API
        return $this->sendRequest($postData);
    }

    /**
     * Validate all required fields are present and valid
     *
     * @param array $data Lead data
     * @return array Validation result
     */
    private function validateRequiredFields($data)
    {
        $requiredFields = [
            'email',
            'SRC',
            'zip',
            'Home_Improvement_Product',
            'subcat',
            'TCPAConsent',
            'TCPAConsentLanguage',
            'firstname',
            'lastname',
            'phone',
            'address'
        ];

        foreach ($requiredFields as $field) {
            if (empty($data[$field])) {
                return [
                    'valid' => false,
                    'message' => "Required field '{$field}' is missing or empty"
                ];
            }
        }

        // Validate email format
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return [
                'valid' => false,
                'message' => "Invalid email format"
            ];
        }

        return ['valid' => true, 'message' => ''];
    }

    /**
     * Build post data array, excluding empty optional fields
     *
     * @param array $data Raw lead data
     * @return array Filtered post data
     */
    private function buildPostData($data)
    {
        $allFields = [
            // Required fields
            'email',
            'SRC',
            'zip',
            'Home_Improvement_Product',
            'subcat',
            'TCPAConsent',
            'TCPAConsentLanguage',
            'firstname',
            'lastname',
            'phone',
            'address',
            // Optional fields
            'ipAddress',
            'phonetype',
            'city',
            'state',
            'propertytype',
            'project_budget',
            'project_status',
            'best_time_to_contact',
            'timeframe',
            'homeowner',
            'answer1',
            'attribute1',
            'attribute2',
            'answer2',
            'attribute3',
            'answer3',
            'attribute4',
            'answer4',
            'attribute5',
            'answer5',
            'attribute6',
            'answer6',
            'attribute7',
            'answer7',
            'leadid',
            'Notes',
            'optional_comments',
            'lead_id'
        ];

        $postData = [];

        foreach ($allFields as $field) {
            // Only add field if it exists and is not empty
            if (isset($data[$field]) && $data[$field] !== '') {
                $postData[$field] = $data[$field];
            }
        }

        return $postData;
    }

    /**
     * Send the API request using cURL
     *
     * @param array $postData Post data to send
     * @return array Response containing 'success' and 'message'
     */
    private function sendRequest($postData)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_URL, $this->apiUrl);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_MAXREDIRS, $this->maxRedirects);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        // Handle cURL errors
        if ($result === false) {
            return [
                'success' => false,
                'message' => 'cURL Error: ' . $curlError
            ];
        }

        // Check HTTP response code
        if ($httpCode !== 200) {
            return [
                'success' => false,
                'message' => 'HTTP Error ' . $httpCode . ': ' . $result
            ];
        }

        // Parse API response
        if (stripos($result, 'SUCCESS') !== false) {
            return [
                'success' => true,
                //                'message' => $result
                'message' => "Thank you for contacting us. We will be in touch with you soon."
            ];
        } else {
            if (stripos(strtolower($result), 'no partner') !== false) {
                return [
                    'success' => true,
                    'message' => "Thank you for contacting us. We will be in touch with you soon."
                ];
            }
            return [
                'success' => false,
                'message' => str_replace("FAIL|", "", $result)
            ];
        }
    }

    /**
     * Get list of valid Home Improvement Products
     *
     * @return array List of valid products
     */
    public function getValidProducts()
    {
        return [
            'Additions',
            'Asbestos Removal',
            'Cleaning',
            'Countertops',
            'Electrical',
            'Fences',
            'Flooring',
            'Handyman',
            'Heating-Cooling',
            'Painting',
            'Plumbing',
            'Remodels',
            'Roofing',
            'Siding',
            'Solar',
            'Windows'
        ];
    }
}

