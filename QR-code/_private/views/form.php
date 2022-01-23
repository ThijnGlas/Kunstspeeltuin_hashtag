<?php $this->layout('layouts::website');?>
</p>

    <div class="form">
        <?php if (isset($error)):?>
            <?php echo $error?>
            <?php endif ?>
        <form action="<?php echo url("bewaar")?>" method="POST">
            <input type="hidden" name="code" value="<?php echo $code?>">
            <label for="bericht" id="koptekst">uw bericht:</label><br>
            <textarea id="bericht" name="bericht" rows="10" cols="40"></textarea>
            <button class="button-27" role="button">submit</button>
        </form> 
    </div>