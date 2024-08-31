<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'TEF Guide - Spare Parts';
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
                        <h2>TEF Guide - Spare Parts</h2>
                        <p class="text-left">These are the most popular receivers. The sellers / prices are updated periodically and may not reflect the actual price on AliExpress. <br>
                        Ratings are based off of users who have decided to try these devices.</p>

                        <p class="m-0"><i class="fa-solid fa-diamond"></i></p>
                        <p class="m-0" style="font-size: 24px;"><a href="index.php" class="color-main">Summary</a> <span class="text-gray">•</span> <a href="accessories.php" class="color-main">Accessories</a> <span class="text-gray">•</span> <a href="receivers.php" class="color-main">Receivers</a>

                        <p><strong>Prices are listed in € and include EU VAT.</strong></p>
                        </p>
                        <div id="spare-parts"></div>
                        <br>
                        <hr>
                        <p>This guide was made by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/noobish" target="_blank"><img src="https://media.licdn.com/dms/image/v2/D4D12AQF0PZYrwThrIQ/article-inline_image-shrink_1000_1488/article-inline_image-shrink_1000_1488/0/1701704819869?e=2147483647&v=beta&t=6RRIU3fx8mdk_gRJLDFtFfyVo4-ny3VOHgr_B2GJgDc" width="250" alt="Buy me a coffee!"></a>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
        <script src="guide.js"></script>
    </body>
</html>