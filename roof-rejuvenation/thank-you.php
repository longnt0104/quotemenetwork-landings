<?php
// thank-you.php
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thank You | QuoteMeNetwork</title>
    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background: #0b0f17;
            color: #eaf0ff;
            line-height: 1.45;
        }

        .wrap {
            max-width: 760px;
            margin: 56px auto;
            padding: 0 16px;
            text-align: center;
        }

        .card {
            background: #111827;
            border-radius: 18px;
            padding: 34px;
        }

        h1 {
            margin: 0 0 10px;
            font-size: 28px;
        }

        p {
            margin: 0 0 14px;
            color: #9aa4b2;
        }

        .btn {
            display: inline-block;
            margin-top: 10px;
            background: #22c55e;
            color: #06260f;
            text-decoration: none;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
        }

        .small {
            margin-top: 16px;
            font-size: 12px;
            color: #9aa4b2;
        }

        .small a {
            color: #22c55e;
            text-decoration: none;
        }

        .small a:hover {
            text-decoration: underline;
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
        fbq('track', 'Lead');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=26214484088137252&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <div class="wrap">
        <div class="card">
            <h1>Thank you — request received</h1>
            <p>We’ve received your information. A local pro may contact you shortly with pricing and availability.</p>
            <p>If you don’t hear back soon, you can submit another request.</p>
            <a class="btn" href="index.php">Back to Home</a>
            <div class="small">
                <a href="/privacy-policy.php" target="_blank" rel="noopener">Privacy Policy</a>
            </div>
        </div>
    </div>
</body>

</html>