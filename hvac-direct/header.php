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