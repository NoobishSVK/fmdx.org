<?php
include 'includes/article-header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php';?>
    
    <body>
        <div id="wrapper">
            <?php include 'includes/navigation.php';?>
            <div class="flex-container flex-center">
                <div class="tx-icon"></div>
                <h1>Welcome to <span class="color-main text-bold">FMDX.org</span>!</h1>
            </div>
            <div class="flex-container">
                <main>
                    <div class="panel panel-big text-center mission-banner" style="margin-bottom: 20px">
                        <p>Welcome to <span class="color-main text-bold">FMDX.org</span>, the hub for our worldwide community of DXers dedicated to open-source projects.</p>

                        <p>Our community firmly believes in the <span class="text-bold">freedom of DXing</span>, ensuring that it remains accessible to all enthusiasts.
                        We're committed to work on an inclusive environment where everyone can
                        participate and contribute to the advancement of DXing technologies.</p>

                        <p>In case this is your first time here and you aren't familiar with us, DXing is the hobby of receiving and identifying distant radio or television signals.</p>
 
                        <p class="text-medium">Come join us as we work to make DXing easy, collaborative, and open for all!</p>


                        <a href="/ourmission.php"><div class="btn-small" style="width: 250px;margin: auto;text-transform: uppercase;">Our Mission</div></a>
                    </div>

                    <?php $total = draw_latest_articles(); ?>

                    <?php if ($total > 5): ?>
                        <button id="more-news" class="btn-rounded m-auto" data-total="<?= $total ?>">Read more news</button>
                    <?php endif; ?>
                </main> 
                <?php include 'includes/sidepanels.php';?>
            </div>
            <?php include 'includes/chips.php';?>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>