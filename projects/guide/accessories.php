<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'TEF Guide - Accessories';
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
                        <h2>TEF Guide - Accessories</h2>
                        <p class="text-left">Guide for accessories is coming soon. Stay tuned!</p>

                        <p class="m-0"><i class="fa-solid fa-diamond"></i></p>
                        <p class="m-0" style="font-size: 24px;"><a href="index.php" class="color-main">Summary</a> <span class="text-gray">•</span> <a href="receivers.php" class="color-main">Receivers</a> <span class="text-gray">•</span> <a href="spareparts.php" class="color-main">Spare Parts</a>

                        <p><strong>Prices are listed in € and include EU VAT.</strong></p>
                        </p>
                        <!--div id="spare-parts"></div>-->
                        <br>
                        <hr>
                        <?php $author = 'Marek Farkaš (Noobish)'; $donate = 'noobish'; include($_SERVER["DOCUMENT_ROOT"]."/includes/author.php"); ?>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
        <script src="guide.js"></script>
    </body>
</html>