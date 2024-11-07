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
                        <h2>FM-DX Webserver</h2>
                        <p class="text-left">FM-DX Webserver, an innovative project by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a>, enables users to remotely connect to other users’ receivers and explore their frequency bands as if they were on-site.</p>
                        <p class="text-left">A server map is available at <a href="https://servers.fmdx.org" target="_blank" class="color-main">servers.fmdx.org</a>, where you can view all the public servers hosted by community members.
                        Connecting to a remote server is straightforward: simply click on a server and navigate to the "Connect" button on the right side of the screen. </p>

                        <img src="/img/projects/webserver/serverlist.png" width="100%" alt="FMDX Server List">

                        <p class="text-left">FM-DX Webserver features an intuitive user interface and a variety of useful tools, including a built-in audio stream, a comprehensive admin panel and a chat window.
                            An integrated algorithm automatically displays key transmitter information based on PI codes and RDS data.</p>
                        <p class="text-left">For those interested in further customization, the community offers a selection of user-made widgets, including station logos, custom UI elements or weather.<br>
                        We are open for pull requests as well!</p>
                        <a href="https://github.com/NoobishSVK/fm-dx-webserver/wiki/Plugin-List" target="_blank"><button class="btn-small m-auto">Browse the plugins list</button></a>
                        <br>
                        <img src="/img/projects/webserver/ui.png" width="100%" alt="Webserver UI">

                        <p class="text-left">To host your own server, you need a compatible receiver, a computer, and a public IP address (alternatively, this can be bypassed using a tunnel).</p>
                        <p class="text-left">One of the key advantages of FM-DX Webserver is its browser-based functionality, allowing you to tune in from any modern device, including smartphones and tablets. The software is cross-platform, supporting both Windows and Linux operating systems.</p>

                        <a href="https://github.com/noobishsvk/fm-dx-webserver" target="_blank"><button class="btn-small m-auto">Download FM-DX WebServer</button></a>
                        <br>
                        <a href="https://github.com/NoobishSVK/fm-dx-webserver/blob/main/README.md" target="_blank">Setup Info</a>
                        <br>
                        <h3 id="rules" class="color-main">Public webserver hosting rules (maps)</h3>
                        <p class="text-left">Hosting a webserver publicly with it being on the maps comes with some rules. If you break these rules, you might be banned from adding a webserver to the maps.<br>
                            If you are using this app privately, or you are just a regular user, in most cases you have nothing to worry about</p>
                        <ol class="text-left">
                            <li>Your server name/description should give users a basic idea of what it's about</li>
                            <li>Political/religious references & offensive or misleading server text is not allowed</li>
                            <li>Server mods that break the webserver's functionality are not allowed</li>
                            <li>Modifying the metadata that is being sent to maps is not allowed</li>
                            <li>Removing basic features of the webserver is not allowed</li>
                            <li>All modifications must be made in the form of a plugin, unless it's not possible (may happen in some cases)</li>
                            <li>The FMDX.org team reserves the right to suspend the server owner from maps if they find the server/owner suspicious in any case</li>
                        </ol>

                        <br>
                        <hr>
                        <p>This project was created by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a> & the FMDX community.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/noobish" target="_blank"><img src="https://camo.githubusercontent.com/52867c19b7dfad6776f2d60ae248692873ae6bdcb9a3df2bfca2f1f2ffdfd15d/68747470733a2f2f63646e2e6275796d6561636f666665652e636f6d2f627574746f6e732f76322f64656661756c742d626c75652e706e67" width="250" alt="Buy me a coffee!"></a>
                    </div>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>