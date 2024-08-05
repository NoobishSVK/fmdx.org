<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Headless TEF Tuner';
    include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');
    ?>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/navigation.php');?>
        <div id="wrapper">
            <div class="flex-container flex-center">
                <div class="tx-icon"></div>
                <h1 class="m-0"><span class="color-main text-bold">FMDX.org</span> </h1>
            </div>
            <div class="flex-container">
                <main>
                    <div class="panel panel-big text-center" style="padding: 30px 50px;">
                        <h2>Headless TEF Tuner</h2>
                        <p class="text-left">We're excited to announce a new project from our community: a small FM tuner based on the NXP TEF668x chip and STM32 with a custom board. This tuner can be controlled remotely from your computer, features two antenna connectors, and transmits audio through a single USB cable.</p>

                        <img src="/img/projects/headless_tef/headless_tef_board.jpg" width="80%" alt="Original TEF Board Design">

                        <p class="text-left">In our first tests, the antenna separation was nearly 60dB and the dynamic range was almost 100dB. This shows the tuner’s excellent performance.<p>
                        <p class="text-left">Best of all, it's fully compatible with <a href="/projects/xdr-gtk.php">XDR-GTK</a> and <a href="/projects/fm-dx-webserver.php">FM-DX Webserver</a>.</p>

                        <p class="text-left">Stay tuned for more updates and the release date. We can’t wait to share this FM tuner with you!</p>
                        <br>
                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">FMDX.org / OpenRadio</a>.<br>You will be able to support our projects soon.</p>
                        <p>Your donations are appreciated! ❤️</p>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>