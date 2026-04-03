<?php

// Define a class to hold article info and render HTML
class ArticleQ12026 {
    public $title = 'Newsletter - Q1 2026';
    public $author = 'Noobish';
    public $date = '3rd April 2026';
    public $emoji = '🗼';
    public $description = 'It\'s the first time this year for a newsletter! So much stuff has happened in 2026 so far, let\'s get through it together. ';
    public $cover = 'https://i.ibb.co/p7gF7YB/image-psd.png';

    public function render() {
        ?>
        <article class="panel panel-big text-center">
            <div class="panel-title flex-container" style="background-image: url('<?= htmlspecialchars($this->cover) ?>');">
                <div style="width: 100%;">
                    <h2><?= htmlspecialchars($this->title) ?></h2>
                    <p class="text-small-12 m-0">by <?= htmlspecialchars($this->author) ?><br>
                    <?= htmlspecialchars($this->date) ?></p>
                </div>
                <div style="width: 100px;font-size:60px;" class="hide-phone">
                <?= $this->emoji ?>
                </div>
            </div>

            <div class="article-content">
                <p class="text-left"><?= htmlspecialchars($this->description) ?></p>

                <p class="text-left">We'd like to apologize for this newsletter covering a bigger timeframe than usual (3 months instead of the usual 2) due to time constraints,
                     but we are hoping for newsletters more often again from now on.
                </p>

                <p class="text-left">This time we will start with a little unfortunate news - there have been a few outages related to our services.
                     We have been actively working on these. This also means we are working for <strong>a new, separate tunnel server</strong> for Europe & neighboring countries.
                     This should bring way more stability to the services we provide. <br>
                    This new tunnel server will have a 10 Gbps connectivity, and plenty of hardware resources, so it will be more than powerful enough for the foreseeable future.
                     But for the more technical people, we are starting with <strong>6GB of RAM, 4 cores of AMD EPYC CPU, and 100GB NVMe SSD</strong>, and most importantly, the server is hosted in <strong>Frankfurt (Germany)</strong> - this should provide good latency to everyone in Europe.
                     The server should be ready sometime during April.
                </p>
                
                <p class="text-left">
                    On top of that, we have also pre-paid our existing servers for the next 3 years, 
                    and our domain for the next 9 years - thanks to our supporters for making this possible!
                </p>

                <h3 class="color-main">Achievements</h3>
                <p class="text-left">We are slowly approaching two big milestones, and that's <strong>500 webservers and 3000 members on Discord</strong>.
                     Both of these numbers are insane, and we would like to thenk you for being a part of the community!
                     We are currently discussing a giveaway after reaching this milestone. Stay tuned!
                </p>

                <h3 class="color-main">New tunnel servers</h3>
                <p class="text-left">
                    We made tunnel servers officially available in new regions!
                     Namely <strong>the US (for American server hosts)</strong> and in <strong>Singapore (for the Asia & Oceania region)</strong>.
                     If you are hosting a webserver in any of the mentioned locations and would like to have it transferred, let us know!
                     This change will provide way better stability and lower latency for all the clients all around the world.
                </p>

                <h3 class="color-main">Sponsored webservers & upgrades</h3>
                <p class="text-left">Thanks to our supporters, we also managed to upgrade multiple servers and bring up new servers in very interesting locations in Europe.</p>

                <h4 class="color-main">Webserver in Olešná, Czechia</h4>
                <p class="text-left">We have upgraded from an S-dipole to <strong>two 5-element antennas</strong> (various azimuth for now depending on my visits).
                     This location is fairly high up for Cezech standards at 570m ASL.</p>

                <p class="text-left">Try the webserver out here: <a href="https://olesna.fmtuner.org" class="color-main" target="_blank">olesna.fmtuner.org</a></p>

                <img src="https://i.ibb.co/DfJsZdD2/image.png" width="80%">
                <p class="text-small">A spectacular view from the roof. The antenna is very compact, but shows great DXes!</p>

                <h4 class="color-main">Webserver on Klínovec, Czech/German border</h4>
                <p class="text-left">This new webserver is located on the <strong>top of the Klínovec hill on the Czech/German border</strong>, which makes it the highest located webserver in Europe at <strong>1250m ASL</strong>!<br> 
                The antenna is an S-dipole and the server was provided in cooperation with the COLOR DAB+ Multiplex. They provided all the cables, antenna and PC, we have sponsored a Headless TEF Lite.</p>

                <p class="text-left">Try the webserver out here: <a href="https://tef-klinovec.colordab.cz" class="color-main" target="_blank">tef-klinovec.colordab.cz</a></p>

                <img src="https://i.ibb.co/CpsSxdt7/image.png" width="80%">
                <p class="text-small">A view of the antennas. The DAB+ MUX antennas are very close, but the TEF is handling it!</p>

                <h4 class="color-main">Webserver on Kozlov, Czechia</h4>
                <p class="text-left">Similar situation as with Klínovec, except the location is near the transmitter "Votice/Mezivrata" at 790m ASL. 
                    The server is in preparation right now and should be online in the following days.</p>

                <img src="https://i.ibb.co/tT8k9vxh/image.png" width="80%">
                <p class="text-small">An amazing view from the tower. The band is quite full, however it is very interesting!</p>

                <h3 class="color-main">Project updates</h3>   

                <h4 class="color-main">PE5PVB's TEF668x firmware</h4>
                <p class="text-left">The newest firmware provides multiple bugfixes and most importantly provides an <strong>AGC signal compensation</strong>, which was only available on Headless TEFs for now.<br>
                If you'd like to update, you can either download a pre-compiled version on Discord or compile from source via GitHub.</p>

                <h4 class="color-main">PE5PVB's TEF668x firmware</h4>
                <p class="text-left">Sjef released a beta v1.2.0 firmware for our DAB receivers with multiple new features and bugfixes.<br>
                The most notable features include a very important <strong>time/date detection fix</strong>, improved slideshow loading and many new text-data display items.<br>
                You can download this beta on our Discord, or compile from source via GitHub.</p>

                <h4 class="color-main">FM-DX Webserver</h4>

                <p class="text-left">We have moved to version 1.4.x in FM-DX Webserver, the main changes include <strong>a new plugin API</strong>, which makes it possible to make way better and more optimized plugins.<br>
                The new version also provides <strong>new receiver support (Si47xx)</strong>, and brings many security fixes. The update is being released in waves, so more stuff is coming. 
                On top of that, you can see logos added to certain servers on the server list. These logos are added per-request and are usually assigned to community managers or companies that host webservers.</p>

                <p class="text-left">Some of our members made very interesting plugins during this time period. Let's get right to them!</p>

                <h4>RDS AI Decoder</h4>
                <p class="text-left">Our member <strong>HighPoint</strong> made a machine-learning RDS plugin, which will predict the RDS PS, making the RDS decoding way quicker on weak signals.<br>
                Feel free to download it here: <a href="https://github.com/Highpoint2000/RDS-AI-Decoder" target="_blank" class="color-main">RDS AI Decoder on GitHub</a></p>

                <h4>AI Denoiser</h4>
                <p class="text-left">With the rise of AI-related plugins, <strong>HighPoint</strong> also made a real-time denoiser plugin, which will remove the background noise from your webserver.<br>
                Feel free to download it here: <a href="https://github.com/Highpoint2000/AI-Denoise" target="_blank" class="color-main">AI Denoiser on GitHub</a></p>

                <h4>Discord Chat Bridge</h4>
                <p class="text-left">Our american member <strong>Glenn</strong> made a plugin that connects your FM-DX Webserver chat to your own Discord server, so you can chat both ways! We love to see that even people outside of Europe are joining in on the plugin creation.<br>
                Feel free to download it here: <a href="https://github.com/simsnet/FM-DX-Webserver-Discord-Chat-Bridge" target="_blank" class="color-main">Discord Chat Bridge</a></p>

                <h3 class="color-main">What's coming in the future?</h3>
                <p class="text-left">Well, this is hard to say. Most likely nothing big for now, as we are slowly patching up everything we can to make our service more stable and reliable, since many people rely on the services we provide, and we'd like to continue providing them as best as we can.<br>
                These are the most important things for us now. After that, you can obviously expect a webserver update or two, and hopefully lots and lots of stuff related to the Sporadic-E season. But that's more related to DXing, isn't it? <br>

                <p class="text-left">We wish you the best of luck with the upcoming season and can't wait to share more exciting news with you!</p>
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
        <?php
    }
}

$article = new Article();
