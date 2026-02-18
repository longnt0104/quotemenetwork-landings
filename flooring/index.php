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
// flooring-get-quotes.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Get Free Flooring Quotes | QuoteMeNetwork</title>
  <meta name="description" content="Request free flooring quotes from local pros." />
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
      color: var(--brand);
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
      background: #eef2ff;
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
      background: #ffffff;
      cursor: pointer;
      font-size: 18px;
      transition: transform .04s ease, border-color .12s ease, box-shadow .12s ease;
      text-align: left;
    }

    .opt:hover {
      border-color: rgba(0, 0, 0, 0.06);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.06);
    }

    .opt:active {
      transform: scale(0.99);
    }

    .opt strong {
      display: block;
      font-size: 18px;
      color: var(--brand);
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

    .field input {
      width: 100%;
      padding: 14px 12px;
      border-radius: 10px;
      border: 1px solid var(--border);
      font-size: 16px;
      outline: none;
      background: #fff;
    }

    .field input:focus {
      border-color: rgba(0, 0, 0, 0.18);
      box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.06);
    }

    .navBtns {
      display: flex;
      gap: 10px;
      justify-content: space-between;
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
        <h1>Get Free Flooring Quotes</h1>
        <p>Answer a few questions. We’ll send your request to local pros.</p>
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
        <div class="bar">
          <div id="p5"></div>
        </div>
      </div>

      <div id="err" class="error"></div>

      <form id="svcForm" method="post" action="../process.php" novalidate>
        <input type="hidden" name="_service" value="flooring">
        <input type="hidden" name="SRC" value="<?php echo htmlspecialchars($src); ?>">
        <input type="hidden" name="SUB2" value="<?php echo htmlspecialchars($sub2); ?>">
        <input type="hidden" name="utm_source" value="<?php echo htmlspecialchars($_GET['utm_source'] ?? ''); ?>">
        <input type="hidden" name="utm_campaign" value="<?php echo htmlspecialchars($_GET['utm_campaign'] ?? ''); ?>">
        <input type="hidden" name="utm_medium" value="<?php echo htmlspecialchars($_GET['utm_medium'] ?? ''); ?>">
        <input type="hidden" name="utm_term" value="<?php echo htmlspecialchars($_GET['utm_term'] ?? ''); ?>">
        <input type="hidden" name="utm_content" value="<?php echo htmlspecialchars($_GET['utm_content'] ?? ''); ?>">


        <section class="step active">
          <h2>What do you need?</h2>
          <div class="options">
            <button type="button" class="opt" data-set="project_type" data-val="New Flooring Install">
              <strong>New Flooring Install</strong>
              <span>Replace existing floors</span>
            </button>
            <button type="button" class="opt" data-set="project_type" data-val="Refinish Hardwood">
              <strong>Refinish Hardwood</strong>
              <span>Sand/stain/refinish</span>
            </button>
            <button type="button" class="opt" data-set="project_type" data-val="Carpet Install">
              <strong>Carpet Install</strong>
              <span>New carpet</span>
            </button>
            <button type="button" class="opt" data-set="project_type" data-val="Tile Install">
              <strong>Tile Install</strong>
              <span>Tile floors</span>
            </button>
          </div>
          <input type="hidden" name="project_type" id="project_type" required>
        </section>
        <section class="step">
          <h2>Preferred material</h2>
          <div class="options">
            <button type="button" class="opt" data-set="material" data-val="LVP / Vinyl">
              <strong>LVP / Vinyl</strong>
              <span>Durable, popular</span>
            </button>
            <button type="button" class="opt" data-set="material" data-val="Hardwood">
              <strong>Hardwood</strong>
              <span>Classic</span>
            </button>
            <button type="button" class="opt" data-set="material" data-val="Laminate">
              <strong>Laminate</strong>
              <span>Budget-friendly</span>
            </button>
            <button type="button" class="opt" data-set="material" data-val="Tile">
              <strong>Tile</strong>
              <span>Bathrooms/kitchens</span>
            </button>
            <button type="button" class="opt" data-set="material" data-val="Not sure">
              <strong>Not sure</strong>
              <span>Need recommendations</span>
            </button>
          </div>
          <input type="hidden" name="material" id="material" required>
        </section>
        <section class="step">
          <h2>Square footage</h2>
          <div class="options">
            <button type="button" class="opt" data-set="sqft" data-val="<500">
              <strong>
                <500< /strong>
                  <span>Small</span>
            </button>
            <button type="button" class="opt" data-set="sqft" data-val="500–1500">
              <strong>500–1500</strong>
              <span>Medium</span>
            </button>
            <button type="button" class="opt" data-set="sqft" data-val=">1500">
              <strong>>1500</strong>
              <span>Large</span>
            </button>
            <button type="button" class="opt" data-set="sqft" data-val="Not sure">
              <strong>Not sure</strong>
              <span>Estimate needed</span>
            </button>
          </div>
          <input type="hidden" name="sqft" id="sqft" required>
        </section>
        <section class="step">
          <h2>Timeline</h2>
          <div class="options">
            <button type="button" class="opt" data-set="timeline" data-val="ASAP">
              <strong>ASAP</strong>
              <span>Within 1–2 weeks</span>
            </button>
            <button type="button" class="opt" data-set="timeline" data-val="This Month">
              <strong>This Month</strong>
              <span>Next few weeks</span>
            </button>
            <button type="button" class="opt" data-set="timeline" data-val="1–3 Months">
              <strong>1–3 Months</strong>
              <span>Planning ahead</span>
            </button>
          </div>
          <input type="hidden" name="timeline" id="timeline" required>
        </section>
        <section class="step">
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
            <label for="address">Address</label>
            <input id="address" name="address" type="text" autocomplete="street-address" placeholder="">
          </div>

          <div class="field">
            <label for="zip">ZIP code</label>
            <input id="zip" name="zip" type="text" inputmode="numeric" maxlength="10" required>
          </div>

          <div class="fineprint">
            By clicking “Get My Free Quote”, you agree to our
            <a href="/privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>.
          </div>
        </section>

        <div class="navBtns">
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
    const steps = Array.from(document.querySelectorAll('.step'));
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const errBox = document.getElementById('err');

    const bars = [
      document.getElementById("p1"),
      document.getElementById("p2"),
      document.getElementById("p3"),
      document.getElementById("p4"),
      document.getElementById("p5")
    ];

    let current = 0;

    function setProgress(idx) {
      bars.forEach((b, i) => { b.style.width = (i <= idx ? '100%' : '0%'); });
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
        if (!el || !String(el.value || '').trim()) return false;
      }
      return true;
    }

    const hiddenIds = ["project_type", "material", "sqft", "timeline"];

    function validateStep(idx) {
      if (idx < hiddenIds.length) {
        const field = hiddenIds[idx];
        if (!requireFilled([field])) {
          showError('Please choose an option to continue.');
          return false;
        }
        return true;
      }
      const requiredFields = ['first_name', 'last_name', 'email', 'phone', 'address', 'zip'];
      for (const f of requiredFields) {
        const el = document.getElementById(f);
        if (!el.value.trim()) { el.focus(); showError('Please complete all contact fields.'); return false; }
      }
      if (!/^\S+@\S+\.\S+$/.test(document.getElementById('email').value.trim())) {
        document.getElementById('email').focus();
        showError('Please enter a valid email.');
        return false;
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
        next();
      });
    });

    prevBtn.addEventListener('click', prev);
    nextBtn.addEventListener('click', next);

    document.getElementById('svcForm').addEventListener('submit', (e) => {
      if (!validateStep(current)) e.preventDefault();
    });

    showStep(current);
  </script>
</body>

</html>