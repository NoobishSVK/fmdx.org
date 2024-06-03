<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'Newsletter - May 2024';
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
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/4oSw9lT.jpeg');">
                            <div style="width: 100%;">
                                <h2>Newsletter - May 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                19th May 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            😎
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Hello! It's May, what a beautiful time of the year - in spite of the lack of Sporadic E openings.<br>
                        During this month, many amazing things have happened, which will help the FMDX community progress forward. Let's get through them!</p>

                        <h3 class="color-main">FMLIST Discussion</h3>
                        <p class="text-left">
                        Over the last few days, some of you might have noticed, that many members directly related to <span class="color-main">FMLIST</span> have joined our Discord community server, we welcome them here! 
                        With them joining, this was historically the first time where we, as a community, could have direct discussion with the project maintainers - thanks to this, they received tons of feedback, which I hope will make them improve their project and that the concerns of DXers will be addressed.</p> 
                        
                        <p class="text-left">I would like to thank everyone for keeping the discussion civil & polite. 
                        After this conversation, two new channels have been created - <span class="color-gray">#fmlist</span> and <span class="color-gray">#fmscan</span>.<br>In these channels, FMLIST members will actively listen to your feedback & suggestions - I believe this will help everyone in the community. </p>

                        <h3 class="color-main">Website news</h3>
                        <p class="text-left">We have ordered a domain and we are working on the entire server / hosting structure at this time. At the time of writing the original newsletter, this website wasn't available, but here we are. You're reading this, that's amazing!</p>

                        <h3 class="color-main">Project news</h3>
                        <h4 class="text-left">OpenRadio collaborative projects</h4>
                        <p class="text-left">• Active development on our Headless TEF Receiver (a TEF receiver with a built-in sound card & antenna switch) is progressing further. We have ordered hardware for testing and it looks amazing! We will keep you updated with more info in the near future.</p>
                        <h4 class="text-left">Sjef's projects</h4>
                        <p class="text-left">• ESP32 v1 firmware is very close to stable v2.10 release, which brings many new features, better compatibility with FM-DX Webserver and bugfixes. Release candidate versions are being released almost daily, feel free to download them by joining our Discord community server.</p>
                        <p class="text-left">Other projects also got minor changes, I recommend checking #updates channel of every category to see more.</p>
                        <br>
                        <img src="/img/logo.png" alt="OpenRadio Logo">
                        <p>If you have any feedback (positive or negative), please let us know through our Discord server or via e-mail to founders! We will see you next month with more amazing news.</p>
                        <br>
                        <hr>
                        <p>This article was made by <a href="/founders.php" class="text-bold color-main">Marek Farkaš (Noobish)</a>.<br>If you'd like to support the creator directly, please use the button below.</p>
                        <p>Your donations are appreciated! ❤️</p>
                        <a href="https://buymeacoffee.com/noobish" target="_blank"><img src="https://camo.githubusercontent.com/52867c19b7dfad6776f2d60ae248692873ae6bdcb9a3df2bfca2f1f2ffdfd15d/68747470733a2f2f63646e2e6275796d6561636f666665652e636f6d2f627574746f6e732f76322f64656661756c742d626c75652e706e67" width="250" alt="Buy me a coffee!"></a>
                        </div>
                        </article>
                </main> 
                <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/sidepanels.php');?>
            </div>
        </div>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php');?>
    </body>
</html>