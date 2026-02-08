<?php
// index.php (QuoteMeNetwork)
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Get Free Bathroom Remodel Quotes | QuoteMeNetwork</title>
  <meta name="description" content="Request free bathroom remodeling quotes from local pros." />

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: var(--bg);
      color: var(--text);
    }

    .wrap {
      max-width: 760px;
      margin: 42px auto;
      padding: 0 16px;
    }

    .card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 14px;
      box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
      padding: 26px;
    }

    .top {
      text-align: center;
      margin-bottom: 18px;
    }

    .top h1 {
      font-size: 26px;
      margin: 0 0 8px;
      color: #0f172a;
    }

    .top p {
      margin: 0;
      color: var(--muted);
      line-height: 1.35;
    }

    .progress {
      display: flex;
      gap: 8px;
      margin: 18px 0 22px;
    }

    .bar {
      height: 8px;
      border-radius: 999px;
      background: #eaf2fb;
      flex: 1;
      overflow: hidden;
      border: 1px solid var(--border);
    }

    .bar>div {
      height: 100%;
      background: var(--brand);
      width: 0%;
      transition: width .25s ease;
    }

    .step {
      display: none;
    }

    .step.active {
      display: block;
    }

    .step h2 {
      font-size: 20px;
      margin: 0 0 14px;
      text-align: center;
    }

    .options {
      display: grid;
      gap: 12px;
    }

    .opt {
      width: 100%;
      padding: 18px 14px;
      border-radius: 12px;
      border: 1px solid var(--border);
      background: #f9fbff;
      cursor: pointer;
      font-size: 18px;
      transition: transform .04s ease, border-color .12s ease, background .12s ease, box-shadow .12s ease;
      text-align: left;
    }

    .opt:hover {
      border-color: #cfe4f7;
      background: #f2f8ff;
    }

    .opt:active {
      transform: scale(0.99);
    }

    .opt.selected {
      border-color: var(--brand);
      box-shadow: 0 0 0 2px rgba(0, 119, 204, 0.12);
      background: #f2f8ff;
    }

    .opt strong {
      display: block;
      font-size: 18px;
    }

    .opt span {
      display: block;
      margin-top: 6px;
      color: var(--muted);
      font-size: 14px;
    }

    .grid2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    @media (max-width: 560px) {
      .grid2 {
        grid-template-columns: 1fr;
      }
    }

    .field {
      margin-top: 10px;
      text-align: left;
    }

    .field label {
      display: block;
      font-size: 13px;
      color: var(--muted);
      margin: 0 0 6px;
    }

    .field input,
    .field select {
      width: 100%;
      padding: 14px 12px;
      border-radius: 10px;
      border: 1px solid var(--border);
      font-size: 16px;
      outline: none;
      background: #fff;
    }

    .field input:focus,
    .field select:focus {
      border-color: #b9d7f2;
      box-shadow: 0 0 0 4px rgba(0, 119, 204, 0.12);
    }

    .navBtns {
      display: flex;
      gap: 10px;
      justify-content: center;
      margin-top: 18px;
      flex-wrap: wrap;
    }

    .btn {
      border: none;
      border-radius: 10px;
      padding: 14px 18px;
      font-size: 16px;
      cursor: pointer;
    }

    .btn-primary {
      background: var(--brand);
      color: #fff;
      font-weight: 700;
    }

    .btn-primary:hover {
      background: var(--brandDark);
    }

    .btn-ghost {
      background: #f3f4f6;
      color: #111;
      border: 1px solid var(--border);
    }

    .btn[disabled] {
      opacity: .55;
      cursor: not-allowed;
    }

    .fineprint {
      margin-top: 14px;
      font-size: 12px;
      color: var(--muted);
      line-height: 1.35;
      text-align: center;
    }

    .fineprint a {
      color: var(--brand);
      text-decoration: none;
    }

    .fineprint a:hover {
      text-decoration: underline;
    }

    .error {
      margin-top: 12px;
      margin-bottom: 24px;
      background: #fff5f5;
      border: 1px solid #ffd1d1;
      color: #7f1d1d;
      border-radius: 10px;
      padding: 12px;
      display: none;
      text-align: left;
    }

    .footerLinks {
      margin-top: 18px;
      text-align: center;
      font-size: 12px;
      color: var(--muted);
    }

    .footerLinks a {
      color: var(--brand);
      text-decoration: none;
    }

    .footerLinks a:hover {
      text-decoration: underline;
    }

    .feature-img {
      width: 100%;
      height: auto;
      border-radius: 12px;
      margin-bottom: 24px;
      display: block;
    }
  </style>
  <!-- Place in <head> tag -->
  <script async defer src="https://cdn.affonso.io/js/pixel.min.js" data-affonso="cmkouamw8001krjwj29mjsw5j"
    data-cookie_duration="30">
    </script>
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

  <?php include 'header.php'; ?>

  <div class="wrap">
    <div class="card">
      <img src="./images/image.png" alt="Bathroom Remodel" class="feature-img">
      <div class="top">
        <h1>Get Free Bathroom Remodel Quotes</h1>
        <p>Answer a few quick questions. We’ll match you with local bathroom remodeling pros.</p>
      </div>



      <div id="err" class="error"></div>

      <form id="bathForm" method="post" action="../process.php" novalidate>
        <input type="hidden" name="_service" value="bathrooms-direct">
        <!-- Optional tracking -->
        <input type="hidden" name="SUB2" value="<?php echo htmlspecialchars($sub2); ?>">
        <input type="hidden" name="SRC" value="<?php echo htmlspecialchars($src); ?>">
        <input type="hidden" name="utm_source"
          value="<?php echo htmlspecialchars(isset($_GET['utm_source']) ? $_GET['utm_source'] : ''); ?>">
        <input type="hidden" name="utm_campaign"
          value="<?php echo htmlspecialchars(isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''); ?>">
        <input type="hidden" name="utm_medium"
          value="<?php echo htmlspecialchars(isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''); ?>">
        <input type="hidden" name="utm_term"
          value="<?php echo htmlspecialchars(isset($_GET['utm_term']) ? $_GET['utm_term'] : ''); ?>">
        <input type="hidden" name="utm_content"
          value="<?php echo htmlspecialchars(isset($_GET['utm_content']) ? $_GET['utm_content'] : ''); ?>">

        <!-- Hidden defaults for removed steps -->
        <input type="hidden" name="project_type" value="Full Bathroom Remodel">
        <input type="hidden" name="budget" value="$7,500–$15,000">
        <input type="hidden" name="timeline" value="ASAP">

        <!-- Contact Form -->
        <section>

          <!-- Step 4 -->


          <div class="field">
            <label for="zip">ZIP code</label>
            <input id="zip" name="zip" type="text" inputmode="numeric" maxlength="10" required>
          </div>

          <div class="grid2">
            <div class="field">
              <label for="first_name">First name</label>
              <input id="first_name" name="first_name" type="text" autocomplete="given-name" required>
            </div>
            <div class="field">
              <label for="last_name">Last name</label>
              <input id="last_name" name="last_name" type="text" autocomplete="family-name" required>
            </div>
          </div>

          <div class="field">
            <label for="phone">Phone</label>
            <input id="phone" name="phone" type="tel" autocomplete="tel" required>
            <div style="font-size: 12px; color: #6b7280; margin-top: 4px;">Used only for quote follow-up. No spam.</div>
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required>
          </div>

          <div class="fineprint">
            By clicking “Check My Options”, you agree to our
            <a href="./privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>.
          </div>
        </section>

        <div class="navBtns" style="display: block; text-align: center;">
          <p style="margin: 0 0 10px; font-size: 14px; font-weight: 500; color: #374151;">Homeowners in your area are
            comparing quotes for bathroom remodels. Takes 30 seconds.</p>
          <button type="submit" class="btn btn-primary" id="submitBtn" style="width: 100%;">Check My Options</button>
        </div>

        <div class="footerLinks">
          <a href="./privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    const form = document.getElementById('bathForm');
    const submitBtn = document.getElementById('submitBtn');
    const errBox = document.getElementById('err');

    function showError(msg) {
      errBox.textContent = msg;
      errBox.style.display = 'block';
    }

    function requireFilled(ids) {
      for (const id of ids) {
        const el = document.getElementById(id);
        if (!el || !String(el.value || '').trim()) return false;
      }
      return true;
    }

    function validateForm() {
      const requiredFields = ['first_name', 'last_name', 'email', 'phone', 'zip'];
      if (!requireFilled(requiredFields)) {
        // focus the first empty field
        for (const f of requiredFields) {
          const el = document.getElementById(f);
          if (!el.value.trim()) { el.focus(); break; }
        }
        showError('Please complete all contact fields.');
        return false;
      }
      if (!/^\S+@\S+\.\S+$/.test(document.getElementById('email').value.trim())) {
        document.getElementById('email').focus();
        showError('Please enter a valid email.');
        return false;
      }
      return true;
    }

    form.addEventListener('submit', (e) => {
      if (!validateForm()) e.preventDefault();
    });

    // Check for server-side error passed from PHP
    const serverError = <?php echo !empty($_GET['error']) ? json_encode($_GET['error']) : 'null'; ?>;
    if (serverError) {
      showError(serverError);
    }
  </script>
</body>

</html>