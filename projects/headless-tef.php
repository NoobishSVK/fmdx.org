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
                        
                        <p class="text-left">We are bringing you a comprehensive spec sheet, so you can learn more.<p>

                        <table style="margin: auto;" class="text-left">
                            <thead>
                                <tr class="color-main">
                                    <th style="font-size: 20px;">Specification</th>
                                    <th style="font-size: 20px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">SoC</td>
                                    <td>STM32</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Board size</td>
                                    <td>80x40 mm (3.15 x 1.07 inches)</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Audio</td>
                                    <td>I2S + optional 3.5mm audio hat</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Dynamic range</td>
                                    <td>~100dB</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Firmware</td>
                                    <td>FM-DX Tuner by Konrad</td>
                                </tr> 
                            </tbody>
                        </table>

                        <h3>Build one yourself!</h3>
                        <p>If you are looking to build one tuner yourself, you can find all the needed files on <a href="https://github.com/FMDX-org/tef668x-headless-usb-tuner" target="_blank" class="text-main">GitHub</a>
                        <p class="text-left">Best of all, it's fully compatible with <a href="/projects/xdr-gtk.php">XDR-GTK</a> and <a href="/projects/fm-dx-webserver.php">FM-DX Webserver</a>.</p>

                        <p class="text-left">Stay tuned for more updates and the release date. We can’t wait to share this FM tuner with you!</p>
                        <br>
                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">FMDX.org / OpenRadio</a>.
                        <a href="https://buymeacoffee.com/fmdx" target="_blank"><img src="https://media.licdn.com/dms/image/v2/D4D12AQF0PZYrwThrIQ/article-inline_image-shrink_1000_1488/article-inline_image-shrink_1000_1488/0/1701704819869?e=2147483647&v=beta&t=6RRIU3fx8mdk_gRJLDFtFfyVo4-ny3VOHgr_B2GJgDc" width="250" alt="Buy me a coffee!"></a>
                        <p>Your donations are appreciated! ❤️</p>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>