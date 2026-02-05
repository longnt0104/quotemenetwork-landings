<?php
// A secret key to prevent random people from triggering this
$secret = 'qmn-landing-deploy-secret1242o1il3jil21';

// 1. Verify the request comes from GitHub
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'] ?? '';
$payload = file_get_contents('php://input');

if (!$signature || !$payload) {
    die('No payload.');
}

list($algo, $hash) = explode('=', $signature, 2);
$payloadHash = hash_hmac($algo, $payload, $secret);

if ($hash !== $payloadHash) {
    die('Invalid secret.');
}

// 2. Run the update
// "2>&1" allows us to see errors if it fails
echo "<h2>Running Deployment...</h2>";
$output = shell_exec('git pull origin main 2>&1');
echo "<pre>$output</pre>";
?>