<?php
// privacy-policy.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy | QuoteMeNetwork</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; background: #f6f7fb; color:#111; }
    .wrap { max-width: 900px; margin: 42px auto; padding: 0 16px; }
    .card { background:#fff; border:1px solid #e5e7eb; border-radius: 14px; padding: 28px; box-shadow: 0 10px 24px rgba(0,0,0,0.06); }
    h1 { margin-top: 0; }
    h2 { margin-top: 22px; }
    p, li { line-height: 1.5; color:#1f2937; }
    .muted { color:#6b7280; font-size: 13px; }
  </style>
</head>
<body>

<?php /* include $_SERVER['DOCUMENT_ROOT']."/header.php"; */ ?>

<div class="wrap">
  <div class="card">
    <h1>Privacy Policy</h1>
    <p class="muted">Last updated: <?php echo date('F j, Y'); ?></p>

    <p>
      This Privacy Policy explains how QuoteMeNetwork (“we”, “us”, “our”) collects, uses, and shares information
      when you visit our website or submit a request for quotes.
    </p>

    <h2>Information we collect</h2>
    <ul>
      <li><strong>Contact information</strong> (such as name, email, phone number, ZIP code) you submit through our forms.</li>
      <li><strong>Project information</strong> you provide (such as service type, home type, timeline).</li>
      <li><strong>Device and usage data</strong> (such as IP address, browser type, pages visited, and approximate location derived from IP).</li>
      <li><strong>Marketing parameters</strong> (such as UTM tags) if present in the URL.</li>
    </ul>

    <h2>How we use information</h2>
    <ul>
      <li>To process your request and connect you with service providers who may contact you about your project.</li>
      <li>To operate, maintain, and improve our website and services.</li>
      <li>To prevent fraud, enforce our terms, and protect our users and systems.</li>
      <li>To comply with legal obligations.</li>
    </ul>

    <h2>How we share information</h2>
    <ul>
      <li><strong>Service providers / contractors</strong> who can provide quotes or services related to your request.</li>
      <li><strong>Vendors and processors</strong> that help us operate our website and systems (e.g., hosting, analytics, CRM).</li>
      <li><strong>Legal and compliance</strong> parties when required by law, subpoena, or to protect rights and safety.</li>
    </ul>

    <h2>Cookies and analytics</h2>
    <p>
      We may use cookies and similar technologies to analyze traffic, remember preferences, and improve performance.
      You can control cookies through your browser settings.
    </p>

    <h2>Your choices</h2>
    <ul>
      <li>You may request access, correction, or deletion of your information where applicable.</li>
      <li>You may opt out of marketing communications if we send them (instructions are provided in the message where relevant).</li>
    </ul>

    <h2>Data retention</h2>
    <p>
      We retain information for as long as needed to fulfill the purposes described above, unless a longer retention
      period is required or permitted by law.
    </p>

    <h2>Security</h2>
    <p>
      We use reasonable administrative, technical, and physical safeguards designed to protect information.
      No method of transmission or storage is 100% secure.
    </p>

    <h2>Children’s privacy</h2>
    <p>
      Our services are not directed to children under 13 and we do not knowingly collect information from children.
    </p>

    <h2>Contact</h2>
    <p>
      If you have questions about this Privacy Policy, contact us at:
      <br><br>
      <strong>Email:</strong> info@quotemenetwork.com
    </p>

    <h2>Changes</h2>
    <p>
      We may update this Privacy Policy from time to time. The “Last updated” date above reflects the most recent revision.
    </p>
  </div>
</div>

<?php /* include $_SERVER['DOCUMENT_ROOT']."/footer.php"; */ ?>

</body>
</html>
