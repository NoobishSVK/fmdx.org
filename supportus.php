<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/tools/bmac.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Support us';
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
                    <div class="panel panel-big text-center" style="padding: 30px 50px;">
                        <h2>Support us!</h2>

                        <p class="text-left">We can bring you more free projects & updates thanks to your generosity. Finances donates to the FMDX.org project are being used strictly for FMDX.org itself and its projects.</p>

                        <h3 class="color-main">Donations</h3>
                        <div class="flex-container flex-center">
                            <div>
                                <p class="text-bold m-0" style="font-size: 20px">last 30 days</p>
                                <p class="m-0"><?php echo $total_amount?></p>
                            </div>
                            <div class="text-center" style="width:400px";>
                                <p class="text-center">Thank you!</p>
                                <p>❤️</p>
                            </div>
                            <div>
                                <a href="https://buymeacoffee.com/fmdx" target="_blank"><button class="btn-small m-auto">Support us</button></a>
                            </div>
                        </div>

                        <h3 class="color-main">How we use your donations</h3>

                        <p>We cover the following items using your donations:<p>

                        <div class="flex-container" style="justify-content: center">
                            <div class="text-left p-side-20">
                                <h4>Services</h4>
                                <ul style="list-style-type: none; padding:0;">
                                    <li>Domain</li>
                                    <li>Webhosting</li>
                                    <li>Server for misc. services</li>
                                </ul>
                            </div>
                            <div class="text-left p-side-20">
                                <h4>Hardware</h4>
                                <ul style="list-style-type: none; padding:0;">
                                    <li>Custom hardware builds</li>
                                    <li>HW for SW development</li>
                                    <li>Hardware for reviews</li>
                                </ul>
                            </div>
                            <div class="text-left p-side-20">
                                <h4>Projects</h4>
                                <ul style="list-style-type: none; padding:0;">
                                    <li>Sponsored webservers</li>
                                    <li>Hardware for Developers</li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <p>Thank you for supporting open-source projects!</p>
                    </div>
                </main> 
                <?php include 'includes/sidepanels.php';?>
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>