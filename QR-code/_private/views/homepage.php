<?php $this->layout('layouts::website');?>

<?php foreach($qrcodes as $code):?>
        <h1><?php echo $code['code']?></h1>
        <p>
                <?php echo $code['bericht'];?>
        </p>
<?php endforeach;?> 



