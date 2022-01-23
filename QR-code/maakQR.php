<?php
require "vendor/autoload.php";

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

$renderer = new ImageRenderer(
    new RendererStyle(400),
    new SvgImageBackEnd()
);
$writer = new Writer($renderer);
$url = "https://30639.hosts1.ma-cloud.nl/spacetuin-qr/bericht/";
$start = 10000;
for ($i = 1; $i <= 100; $i++) {
    $nummer = $start + $i;
    $writer->writeFile($url . $nummer, 'qrcodes/qrcode-' . $nummer . '.svg');
}
