<?php
// Old direct links (/articles/x.php) redirect to the article page
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { header('Location: /article.php?article=' . basename(__FILE__, '.php'), true, 301); exit; }

$article = new class {
    public $title = 'Our goals & timeline for 2025';
    public $author = 'Noobish';
    public $date = '26th April 2025';
    public $emoji = '⌚';
    public $description = 'We know you love news, and you also love keeping in touch with our projects. Here are our goals for the rest of the year 2025 and the future in general.';
    public $cover = 'https://i.imgur.com/WJjxpVf.jpeg';

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
                        <p class="text-left">We know you love news, and you also love keeping in touch with our projects. Here are our goals for the rest of the year 2025 and the future in general.</p>

                        <p class="text-left">We will provide a general picture of our goals - if you prefer the regular text form, scroll down for more.</p>
                        <img src="https://i.imgur.com/2t1Z3Z9.jpeg" alt="Timeline for 2025" style="width: 100%;">

                        <h3 class="color-main">Q2 2025</h3>
                        <h4>Webserver Phone UI 2.0</h4>
                        <p class="text-left">We are working on an UI refresh for mobile devices, this will significantly improve the user experience for people who use their phones - without losing features!</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> Beginning of May 2025</p>

                        <h4>New TEF Receiver</h4>
                        <p class="text-left">We have been secretly working on a new TEF receiver for the masses. Fully open-source, and we will make sure to have some available for sale right away!</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> May / June 2025</p>

                        <h4>Webserver bugfix pack</h4>
                        <p class="text-left">Fixing all the existing bugs is currently our highest priority before adding new features. If you find any issues, please report them on GitHub. </p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> May & June 2025</p>

                        <h4>TEF Guide Improvement</h4>
                        <p class="text-left">The TEF Guide has been incredibly helpful so far, we are planning a big refresh including new receivers, antennas and other accessories!</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> June 2025</p>

                        <h3 class="color-main">Q3 2025</h3>
                        <h4>FMDX.org web upgrade</h4>
                        <p class="text-left">We want to make sure our FMDX.org website  provides useful tools for you, with this, we plan on making a huge back-end rework, which will also include new features for you!</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> July / August 2025</p>

                        <h4>Global webserver settings</h4>
                        <p class="text-left">We know you love visiting webservers! Therefore we want to implement a system of global settings, where your settings will persist on every server you decide to visit.</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> May / June 2025</p>

                        <h3 class="color-main">Q4 2025</h3>
                        <h4>DAB DX Webserver</h4>
                        <p class="text-left">FM-DX Webserver got way more popular than we expected. It’s time to support DAB+ on our receivers and existing SDR devices!</p>
                        <p class="text-left"><span class="color-main"><strong>ETA:</strong></span> December 2025</p>

                        <h3>But that's not it!</h3>
                        <p>As you know, new stuff always emerges, as we lead the DX hobby together.
                        You can also expect giveaways and more community-related things to happen in the meantime! </p>


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
