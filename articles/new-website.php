<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = 'New website launched!';
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
                <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/zaz9auA.jpeg');">
                            <div style="width: 100%;">
                                <h2>New website launched!</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                2nd June 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🥳
                            </div>
                        </div>

                        <div class="article-content">
                        <p class="text-left">Today is a great day! We have launched our new website. It might still undergo a lot of changes, however you won’t lose any access to the content that is already available. We’re keeping everything open!</p>
                        <p>You can currently find comprehensive information about our projects and team members, we recommend you to explore everything!</p>

                        <h3 class="color-main">BETA State</h3>
                        <p class="text-left">Ah, the titles. Yes, that's what the website is basically in. The reason we did create a website in the first place is because we want all of our members to have easy & transparent access to all the information they may need.<br>
                    In the current state, some information may be missing, therefore certain buttons on the website are greyed out. These features will come sooner or later, we promise.</p>
                        <h3 class="color-main">What can we find here right now?</h3>
                        <p class="text-left">We made sure for you to have easy access to our projects, so you can get some basic info and links to download new firmware updates. Other than that, we added neat info panels, that will take you to our webserver list & show you the current sporadic E status.</p>
                        
                        <h3 class="color-main">What's next?</h3>
                        <p class="text-left">In the following days & weeks, we will make sure to slowly populate & unlock all the grayed out content & fix design/content bugs that might have occured during development. Please, let us know via Discord if you find any issues!</p>
                        <br>
                        <p class="text-left">This is a big milestone for OpenRadio / FMDX.org, we're glad you're a part of it!</p>
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