<?php
    $textSection = $block;
?>

<style>
    <?php if ($textSection['bottom_right_image'] && !empty($textSection['background_image_exists'][0])
    && $textSection['background_image_exists'][0] === 'yes' ) { ?>
        .text-section .bottom-right-image{
            background-image: url(<?php echo $textSection['bottom_right_image']['url']?>);
            position: absolute;
            width: 600px;
            height: 660px;
            right: -2%;
            bottom: 0;
            background-size: cover;
            background-repeat: no-repeat;
            @media(max-width:991px){
                width: 500px;
                height: 500px;
                right: -10%;
            }
            @media(max-width:767px){
                width: 300px;
                height: 300px;
                right: -10%;
                background-size: contain;
            }
            @media(max-width:567px){
                /* width: 300px;
                height: 300px; */
                right: -15%;
            }
        }
    <?php }?>
</style>


<section class="text-section <?php echo $textSection['background_color']?>">
    <div class="inner">
        <?php if ($textSection['heading']) {?>
            <h2 class="heading title">
                <?php echo $textSection['heading']?>
            </h2>
        <?php }?>
        <?php if ($textSection['text']) { ?>
            <div class="text-wrap">
                <?php echo $textSection['text']?>
            </div>
        <?php }?>
    </div>
    <?php if ($textSection['bottom_right_image'] && !empty($textSection['background_image_exists'][0])
    && $textSection['background_image_exists'][0] === 'yes' ) { ?>
        <div class="bottom-right-image"></div>
    <?php }?>
</section>