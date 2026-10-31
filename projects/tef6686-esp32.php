<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'TEF6686 ESP32 Tuner';
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
                        <h2>ESP32 TEF FM Receiver</h2>
                        <p class="text-left">The ESP32 TEF6686 tuner, developed by <a href="/founders.php" class="text-bold color-main">Sjef Verhoeven (PE5PVB)</a>, is a DIY project featuring a comprehensive DSP AM/FM receiver with a TFT color screen. This project uses the ESP32 microcontroller and a high-quality TEF6686 chip.
                        It also serves as the foundation for many Chinese pre-built tuners, which utilize the same software.</p>
                        <img src="/img/projects/tef_esp/tef_originalboard.png" width="80%" alt="Original TEF Board Design">

                        <p class="text-left">The default view mode on the TFT screen shows the frequency, signal strength, and RDS information. Additionally, it can display frequency deviation and the current reception bandwidth.<p>
                        <p class="text-left">When it comes to FM, the tuner supports both the OIRT and CCIR bands (65-108 MHz). It also receives AM bands, including longwave, medium-wave, and shortwave broadcasting (144 kHz-27 MHz).</p>

                        <img src="/img/projects/tef_esp/tef6686_portable.jpg" width="80%" alt="TEF6686 portable version example">
                        <p class="text-left">Later on, Chinese hardware manufacturers have decided to use this open-source project to build their own tuners, which are now sold worldwide. The firmware is actively being developed by the FMDX community to this day.</p>
                        <br>
                        <p>The current firmware version is <span class="color-main text-bold">v2.11</span>, with betas available on our Discord community server.</p>

                        <a href="https://github.com/PE5PVB/TEF6686_ESP32/releases/" target="_blank"><button class="btn-small m-auto">Download latest firmware</button></a>
                        <br>
                        <a href="https://github.com/PE5PVB/TEF6686_ESP32/" target="_blank">Source code</a> • 
                        <a href="https://www.pe5pvb.nl/tef6686/" target="_blank">More info & hardware schemas</a>
                        <br>
                        <hr>
                        <?php $author = 'Sjef Verhoeven (PE5PVB)'; $donate = 'pe5pvb'; include($_SERVER["DOCUMENT_ROOT"]."/includes/author.php"); ?>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>