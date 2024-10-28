<?php
$api_url = "https://servers.fmdx.org/api/";
$response = file_get_contents($api_url);
$data = json_decode($response, true);
$dataset = $data['dataset'];
$array_length = count($dataset);

include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/tools/bmac.php';
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
            <a href="https://maps.fmdx.org" target="_blank">FM-DX Transmitter Map <span class="color-gray text-small">maps.fmdx.org</span></a>
        </p>
        <p class="m-5">
            <a href="https://www.dxinfocentre.com/tropo.html" target="_blank">Tropo Map [Hepburn] <span class="color-gray text-small">dxinfocentre.com</span></a>
        </p>
        <p class="m-5">        
            <a href="https://tropo.f5len.org/forecasts-for-europe/" target="_blank">Tropo Map [F5LEN] <span class="color-gray text-small">f5len.org</span></a>
        </p>
    </div>

    <!--<div class="panel panel-small">
        <h2>Sporadic E Status</h2>
        <table>
            <tbody>
                <tr>
                    <td class="text-bold" style="padding-right: 10px;">EU</td>
                    <td id="muf-eu" style="padding-top: 4px;"></td>
                </tr>
                <tr>
                    <td class="text-bold" style="padding-right: 10px;">NA</td>
                    <td id="muf-na" style="padding-top: 4px;"></td>
                </tr>
            </tbody>
        </table>
        <p style="font-size: 14px" class="text-center"><a href="https://fmlist.org" target="_blank"><span class="color-main">[ </span>Data from FMLIST.org<span class="color-main"> ]</span></a></p>
    </div>-->

    <div class="panel panel-small text-center">
        <h2>Supporters</h2>
        <p>FMDX.org thrives thanks to you!</p>
        <p class="text-bold m-0" style="font-size: 20px"><?php echo date('F Y');?></p>
        <p class="m-0"><?php echo $total_amount?></p>
        <br>
        <a href="https://buymeacoffee.com/fmdx" target="_blank"><button class="btn-small m-auto">Support us</button></a>
        <p style="font-size: 14px"><a href="/supportus.php"><span class="color-main">[ </span>How we use your donations<span class="color-main"> ]</span></a></p>
    </div>
	
	    <div class="panel panel-small">
        <h2>FMDX Sponsors</h2>
        <p class="m-5 text-center">
            <a href="https://bbxnet.sk" target="_blank"><img src="/img/bbxnet.png" width="80%" alt="BBXNET.sk"></a>
        </p>
    </div>

    <div class="panel panel-small">
        <h2>FMDX Partners</h2>
        <p class="m-5">
            <a href="https://fmlist.org" target="_blank"><img src="http://fmlist.org/favicon.ico" width="14" height="14" alt="FMLIST Logo"> FMLIST <span class="color-gray text-small">fmlist.org</span></a>
        </p>
        <p class="m-5">
            <a href="https://radioorlicko.cz" target="_blank">🇨🇿 Radio Orlicko <span class="color-gray text-small">radioorlicko.cz</span></a>
        </p>
        <p class="m-5">
            <a href="https://dx.cz" target="_blank">🇨🇿 Czechoslovak DX Club <span class="color-gray text-small">dx.cz</span></a>
        </p>
        <p class="m-5">
            <a href="https://wtfda.org" target="_blank">🇺🇸 WTFDA (DX Association) <span class="color-gray text-small">wtfda.org</span></a>
        </p>
        <p class="m-5">
            <a href="https://discord.gg/SFnY2EgM3v" target="_blank"><img src="https://i.imgur.com/xWbHxVg.png" width="14" height="14" alt="RF Rendezvous Logo"> RF Rendezvous <span class="color-gray text-small">Discord</span></a>
        </p>
    </div>
    
    <script src="/js/tools/get_muf.js"></script>
</aside>