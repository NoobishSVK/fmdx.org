<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - January & February 2025';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/gQmwMry.jpeg');">
                            <div style="width: 100%;">
                                <h2><?php $pageTItle ?></h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                7th March 2025</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🎊
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Hello! Long time no see, 2025 is off to a wild start and there are lots of things to cover - achievements, updates and more. Let's dive in.</p>

                        <h3 class="color-main">Achievements</h3>
                        <p class="text-left">First of all, let's talk about the achievements. We have reached over 200 webservers, which is an amazing number. The webserver has been around for a year at this point and we became the biggest CCIR FM "SDR" list worldwide.</p>
                        <p class="text-left">With this, we have also reached 1800 members on our Discord server, which is amazing, as we're approaching 2000 very quick. That is an unbelievable number and we are thankful for every single one of you.</p>

                        <h3 class="color-main">Finances</h3>
                        <p class="text-left">A huge THANK YOU to all our supporters, this wouldn't be possible without you. We have decided to make 2 sponsored webservers, out of which one will be placed near the Trutnov/Černá Hora transmitter in Czechia (1300m ASL). The second one will be placed near the Czech / Polish border at around 900m ASL near the mountain peak of Biskupská Kupa.</p>
                        <p class="text-left">Both of these servers will host an S-dipole. These S-dipoles have been donated to us by dxc.cz - thank you for that!
                        With this, we have also bought a third thin client in the meantime to record a YouTube tutorial with. This tutorial will show you how to set up a webserver on Linux - Debian specifically.</p>
                        <p class="text-left">And last of all, since it's almost a year since we started utilizing the FMDX.org domain, we paid for a renewal.</p>

                        <h4 class="text-left">Cost breakdown:</h4>
                        <p class="text-left">Domain renewal: 18.58 €<br>
                            Thin clients (Dell Wyse 3040) x2 for sponsored webservers: 51 €<br>
                            Thin client (Dell Wyse 3040) for the YouTube video tutorial: 23.61 €<br>
                            <br>
                            Total cost: 93.19 €
                        </p>

                        <h3 class="color-main">Headless TEF sale</h3>
                        <p class="text-left">The first official e-shop has started providing Headless TEFs for sale, these are sold at a slightly higher price than what our community members offer, however this price includes EU VAT and also a 2 year warranty. If you don't feel like waiting for more offers of Headless TEFs, you can grab one from here: </p>
                        <p class="text-left"><a href="https://www.dxc.cz/eshop/headless-tef-tuner-kit/" target="_blank">DXC.cz e-shop</a> or alternatively for worldwide shipping, send a request to <strong>dxc@dxc.cz</strong></p>

                        <h3 class="color-main">Project updates</h3>
                        <p class="text-left">We have started development on a tool called FM-DX Monitoring. With this tool, you can keep an up-to-date bandscan of your entire FM band, including handy stats with charts and a visual spectrum chart. This tool works by querying a webserver API and collecting data, which is then displayed.
                        The UI design was partially inspired by PIRA.cz monitoring tool.</p>
                        <p class="text-left">FM-DX Webserver received a few updates over the last few weeks including important security bugfixes and UI updates - especially a new top bar, which needs less screen estate and allows the plugin developers to add their plugins to the said panel easily. With this, we have also decided to replace the original signal chart with a new one, which matches the display's refresh rate, ensuring smooth experience.</p>
                        <p class="text-left">The ESP32 TEF v1 firmware is currently rolling out with release candidate updates. With this, a full major version release is coming soon, including many new features and bugfixes, a complete changelog will be available once the full version is officially released.</p>
                        <p class="text-left">With the ESP32 TEF v1 beta updates, our community member HIGHPOINT made an Android TEF logger app. You can just go hike and leave the TEF in your backpack and tune it remotely with your phone and save your logs. How amazing is that? You can try this app here:
                        <a href="https://github.com/Highpoint2000/TEFLoggerApp" target="_blank">TEF Logger GitHub</a></p>

                        <h3 class="color-main">Community</h3>
                        <p class="text-left">Our Discord server received a slight overhaul, as we wanted to make it less confusing for new users - so far the results are amazing and it seems like everyone in the community feels way more comfortable with the current settings. With this, we would also like to thank our Discord moderators for their amazing job keeping the community civil & friendly.</p>
                            
                        <h3 class="color-main">What's coming in 2025?</h3>
                        <p class="text-left">FM-DX Servermap (servers.fmdx.org) will receive an UI overhaul including the new top panel, that you can already see on updated webservers now. All the settings and stats will be moved there to ensure more UI design consistency. With this, we also plan on improving the global webserver settings.</p>
                        <p class="text-left">With this, FM-DX Webserver will also receive more bugfix and optimization related attention. The UI design is currently in an ideal state, where it only needs minor polishing. </p>
                        <p class="text-left">We will also let you know about the full ESP32 FM Firmware major update soon in a separate article - the same goes for the sponsored webservers, we're very excited for both!</p>
                        <br>
                        <p class="text-left">This wraps up all the info recap you might need, we're excited to see you soon!</p>
                        <br>
                        <img src="/img/logo.png" alt="OpenRadio Logo">
                        <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders! And as per usual, see you next month.</p>
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