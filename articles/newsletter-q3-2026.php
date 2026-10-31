<?php
// Old direct links (/articles/x.php) redirect to the article page
if (realpath($_SERVER['SCRIPT_FILENAME']) === __FILE__) { header('Location: /article.php?article=' . basename(__FILE__, '.php'), true, 301); exit; }

// Define a class to hold article info and render HTML
$article = new class {
    public $title = 'Newsletter - Q3 2026';
    public $author = 'Noobish';
    public $date = '30 Oct 2026';
    public $emoji = '☘️';
    public $description = 'Time flies, but so do the updates, and we got quite a bit of stuff to unravel, especially in terms project updates.';
    public $cover = 'https://i.postimg.cc/9FWNzh3d/q3-2026.png';

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

            <div class="article-content article-prose">
                <p class="text-left"><?= htmlspecialchars($this->description) ?></p>
                <h3 class="color-main">Foreword</h3>

                <p class="text-left">It's been a very long time since we have released a newsletter. Since <strong>FMDX.org</strong> is our passion project, we are working on things when we have the time and motivation to do so.
                    Summer's been rather busy, and as many of our community members, we have also spent the time DXing, among many other things.
                    During autumn however, we have picked up the pace and prepared some new things for you, which we will talk about further below in this newsletter.
                </p>
                
                <h3 class="color-main">International Radio Meetup in Holice</h3>

                <p class="text-left">
                    Similar to last year, at the end of august, we have visited the international radio meetup in Holice, Czechia,
                    including having our own stand shared with the Czechoslovak DX club, who were more than kind enough to host our FMDX.org-related things.
                </p>
                <p class="text-left">
                    During this meetup we have also met up with our sponsors - <strong>REBIT.sk</strong>.
                    People found the stuff we do very interesting, and we're glad we could have presented our projects to other people, sparking interest in new TEF668x users and webserver maintainers.
                </p>

                <div class="flex-container article-gallery">
                    <div>
                        <a href="https://i.ibb.co/sd203F1N/image.png" target="_blank"><img src="https://i.ibb.co/sd203F1N/image.png" alt="S-dipole antenna"></a>
                        <p class="text-small">FM-DX Webserver in action.</p>
                    </div>
                    <div>
                        <a href="https://i.ibb.co/JFK70T1F/image.png" target="_blank"><img src="https://i.ibb.co/JFK70T1F/image.png" alt="View of Ostrava"></a>
                        <p class="text-small">More TEF668x receivers than you have seen in your entire life - on a singular table.</p>
                    </div>
                </div>

                <h3 class="color-main">Sponsored webservers & upgrades</h3>
                <p>We got a new sponsored webserver in Ostrava, Czechia!</p>

                <h4 class="color-main">Webserver in Ostrava, Czechia</h4>
                <p class="text-left">Thanks to the huge help of our young community members <strong>Jakub Janovice DX</strong> and <strong>Jakub Praks</strong>, we managed to put yet another receiver online.</p>
                <p class="text-left">This time it's in the third biggest city of Czechia. What makes this server interesting is the high placement above ground level - specifically 55m AGL, as the antenna sits on top of one of the highest buildings of the city. 
                 The band is very packed because of this, and a relatively close proximity to the main Ostrava transmitter, Hošťálkovice.</p>

                <div class="flex-container article-gallery">
                    <div>
                        <a href="https://i.ibb.co/k6m63qw0/image.png" target="_blank"><img src="https://i.ibb.co/k6m63qw0/image.png" alt="S-dipole antenna"></a>
                        <p class="text-small">A view of the antenna - a simple S-dipole, as anything bigger would most likely trigger the AGC too much.</p>
                    </div>
                    <div>
                        <a href="https://i.ibb.co/4gSH01Nk/image.png" target="_blank"><img src="https://i.ibb.co/4gSH01Nk/image.png" alt="View of Ostrava"></a>
                        <p class="text-small">A view of the surroundings. You can see pretty much the entire city.</p>
                    </div>
                    <div>
                        <a href="https://i.ibb.co/YTp3pGRz/image.png" target="_blank"><img src="https://i.ibb.co/YTp3pGRz/image.png" alt="Jakub Praks after mounting the antenna"></a>
                        <p class="text-small">One of the two people responsible for this server - <strong>Jakub Praks</strong>, just after mounting the antenna.</p>
                    </div>
                </div>

                <p>Try the webserver out here: <a href="https://panoramka.fmtuner.org" class="color-main" target="_blank">panoramka.fmtuner.org</a></p>

                <h3 class="color-main">Project updates</h3>   

                <h4 class="color-main">PE5PVB's TEF668x firmware</h4>
                <p class="text-left">The newest firmware provides many bugfixes and improvements, such as a low-battery warning, better touschscreen support and RDS decoding optimization.</p>
                <p class="text-left">If you'd like to update, you can either download a pre-compiled version on Discord or compile from source via GitHub - keep in mind that these updates are labeled as BETA and may still contain more things to be fixed.</p>

                <h4 class="color-main">FM-DX Webserver</h4>

                <p class="text-left">After a long time of no updates, we have moved to version 1.4.1, which at the time of writing had been adopted by around 30% of our public webserver maintainers.</p>
                <p class="text-left">Notable features include a much lighter data footprint of the server itself thanks to <strong>barteqcz</strong>'s port of librdsparser to native Javascript, dropping the need for an external OS-dependent library.</p>
                <p class="text-left">When it comes to other notable features, there have also been many bugfixes, performance improvements and new features, such as better chat management, internal server restart and many other quality of life things.</p>

                <h4 class="color-main">FM-DX Server list (servers.fmdx.org)</h4>

                <p class="text-left">We have redesigned the entire side-panel, which shows the server info. Some people tidy up their stuff during spring, we did it during autumn, but it still looks way nicer, right?</p>
                <p class="text-left">With the design change, we have also optimized the code heavily, therefore the maps should be way less laggy on lower-end hardware.</p>

                <h4 class="color-main">FM-DX Maps (maps.fmdx.org)</h4>

                <p class="text-left">Over the last few months, we have noticed that there is an user-base that prefers the old version of maps, which was tucked away in a sub-url due to performance issues with the current maps.</p>
                <p class="text-left">We are happy to announce that these issues have been resolved, and the maps should now have even better performance than the old version. People can notice this especially while loading data for countries such as the USA or Italy.</p>

                <h4 class="color-main">Plugins</h4>
                <p class="text-left">Got an interesting project? This is your call to action! Let us know on Discord and your project can be here for the next newsletter. Thank you everyone for your contribution.</p>

                <h3 class="color-main">What's coming in the future?</h3>
                <p class="text-left">Oh boy, do we have stuff prepared... That's how I'd sum it up. If you have read our previous newsletter, there are some things that were mentioned, but never released, these will definitely come soon, along with a Christmas giveaway.</p>

                <p>See you before the end of the year, and we wish you a pleasant tropo season!</p>
                <br>
                <img src="/img/logo.png" width="100" alt="OpenRadio Logo">
                <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders! And as per usual, see you next month.</p>
                <br>
                <hr>
                <?php $author = 'Marek Farkaš (Noobish)'; $donate = 'noobish'; include($_SERVER["DOCUMENT_ROOT"]."/includes/author.php"); ?>
            </div>
        </article>
        <?php
    }
};
