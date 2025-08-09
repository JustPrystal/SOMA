<?php
    $textSection = $block;
?>

<style>
    .text-section .bottom-right-image{
        background-image: url(<?php echo $textSection['bottom_right_image']['url']?>);
        position: absolute;
        width: 600px;
        height: 660px;
        right: -2%;
        bottom: 0;
        background-size: cover;
    }
</style>


<section class="text-section">
    <div class="inner">
        <?php if ($textSection['text']) { ?>
            <div class="text-wrap">
                <?php echo $textSection['text']?>
            </div>
        <?php }?>
    </div>
    <div class="bottom-right-image"></div>
</section>