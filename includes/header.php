<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($pageTitle) ? $pageTitle.' - FMDX.org - the Open FM DX Hub!' : 'FMDX.org - the Open FM DX Hub!'; ?></title>
    <meta name="description" content="Welcome to FMDX.org, the hub for our worldwide community of DXers dedicated to open-source projects. Join us to make DXing easy, collaborative, and open for all.">
    <meta name="keywords" content="FMDX, FM DXing, open-source, DXers, radio, projects, community, ESP32, TEF, software, hardware">
    <meta name="author" content="FMDX.org Team">
    <link rel="canonical" href="https://fmdx.org">
    
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle.' - FMDX.org - the Open FM DX Hub!' : 'FMDX.org - the Open FM DX Hub!'; ?>">
    <meta property="og:description" content="Join the global DXers community dedicated to open-source projects. Discover hardware and software solutions for DXing.">
    <meta property="og:image" content="https://fmdx.org/img/og-image.jpg">
    <meta property="og:url" content="https://fmdx.org">
    <meta property="og:type" content="website">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="FMDX.org - The Open FM DX Hub">
    <meta name="twitter:description" content="Explore the community-driven projects and solutions for FM DXing. Join us today!">
    <meta name="twitter:image" content="https://fmdx.org/img/og-image.jpg">
    
    <link rel="icon" href="/img/favicon.png" type="image/png">
    <style>
    /* Critical CSS here */
    </style>
    <?php
    // ?v=<file mtime> busts the browser cache whenever a stylesheet changes
    $cssFiles = [];
    foreach (['entry', 'main', 'navbar', 'panels', 'buttons', 'articles', 'breadcrumbs', 'helpers'] as $css) {
        $cssFiles[] = "/css/$css.css?v=" . filemtime($_SERVER['DOCUMENT_ROOT'] . "/css/$css.css");
    }
    ?>
    <?php foreach ($cssFiles as $href): ?>
    <link rel="stylesheet" href="<?= $href ?>" media="print" onload="this.media='all'">
    <?php endforeach; ?>
    <noscript><?php foreach ($cssFiles as $href): ?><link rel="stylesheet" href="<?= $href ?>"><?php endforeach; ?></noscript>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
