<?php
// Old direct links (/articles/x.php) redirect to the article page
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { header('Location: /article.php?article=' . basename(__FILE__, '.php'), true, 301); exit; }

$article = new class {
    public $title = 'Our new TEF release!';
    public $author = 'Noobish & PE5PVB';
    public $date = '21st May 2025';
    public $emoji = '💡';
    public $description = 'We know you have been guessing what the new TEF might be. We think it\'s been brewed to perfection and now it\'s time for the TEF to see the sunlight for the first time.';
    public $cover = 'https://i.imgur.com/FwaPEuq.jpeg';

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
                        <p class="text-left">We know you have been guessing what the new TEF might be. We think it's been brewed to perfection and now it's time for the TEF to see the sunlight for the first time.</p>

                        <h3 class="color-main">Headless TEF Lite</h3>
                        <p class="text-left">Headless TEF lite is a stripped-down version of the original Headless TEF tuner. It includes only the core components needed for reliable performance.<br>
                        There’s a single combined AM/FM antenna input, and no support for expansion modules (hats).<br>
                        The input filtering is a bit simpler than in the full version, but still more than good enough for most use cases.</p>

                        <img src="https://i.imgur.com/QL3hw4Z.png" style="max-width: 90%; margin: auto;" alt="Headless TEF Lite">

                        <p class="text-left">Because it's cheaper to produce, the Headless TEF lite lets us offer an affordable option for people who want to get started with setting up their own radio servers.<br>
                        It’s a practical choice for anyone who doesn’t need all the extras and just wants something that works.</p>
                        <p class="text-left">One notable thing is that this is the smallest TEF ever released, at only <strong>55 x 25 mm</strong> (2.16 x 0.99 in) - this is even smaller than RTL-SDR for example!</p>

                        <h3 class="color-main">Specifications</h3>
                        <table style="margin: auto;" class="text-left">
                            <thead>
                                <tr class="color-main">
                                    <th style="font-size: 20px;"></th>
                                    <th style="font-size: 20px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">SoC</td>
                                    <td>STM32 with NXP TEF6687</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Board size</td>
                                    <td>55x25 mm (2.16 x 0.99 inches)</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Audio</td>
                                    <td>I2S</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Dynamic range</td>
                                    <td>~100dB</td>
                                </tr>
                                <tr>
                                    <td class="text-bold" style="padding: 3px 10px;">Firmware</td>
                                    <td>FM-DX Tuner by Konrad</td>
                                </tr> 
                            </tbody>
                        </table>

                        <h3 class="color-main">Where to get one?</h3>
                        <p class="text-left">The first few units will be available on our Discord's marketplace for you to buy. The expected sale price is around 50€ + shipping from EU, however this may vary by seller.<br>
                        These devices are also much easier to build.</p>
                        <p class="text-left">There are currently no 3D enclosures. If you design one, we might reward you! However, we will make a separate announcement for this.</p>
                        
                        <h3 class="color-main">How can I build one?</h3>
                        <p class="text-left">You can find the entire repository on our <a href="https://github.com/FMDX-org/headless-tef-lite" target="_blank" class="color-main">GitHub page by clicking here</a>.</p>

                        <h3 class="color-main">Need a demo?</h3>
                        <p class="text-left">We have a FM-DX Webserver instance running a Headless TEF Lite already. <a href="http://tef2.noobish.eu:42070" target="_blank" class="color-main">Try it out here</a>!</p>

                        <br>
                        <img src="/img/logo.png" alt="OpenRadio Logo">
                        <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders!</p>
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
