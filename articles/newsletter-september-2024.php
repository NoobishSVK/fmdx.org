<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - September 2024';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/LgiIZ5P.jpeg');">
                            <div style="width: 100%;">
                                <h2>Newsletter - September 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                27th September 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🌐
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">It's been a while, but we've got some positive news again! We're talking about both hardware and software. Let's dive in.</p>

                        <p class="text-left">This time, we will discuss every single piece of news in a separate category, as these are the most important things that happened over the last month.</p>
                        
                        <h3 class="color-main">Headless TEF's Official Release</h3>
                        <p class="text-left">Headless TEF development has come to an end and can now be built by everyone, as we’ve made the hardware schematics public. This device runs on STM32, provides I2S audio,
                             has an integrated antenna switch, and unbeatable selectivity and sensitivity as it runs on TEF668x v205 (TEF6687 - F8705 recommended) with extra filters.</p>
                        <p class="text-left">Most importantly, you can use this with your webserver with just ONE USB cable!</p>

                        <p>Schematics & other info is available on <a href="https://github.com/FMDX-org/tef668x-headless-usb-tuner" class="text-main" target="_blank"><strong>GitHub</strong></a>.</p>
                        <p class="text-small">The official Headless TEF info page will be updated as well.</p>

                        <h3 class="color-main">Webserver Tunnel Support</h3>
                        <p class="text-left">We have noticed that some people would love to set up a webserver but simply can’t get a public IP address or don't know how to set up a tunnel.<br>
                        For these people, we now offer a tunneling service. This functionality is available as a <strong>benefit for our supporters</strong>.<br><br>
                        If you’d like to support us and receive your webserver tunnel login, feel free to do so on our <strong>Buy Me a Coffee</strong> page!<br>
                        After that, send Noobish (founders tab) an email for your details, or contact them on our Discord server.</p>

                        <a href="https://buymeacoffee.com/fmdx" target="_blank"><button class="btn-small m-auto">Support us</button></a>
                        
                        <h3 class="color-main">New transmitter content by FMLIST & logging</h3>
                        <p class="text-left">Thanks to our partners from FMLIST, we’ve received data that we can now use for webserver transmitter identification for pretty much the entire world.<br>
                        In return, we have added a <strong>"LOG TO FMLIST"</strong> functionality, which ensures that all the data is correct, and that logs from your webserver can appear on their Visual Logbook.<br>
                        Simply put, we get data from them, our webservers ensure that this data is up to date, which makes the transmitter identification work properly — and that’s awesome!</p>

                        <h3 class="color-main">Webserver by dx.cz</h3>
                        <p class="text-left">Our partners at dx.cz <strong><a href="https://dx.cz" target="_blank">(Czechoslovak DX Club)</a></strong> have launched their webserver on the Czech-German border with a Körner 19.3 antenna.
                            This server is available for everyone to tune into and receives many stations from Germany.<br>
                            It’s amazing to see that Czech DXers always come up with the most extreme antennas!</p>

                        <p>You can access their webserver at this URL: <a href="http://109.164.114.15:9090/" class="text-main" target="_blank">http://109.164.114.15:9090/</a>

                        <h3 class="color-main">What’s coming next?</h3>
                        <p class="text-left">I can only talk about myself in this case, as other members are busy with distributing test units of the Headless TEF to the rest of the community.<br>
                        What you can mainly expect in the near future from me though, is a big optimization pack of the webserver - it should run better, eat less resources and plugins should be easier to implement (including server plugins).</p>
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