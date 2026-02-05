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
<style>
  * {
    box-sizing: border-box;
  }

  :root {
    --brand: #0077cc;
    --brandDark: #005fa3;
    --text: #111;
    --muted: #6b7280;
    --bg: #f6f7fb;
    --card: #fff;
    --border: #e5e7eb;
  }

  .sitebar {
    background: #fff;
    border-bottom: 1px solid var(--border);
  }

  .sitebar .inner {
    max-width: 1040px;
    margin: 0 auto;
    padding: 14px 16px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
  }

  .brand {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 800;
    letter-spacing: .2px;
    color: #0f172a;
    text-decoration: none;
  }

  .logoMark {
    width: 28px;
    height: 28px;
    border-radius: 8px;
    background: linear-gradient(135deg, var(--brand), #9bd4ff);
    box-shadow: 0 8px 18px rgba(0, 119, 204, .18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    font-size: 18px;
    color: #fff;
    font-family: 'Arial Black', Arial, sans-serif;
  }

  .sitebar nav.nav {
    display: inline !important;
  }

  .sitebar .nav a {
    color: var(--muted) !important;
    text-decoration: none !important;
    font-size: 13px !important;
    margin-left: 14px !important;
    margin-top: 0 !important;
    padding: 0 !important;
  }

  .sitebar .nav a:hover {
    color: var(--brand) !important;
  }
</style>
<header class="sitebar">
  <div class="inner">
    <a href="index.php" class="brand">
      <div class="logoMark" aria-hidden="true">Q</div>
      <div>QuoteMeNetwork</div>
    </a>
    <nav class="nav" aria-label="Primary">
      <a href="index.php">Home</a>
      <!--      <a href="#">Services</a>-->
      <!--      <a href="#">How It Works</a>-->
      <!--      <a href="#">About</a>-->
      <!--      <a href="#">Contact</a>-->
    </nav>
  </div>
</header>