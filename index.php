<!-- Quoteme Network 123456-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuoteMeNetwork - Home Improvement Services</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Arial, sans-serif;
            background: #f6f7fb;
            color: #0f172a;
            line-height: 1.6;
        }

        .header {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 20px 0;
            margin-bottom: 40px;
        }

        .header-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, #0077cc, #4da6ff);
            box-shadow: 0 8px 18px rgba(0, 119, 204, .25);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
        }

        .brand {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        h1 {
            font-size: 36px;
            color: #0b2a5b;
            margin-bottom: 12px;
            text-align: center;
        }

        .subtitle {
            text-align: center;
            font-size: 18px;
            color: #64748b;
            margin-bottom: 48px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }

        .service-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 28px;
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-color: #0077cc;
        }

        .service-card h2 {
            font-size: 20px;
            color: #0b2a5b;
            margin-bottom: 8px;
        }

        .service-card p {
            color: #64748b;
            font-size: 15px;
        }

        .footer {
            text-align: center;
            padding: 40px 20px;
            color: #64748b;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            .subtitle {
                font-size: 16px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="header-inner">
            <div class="logo">Q</div>
            <div class="brand">QuoteMeNetwork</div>
        </div>
    </header>

    <div class="container">
        <h1>Get Free Quotes for Your Home Projects</h1>
        <p class="subtitle">Connect with trusted local professionals in minutes</p>

        <div class="services-grid">
            <a href="/bathrooms/" class="service-card">
                <h2>🛁 Bathroom Remodeling</h2>
                <p>Transform your bathroom with professional remodeling services</p>
            </a>

            <a href="/bathrooms-direct/" class="service-card">
                <h2>🛁 Bathroom Direct</h2>
                <p>Quick and direct bathroom remodeling quotes</p>
            </a>

            <a href="/kitchens/" class="service-card">
                <h2>🍳 Kitchen Remodeling</h2>
                <p>Upgrade your kitchen with expert renovation solutions</p>
            </a>

            <a href="/electrical/" class="service-card">
                <h2>⚡ Electrical Services</h2>
                <p>Licensed electricians for installations and repairs</p>
            </a>

            <a href="/plumbing/" class="service-card">
                <h2>🔧 Plumbing Services</h2>
                <p>Professional plumbing installation and repair</p>
            </a>

            <a href="/hvac/" class="service-card">
                <h2>❄️ HVAC Services</h2>
                <p>Heating and cooling system experts</p>
            </a>

            <a href="/hvac-direct/" class="service-card">
                <h2>❄️ HVAC Direct</h2>
                <p>Quick and direct HVAC quotes</p>
            </a>

            <a href="/roofing/" class="service-card">
                <h2>🏠 Roofing Services</h2>
                <p>Quality roofing installation and maintenance</p>
            </a>

            <a href="/flooring/" class="service-card">
                <h2>📐 Flooring Services</h2>
                <p>Professional flooring installation and refinishing</p>
            </a>

            <a href="/painting/" class="service-card">
                <h2>🎨 Painting Services</h2>
                <p>Interior and exterior painting professionals</p>
            </a>

            <a href="/siding/" class="service-card">
                <h2>🏡 Siding Services</h2>
                <p>Expert siding installation and replacement</p>
            </a>

            <a href="/gutters-landing/" class="service-card">
                <h2>🌧️ Gutter Services</h2>
                <p>Professional gutter installation and maintenance</p>
            </a>
        </div>
    </div>

    <footer class="footer">
        <p>&copy;
            <?php echo date('Y'); ?> QuoteMeNetwork. All rights reserved.
        </p>
    </footer>
</body>

</html>