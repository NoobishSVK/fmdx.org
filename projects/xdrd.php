<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'FM-DX Webserver';
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
                        <h2>xdrd (XDR daemon)</h2>
                        <p class="text-left">xdrd, or XDR Daemon, is a TCP server developed by <a href="/founders.php" class="text-bold color-main">Konrad Kosmatka (kkonradpl)</a> and Mateusz Walkowiak (Hyper DX), which enables connecting a receiver to a network.

                        Working as a communication layer between the receiver and end-user software, it allows the receiver to interface with programs such as FMDX Webserver, or XDR-GTK.</p>
                        <img src="/img/projects/xdrd/xdrd.png" width="80%" alt="FMDX Server List">

                        <p class="text-left">xdrd is cross-platform, meaning it can be run on both Linux and Windows operating systems. Additionally, xdrd is very lightweight in terms of hardware load, making it suitable for use even on lower-end computers.<p>

                        <a href="https://github.com/kkonradpl/xdrd/releases" target="_blank"><button class="btn-small m-auto">Download xdrd</button></a>
                        <br>
                        <a href="https://fmdx.pl/xdr-gtk/" target="_blank">More info & Binaries (combined with XDR-GTK)</a>
                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">Konrad Kosmatka (kkonradpl)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/kkonradpl" target="_blank"><img src="https://camo.githubusercontent.com/52867c19b7dfad6776f2d60ae248692873ae6bdcb9a3df2bfca2f1f2ffdfd15d/68747470733a2f2f63646e2e6275796d6561636f666665652e636f6d2f627574746f6e732f76322f64656661756c742d626c75652e706e67" width="250" alt="Buy me a coffee!"></a>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>