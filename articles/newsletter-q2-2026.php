<?php

// Define a class to hold article info and render HTML
class Article {
    public $title = 'Newsletter - Q2 2026';
    public $author = 'Noobish';
    public $date = '21st June 2026';
    public $emoji = '🔥';
    public $description = 'As we are approaching the middle of the year, it\'s time for a newsletter. Let\'s see what\'s new!';
    public $cover = 'https://i.ibb.co/q3qd28X6/banner.jpg';

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
                <h3 class="color-main">Sporadic-E season time!</h3>

                <p class="text-left">We have started with a new sporadic-E season, with many great catches and thousands of logs. It's incredible to see how many people share their catches on our Discord server.
                     The season started a bit too late for our liking, but you can't tell the atmosphere what should happen, right?<br>
                    As impressive as the long distances are, so far this season has been great for "short-skips", which are equally as impressive to have.
                     Notable mentions are reports of <strong>Austria being received in Hungary</strong>, or <strong>Serbia & Croatia in the Czech Republic</strong>. <br>
                     Good luck with the rest of the season, and let's make the most out of it!
                </p>
                
                <h3 class="color-main">Maker Faire</h3>

                <p class="text-left">
                    This time, we have visited <strong>Maker Faire Czech Republic</strong> in Vrchlabí, Czechia under the FMDX.org label. 
                    We had many people interested in the stuff we made, which is amazing! 
                    We have showcased FM-DX Webserver, Headless TEFs and much more!<br>
                    Feel free to check the album by clicking <a href="https://photos.noobish.eu/share/Q2SFncZjGAho7riWzDDy14Puv5RfyAZiZd_maCe0xNjx6xXPxvEy8sSsfUjg5XEH7ng" target="_blank" class="color-main">HERE</a>.
                </p>

                <img src="https://i.ibb.co/nMcBYQ55/image.png" width="80%">
                <p class="text-small">Our humble stand at Maker Faire - right at the entrance!</p>

                <p class="text-left">
                    We plan on visiting more of these events, if time allows it. An interesting thing is that we also got to talk to the European Space Agency about the possibility of launching a FM-DX Webserver node in space, however that will take quite some time to achieve. A nice dream though, isn't it?<br>
                    <span class="text-small">(Note: they said it is definitely possible and that it's a very interesting idea and they would be eager to help!)</span>
                </p>

                <h3 class="color-main">New admin panel</h3>
                <p class="text-left">We are working on a new administration panel for all the members, where you will be able to manage your webserver tokens, with more features coming later, as this will be your hub for all the FMDX.org related things!
                </p>

                <h3 class="color-main">Sponsored webservers & upgrades</h3>
                <p class="text-left">This time we have managed to upgrade two webservers in total - with the latter one being brand-new!</p>

                <h4 class="color-main">Webserver in Galanta, Slovakia</h4>
                <p class="text-left">The first server is widely known, as about a year ago, we placed a Headless TEF Lite there along with a 5 element yagi pointing south.
                     This time the yagi is pointing south-east, but most importantly, we have added a second set of <strong>vertical XmuX yagi antennas pointed towards Italy</strong> with many italian stations scattering every once in a while at 600km+ distances.</p>

                <img src="https://i.ibb.co/PVv56RD/image.png" width="80%">
                <p class="text-small">A view of the antenna, along with cherries, yum!</p>

                <p>Try the webserver out here: <a href="https://galanta.fmtuner.org" class="color-main" target="_blank">galanta.fmtuner.org</a></p>

                <br><br>
                <h4 class="color-main">Webserver in Brno, Czechia</h4>
                <p class="text-left">The second webserver is placed in the second biggest city in the Czech Republic - Brno.
                    It's located at relatively a highly elevated place within the city, featuring a <strong>2x5 element antenna (H+V) pointing south-east</strong>. The server is hosted by our founder Vivien.</p>

                <img src="https://i.ibb.co/3ytPf4DG/image.png" width="80%">
                <p class="text-small">A nightly view of the antenna - with pretty much the entire city being visible.</p>

                <p>Try the webserver out here: <a href="https://lesna.lumiwave.cc" class="color-main" target="_blank">lesna.lumiwave.cc</a></p>

                <h3 class="color-main">Milestone giveaway results</h3>   
                <p class="text-left">The last thing to discuss today is a giveaway we hosted a month ago. The giveaway was hosted on our Discord server with people showing off their favorite radio station. It's time to show you the winners!</p>
                <p class="text-left">
                    <strong>6 months of supporter:</strong> ipv7<br>
                    <strong>1 month of supporter:</strong> echosdr, mr_andrew01<br>
                    <strong>Discord profile banner:</strong> .asherr, fabix_0
                </p>

                <p class="text-left">Thank you everyone for joining, and if you won a prize, don't forget to message Noobish on Discord to claim it.</p>

                <br><br>
                <p class="text-left">We hope your DXes will be even more amazing than last year, let's look for the future together!</p>
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
