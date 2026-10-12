<?php
/**
 * RR1 GRM Gold - Production Router
 * Automatically serves index.html to avoid Hostinger default landing page.
 */
if (file_exists(__DIR__ . '/index.html')) {
    include_once __DIR__ . '/index.html';
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="0; url=index.html">
    <script>window.location.href = "index.html";</script>
</head>
<body>
    <p>Redirecting to <a href="index.html">RR1 GRM Gold</a>...</p>
</body>
</html>