<?php
function draw_article_header(
    $article_or_slug, // mixed: either string slug or full Article object
    string $locale = 'en_US'
) {
    if (is_string($article_or_slug)) {
        // Load the article file dynamically
        $path = __DIR__ . "/../articles/{$article_or_slug}.php";
        if (!file_exists($path)) {
            echo "<p>Article not found: " . htmlspecialchars($article_or_slug) . "</p>";
            return;
        }

        // Include file (this sets $article in the local scope)
        include $path;

        // Check if $article was defined by the included file
        if (!isset($article) || !is_object($article)) {
            echo "<p>Article object not found in: " . htmlspecialchars($article_or_slug) . "</p>";
            return;
        }
    } elseif (is_object($article_or_slug)) {
        $article = $article_or_slug;
    } else {
        echo "<p>Invalid argument to draw_article_header()</p>";
        return;
    }

    // Prepare variables
    $image_url = $article->cover ?? '';
    $title = $article->title ?? '';
    $author = $article->author ?? '';
    $date = $article->date ?? '';
    $emoji = $article->emoji ?? '';
    $description = $article->description ?? '';

    if (is_string($article_or_slug)) {
        $slug = $article_or_slug;
    } elseif (isset($article->slug)) {
        $slug = $article->slug;
    } else {
        $slug = '';
    }

    $link = 'article.php?article=' . $slug;

    ?>
    <article class="panel panel-big">
        <div class="panel-title flex-container"
             style="background-image: url('<?= htmlspecialchars($image_url) ?>');">
            <div style="width: 100%;">
                <h2><?= htmlspecialchars($title) ?></h2>
                <p class="text-small-12 m-0">
                    by <?= htmlspecialchars($author) ?><br>
                    <?= htmlspecialchars($date) ?>
                </p>
            </div>
            <?php if ($emoji): ?>
                <div style="width: 100px;font-size:60px;" class="hide-phone">
                    <?= $emoji ?>
                </div>
            <?php endif; ?>
        </div>

        <div style="padding: 20px 40px;">
            <p><?= htmlspecialchars($description) ?></p>
        </div>

        <a href="<?= htmlspecialchars($link) ?>">
            <div class="link-external-button">
                <i class="fa-solid fa-chevron-right p-5"></i>
            </div>
        </a>
    </article>
    <?php
}

// Draws headers of the newest articles (sorted by $date), skipping $offset. Returns the total article count.
function draw_latest_articles(int $limit = 5, int $offset = 0): int {
    $dates = [];
    foreach (glob(__DIR__ . '/../articles/*.php') as $path) {
        // shortcut: only new-format articles (anonymous class) are listed; convert old ones to show them
        if (strpos(file_get_contents($path), '$article = new class') === false) continue;
        $article = null;
        include $path;
        $dates[basename($path, '.php')] = strtotime($article->date ?? '') ?: 0;
    }
    arsort($dates);
    foreach (array_slice(array_keys($dates), $offset, $limit) as $slug) {
        draw_article_header($slug);
    }
    return count($dates);
}
