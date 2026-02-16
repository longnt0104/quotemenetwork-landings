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
<?php
// gutters-get-quotes.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Get Free Gutter Quotes | QuoteMeNetwork</title>
  <meta name="description" content="Request free gutter installation or replacement quotes from local pros." />

  <style>
    :root {
      --brand: #0077cc;
      --brandDark: #005fa3;
      --text: #111;
      --muted: #6b7280;
      --bg: #f6f7fb;
      --card: #fff;
      --border: #e5e7eb;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: var(--bg);
      color: var(--text);
    }

    .wrap {
      max-width: 720px;
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
      transition: transform .04s ease, border-color .12s ease, background .12s ease;
      text-align: left;
    }

    .opt:hover {
      border-color: #cfe4f7;
      background: #f2f8ff;
    }

    .opt:active {
      transform: scale(0.99);
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

    .nav {
      display: flex;
      gap: 10px;
      justify-content: space-between;
      /*margin-top: 18px; */
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
      background: #fff5f5;
      border: 1px solid #ffd1d1;
      color: #7f1d1d;
      border-radius: 10px;
      padding: 12px;
      display: none;
      text-align: left;
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

  <?php include "header.php"; ?>

  <div class="wrap">
    <div class="card">
      <div class="top">
        <h1>Get Free Gutter Quotes</h1>
        <p>Answer a few quick questions. We’ll match you with local pros for installation or replacement.</p>
      </div>

      <div class="progress" aria-hidden="true">
        <div class="bar">
          <div id="p1"></div>
        </div>
        <div class="bar">
          <div id="p2"></div>
        </div>
        <div class="bar">
          <div id="p3"></div>
        </div>
        <div class="bar">
          <div id="p4"></div>
        </div>
      </div>

      <div id="err" class="error"></div>

      <form id="gutterForm" method="post" action="../process.php" novalidate>
        <input type="hidden" name="_service" value="gutters-landing">
        <input type="hidden" name="SRC" value="<?php echo htmlspecialchars($src); ?>">
        <input type="hidden" name="SUB2" value="<?php echo htmlspecialchars($sub2); ?>">
        <!-- Hidden tracking (optional) -->
        <input type="hidden" name="utm_source" value="<?php echo htmlspecialchars($_GET['utm_source'] ?? ''); ?>">
        <input type="hidden" name="utm_campaign" value="<?php echo htmlspecialchars($_GET['utm_campaign'] ?? ''); ?>">
        <input type="hidden" name="utm_medium" value="<?php echo htmlspecialchars($_GET['utm_medium'] ?? ''); ?>">
        <input type="hidden" name="utm_term" value="<?php echo htmlspecialchars($_GET['utm_term'] ?? ''); ?>">
        <input type="hidden" name="utm_content" value="<?php echo htmlspecialchars($_GET['utm_content'] ?? ''); ?>">

        <!-- Step 1 -->
        <section class="step active" data-step="1">
          <h2>What do you need?</h2>
          <div class="options">
            <button type="button" class="opt" data-set="service_type" data-val="Install New">
              <strong>Install New Gutters</strong>
              <span>New installation on your home</span>
            </button>
            <button type="button" class="opt" data-set="service_type" data-val="Replace Existing">
              <strong>Replace Existing Gutters</strong>
              <span>Old gutters removed + replaced</span>
            </button>
            <button type="button" class="opt" data-set="service_type" data-val="Repair / Reattach">
              <strong>Repair / Reattach</strong>
              <span>Leaks, sagging, loose sections</span>
            </button>
            <button type="button" class="opt" data-set="service_type" data-val="Gutter Guards">
              <strong>Add Gutter Guards</strong>
              <span>Reduce clogs and maintenance</span>
            </button>
          </div>
          <input type="hidden" name="service_type" id="service_type" required>
        </section>

        <!-- Step 2 -->
        <section class="step" data-step="2">
          <h2>Home type</h2>
          <div class="options">
            <button type="button" class="opt" data-set="home_type" data-val="Single Family">
              <strong>Single-family</strong><span>Detached home</span>
            </button>
            <button type="button" class="opt" data-set="home_type" data-val="Townhome">
              <strong>Townhome</strong><span>Attached or row home</span>
            </button>
            <button type="button" class="opt" data-set="home_type" data-val="Multi-family">
              <strong>Multi-family</strong><span>Duplex / triplex / etc.</span>
            </button>
            <button type="button" class="opt" data-set="home_type" data-val="Other">
              <strong>Other</strong><span>Mobile / mixed use / etc.</span>
            </button>
          </div>
          <input type="hidden" name="home_type" id="home_type" required>
        </section>

        <!-- Step 3 -->
        <section class="step" data-step="3">
          <h2>Project size</h2>
          <div class="options">
            <button type="button" class="opt" data-set="stories" data-val="1">
              <strong>1 story</strong><span>Single level</span>
            </button>
            <button type="button" class="opt" data-set="stories" data-val="2">
              <strong>2 stories</strong><span>Most common</span>
            </button>
            <button type="button" class="opt" data-set="stories" data-val="3+">
              <strong>3+ stories</strong><span>Taller home</span>
            </button>
          </div>

          <div style="height:12px"></div>

          <div class="options">
            <button type="button" class="opt" data-set="timeline" data-val="ASAP">
              <strong>ASAP</strong><span>Within 1–2 weeks</span>
            </button>
            <button type="button" class="opt" data-set="timeline" data-val="This Month">
              <strong>This month</strong><span>Next few weeks</span>
            </button>
            <button type="button" class="opt" data-set="timeline" data-val="1–3 Months">
              <strong>1–3 months</strong><span>Planning ahead</span>
            </button>
          </div>

          <input type="hidden" name="stories" id="stories" required>
          <input type="hidden" name="timeline" id="timeline" required>
        </section>

        <!-- Step 4 -->
        <section class="step" data-step="4">
          <h2>Where should we send quotes?</h2>

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
            <label for="email">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" required>
          </div>

          <div class="field">
            <label for="phone">Phone</label>
            <input id="phone" name="phone" type="tel" autocomplete="tel" required>
          </div>

          <div class="field">
            <label for="zip">ZIP code</label>
            <input id="zip" name="zip" type="text" inputmode="numeric" maxlength="10" required>
          </div>

          <div class="fineprint">
            By clicking “Get My Free Quote”, you agree to our
            <a href="./privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>.
          </div>
        </section>

        <div class="nav">
          <button type="button" class="btn btn-ghost" id="prevBtn">Previous</button>
          <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
          <button type="submit" class="btn btn-primary" id="submitBtn" style="display:none;">Get My Free Quote</button>
        </div>
      </form>
      <?php include '../footer.php'; ?>
    </div>
  </div>

  <?php /* include $_SERVER['DOCUMENT_ROOT']."/footer.php"; */ ?>

  <script>
    const form = document.getElementById('gutterForm');
    const steps = Array.from(document.querySelectorAll('.step'));
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const errBox = document.getElementById('err');

    const p1 = document.getElementById('p1');
    const p2 = document.getElementById('p2');
    const p3 = document.getElementById('p3');
    const p4 = document.getElementById('p4');

    let current = 0;

    function setProgress(idx) {
      const widths = [0, 0, 0, 0].map((_, i) => i <= idx ? 100 : 0);
      p1.style.width = widths[0] + '%';
      p2.style.width = widths[1] + '%';
      p3.style.width = widths[2] + '%';
      p4.style.width = widths[3] + '%';
    }

    function showStep(idx) {
      steps.forEach((s, i) => s.classList.toggle('active', i === idx));
      prevBtn.disabled = (idx === 0);
      nextBtn.style.display = (idx === steps.length - 1) ? 'none' : 'inline-block';
      submitBtn.style.display = (idx === steps.length - 1) ? 'inline-block' : 'none';
      errBox.style.display = 'none';
      errBox.textContent = '';
      setProgress(idx);
    }

    function showError(msg) {
      errBox.textContent = msg;
      errBox.style.display = 'block';
    }

    function requireFilled(ids) {
      for (const id of ids) {
        const el = document.getElementById(id);
        if (!el || !String(el.value || '').trim()) {
          return false;
        }
      }
      return true;
    }

    function validateStep(idx) {
      if (idx === 0) return requireFilled(['service_type']) || (showError('Please choose what you need.'), false);
      if (idx === 1) return requireFilled(['home_type']) || (showError('Please choose your home type.'), false);
      if (idx === 2) return requireFilled(['stories', 'timeline']) || (showError('Please choose stories and timeline.'), false);
      if (idx === 3) {
        const requiredFields = ['first_name', 'last_name', 'email', 'phone', 'zip'];
        for (const f of requiredFields) {
          const el = document.getElementById(f);
          if (!el.value.trim()) {
            el.focus();
            showError('Please complete all contact fields.');
            return false;
          }
        }
        if (!/^\S+@\S+\.\S+$/.test(document.getElementById('email').value.trim())) {
          document.getElementById('email').focus();
          showError('Please enter a valid email.');
          return false;
        }
        return true;
      }
      return true;
    }

    function next() {
      if (!validateStep(current)) return;
      current = Math.min(current + 1, steps.length - 1);
      showStep(current);
    }

    function prev() {
      current = Math.max(current - 1, 0);
      showStep(current);
    }

    document.querySelectorAll('.opt').forEach(btn => {
      btn.addEventListener('click', () => {
        const field = btn.getAttribute('data-set');
        const value = btn.getAttribute('data-val');
        const input = document.getElementById(field);
        if (input) input.value = value;

        if (current === 2) {
          if (requireFilled(['stories', 'timeline'])) next();
          return;
        }
        next();
      });
    });

    prevBtn.addEventListener('click', prev);
    nextBtn.addEventListener('click', next);

    form.addEventListener('submit', (e) => {
      if (!validateStep(current)) {
        e.preventDefault();
        return;
      }
    });

    showStep(current);
  </script>
</body>

</html>