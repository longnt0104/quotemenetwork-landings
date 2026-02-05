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
// Define the custom SSH command
// 1. Point to the specific key (-i ...)
// 2. Auto-accept GitHub's fingerprint (-o StrictHostKeyChecking=no)
$sshCommand = 'ssh -i /home/www/qmn_landings/.ssh/id_ed25519 -o StrictHostKeyChecking=no';

// Run git pull using that environment variable
$output = shell_exec("GIT_SSH_COMMAND='$sshCommand' git pull origin main 2>&1");

echo "<pre>$output</pre>";
?>