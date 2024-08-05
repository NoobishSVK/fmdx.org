<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'ESP32 DAB+ Receiver';
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
                        <h2>ESP32 DAB+ Receiver</h2>
                        <p class="text-left">The ESP32 DAB tuner, developed by <a href="/founders.php" class="text-bold color-main">Sjef Verhoeven (PE5PVB)</a>, is a DAB+ receiver created for the 60th VRZA Radio Camp Week 2024. </p>
                        <p class="text-left">At its core, the tuner utilizes the Skyworks SI4684 receiving chip, which is equipped with an in-house DAB+ firmware. The system is managed by an ESP32 microcontroller, offering a robust and versatile control platform.</p>
                        <img src="/img/projects/esp32-dab/esp32-dab-tuner.png" width="80%" alt="ESP32 Dab Tuner in a 3D printed case">

                        <p class="text-left">The user interface features a color LCD screen, three push buttons, and two rotary encoders, providing an intuitive and user-friendly experience. Audio output is facilitated through two cinch connectors, complemented by a dedicated headphone output.<p>
                        <p class="text-left">This tuner will also be the first available tuner worldwide with tools for remote web control, which is useful for the DX community and DAB+ operators for monitoring purposes.</p>

                        <iframe width="560" height="315" src="https://www.youtube.com/embed/C_xd0h_HTuU?si=vGNeiB5VZHMpmnQE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <br>
                        <p>The current firmware version is <span class="color-main text-bold">v1.00</span>, with betas available on our Discord community server.</p>

                        <a href="https://github.com/PE5PVB/SI4684-DAB-Receiver/releases/" target="_blank"><button class="btn-small m-auto">Download latest firmware</button></a>
                        <br>
                        <a href="https://github.com/PE5PVB/SI4684-DAB-Receiver/" target="_blank">Source code</a> • 
                        <a href="https://www.pe5pvb.nl/si4684-dab-ontvanger/" target="_blank">More info & hardware schemas</a>
                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">Sjef Verhoeven (PE5PVB)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/pe5pvb" target="_blank"><img src="https://camo.githubusercontent.com/52867c19b7dfad6776f2d60ae248692873ae6bdcb9a3df2bfca2f1f2ffdfd15d/68747470733a2f2f63646e2e6275796d6561636f666665652e636f6d2f627574746f6e732f76322f64656661756c742d626c75652e706e67" width="250" alt="Buy me a coffee!"></a>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>