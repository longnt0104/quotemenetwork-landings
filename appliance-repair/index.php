<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Appliance Repair Jobs for Technicians | QuoteMe Network</title>
  <meta name="description" content="Join QuoteMe Network and get appliance repair jobs in your area. No monthly fees. No quotas. Pick the jobs you want and keep 100% of your repair revenue." />
  <style>
    :root {
      --bg: #f7f9fc;
      --surface: #ffffff;
      --surface-2: #eef4ff;
      --text: #132238;
      --muted: #5e6b7a;
      --primary: #0f62fe;
      --primary-dark: #0b4fd1;
      --accent: #10b981;
      --border: #dbe4f0;
      --shadow: 0 12px 40px rgba(16, 31, 61, 0.08);
      --radius: 18px;
      --max: 1180px;
    }

    * { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      margin: 0;
      font-family: Inter, Arial, Helvetica, sans-serif;
      color: var(--text);
      background: linear-gradient(180deg, #f8fbff 0%, #f7f9fc 100%);
      line-height: 1.6;
    }

    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }

    .container {
      width: min(calc(100% - 32px), var(--max));
      margin: 0 auto;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 14px 24px;
      border-radius: 999px;
      border: 1px solid transparent;
      font-weight: 700;
      transition: 0.2s ease;
      cursor: pointer;
    }

    .btn-primary {
      background: var(--primary);
      color: #fff;
      box-shadow: 0 10px 24px rgba(15, 98, 254, 0.24);
    }

    .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); }

    .btn-secondary {
      background: #fff;
      border-color: var(--border);
      color: var(--text);
    }

    .btn-secondary:hover { background: #f9fbff; }

    .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 14px;
      border-radius: 999px;
      background: rgba(16, 185, 129, 0.12);
      color: #087b56;
      font-weight: 700;
      font-size: 13px;
      letter-spacing: 0.02em;
    }

    .section {
      padding: 84px 0;
    }

    .section-title {
      font-size: clamp(30px, 4vw, 48px);
      line-height: 1.1;
      margin: 18px 0 14px;
      letter-spacing: -0.02em;
    }

    .section-subtitle {
      font-size: 18px;
      color: var(--muted);
      max-width: 760px;
      margin: 0;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 10;
      backdrop-filter: blur(12px);
      background: rgba(247, 249, 252, 0.82);
      border-bottom: 1px solid rgba(219, 228, 240, 0.75);
    }

    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-height: 76px;
      gap: 16px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 800;
      letter-spacing: -0.02em;
    }

    .brand-mark {
      width: 40px;
      height: 40px;
      border-radius: 12px;
      background: linear-gradient(135deg, var(--primary), #4ea1ff);
      color: #fff;
      display: grid;
      place-items: center;
      font-weight: 900;
      box-shadow: 0 10px 25px rgba(15, 98, 254, 0.22);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 22px;
      color: var(--muted);
      font-weight: 600;
    }

    .hero {
      padding: 72px 0 48px;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.15fr 0.85fr;
      gap: 32px;
      align-items: center;
    }

    .hero-copy h1 {
      font-size: clamp(40px, 6vw, 66px);
      line-height: 0.98;
      letter-spacing: -0.04em;
      margin: 18px 0;
      max-width: 720px;
    }

    .hero-copy p {
      font-size: 19px;
      color: var(--muted);
      max-width: 680px;
      margin: 0 0 28px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      margin-bottom: 26px;
    }

    .hero-points {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 12px;
      max-width: 620px;
    }

    .point {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 14px 16px;
      font-weight: 650;
      color: #20344d;
      box-shadow: var(--shadow);
    }

    .hero-card {
      background: linear-gradient(180deg, #ffffff, #f5f9ff);
      border: 1px solid var(--border);
      border-radius: 28px;
      padding: 28px;
      box-shadow: var(--shadow);
      position: relative;
      overflow: hidden;
    }

    .hero-card::after {
      content: "";
      position: absolute;
      inset: auto -80px -80px auto;
      width: 220px;
      height: 220px;
      background: radial-gradient(circle, rgba(15,98,254,0.12), transparent 65%);
      border-radius: 50%;
    }

    .mini-stat-grid {
      display: grid;
      gap: 14px;
      margin-bottom: 20px;
    }

    .mini-stat {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 18px;
      border-radius: 16px;
      background: #fff;
      border: 1px solid var(--border);
    }

    .mini-stat strong { font-size: 15px; }
    .mini-stat span { color: var(--muted); font-size: 14px; }

    .callout {
      background: var(--surface-2);
      border: 1px solid #cfe0ff;
      border-radius: 18px;
      padding: 18px;
      position: relative;
      z-index: 1;
    }

    .callout h3 {
      margin: 0 0 8px;
      font-size: 20px;
    }

    .callout p {
      margin: 0;
      color: var(--muted);
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 22px;
      margin-top: 34px;
    }

    .card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: 22px;
      padding: 26px;
      box-shadow: var(--shadow);
    }

    .card h3 {
      margin: 0 0 10px;
      font-size: 22px;
      letter-spacing: -0.02em;
    }

    .card p, .card li {
      color: var(--muted);
    }

    .icon {
      width: 50px;
      height: 50px;
      border-radius: 16px;
      display: grid;
      place-items: center;
      background: #edf4ff;
      color: var(--primary);
      font-size: 24px;
      margin-bottom: 18px;
    }

    .steps {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 18px;
      margin-top: 38px;
    }

    .step {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 22px;
      padding: 26px;
      box-shadow: var(--shadow);
    }

    .step-number {
      width: 42px;
      height: 42px;
      border-radius: 50%;
      background: var(--primary);
      color: #fff;
      display: grid;
      place-items: center;
      font-weight: 800;
      margin-bottom: 16px;
    }

    .step h3 {
      margin: 0 0 8px;
      font-size: 20px;
    }

    .pricing {
      display: grid;
      grid-template-columns: 1.05fr 0.95fr;
      gap: 24px;
      align-items: start;
      margin-top: 34px;
    }

    .price-list {
      display: grid;
      gap: 14px;
      margin-top: 18px;
    }

    .price-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 20px;
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 18px;
      box-shadow: var(--shadow);
    }

    .price-item strong {
      font-size: 18px;
    }

    .price-item span {
      font-weight: 800;
      color: var(--primary);
      font-size: 18px;
    }

    .faq {
      margin-top: 36px;
      display: grid;
      gap: 16px;
    }

    details {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 18px 20px;
      box-shadow: var(--shadow);
    }

    summary {
      cursor: pointer;
      font-weight: 750;
      list-style: none;
    }

    summary::-webkit-details-marker { display: none; }

    details p {
      margin: 14px 0 0;
      color: var(--muted);
    }

    .cta-wrap {
      background: linear-gradient(135deg, #0f62fe, #0b4fd1);
      color: #fff;
      border-radius: 30px;
      padding: 42px;
      box-shadow: 0 20px 50px rgba(15, 98, 254, 0.28);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 28px;
      flex-wrap: wrap;
    }

    .cta-wrap p {
      color: rgba(255,255,255,0.84);
      margin: 10px 0 0;
      max-width: 680px;
    }

    .btn-light {
      background: #fff;
      color: #0b4fd1;
      font-weight: 800;
    }

    footer {
      padding: 30px 0 50px;
      color: var(--muted);
      font-size: 14px;
    }

    .footer-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      padding-top: 24px;
      border-top: 1px solid var(--border);
    }

    ul.clean {
      margin: 12px 0 0;
      padding-left: 18px;
    }

    @media (max-width: 1024px) {
      .hero-grid,
      .pricing,
      .grid-3,
      .steps {
        grid-template-columns: 1fr;
      }

      .hero-points {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 760px) {
      .nav-links { display: none; }
      .hero { padding-top: 44px; }
      .section { padding: 64px 0; }
      .hero-card,
      .card,
      .step,
      .cta-wrap { padding: 22px; }
      .hero-copy h1 { line-height: 1.02; }
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <a class="brand" href="#top">
        <div class="brand-mark">Q</div>
        <div>
          <div>QuoteMe Network</div>
        </div>
      </a>
      <nav class="nav-links">
        <a href="#how-it-works">How It Works</a>
        <a href="#pricing">Pricing</a>
        <a href="#faq">FAQ</a>
        <a href="#" onclick="openApplyModal(event)" class="btn btn-primary">Apply Now</a>
      </nav>
    </div>
  </header>

  <main id="top">
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="eyebrow">Appliance Repair Jobs for Technicians</span>
          <h1>Get more appliance repair jobs in your area.</h1>
          <p>
            We handle the advertising and scheduling. You choose the jobs you want, set your own parts and labor pricing, and keep 100% of your repair revenue.
          </p>
          <div class="hero-actions">
            <a href="#" onclick="openApplyModal(event)" class="btn btn-primary">Apply to Join</a>
            <a href="#how-it-works" class="btn btn-secondary">See How It Works</a>
          </div>
          <div class="hero-points">
            <div class="point">No monthly fees</div>
            <div class="point">No quotas or minimums</div>
            <div class="point">Pick the jobs you want</div>
            <div class="point">You collect the repair payment</div>
          </div>
        </div>

        <aside class="hero-card">
          <div class="mini-stat-grid">
            <div class="mini-stat">
              <div>
                <strong>Booked service calls</strong>
                <span>Customer info collected before posting</span>
              </div>
              <div>✔</div>
            </div>
            <div class="mini-stat">
              <div>
                <strong>Your pricing, your way</strong>
                <span>Set your own parts and labor rates</span>
              </div>
              <div>💲</div>
            </div>
            <div class="mini-stat">
              <div>
                <strong>Flexible workload</strong>
                <span>Take as many or as few jobs as you like</span>
              </div>
              <div>⚙</div>
            </div>
          </div>
          <div class="callout">
            <h3>Built for working technicians</h3>
            <p>
              This is designed to help you fill gaps in your schedule, stay busy when you want extra work, and keep full control over what jobs you accept.
            </p>
          </div>
        </aside>
      </div>
    </section>

    <section class="section" id="why-techs-join">
      <div class="container">
        <span class="eyebrow">Why Technicians Join</span>
        <h2 class="section-title">A simpler way to add more work without chasing leads.</h2>
        <p class="section-subtitle">
          We are not asking you to buy random leads. We post scheduled opportunities so you can decide what fits your area, schedule, and service preferences.
        </p>

        <div class="grid-3">
          <div class="card">
            <div class="icon">📅</div>
            <h3>We handle scheduling</h3>
            <p>We collect the customer information, appliance details, and service request before posting the job.</p>
          </div>
          <div class="card">
            <div class="icon">🛠</div>
            <h3>You control the repair</h3>
            <p>You diagnose the issue, present your estimate, and decide what to charge for parts and labor.</p>
          </div>
          <div class="card">
            <div class="icon">🤝</div>
            <h3>You keep the repair revenue</h3>
            <p>If the customer moves forward with the repair, the repair money is yours to keep.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="how-it-works">
      <div class="container">
        <span class="eyebrow">How It Works</span>
        <h2 class="section-title">A straightforward process from booking to repair.</h2>
        <p class="section-subtitle">
          Our model is built to keep things simple for technicians while giving you flexibility and control.
        </p>

        <div class="steps">
          <div class="step">
            <div class="step-number">1</div>
            <h3>We market and book</h3>
            <p>We run the advertising, speak with customers, and gather job details before a service opportunity is posted.</p>
          </div>
          <div class="step">
            <div class="step-number">2</div>
            <h3>You pick your jobs</h3>
            <p>View the jobs available in your area and choose the ones you want. No quotas. No minimums.</p>
          </div>
          <div class="step">
            <div class="step-number">3</div>
            <h3>You complete the service call</h3>
            <p>Go to the customer, diagnose the issue, and provide the estimate based on your own pricing.</p>
          </div>
          <div class="step">
            <div class="step-number">4</div>
            <h3>You get paid for the repair</h3>
            <p>If the customer approves the repair, you complete the work and collect payment directly from the customer.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="pricing">
      <div class="container">
        <span class="eyebrow">Service Call Structure</span>
        <h2 class="section-title">How the pricing works.</h2>
        <p class="section-subtitle">
          We make our money from the service call fee. You make your money from the repair work.
        </p>

        <div class="pricing">
          <div class="card">
            <h3>What technicians need to know</h3>
            <ul class="clean">
              <li>When a customer books an appointment, we collect a credit card to hold the appointment.</li>
              <li>Once the service call is completed, the service call fee is processed.</li>
              <li>We keep up to <strong>$69.99</strong> of the service call fee for standard jobs.</li>
              <li>You decide what to charge for your parts and labor.</li>
              <li>You can collect payment from the customer in the way that works best for you.</li>
            </ul>
          </div>

          <div>
            <div class="price-list">
              <div class="price-item">
                <strong>Standard Service Call</strong>
                <span>$69.99</span>
              </div>
              <div class="price-item">
                <strong>Weekend Service Call</strong>
                <span>$85</span>
              </div>
              <div class="price-item">
                <strong>Dishwasher Service Call</strong>
                <span>$95</span>
              </div>
              <div class="price-item">
                <strong>Commercial Service Call</strong>
                <span>$120</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="benefits">
      <div class="container">
        <span class="eyebrow">What You Get</span>
        <h2 class="section-title">Built to help technicians stay flexible and profitable.</h2>
        <p class="section-subtitle">
          Whether you want to fill open time, add overflow work, or pick up jobs when it makes sense, the setup is designed to be simple.
        </p>

        <div class="grid-3">
          <div class="card">
            <div class="icon">✅</div>
            <h3>No upfront lead spend</h3>
            <p>You are not paying for random leads before seeing whether they turn into real work.</p>
          </div>
          <div class="card">
            <div class="icon">🧭</div>
            <h3>Full control</h3>
            <p>You choose the jobs you want, the pricing you charge, and how you collect your repair payments.</p>
          </div>
          <div class="card">
            <div class="icon">📈</div>
            <h3>Extra job flow</h3>
            <p>Use the platform to add jobs on top of your existing business or fill slow spots in your schedule.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="faq">
      <div class="container">
        <span class="eyebrow">FAQ</span>
        <h2 class="section-title">Common questions from appliance repair companies.</h2>

        <div class="faq">
          <details>
            <summary>Do I have to take every job that comes through?</summary>
            <p>No. You can accept as many or as few jobs as you like. There are no quotas or minimum requirements.</p>
          </details>
          <details>
            <summary>Who sets the price for parts and labor?</summary>
            <p>You do. You diagnose the issue, provide the estimate, and decide what to charge for the repair.</p>
          </details>
          <details>
            <summary>How do I collect payment for the repair work?</summary>
            <p>You collect the repair payment directly from the customer using the method you prefer, including cash, check, card, or payment apps.</p>
          </details>
          <details>
            <summary>How does QuoteMe Network get paid?</summary>
            <p>We make our money from the service call fee. After the service call is completed, we process the service call fee and keep the applicable amount.</p>
          </details>
          <details>
            <summary>Is this only for full-time companies?</summary>
            <p>No. This can work for individual technicians, smaller operations, and established appliance repair companies that want additional jobs.</p>
          </details>
        </div>
      </div>
    </section>

    <section class="section" id="apply">
      <div class="container">
        <div class="cta-wrap">
          <div>
            <span class="eyebrow" style="background: rgba(255,255,255,0.16); color: #fff;">Ready to Join?</span>
            <h2 class="section-title" style="margin-top: 16px; color: #fff; font-size: clamp(30px, 4vw, 46px);">Start receiving appliance repair jobs in your area.</h2>
            <p>
              Join the QuoteMe Network and get access to booked service opportunities you can pick and choose from based on your schedule and service area.
            </p>
          </div>
          <div>
            <a href="#" onclick="openApplyModal(event)" class="btn btn-light">Apply Now</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <div id="apply-modal" class="modal-overlay" onclick="closeApplyModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
      <button class="modal-close" onclick="closeApplyModal(event)" aria-label="Close">&times;</button>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd0L1ZILHuUNddVSQ7XWb3VQ6uGqmB4Wat_lVrVg27srlhCxw/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
  </div>

  <style>
    .modal-overlay {
      display: none;
      position: fixed;
      inset: 0;
      z-index: 100;
      background: rgba(0, 0, 0, 0.55);
      backdrop-filter: blur(6px);
      align-items: center;
      justify-content: center;
    }

    .modal-overlay.active {
      display: flex;
    }

    .modal-content {
      position: relative;
      background: #fff;
      border-radius: 22px;
      width: min(94vw, 680px);
      height: min(90vh, 860px);
      box-shadow: 0 24px 60px rgba(0, 0, 0, 0.25);
      overflow: hidden;
    }

    .modal-close {
      position: absolute;
      top: 10px;
      right: 14px;
      z-index: 101;
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 50%;
      width: 36px;
      height: 36px;
      font-size: 22px;
      cursor: pointer;
      display: grid;
      place-items: center;
      color: var(--muted);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .modal-close:hover {
      background: #f3f4f6;
    }
  </style>

  <script>
    function openApplyModal(e) {
      e.preventDefault();
      document.getElementById('apply-modal').classList.add('active');
      document.body.style.overflow = 'hidden';
    }

    function closeApplyModal(e) {
      if (e) e.preventDefault();
      document.getElementById('apply-modal').classList.remove('active');
      document.body.style.overflow = '';
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeApplyModal();
    });
  </script>

  <footer>
    <div class="container footer-row">
      <div>&copy; <?php echo date('Y'); ?> QuoteMe Network. All rights reserved.</div>
      <div>Appliance Repair Contractor Opportunities</div>
    </div>
  </footer>
</body>
</html>
