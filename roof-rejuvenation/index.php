<?php
// Extract SRC and SUB2 parameters (case-insensitive)
$src = '';
$aUrl = null;
if (isset($_SERVER['QUERY_STRING'])) {
  $aUrl = $_SERVER['QUERY_STRING'];
}

if ($aUrl != null) {
  $src = $aUrl;
} else {
  if (!empty($_GET)) {
    foreach ($_GET as $key => $val) {
      if (strcasecmp($key, 'src') === 0) {
        $src = $val;
        break;
      }
    }
  }
}

$sub2 = '';
if (!empty($_GET)) {
  foreach ($_GET as $key => $val) {
    if (strcasecmp($key, 'sub2') === 0) {
      $sub2 = $val;
      break;
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Roof Rejuvenation — Free Qualification Check</title>
  <meta name="description"
    content="Extend the life of your asphalt shingle roof without replacement. Free roof assessment." />

  <!-- Open Graph -->
  <meta property="og:title" content="Extend the Life of Your Roof — Without Replacing It" />
  <meta property="og:description" content="See if your roof qualifies for rejuvenation. Free assessment." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://quotemenetwork.com/roof-rejuvenation/images/hero.jpg" />

  <style>
    body {
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #0b0f17;
      color: #eaf0ff;
      line-height: 1.45;
    }

    .wrap {
      max-width: 1100px;
      margin: auto;
      padding: 20px
    }

    h1 {
      font-size: 38px;
      margin-bottom: 10px
    }

    p {
      color: #9aa4b2
    }

    .hero {
      background:
        linear-gradient(180deg, rgba(0, 0, 0, .35), rgba(0, 0, 0, .75)),
        url('./images/hero.jpg') center/cover no-repeat;
      border-radius: 18px;
      padding: 60px 30px;
    }

    .btn {
      display: inline-block;
      background: #22c55e;
      color: #06260f;
      padding: 14px 18px;
      border-radius: 12px;
      font-weight: 700;
      text-decoration: none;
      margin-top: 16px;
    }

    .section {
      margin-top: 30px;
      background: #111827;
      border-radius: 18px;
      padding: 20px;
    }

    .images {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
      margin-top: 24px;
    }

    .img-card {
      position: relative;
      border-radius: 14px;
      overflow: hidden;
    }

    .img-card img {
      display: block;
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
    }

    .label {
      position: absolute;
      top: 12px;
      left: 12px;
      background: rgba(0, 0, 0, 0.75);
      color: white;
      padding: 5px 12px;
      border-radius: 8px;
      font-size: 13px;
      font-weight: 700;
      backdrop-filter: blur(4px);
    }

    form input,
    form select {
      width: 100%;
      padding: 12px;
      margin-top: 10px;
      border-radius: 10px;
      border: none;
      box-sizing: border-box;
    }

    .grid2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    @media (max-width: 600px) {
      .grid2 {
        grid-template-columns: 1fr;
        gap: 0;
      }
    }

    form button {
      width: 100%;
      margin-top: 14px;
      background: #22c55e;
      border: none;
      padding: 14px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 700;
      cursor: pointer;
    }

    .error {
      background: #7f1d1d;
      color: #fecaca;
      padding: 12px;
      border-radius: 10px;
      margin-bottom: 16px;
      border: 1px solid #991b1b;
    }
  </style>
  <!-- Meta Pixel Code -->
  <script>
    !function (f, b, e, v, n, t, s) {
      if (f.fbq) return; n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
      n.queue = []; t = b.createElement(e); t.async = !0;
      t.src = v; s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '26214484088137252');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=26214484088137252&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>

<body>
  <div class="wrap">
    <div class="hero">
      <h1>Extend the Life of Your Roof — Without Replacing It</h1>
      <p>Roof rejuvenation can add years of life to your roof at a fraction of replacement cost.</p>
      <a href="#form" class="btn">Check If My Roof Qualifies</a>
    </div>

    <div class="section">
      <h2>What Is Roof Rejuvenation?</h2>
      <p>A spray-on treatment that restores flexibility to aging asphalt shingles.</p>

      <div class="images">
        <div class="img-card">
          <!-- <span class="label">Before</span> -->
          <img src="./images/before.jpg" alt="Roof before">
        </div>
        <div class="img-card">
          <!-- <span class="label">After</span> -->
          <img src="./images/after.jpg" alt="Roof after">
        </div>
      </div>
    </div>

    <div class="section" id="form">
      <h2>Get a Free Roof Assessment</h2>

      <?php if (!empty($_GET['error'])): ?>
        <div class="error">
          <?php echo htmlspecialchars(urldecode($_GET['error'])); ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="../process.php">
        <input type="hidden" name="_service" value="roof-rejuvenation">
        <input type="hidden" name="SRC" value="<?php echo htmlspecialchars($src); ?>">
        <input type="hidden" name="SUB2" value="<?php echo htmlspecialchars($sub2); ?>">
        <input type="hidden" name="utm_source" value="<?php echo htmlspecialchars($_GET['utm_source'] ?? ''); ?>">
        <input type="hidden" name="utm_campaign" value="<?php echo htmlspecialchars($_GET['utm_campaign'] ?? ''); ?>">
        <input type="hidden" name="utm_medium" value="<?php echo htmlspecialchars($_GET['utm_medium'] ?? ''); ?>">
        <input type="hidden" name="utm_term" value="<?php echo htmlspecialchars($_GET['utm_term'] ?? ''); ?>">
        <input type="hidden" name="utm_content" value="<?php echo htmlspecialchars($_GET['utm_content'] ?? ''); ?>">

        <div class="grid2">
          <input placeholder="First name" name="first_name" required>
          <input placeholder="Last name" name="last_name" required>
        </div>

        <input placeholder="Phone" name="phone" required>
        <input placeholder="Email" name="email" type="email" required>
        <input placeholder="ZIP Code" name="zip" required>
        <button type="submit">See If I Qualify</button>
      </form>
    </div>
  </div>
</body>

</html>