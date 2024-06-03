<?php
$api_url = "https://list.fmdx.pl/api";
$response = file_get_contents($api_url);
$data = json_decode($response, true);
$dataset = $data['dataset'];
$array_length = count($dataset);
?>

<aside>
    <div class="panel panel-small link-external">
        <h2>Webservers online</h2>
        <div class="text-big text-center text-bold"><?php echo $array_length; ?></div>
        <a href="https://servers.fmdx.org" target="_blank"><div class="link-external-button"><i class="fa-solid fa-chevron-right p-5"></i></div></a>
    </div>

    <div class="panel panel-small">
        <h2>Useful links</h2>
        <p class="m-5">
            <a href="https://maps.fmdx.pl" target="_blank">FM-DX Transmitter Map <span class="color-gray text-small">maps.fmdx.pl</span></a>
        </p>
        <p class="m-5">
            <a href="https://www.dxinfocentre.com/tropo.html" target="_blank">Tropo Map [Hepburn] <span class="color-gray text-small">dxinfocentre.com</span></a>
        </p>
        <p class="m-5">        
            <a href="https://tropo.f5len.org/forecasts-for-europe/" target="_blank">Tropo Map [F5LEN] <span class="color-gray text-small">f5len.org</span></a>
        </p>
    </div>

    <div class="panel panel-small">
        <h2>Sporadic E Status</h2>
        <div id="mufData"></div>
        <p style="font-size: 14px" class="text-center"><a href="https://fmlist.org" target="_blank"><span class="color-main">[ </span>Data from FMLIST.org<span class="color-main"> ]</span></a></p>
    </div>

    <div class="panel panel-small text-center">
        <h2>Donation goal</h2>
        <p>FMDX.org thrives thanks to you!</p>
        <p class="text-bold m-0" style="font-size: 20px">last 30 days</p>
        <p class="m-0">~ coming soon ~</p>
        <br>
        <a href="/supportus.php"><button class="btn-small m-auto">DONATE</button></a>
        <p style="font-size: 14px"><a href="#"><span class="color-main">[ </span>How we use your donations<span class="color-main"> ]</span></a></p>
    </div>

    <div class="panel panel-small">
        <h2>FMDX Partners</h2>
        <p class="m-5">
            <a href="https://fmlist.org" target="_blank">🇩🇪 FMLIST <span class="color-gray text-small">fmlist.org</span></a>
        </p>
        <p class="m-5">
            <a href="https://radioorlicko.cz" target="_blank">🇨🇿 Radio Orlicko <span class="color-gray text-small">radioorlicko.cz</span></a>
        </p>
        <p class="m-5">
            <a href="https://fmdx.pl" target="_blank">🇵🇱 FMDX.pl <span class="color-gray text-small">fmdx.pl</span></a>
        </p>
    </div>
    
    <script src="/js/tools/get_muf.js"></script>
</aside>