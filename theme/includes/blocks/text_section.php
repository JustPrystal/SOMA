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