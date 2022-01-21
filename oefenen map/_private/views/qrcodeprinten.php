<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qrPrinten</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/QR.css' ) ?>" media="all">
</head>
<body>
    <div class="sticker">
        <?php 
        $start = 10000;
        for ($i = 1; $i <= 100; $i++) {
            $nummer = $start + $i;
            ?>
            <div class="code">
                <img src="<?php echo ('/qrcodes/qrcode-' . $nummer . '.svg');?>" />
            </div>
            <?php
        }
        ?>
    </div>
</body>
</html>
