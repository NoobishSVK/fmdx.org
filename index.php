<!DOCTYPE html>
<html lang="en">
    <?php include 'includes/header.php';?>
    <body>
        <?php include 'includes/navigation.php';?>
        <div id="wrapper">
            <div class="flex-container flex-center">
                <div class="tx-icon"></div>
                <h1>Welcome to <span class="color-main text-bold">FMDX.org</span>!</h1>
            </div>
            <div class="flex-container">
                <main>
                    <div class="panel panel-big text-center mission-banner">
                        <p>Welcome to <span class="color-main text-bold">FMDX.org</span>, the hub for our worldwide community of DXers dedicated to open-source projects.</p>

                        <p>Our community firmly believes in the <span class="text-bold">freedom of DXing</span>, ensuring that it remains accessible to all enthusiasts.
                        We're committed to work on an inclusive environment where everyone can
                        participate and contribute to the advancement of DXing technologies.</p>

                        <p class="text-medium">Come join us as we work to make DXing easy, collaborative, and open for all!</p>

                        <a href="/ourmission.php"><div class="btn-small" style="width: 250px;margin: auto;">Our Mission</div></a>
                    </div>

                    <h2 style="margin-bottom: 0;">News</h2>
                    <article class="panel panel-big">
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/gAEwbXH.jpeg');">
                            <div style="width: 100%;">
                                <h2>New website launched!</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                27th May 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            🥳
                            </div>
                        </div>
                        <div style="padding: 20px 40px;">
                            <p>Today is a great day! We have launched our new website. It might still undergo a lot of changes, however you won’t lose
                            any access to the content that is already available. We’re keeping everything open!</p>

                            <p>You can currently find comprehensive information about our projects and team members, we recommend you to explore
                            everything!</p>
                        </div>
                        <a href="/articles/new-website.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
                    </article>

                    <article class="panel panel-big">
                        <div class="panel-title flex-container" style="background-image: url('https://i.imgur.com/rglsL3c.jpeg');">
                            <div style="width: 100%;">
                                <h2>Newsletter - May 2024</h2>
                                <p class="text-small-12 m-0">by Noobish<br>
                                19th May 2024</p>
                            </div>
                            <div style="width: 100px;font-size:60px;" class="hide-phone">
                            😎
                            </div>
                        </div>
                        <div style="padding: 20px 40px;">
                            <p>Hello! It's May, what a beautiful time of the year - in spite of the lack of Sporadic E openings.</p>

                            <p>In this newsletter we will discuss some changes related to our community and the website itself, as big things are coming.</p>
                        </div>
                        <a href="/articles/newsletter-may-2024.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
                    </article>
                    <button class="btn-rounded m-auto disabled" style="background-color: #333;">Read more news</button>
                </main> 
                <?php include 'includes/sidepanels.php';?>
            </div>
            <?php include 'includes/chips.php';?>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>