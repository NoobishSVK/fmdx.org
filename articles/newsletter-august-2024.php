<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - August 2024';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/eIUArzi.jpeg');">
                            <div style="width: 100%;">
                                <h2>Newsletter - August 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                28th August 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            ☀️
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Summer is coming to its end, and so are the meetups for this year. Does that mean more content for you?</p>

                        <p class="text-left">Many interesting things happened over the last 30 days, let's discuss them!</p>
                        
                        <h3 class="color-main">You can support us now!</h3>
                        <p class="text-left">We have unlocked the <strong>"support us"</strong> panel. This means you can now support us either one-time or on a monthly basis. For people who decide to support us monthly, we have added some nice perks!<br>
                        You will get a special Discord rank at this time, with the option to get a free webserver tunnel token in the near future - this means you will be able to host a webserver anywhere without a public IP address directly.</p>
                        <p class="text-left">Feel free to check out the <a href="/supportus.php" target="_blank" class="text-bold">support page</a>.</p>

                        <a href="https://buymeacoffee.com/fmdx" target="_blank"><button class="btn-small m-auto">Support us</button></a>

                        <p class="text-left">We're grateful for every type of support! If you support us financially, by giving community support to others, hosting webservers, we'd love to say thank you!</p>

                        <h3 class="color-main">Yay, a new sponsor!</h3>
                        <p class="text-left">You may have noticed a new panel with FMDX Sponsors. After the meetup in Holice, which you can read more about below this, we got in contact with the amazing guys from <strong>BBXNET</strong>.<br>
                        That means some hosting costs are covered by them, and in the near future, we should see some webservers for you to tune.</p>

                        <img src="https://fmdx.org/img/bbxnet.png" width="300px">

                        <h3 class="color-main">International radio meetup HOLICE 2024</h3>
                        <p class="text-left">This time instead of the guys from FMLIST, Czech DXers had the opportunity to meet Sjef. We had plenty of nice interactions, where people thanked Sjef for his outstanding work in the DX community.<br>
                        On top of that, we got enough time for a presentation about TEF receivers and FM-DX Webserver. People were eager to ask questions, so we definitely hope to see some new users / servers in the near future.
                        <br>A video from this presentation will be available on YouTube with English subtitles in the near future.</p>
                        
                        <img src="https://i.imgur.com/KJo3FdB.jpeg" width="80%">
                        <p class="text-small">After the meetup - gamiee (one of the developers of the Headless TEF) on the right, Sjef in the back, Aurie on the left side and Noobish in the front!</p>

                        <p class="text-left">You can find more info about the meetup on the <a href="https://ok1khl.com/" target="_blank" class="text-bold">OK1KHL</a> page. We can eventually share more pictures on Discord, if we find some!</p>

                        <h3 class="color-main">Project news</h3>
                        <h4 class="text-left">OpenRadio collaborative projects</h4>
                        <p class="text-left">The Headless TEF, of course. Many of you are waiting for it. The project files will be released to the public soon, we are finalizing the last few things, before we can publish them!<br>
                        As of now, first few people have received their test units and most of them have decided to run these on their webservers. We will be sure to inform you on Discord, but the files will also be available on the website.</p>
                        <p class="text-left">When it comes to the website, we also plan on unlocking the grayed out sections, including a big update on the TEF guide, which will be integrated into FMDX.org
                        <h4 class="text-left">Sjef's projects</h4>
                        <p class="text-left">The TEF6686 ESP32 Firmware received a few minor BETA updates, which include new functions and more bugfixes. You can download these on our Discord.</p>
                        <h4 class="text-left">Noobish's projects</h4>
                        <p class="text-left">FM-DX Webserver got many updates along with a refreshed glass design, better plugin support and many bugfixes, with many more coming soon, including the option to host the webserver natively without a public IP address. Stay tuned!</p>

                        <h3 class="color-main">What’s coming next?</h3>
                        <p class="text-left">I believe we mentioned the most important stuff. As summer's ending, we are slowly getting back into the development habit. We can't wait to bring all of these new things to you!</p>
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