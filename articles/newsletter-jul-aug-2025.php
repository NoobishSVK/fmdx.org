<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - July & August 2025';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/um2E73Z.png');">
                            <div style="width: 100%;">
                                <h2><?php echo $pageTitle ?></h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                21st September 2025</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🌻
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">It's time to wrap up the summer. So, what happened in the last 2 months? Let's check it out together.</p>

                        <h3 class="color-main">Radio meetup in Holice, Czechia</h3>
                        <p class="text-left">Once again, we attended the annual ham radio meetup in Holice, Czech Republic. Our focus was on promoting the community and showcasing FM-DX Webserver.
                            The event was a great success, and we're already looking forward to returning next year.</p>

                        <img src="https://i.imgur.com/oAh4M2l.jpeg" width="80%">
                        <p class="text-small">Marek Farkaš & Vivien Vlčková at the radio meetup in Holice.</p>

                        <h3 class="color-main">Headless TEF Lite official sale</h3>
                        <p class="text-left">The Headless TEF Lite is now also available for purchase through our sponsor at dxc.cz. This way of purchasing is ideal for EU citizens and companies, 
                            since the VAT is included in the price. <a href="https://www.dxc.cz/eshop/headless-tef-lite-kit/" target="_blank" class="color-main">Buy the Headless TEF Lite here 👈</a></p>

                        <h3 class="color-main">Milestone giveaway results</h3>
                        <p class="text-left">
                        Another highlight was the latest community giveaway featuring Sjef Verhoeven's newest project, the <strong>Headless TEF Lite</strong>, along with several Supporter Tags.
                        The Headless TEF Lite is a more compact and affordable version of the Headless TEF, offering fully digital audio output and a single antenna connector.<br>
                        To enter, participants shared posts featuring the weirdest and most unique devices running FM-DX Webserver. 
                        The competition was close, and we really enjoyed your submissions. Congratulations to all the winners who have been mentioned on Discord!
                        </p>

                        <h3 class="color-main">Radio World article</h3>
                        <p class="text-left">And finally, we're proud to share that our founders were featured in the Radio World magazine! 
                            The article covers the early days of our DXing journey, the growth of our community and the evolution of our TEF668x-based projects.
                        <br> You can also read the article online here: <a href="https://www.radioworld.com/news-and-business/news-makers/meet-the-hobbyists-behind-todays-smartest-radios" target="_blank" class="color-main">Radio World - Meet the Hobbyists Behind Today’s Smartest Radios</a></p>
                            

                        <img src="https://i.imgur.com/r0KK09P.jpeg" width="80%">
                        <p class="text-small">The radio world article headline.</p>

                        <h3 class="color-main">FM DX Webserver</h3>
                        <p class="text-left">FM-DX Webserver received multiple updates since the last newsletter including many fixes provided by our community members, which should result in better performance, security and reliability.</p>
                        
                        <h3 class="color-main">ESP32 TEF Firmware</h3>
                        <p class="text-left">Sjef's ESP32 firmware received multiple RDS-related updates, which are very useful for transmitter engineers. On top of that, language packs have been updated, and many minor bugs were fixed.<br>
                        You can download the latest beta firmware on our Discord server.</p>

                        <h3 class="color-main">What's coming in the future?</h3>
                        <p class="text-left">Even though there was a delay due to the summer hiatus, as we were are all busy with private life, we are trying to stick to the projects on the timeline.<br>
                        On top of that, we are planning to provide more tunnel servers for our supporters to ensure the best possible performance in different regions.</p>
                        <br>
                        <img src="/img/logo.png" alt="OpenRadio Logo">
                        <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders! And as per usual, see you next month.</p>
                        <br>
                        <hr>
                        <p>This article was written by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
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