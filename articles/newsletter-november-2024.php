<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - November 2024';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/aL0cNnA.png');">
                            <div style="width: 100%;">
                                <h2>Newsletter - November 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                30th November 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🧣
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">As we approach the end of 2024, November is nearly behind us. Let’s take a moment to recap the highlights of this past month.</p>

                        <h3 class="color-main">Tropospheric propagation</h3>
                        <p class="text-left">European DXers experienced phenomenal tropospheric propagation conditions, with signals logged from over 1,000 km away across Europe. Notable receptions included:</p>
                        <ul class="text-left">
                            <li>The United Kingdom in Czechia and Poland (and vice versa!)</li>
                            <li>Luxembourg across the entirety of Czechia</li>
                            <li>Slovakia with RDS logged in Norway</li>
                            <li>France with RDS in Czechia</li>
                            <li>Denmark reaching southern France</li>
                            <li>Germany logged across nearly all of Europe from numerous transmitters</li>
                        </ul>

                        <p class="text-left">November 3rd stood out as the best day for tropospheric conditions. It also served as an excellent demonstration of the FM-DX Webserver's logging functionality. We’re thrilled by the surge of new logs thanks to the collaboration between our team and FMLIST.</p>
                        <p class="text-left">You can explore the log map from November 3rd <a href="https://fmlist.org/fm_logmap.php?datum=2024-11-03" target="_blank" class="color-main">here</a>.

                        <h3 class="color-main">Headless TEF availability</h3>
                        <p class="text-left">Many of you have started asking about the availability of Headless TEFs. While some of our members build a few pieces here and there sometimes, the demand is definitely way higher than we expected.<br>
                        The hardware and software are both open-source, so the best choice is to currently either build one yourself, or visit our new Marketplace channel on Discord, where the sellers will definitely post some for sale.</p>

                        <p>Schematics & other info is available on <a href="https://github.com/FMDX-org/tef668x-headless-usb-tuner" class="color-main" target="_blank"><strong>GitHub</strong></a>.</p>

                        <h3 class="color-main">Webserver attacks</h3>
                        <p class="text-left">Unfortunately, we encountered some challenges this month. Webserver owners may have noticed crashes due to a security exploit in the webserver software.
                            This issue caused the servers to crash but did not compromise any data.</p>
                        <p class="text-left">We responded promptly by releasing an update with security fixes, and we strongly recommend updating your servers as soon as possible. Rest assured, your data remains safe.</p>
                        
                        <h3 class="color-main">Sjef's ESP32 firmware</h3>
                        <p class="text-left">Sjef’s ESP32 TEF668x firmware received a minor beta update to address some bugs. The firmware remains stable even in its beta versions. As always, you can download the latest version via our Discord server.</p>

                        <h3 class="color-main">FM-DX Webserver</h3>
                        <p class="text-left">The FM-DX Webserver underwent a significant security update alongside numerous bug fixes. Our primary focus is to make the webserver more modular and reduce the codebase size while maintaining existing features. While new features are not expected in the near future, these updates aim to enhance stability.</p>
                        <p class="text-left">One notable <strong>Quality of Life (QoL)</strong> improvement is the introduction of a new banlist, ideal for public FM-DX Webserver owners. Stay tuned for further updates!</p>
                        <p class="text-left">Additionally, we’ve made some UI enhancements:</p>
                        <ul class="text-left">
                            <li>Status circles on FM-DX Webserver maps have been replaced with gradients, allowing more text to fit within the server list panel.</li>
                            <li>A new clustering feature ensures no server goes unnoticed on the map, especially when multiple servers are located nearby. This also improves performance—a great bonus!</li>
                        </ul>

                        <p class="text-left">Lastly, if you are hosting a public server, please review the updated <a href="https://fmdx.org/projects/webserver.php#rules" class="color-main" target="_blank">Terms of Service</a>.</p>

                        <h3 class="color-main">VHF DX Podcast</h3>
                        <p class="text-left">Our friends at the VHF DX Podcast have invited Noobish to appear as a guest in the next episode! While the podcast primarily caters to American DXers, it has also featured Sjef in a previous episode, where many interesting questions were raised.</p>
                        <p>We’re excited for the upcoming episode—don’t miss it!</p>
                        <ul class="text-left">
                            <li>Listen on <a href="https://open.spotify.com/show/0QWtETNePlWl3V0F7dU5Qw" class="color-main" target="_blank">Spotify</a></li>
                            <li>Listen on <a href="https://podcasts.apple.com/us/podcast/the-vhf-dx-podcast/id1582022639" class="color-main" target="_blank">Apple Podcasts</a></li>
                        </ul>

                        <h3 class="color-main">What’s next?</h3>
                        <p class="text-left">As mentioned earlier, we’re gearing up for an exciting recap of 2024 in the next newsletter. We hope you’ll enjoy revisiting the highlights of this fantastic year!</p>
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