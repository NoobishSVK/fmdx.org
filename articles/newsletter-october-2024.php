<?php
// Old direct links (/articles/x.php) redirect to the article page
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { header('Location: /article.php?article=' . basename(__FILE__, '.php'), true, 301); exit; }

$article = new class {
    public $title = 'Newsletter - October 2024';
    public $author = 'Noobish';
    public $date = '28th October 2024';
    public $emoji = '🍂';
    public $description = 'Time flies! It’s already October, and we have some exciting news to share. This month, we’ll be talking about new milestones, anniversaries, and our plans for the future.';
    public $cover = 'https://i.imgur.com/BtyI7eE.jpeg';

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
                        <p class="text-left">Time flies! It’s already October, and we have some exciting news to share. This month, we’ll be talking about new milestones, anniversaries, and our plans for the future.</p>

                        <h3 class="color-main">FM-DX Webserver milestone!</h3>
                        <p class="text-left">We’re happy to announce a new milestone: we now have <strong>150 webservers online</strong> at the same time! A big thank you to everyone who uses or hosts these servers for public access.
                        <br>We can’t wait to reach 200 soon!</p>

                        <h3 class="color-main">Headless TEF - first users & feedback</h3>
                        <p class="text-left">We have published the Headless TEF files recently - that means everyone can build one! We have noticed a spike in webserver usage and very good initial feedback from first users who have decided to build this receiver.<br>
                        Keep up the great job!</p>

                        <p>Schematics & other info is available on <a href="https://github.com/FMDX-org/tef668x-headless-usb-tuner" class="color-main" target="_blank"><strong>GitHub</strong></a>.</p>

                        <h3 class="color-main">PE5PVB's TEF firmware updates & anniversary</h3>
                        <p class="text-left">Sjef has released multiple updates that fix many bugs and most importantly add support for the new DeepElec DP-666 receiver, which has buttons that you can input frequency with. What's also very important is the added touch screen support. You can download the beta versions on our Discord server. <br>
                        On top of that, It's been 4 years since Sjef started working on this project - that's a big amount of time. <strong>Happy 4th anniversary!</strong>
                        </p>
                        
                        <h3 class="color-main">Discord marketplace</h3>
                        <p class="text-left">Since the Headless TEFs are out, we have decided to open up a marketplace on our Discord server, where our fellow DXers can sell or buy DXing hardware. This means you can find people who can build Headless TEFs for you, or you can buy used TEFs/XDRs, etc. </p>

                        <h3 class="color-main">FMDX.pl</h3>
                        <p class="text-left">Unfortunately, our partners at FMDX.pl have lost access to their domain a few weeks ago due to unforeseen circumstances. We have decided to take them under our care and now you can access their content using the site <a href="https://pl.fmdx.org" class="text-bold color-main" target="_blank">pl.fmdx.org</a> - this means their very useful content is still accessible for everyone.</p>

                        <h3 class="color-main">RF Rendezvous Discord partnership</h3>
                        <p class="text-left">We have a new partner! The great folks at RF Rendezvous (the second biggest HAM/DX Discord server) decided to open their gates for FMDX.org and established a mutual partnership.<br>
                        Give them a visit! <a href="https://discord.gg/SFnY2EgM3v" class="color-main" target="_blank"><strong>RF Rendezvous Discord server</strong></a></p>

                        <h3 class="color-main">What’s coming next?</h3>
                        <p class="text-left">With winter coming up, we will be able to produce more content for you, such as Discord improvements and mainly FM-DX Webserver improvements in form of performance & bugfixes.<br>
                        On top of that, we are planning a big map update for <a href="https://maps.fmdx.org" target="_blank" class="text-bold color-main">maps.fmdx.org</a> - stay tuned for that!</p>
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
};
