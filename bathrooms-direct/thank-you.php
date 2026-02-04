<?php
// thank-you.php (QuoteMeNetwork)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank You | QuoteMeNetwork</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; background: var(--bg); color: var(--text); }
    .wrap { max-width: 760px; margin: 56px auto; padding: 0 16px; }
    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      box-shadow: 0 10px 24px rgba(0,0,0,0.06);
      padding: 34px;
      text-align: center;
    }
    h1 { margin: 0 0 10px; font-size: 28px; color: #0f172a; }
    p { margin: 0 0 14px; color: var(--muted); line-height: 1.5; }
    .btn {
      display: inline-block;
      margin-top: 10px;
      background: var(--brand);
      color: #fff;
      text-decoration: none;
      padding: 14px 18px;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 700;
    }
    .btn:hover { background: var(--brandDark); }
    .small { margin-top: 16px; font-size: 12px; color: var(--muted); }
    .small a { color: var(--brand); text-decoration: none; }
    .small a:hover { text-decoration: underline; }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="wrap">
  <div class="card">
    <h1>Thank you — request received</h1>
    <p>We’ve received your information. A local pro may contact you shortly with pricing and availability.</p>
    <p>If you don’t hear back soon, you can submit another request.</p>

    <a class="btn" href="index.php">Request another quote</a>

    <div class="small">
      <a href="./privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>
    </div>
  </div>
</div>
</body>
</html>
