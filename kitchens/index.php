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
<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Free Kitchen Remodeling Quotes | QuoteMeNetwork</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f7fb;
            margin: 0;
        }

        .wrap {
            max-width: 760px;
            margin: 40px auto;
            padding: 0 16px;
        }

        .card {
            background: #fff;
            border-radius: 14px;
            padding: 26px;
            box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
        }

        h1 {
            text-align: center;
            color: #0077cc;
            margin-bottom: 20px;
        }

        h3 {
            margin: 0 0 16px 0;
            font-size: 18px;
        }

        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .options button {
            width: 100%;
            padding: 18px;
            margin: 10px 0;
            border-radius: 12px;
            border: 1px solid #ddd;
            background: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .options button:hover {
            border-color: #0077cc;
        }

        input {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn {
            padding: 14px 20px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .primary {
            background: #0077cc;
            color: #fff;
        }

        .ghost {
            background: #eee;
        }

        small {
            display: block;
            text-align: center;
            margin-top: 16px;
            margin-bottom: 4px;
            color: #666;
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
            <h1>Get Free Kitchen Remodeling Quotes</h1>

            <form method="post" action="../process.php" id="form">
                <input type="hidden" name="_service" value="kitchens">
                <input type="hidden" name="SRC" value="<?php echo htmlspecialchars($src); ?>">
                <input type="hidden" name="SUB2" value="<?php echo htmlspecialchars($sub2); ?>">
                <div class="step active">
                    <h3>What do you need?</h3>
                    <div class="options">
                        <button type="button" onclick="setVal('type','Full Remodel')">Full Kitchen Remodel</button>
                        <button type="button" onclick="setVal('type','Cabinets')">Cabinets Only</button>
                        <button type="button" onclick="setVal('type','Countertops')">Countertops</button>
                        <button type="button" onclick="setVal('type','Layout Change')">Layout Change</button>
                    </div>
                    <input type="hidden" id="type" name="project_type">
                </div>

                <div class="step">
                    <h3>Kitchen size</h3>
                    <div class="options">
                        <button type="button" onclick="setVal('size','Small')">Small</button>
                        <button type="button" onclick="setVal('size','Medium')">Medium</button>
                        <button type="button" onclick="setVal('size','Large')">Large</button>
                    </div>
                    <input type="hidden" id="size" name="kitchen_size">
                </div>

                <div class="step">
                    <h3>Timeline</h3>
                    <div class="options">
                        <button type="button" onclick="setVal('timeline','ASAP')">ASAP</button>
                        <button type="button" onclick="setVal('timeline','This Month')">This Month</button>
                        <button type="button" onclick="setVal('timeline','1-3 Months')">1–3 Months</button>
                    </div>
                    <input type="hidden" id="timeline" name="timeline">
                </div>

                <div class="step">
                    <h3>Your info</h3>
                    <input name="first_name" placeholder="First name" required>
                    <input name="last_name" placeholder="Last name" required>
                    <input name="email" placeholder="Email" required>
                    <input name="phone" placeholder="Phone" required>
                    <input name="zip" placeholder="ZIP Code" required>
                    <small>By submitting you agree to our <a href="./privacy-policy.php">Privacy Policy</a></small>
                </div>

                <div class="nav">
                    <button type="button" class="btn ghost" onclick="move(-1)">Back</button>
                    <button type="button" class="btn primary" onclick="move(1)">Next</button>
                    <button type="submit" class="btn primary" style="display:none" id="submit">Get Quotes</button>
                </div>
            </form>
            <?php include '../footer.php'; ?>
        </div>
    </div>

    <script>
        let step = 0;
        const steps = document.querySelectorAll('.step');
        const submit = document.getElementById('submit');

        function show() {
            steps.forEach((s, i) => s.classList.toggle('active', i === step));
            submit.style.display = step === steps.length - 1 ? 'inline-block' : 'none';
        }

        function move(n) {
            step = Math.max(0, Math.min(steps.length - 1, step + n));
            show();
        }

        function setVal(id, val) {
            document.getElementById(id).value = val;
            move(1);
        }

        show();
    </script>
</body>

</html>