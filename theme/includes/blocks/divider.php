<?php 
    $dividerSection = $block;
?>
<section class="divider-section">
    <?php if ($dividerSection['background_image']) { ?>
        <img src="<?php echo $dividerSection['background_image']['url']?>" alt="<?php echo $dividerSection['background_image']['alt']?>">
    <?php }?>
</section>