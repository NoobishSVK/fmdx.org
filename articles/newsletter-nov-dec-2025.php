<?php

// Define a class to hold article info and render HTML
class Article {
    public $title = 'Newsletter - November & December 2025';
    public $author = 'Noobish';
    public $date = '15th January 2026';
    public $emoji = '💝';
    public $description = 'It\'s time to wrap up 2025. Are you excited? We have achieved a lot together over the last year!';
    public $cover = 'https://i.imgur.com/o7h5qoZ.jpeg';

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
                
                <h3 class="color-main">Achievements</h3>
                        <p class="text-left">This year has been amazing! Here are some comparison numbers from last year versus now. Thank you for being a part of the community.</p>

                        <ul class="text-left">
                            <li>450 online webservers <span style="color: lime;">(+287 compared to 2024)</span></li>
                            <li>2700 Discord members <span style="color: lime;">(+1300 compared to 2024)</span></li>
                            <li>80 000+ unique visitors monthly</li>
                        </ul>

                        <h3 class="color-main">Finances</h3>
                        <p class="text-left">Thanks to all the supporters for supporting our projects, with your support we currently have <strong>1 596 €</strong> on our bank account,
                        which we use for paying for servers, domains, sponsored webservers and tasks related to hardware & software development. Thank you once again for supporting FMDX.org!</p>

                        <h3 class="color-main">Christmas giveaways</h3>
                        <p class="text-left">We have hosted multiple giveaways this time, some of the winners were chosen randomly, and some based on their post. Let's take a look on our yearly giveaway, where DXers show us their favorite DXing place.</p>

                        <img src="https://i.imgur.com/RsoXxSs.png" width="80%">
                        <p class="text-small">Gil Garcia DXing with his receiver in Brazil. Beautiful scenery & atmosphere!</p>

                        <h3 class="color-main">FM DX Webserver</h3>

                        <p class="text-left">Two interesting tools have been released by our community members.</p>

                        <p class="text-left">Our Discord member <strong>techkrzysiek</strong> released a tool called <strong class="color-main">FM-DX Tunnel</strong>. This tool allows you to host your own tunnel server. This means you the community can now create their own tunneling servers for free,
                            so no more IP forwarding is needed in case you know somebody who hosts a tunnel server. If you would like to host one yourself, check the GitHub link.
                        </p>
                        <p><a href="https://github.com/techkrzysiek/fm-dx-tunnel" target="_blank" class="color-main">Check FM-DX Tunnel on GitHub 👈</a></p>

                        <p class="text-left">Our Discord member <strong>Lucas Gallone</strong> created a tool called <strong class="color-main">RDSExpert</strong> allows you to see comprehensive RDS data that is usually visible using RDS Spy, but directly in a web browser. It is compatible with all existing webservers and you can try it online without having to download anything.
                        </p>
                        <p><a href="https://lucasgallone.github.io/RDSExpert/" target="_blank" class="color-main">Check RDS Expert on GitHub 👈</a></p>

                        
                        <h3 class="color-main">Discord Updates</h3>
                        <p class="text-left">We are currently having a discussion about adding a channel to present your FM-DX Webservers! This way you will be able to receive feedback easily on your own webserver, or contact the server owner, if you wish to do so.</p>

                        <h3 class="color-main">What's coming in the future?</h3>
                        <p class="text-left">Currently, with this new Newsletter, we are already working on a big website overhaul, which will come in the near future - these will be mainly "under the hood" improvements, but you will also see more content.<br>

                        <p class="text-left">Hope you enjoy all the updates!</p>
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
