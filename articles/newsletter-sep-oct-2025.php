<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - September & October 2025';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/8qw3PN5.png');">
                            <div style="width: 100%;">
                                <h2><?php echo $pageTitle ?></h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                15th November 2025</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🎃
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Autumn's here again, and with it we got some news that we'd love to share with you!</p>

                        <h3 class="color-main">Headless TEF Lite SE</h3>
                        <p class="text-left">We are very pleased to announce that we have released a new version of the Headless TEF Lite. Compared to the first edition, the SE (Second Edition) has a separate AM jack, but the performance is still as great as the first edition.
                            This makes the Headless TEF Lite SE an affordable, yet amazing for both FM and AM DXers alike.</p>
                        <p><a href="https://github.com/FMDX-org/headless-tef-lite-se" target="_blank" class="color-main">Check the Headless TEF Lite SE on GitHub 👈</a></p>

                        <img src="https://github.com/FMDX-org/Headless-TEF-lite-SE/raw/main/picture.png" width="80%">
                        <p class="text-small">Headless TEF Lite SE</p>

                        <h3 class="color-main">New sponsored server in Olešná</h3>
                        <p class="text-left">During October, with the generous financial help of our supporters, we were able to create a webserver near the geographical centre of Czechia, in the village of Olešná, located 570m above sea level. The setup is using a Headless TEF Lite with an S-dipole, the band is very packed, yet the conditions change quite often.
                            We definitely recommend you to take a look, as the server is available publicly on our maps.</p>
                        <p><a href="https://olesna.fmtuner.org" target="_blank" class="color-main">Try the new webserver out 👈</a></p>

                        <img src="https://i.imgur.com/8ILC2P7.jpeg" width="80%">
                        <p class="text-small">FM-DX Webserver in Olešná, Czechia (featuring an S-dipole)</p>

                        <h3 class="color-main">Tunnel servers</h3>
                        <p class="text-left">Since many users use our tunneling service for hosting their webservers, as many of you need the enhanced security and/or don't have a public IP address (or you have a portable server), we have decided to regionalize our service. This means that many people outside Europe will have their pings lowered by substantial amount.
                        In addition to the current node in Slovakia, there will be a new tunnel server located in Singapore for our users from Asia & Oceania, and a server hosted in </p>

                        <p class="text-left">Along with this upgrade, we are also preparing a docker container that will be available for everyone for free, so people who have their own servers / public IPs can create a tunnel server on their own, and provide tokens to their friends, if they wish so. This feature will also be integrated in the webserver directly. We believe that this will bring more webservers to the map.</p>

                        <h3 class="color-main">FM-DX App</h3>
                        <p class="text-left">Our community OG bkram created an application called the "FM-DX App", which allows you to connect and control any webserver on your Android phone.
                            This also means that you will be able to listen to your favorite webserver even when your screen is off. </p>

                        <p><a href="https://github.com/bkram/fm-dx-app/releases" target="_blank" class="color-main">Get the FM-DX App for Android here 👈</a></p>

                        <h3 class="color-main">FM DX Connector</h3>
                        <p class="text-left">Our community OG Highpoint made a dedicated Android app that directly connects the FM-DX Webserver and the <a href="https://github.com/Highpoint2000/TEFLoggerApp" target="_blank" class="color-main">TEF Logger App</a>. With this middleware, you can now control web servers, record, correct, or upload logs to FMLIST, and analyze the log files directly on your smartphone or tablet. For the latter, TEF Logger version 5.4 now includes integrated ID/TX Changer and Map Viewer.
                        To control the autoscan mode of a web server with the TEF Logger/FMDX Connector, the scanner plugin version 3.9 or later must be installed.</p>

                        <p><a href="https://github.com/Highpoint2000/FMDXConnector" target="_blank" class="color-main">Get the FM-DX Connector app for Android here 👈</a></p>
                        
                        <h3 class="color-main">FMLIST Log Analyzer</h3>
                        <p class="text-left">Highpoint made an amazing tool that quickly and easily analyzes FMLIST log exports according to various criteria and presents them visually. 
                        The display of charts and tables can be differentiated by propagation type: Es, Tropo, MS, or Au. A mixed display is also possible.<br>
                        The tool provides current information on:</p>

                        <p class="text-left">
                        • best Es days (by distance and number of logs)<br>
                        • the number of logs and identified stations and locations<br>
                        • the maximum, minimum, and average distance<br>
                        • the number of countries and Es days<br>
                        • the top 10 of many different aspects<br>
                        • the number of logs per month<br>
                        • the distance of logs by time window<br>
                        • the number of logs by time of day<br>
                        • frequency vs. distance<br>
                        • power vs. distance<br>
                        • heatmap by day/month x hours<br>
                        • the daily and average MUF<br>
                        </p>

                        <p class="text-left">It also provides information on two QTF displays showing the direction of incoming logs, classified by number and country, respectively, and an animated map showing the history of openings and logs.</p>
                        <p><a href="https://tef.noobish.eu/logos/FMLIST_Log_Analyzer.html" target="_blank" class="color-main">Check out the log analyzer 👈</a></p>


                        <h3 class="color-main">What's coming in the future?</h3>
                        <p class="text-left">We are slightly behind with our originally planed tasks in the original timeline for 2025, however there were just too many exciting news to share with you!
                            We will be sure to also work on the tasks we promised earlier.</p>
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