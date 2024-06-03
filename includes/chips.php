<?php
// Array of panel HTML strings
$panels = [
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">FM-DX Webserver</h2>
        <p class="p-side-20 text-center">An amazing that will get your FM tuner online in an instant.</p>
        <a href="/projects/webserver.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
    </div>',
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">Headless TEF Receiver</h2>
        <p class="p-side-20 text-center">Embrace the revolution of standalone receivers with a modern & sleek module.</p>
        <div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div>
    </div>',
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">TEF ESP32 Receiver</h2>
        <p class="p-side-20 text-center">Feature-rich firmware for powerful NXP TEF ESP32-based receivers.</p>
        <a href="/projects/tef6686-esp32.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
    </div>',
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">XDR-GTK</h2>
        <p class="p-side-20 text-center">Compact tool that allows you to control your receiver from your computer.</p>
        <a href="/projects/xdr-gtk.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
    </div>',
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">xdrd</h2>
        <p class="p-side-20 text-center">A TCP server that makes it possible to tune remotely using XDR-GTK.</p>
        <a href="/projects/xdrd.php"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
    </div>',
    '<div class="panel panel-small link-external panel-small-extended">
        <h2 class="heading-slim">FM-DX Tuner</h2>
        <p class="p-side-20 text-center">Lightweight firmware for TEF/XDR receivers with advanced RDS.</p>
        <div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div>
    </div>'
];

shuffle($panels);
$selected_panels = array_slice($panels, 0, 3);
?>

<h2 class="text-center">Explore our projects!</h2>

<?php
echo '<div class="flex-container" style="justify-content: space-between;">';
foreach ($selected_panels as $panel) {
    echo $panel;
}
echo '</div>';
?>

<button class="btn-rounded m-auto disabled" style="background-color: #333;">Explore more!</button>

<h2 class="text-center">Join our community!</h2>

<a href="https://discord.gg/ZAVNdS74mC" target="_blank" style="text-decoration: none;">
    <div class="panel panel-big center m-auto flex-container flex-phone flex-phone-column flex-center hover-brighten p-20">
        <div style="width: 20%" class="text-center">
            <i class="fa-brands fa-discord text-big p-5 color-main" style="padding: 20px 15px; border-radius: 20px; border: 3px solid var(--color-main)"></i>
        </div>
        <div style="width: 60%">
            <h2 class="heading-slim m-0">It's free!</h2>
            <p class="m-0">You will also receive info about updates even faster!<br>
            On top of that, you’ll get to know the members! We’re an amazing bunch.</p>
        </div>
        <div style="width: 20%;" class="text-center hide-phone">
            <i class="fa-solid fa-chevron-right p-5 text-big color-gray"></i>
        </div>
    </div>
</a>
