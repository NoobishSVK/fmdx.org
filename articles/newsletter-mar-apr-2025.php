<?php
// Old direct links (/articles/x.php) redirect to the article page
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { header('Location: /article.php?article=' . basename(__FILE__, '.php'), true, 301); exit; }

$article = new class {
    public $title = 'Newsletter - March & April 2025';
    public $author = 'Noobish';
    public $date = '27th April 2025';
    public $emoji = '🌱';
    public $description = 'It’s time to catch up on all the exciting news happening at FMDX.org! With the Sporadic-E season just around the corner, we have been busy preparing many cool updates for you.';
    public $cover = 'https://i.imgur.com/62L2ui4.jpeg';

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
                        <p class="text-left">It’s time to catch up on all the exciting news happening at FMDX.org! With the Sporadic-E season just around the corner, we have been busy preparing many cool updates for you.</p>

                        <h3 class="color-main">Achievements</h3>
                        <p class="text-left">Our community continues to grow at an unbelievable pace, and we are truly grateful for every one of you!<br>
                        We have now reached over <strong>250 online webservers</strong>, including servers in several new countries.<br>
                        This is an amazing achievement, and it wouldn’t be possible without your support. Thank you!.</p>

                        <h3 class="color-main">Free tokens!</h3>
                        <p class="text-left">Do you live in a country that doesn’t yet have an FM-DX webserver? Or are you traveling on vacation to a place without one?</p>
                        <p class="text-left">Good news — we are offering <strong>free server tokens</strong> for anyone setting up a new public server in a country that doesn’t have one yet!</p>
                        <p class="text-left">If you’ve been thinking about joining in, now is the perfect time to get started. Just reach out to us!</p>

                        <h3 class="color-main">ESP32 TEF v2.20 Release</h3>
                        <p class="text-left">We are excited to announce the <strong>v2.20 release</strong> of the ESP32 TEF software! This is a major update that brings many new features, including:</p>
                        <ul class="text-left">
                                <li>Official support for the DeepElec DP-666 receiver</li>
                                <li>A new Logbook feature</li>
                                <li>Full touchscreen support</li>
                                <li>A pack of bug fixes & optimization!</li>
                            </ul>
                        <p class="text-left">You can check out the full changelog and download the update here: <a href="https://github.com/PE5PVB/TEF6686_ESP32/releases/tag/v2.20" target="_blank" class="color-main">👉 v2.20 Release Notes</a></p>

                        <h3 class="color-main">Sjef's birthday giveaway</h3>
                        <p class="text-left">In February, Sjef celebrated his birthday with a special giveaway!<br>
                        He asked everyone to send him birthday cards, and the winner — chosen based on the card he liked the most — received a Headless TEF receiver.</p>
                        <p class="text-left">Congratulations to <strong>Gyurii91 on Discord</strong> for winning!<br>
                        Here’s the winning birthday card:</p>

                        <img src="https://i.imgur.com/AhRCUq4.jpeg" style="width: 100%" alt="Winning birthday card">

                        <h3 class="color-main">New tool: TEF Memory Manager</h3>
                        <p class="text-left">Looking for an easier way to manage your TEF receiver memories?<br>
                        Check out the brand-new TEF ESP32 Manager tool by <strong>dermister</strong>!<br>
                        It’s free and open source — perfect for organizing your ESP32 TEF configuration.</p>
                        <p class="text-left"><a href="https://github.com/antonioag95/tef_memory_manager" target="_blank" class="color-main">TEF Manager GitHub</a></p>

                        <h3 class="color-main">What's coming in the future?</h3>
                        <p class="text-left">We made a comprehensive timeline of major things we are planning to do during this year. <br>
                        <p class="text-left">Check it out <a href="https://fmdx.org/articles/timeline-2025.php" target="_blank" class="color-main">here</a>!</p>
                        <p class="text-left">Hope you enjoy all the updates! Let's get ready for an exciting Sporadic-E season ahead!</p>
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
