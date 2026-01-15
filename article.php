<!DOCTYPE html>
<html lang="en">
    <?php
        $articlesDir = __DIR__ . '/articles/';
        $defaultArticle = 'new-website.php';
        $article = $_GET['article'] ?? null;

        /**
         * Allow only safe filenames (letters, numbers, dash, underscore)
         */
        if ($article && preg_match('/^[a-zA-Z0-9_-]+$/', $article)) {
            $articleFile = $article . '.php';
        } else {
            header("Location: https://fmdx.org");
            die;
        }

        /**
         * Resolve real path and validate directory
         */
        $fullPath = realpath($articlesDir . $articleFile);

        if ($fullPath === false || strpos($fullPath, realpath($articlesDir)) !== 0) {
            header("Location: https://fmdx.org"); // Invalid or traversal attempt
        }

        include $fullPath;

        $pageTitle = $article->title;
        include 'includes/header.php';
    ?>

    <body>
        <?php include 'includes/navigation.php';?>
        <div id="wrapper">
            <div class="flex-container flex-center">
                <div class="tx-icon"></div>
                <h1 class="m-0"><span class="color-main text-bold">FMDX.org</span> </h1>
            </div>
            <div class="flex-container">
                <main>
                    <?php 
                        $article->render();
                    ?>
                </main> 
                <?php include 'includes/sidepanels.php';?>
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>