<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qrPrinten</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/QR-Z.css' ) ?>" media="all">
</head>
<body>
<section class="page">
	<?php
	$start  = 10000;
	for ( $i = 1; $i <= 100; $i ++ ) {
	    $nummer = $start + $i;
        $color_num = 3 - ($i % 3);
	    ?>
        <figure class="code bg-color-<?php echo $color_num ?>">
        </figure>
        <?php if ( $i % 12 === 0 ): ?>
            </section>
            <section class="page">
        <?php endif; ?>
	<?php } ?>
</section>
</body>
</html>
