<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - June/July 2024';
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
                    <article class="panel panel-big text-center">
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/TZf635l.png');">
                            <div style="width: 100%;">
                                <h2>Newsletter - June/July 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                8th July 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            ✨
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Hot summer for European DXers, cold winter for the DXers down under. Lots of sporadic E, and of course, news from the FMDX team.</p>

                        <p class="text-left">This newsletter may be longer than usual, which is why I’m combining two months into one. All of us are also traveling during the summer, which has slowed down the development of things, but we’re still offering community support for our projects.</p>
                        
                        <p class="text-left">Nevertheless, we have progressed through some huge milestones:
                        <ul class="text-left">
                            <li><strong>1000</strong> – That’s the milestone we have crossed on our Discord server. How great!</li>
                            <li><strong>100</strong> – The number of public webservers online at the same time. Incredible stuff!</li>
                        </ul>

                        <p class="text-left">We’re grateful for every single user, webserver maintainer, tester, plugin developer, and team member!</p>
                        <h3 class="color-main">HAM RADIO Friedrichshafen</h3>
                        <p class="text-left">The <strong>FMLIST.org admins</strong> (Günter and Oliver) met one of our founders, <strong>Sjef Verhoeven</strong>, who created the TEF ESP32 firmware. You can also see the <strong>FM-DX Webserver</strong> being presented for users to tune and test, along with some neat plugins made by <a href="https://github.com/highpoint2000/" target="_blank">HIGHPOINT</a>. Big thanks to FMLIST for the collaboration on HAM RADIO!</p> 
                        
                        <img src="/img/articles/HamRadio2024-4.jpg" width="80%">
                        <p class="text-small">Sjef is on the left, with Günter and Oliver on the right. They’re having fun – and that’s what DXing is all about!</p>

                        <p class="text-left">These amazing pictures were taken by <a href="https://ratzer.at/" target="_blank">Christoph Ratzer</a>. Check the full album <a href="https://ratzer.at/galerien/ham-radio-2024" target="_blank" class="color-main">here</a>. Pictures uploaded with their permission. Thank you!</p>

                        <h3 class="color-main">Project news</h3>
                        <h4 class="text-left">OpenRadio collaborative projects</h4>
                        <p class="text-left">The Headless TEF receiver is alive! We are currently in the testing phase, making adjustments to the hardware and software so it works as it’s supposed to.<br>From the first tests, it’s truly incredible what this device can do. Almost 100dB of dynamic range and 60dB isolation on the antenna switch. It will still take some time before the hardware schematics are released to the public, but we’re getting closer every day.</p>
                        <h4 class="text-left">Sjef's projects</h4>
                        <p class="text-left">The TEF6686 ESP32 Firmware received a big update to v2.11, which brings many new functions, including full webserver support, extended XDR-GTK support, new themes, extra RDS functions, many bug fixes, and code optimization. You can download it <a href="https://github.com/PE5PVB/TEF6686_ESP32/releases" target="_blank">here</a>.</p>

                        <h3 class="color-main">What’s coming next?</h3>
                        <p class="text-left">As mentioned above, the community as a whole is busy traveling during the summer, so development is a bit slower. However, you can expect many more updates on our projects very soon, including big content updates on the FMDX.org website itself.</p>
                        <br>
                        <img src="/img/logo.png" alt="OpenRadio Logo">
                        <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders! We will see you next month with more amazing news.</p>
                        <br>
                        <hr>
                        <p>This article was made by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/noobish" target="_blank"><img src="https://media.licdn.com/dms/image/v2/D4D12AQF0PZYrwThrIQ/article-inline_image-shrink_1000_1488/article-inline_image-shrink_1000_1488/0/1701704819869?e=2147483647&v=beta&t=6RRIU3fx8mdk_gRJLDFtFfyVo4-ny3VOHgr_B2GJgDc" width="250" alt="Buy me a coffee!"></a>
                        </div>
                        </article>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>