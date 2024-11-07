<nav>
    <ul class="hide-phone">
        <li style="margin-right: 32px;"><a href="/index.php" class="flex-container"><img src="/img/logo.png" alt="Logo" height="32px"></a></li>
        <li>About <i class="fa-solid fa-chevron-down m-left-10 text-small"></i>
            <ul>
                <li><a href="/ourmission.php">Our mission</a></li>
                <li><a href="/founders.php">Founders</a></li>
                <li><a href="/supportus.php">Support us!</a></li>
            </ul>
        </li>
        <li>Projects <i class="fa-solid fa-chevron-down m-left-10 text-small"></i>
            <ul>
                <li>Hardware <i class="fa-solid fa-chevron-right text-small" style="right: 15px; top:15px; position:absolute;"></i>
                    <ul>
                        <li><a href="/projects/esp32-dab.php">ESP32 DAB+ Tuner</a></li>
                        <li><a href="/projects/tef6686-esp32.php">ESP32 TEF FM Tuner</a></li>
                        <li><a href="/projects/headless-tef.php">Headless TEF Tuner</a></li>
                    </ul>
                </li>
                <li>Software <i class="fa-solid fa-chevron-right text-small" style="right: 15px; top:15px; position:absolute;"></i>
                    <ul>
                        <li><a href="/projects/webserver.php">FM-DX Webserver</a></li>
                        <li><a href="/projects/xdr-gtk.php">XDR-GTK</a></li>
                        <li><a href="/projects/xdrd.php">xdrd</a></li>
                    </ul>
                </li>
            </ul> 
        </li>
        <li class="disabled">Database</li>
        <li>Community <i class="fa-solid fa-chevron-down m-left-10 text-small"></i>
            <ul>
                <li><a href="https://discord.gg/ZAVNdS74mC" target="_blank" style="text-decoration: none;">Discord  <i class="fa-brands fa-discord m-left-10 text-small"></i></a></li>
            </ul>
        </li>
        <li>Guide <i class="fa-solid fa-chevron-down m-left-10 text-small"></i>
            <ul>
                <li><a href="/projects/guide/">Summary</a></li>
                <li><a href="/projects/guide/receivers.php">TEF Receivers</a></li>
                <li><a href="/projects/guide/accessories.php">Accessories</a></li>
                <li><a href="/projects/guide/spareparts.php">Spare parts</a></li>
            </ul> 
        </li>
        <li>Miscellaneous <i class="fa-solid fa-chevron-down m-left-10 text-small"></i>
            <ul>
                <li><a href="https://maps.fmdx.org" target="_blank">Transmitter Map</a></li>
                <li><a href="https://pl.fmdx.org" target="_blank">Blog</a></li>
            </ul> 
        </li>
        <li class="disabled">Login</li>
    </ul>

    <!--phone nav-->

    <div id="menuLogo" class="hide-desktop"></div>
    <div id="menuToggle" class="hide-desktop">
    <!-- A fake / hidden checkbox as a click receiver -->
    <input type="checkbox"/>
    <span></span>
    <span></span>
    <span></span>
    <ul id="menu">
        <li><a href="/index.php">Home</a></li>
        <li class="menu-item">
            <div class="onclick-menu">About  <i class="fa-solid fa-chevron-down m-left-10"></i></div>
            <ul class="onclick-menu-content">
                <li><a href="/ourmission.php">Our mission</a></li>
                <li><a href="/founders.php">Founders</a></li>
                <li><a href="/supportus.php">Support us!</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <div class="onclick-menu">Projects  <i class="fa-solid fa-chevron-down m-left-10"></i></div>
            <ul class="onclick-menu-content">
                <li><a href="/projects/esp32-dab.php">ESP32 DAB+ Tuner</a></li>
                <li><a href="/projects/tef6686-esp32.php">ESP32 TEF FM Tuner</a></li>
                <li><a href="/projects/headless-tef.php">Headless TEF Tuner</a></li>
                <li></li>
                <li><a href="/projects/webserver.php">FM-DX Webserver</a></li>
                <li><a href="/projects/xdr-gtk.php">XDR-GTK</a></li>
                <li><a href="/projects/xdrd.php">xdrd</a></li>
            </ul>
        </li>
        <!--<li class="disabled">Database</li>-->
        <li class="menu-item">
            <div class="onclick-menu">Guide  <i class="fa-solid fa-chevron-down m-left-10"></i></div>
            <ul class="onclick-menu-content">
                <li><a href="/projects/guide/">Summary</a></li>
                <li><a href="/projects/guide/receivers.php">TEF Receivers</a></li>
                <li><a href="/projects/guide/accessories.php">Accessories</a></li>
                <li><a href="/projects/guide/spareparts.php">Spare parts</a></li>
            </ul>
        </li>
        <li class="menu-item">
        <div class="onclick-menu">Miscellaneous  <i class="fa-solid fa-chevron-down m-left-10"></i></div>
            <ul class="onclick-menu-content">
                <li><a href="https://maps.fmdx.org" target="_blank">Transmitter Map</a></li>
                <li><a href="https://pl.fmdx.org" target="_blank">Blog</a></li>
            </ul>
        </li>
    </ul>
</div>

</nav>
<script src="/js/main.js"></script>