<?php
// footer.php - Shared footer for all QuoteMeNetwork service pages
// Detect if we're on the roof-rejuvenation page for dark theme
$isDarkTheme = (strpos($_SERVER['REQUEST_URI'] ?? '', 'roof-rejuvenation') !== false);
?>
<style>
    .consent-footer {
        margin: 32px 0 0 0;
        padding: 20px 16px;
        font-size: 12px;
        line-height: 1.6;
        text-align: left;
        border-radius: 8px;
        <?php if ($isDarkTheme): ?>
            background: #111827;
            color: #9aa4b2;
            border: 1px solid #1f2937;
        <?php else: ?>
            background: #f9fafb;
            color: #6b7280;
            border: 1px solid #e5e7eb;
        <?php endif; ?>
    }

    .consent-footer p {
        margin: 0 0 12px;
    }

    .consent-footer p:last-child {
        margin-bottom: 0;
    }

    .consent-footer a {
        <?php if ($isDarkTheme): ?>
            color: #22c55e;
        <?php else: ?>
            color: #0077cc;
        <?php endif; ?>
        text-decoration: none;
    }

    .consent-footer a:hover {
        text-decoration: underline;
    }
</style>

<div class="consent-footer">
    <p>
        We respect your privacy and want to make sure you are aware of a few things. By clicking the box, you
        authorization QuoteMe, to call the mobile number or landline number provided, and you understand that they may
        use autodialed and or prerecorded calls or messages.
    </p>
    <p>
        By selecting 'Yes' above, message and data rates apply. Message frequency varies and depends on the activity of
        the estimate. You can opt out by responding STOP at any time. You can text Help at 469-304-2103. Please review
        our <a href="./privacy-policy.php">Privacy Policy</a>, and our <a href="#">Terms of
            Service</a>.
    </p>
</div>