<?php
// Returns the next batch of article headers for the "Read more news" button (index.php)
include 'includes/article-header.php';
draw_latest_articles(5, max(0, (int)($_GET['offset'] ?? 0)));
