<?php
// Shared process.php - handles form submissions for all service folders
// Auto-detects service based on referrer and applies correct configuration

// Determine which service this request is for
function detectService()
{
    // Priority 1: Check hidden service field (most reliable)
    if (!empty($_POST['_service'])) {
        return $_POST['_service'];
    }

    // Priority 2: Try to detect from HTTP_REFERER
    $referer = $_SERVER['HTTP_REFERER'] ?? '';

    if (!empty($referer)) {
        // Pattern 1: /folder/index.php
        if (preg_match('#/([^/]+)/index\.php#', $referer, $matches)) {
            return $matches[1];
        }

        // Pattern 2: /folder/ (with trailing slash)
        if (preg_match('#/([^/]+)/$#', $referer, $matches)) {
            return $matches[1];
        }

        // Pattern 3: /folder (without trailing slash, at end of URL or before query string)
        if (preg_match('#/([^/]+?)(?:\?|$)#', $referer, $matches)) {
            // Make sure it's not the root domain
            if ($matches[1] && !preg_match('#^https?:#', $matches[1])) {
                return $matches[1];
            }
        }
    }

    return null;
}

// Service configuration mapping
$serviceConfig = [
    'electrical' => [
        'src' => 'QMN Electrical',
        'product' => 'Electrical',
        'subcat' => 'Electrical - Electrical Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'flooring' => [
        'src' => 'QMN Flooring',
        'product' => 'Flooring',
        'subcat' => 'Flooring - Flooring Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'hvac' => [
        'src' => 'QMN HVAC',
        'product' => 'Heating-Cooling',
        'subcat' => 'Heating-Cooling - Heating and Cooling Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'hvac-direct' => [
        'src' => 'QMN HVAC Direct',
        'product' => 'Heating-Cooling',
        'subcat' => 'Heating-Cooling - Heating and Cooling Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'painting' => [
        'src' => 'QMN Painting',
        'product' => 'Painting',
        'subcat' => 'Painting - Interior',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'plumbing' => [
        'src' => 'QMN Plumbing',
        'product' => 'Plumbing',
        'subcat' => 'Plumbing - Install',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'roofing' => [
        'src' => 'QMN Roofing',
        'product' => 'Roofing',
        'subcat' => 'Roofing - Asphalt Shingle Roof Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'siding' => [
        'src' => 'QMN Siding',
        'product' => 'Siding',
        'subcat' => 'Siding - Vinyl Siding Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'bathrooms' => [
        'src' => 'QMN Bathrooms',
        'product' => 'Remodels',
        'subcat' => 'Remodels - Bathroom Remodel',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'bathrooms-direct' => [
        'src' => 'QMN Bathrooms Direct',
        'product' => 'Remodels',
        'subcat' => 'Remodels - Bathroom Remodel',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'kitchens' => [
        'src' => 'QMN Kitchens',
        'product' => 'Remodels',
        'subcat' => 'Remodels - Kitchen',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'gutters-landing' => [
        'src' => 'QMN Gutters',
        'product' => 'Gutters',
        'subcat' => 'Gutters - Gutter Installation',
        'postback_enabled' => false,
        'postback_urls' => []
    ],
    'roof-rejuvenation' => [
        'src' => 'QMN Roof Rejuvenation',
        'product' => 'Roofing',
        'subcat' => 'Roofing - Roof Rejuvenation',
        'postback_enabled' => false,
        'postback_urls' => []
    ]
];

// Require lead API
require_once __DIR__ . '/lead-api.php';

// Verify POST method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    http_response_code(405);
    exit('Method Not Allowed');
}

// Helper function to safely get POST value
function pick($key)
{
    return isset($_POST[$key]) ? trim((string) $_POST[$key]) : '';
}

// Function to get the client IP address
function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Detect service
$service = detectService();

if (!$service || !isset($serviceConfig[$service])) {
    http_response_code(400);
    exit('Invalid service');
}

$config = $serviceConfig[$service];

// Initialize API
require_once __DIR__ . '/ZipLookup.php';
$api = new LeadAPI();
$sub2 = pick("SUB2");

// Lookup city/state/county from ZIP
$zip = pick("zip");
$geo = ZipLookup::lookup($zip);
$city = $geo['city'] ?? '';
$state = $geo['state'] ?? '';
$county = $geo['county'] ?? '';

// Build lead data
$leadData = [
    // Required fields
    'email' => pick("email"),
    'SRC' => pick("SRC") ?: $config['src'],
    'zip' => pick("zip"),
    'Home_Improvement_Product' => $config['product'],
    'subcat' => $config['subcat'],
    'TCPAConsent' => 'Yes',
    'TCPAConsentLanguage' => 'I consent to receive marketing communications',
    'firstname' => pick("first_name"),
    'lastname' => pick("last_name"),
    'phone' => pick("phone"),
    'address' => 'Empty',

    // Optional fields
    'propertytype' => pick("project_type"),
    'project_budget' => pick("budget"),
    'timeframe' => pick("timeline"),
    'ipAddress' => get_client_ip(),
    'city' => $city,
    'state' => $state,
    'county' => $county,

    // SUB2 tracking
    'attribute1' => $sub2,
    'attribute2' => "WITH_SUB2",
    'Notes' => '',
    'optional_comments' => ''
];

// Submit lead
$response = $api->submitLead($leadData);

if ($response['success']) {
    // Handle SUB2 postback
    if (!empty($sub2)) {
        $encodedSub2 = urlencode($sub2);
        $url = "https://www.rzmef8trk.com/?nid=3049&verification_token=daHqoQfKqoIieSWNcAQthjqF6s6DOH&transaction_id={$encodedSub2}&amount=30";

        // Use file_get_contents as requested
        // Using @ to suppress warnings if the remote server is down, so the user flow isn't interrupted
        @file_get_contents($url);
    }

    // Handle CapCloud postback for 'bathrooms'
    if ($service === 'bathrooms' && !empty($sub2)) {
        $encodedSub2 = $sub2;
        $url = "http://www.capcloudrunr.com/aff_lsr?transaction_id={$encodedSub2}";

        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,  // capture response
            CURLOPT_TIMEOUT => 10,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_FOLLOWLOCATION => true,
        ]);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        echo "HTTP CODE: " . $httpCode . PHP_EOL;

        if ($error) {
            echo "cURL ERROR: " . $error . PHP_EOL;
        } else {
            echo "RESPONSE:" . PHP_EOL;
            echo $response;
        }
    }

    // Success: redirect to thank you page
    header("Location: /$service/thank-you.php");
    exit;
} else {
    // Error: redirect back to form with error message
    $errorMsg = urlencode("We could not process your request: " . $response['message']);
    header("Location: /$service/index.php?error=" . $errorMsg);
    exit;
}
