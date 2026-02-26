<?php
// partners-content.php — Shared CSS + content for all partners pages
?>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #f6f7fb;
        color: #111;
    }

    .wrap {
        max-width: 900px;
        margin: 42px auto;
        padding: 0 16px;
    }

    .card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 28px;
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.06);
    }

    h1 {
        margin-top: 0;
        color: #0077cc;
    }

    p,
    li {
        line-height: 1.5;
        color: #1f2937;
    }

    .muted {
        color: #6b7280;
        font-size: 13px;
    }

    .partner-list {
        list-style: none;
        padding: 0;
        margin: 24px 0 0;
    }

    .partner-list li {
        border: 1px solid #e5e7eb;
        border-radius: 10px;
        padding: 16px 20px;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .partner-list li a {
        color: #0077cc;
        font-weight: 600;
        text-decoration: none;
        font-size: 16px;
    }

    .partner-list li a:hover {
        text-decoration: underline;
    }

    .partner-list li span {
        color: #6b7280;
        font-size: 13px;
    }
</style>

<div class="wrap">
    <div class="card">
        <h1>Our Partners</h1>
        <p class="muted">QuoteMeNetwork works with the following third-party partners to connect you with local service
            professionals.</p>

        <ul class="partner-list">
            <li>
                <a href="https://www.networx.com/third-party-contractors" target="_blank" rel="noopener">Networx</a>
                <span>networx.com</span>
            </li>
            <li>
                <a href="https://porch.com/about/service-partners" target="_blank" rel="noopener">Porch</a>
                <span>porch.com</span>
            </li>
            <!-- Add more partners below as needed -->
        </ul>
    </div>
</div>