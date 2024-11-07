<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'XDR-GTK';
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
                        <h2>XDR-GTK</h2>
                        <p class="text-left">XDR-GTK is a versatile, cross-platform application developed by <a href="/founders.php" class="text-bold color-main">Konrad Kosmatka (kkonradpl)</a> and Mateusz Walkowiak (Hyper DX). Designed for use with the XDR-F1HD radio tuner equipped with the XDR-I2C modification, it also supports TEF-6686 tuners. 

                        The software provides a lightweight, user-friendly interface and a variety of features: it decodes basic RDS elements, allows users to adjust the bandwidth, and set the AGC level. </p>
                        <img src="/img/projects/xdr-gtk/xdr-gtk.png" width="80%" alt="FMDX Server List">

                        <p class="text-left">XDR-GTK also includes some more advanced functionalities. These are, for example, spectral scan and antenna pattern measurement. Additionally, it can be easily integrated with RDS Spy over TCP/IP for more detailed RDS decoding.<p>

                        <p>The latest version is: <span class="color-main">v1.2</span></p>

                        <br>

                        <img src="/img/projects/xdr-gtk/spectral.png" width="100%" alt="Webserver UI">

                        <p class="text-left">One of the standout features of XDR-GTK is its cross-platform compatibility, enabling usage on both Windows and Linux operating systems.</p>

                        <a href="https://github.com/kkonradpl/xdr-gtk/releases" target="_blank"><button class="btn-small m-auto">Download XDR-GTK</button></a>
                        <br>
                        <a href="https://fmdx.pl/xdr-gtk/" target="_blank">More info & hotkey list</a>
                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">Konrad Kosmatka (kkonradpl)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
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