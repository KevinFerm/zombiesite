<?php 
$index = 1;
foreach ($tabel as $key) { ?>
<div class="step<?php echo $index%4 ?> ribbon l-box-lrg pure-g-r">
    <div class="l-box-lrg is-center pure-u-1-5 ">
        <a href="" class="stylish"><?php echo $index; ?></a>
    </div>
    <div class="pure-u-3-5">
        <h1><?php echo $key['title']; ?></h1>
        <p>
            <?php echo $key['text']; ?>
        </p>
        <div class="toggle" id="toggle_<?php echo $index; ?>">
            <div class="swipe" id="swipe_<?php echo $index; ?>" style="border-style:solid; border-width:5px;">
            </div>
        </div>
        <button class="button" id="button_<?php echo $index; ?>">View More</button>
    </div>
</div>

<?php 
$index++;
} ?>