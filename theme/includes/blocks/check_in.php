<?php
    $check_in = $block;
?>

<style>
    <?php if ($check_in['right_overlay']) { ?>
        .check-in .top-right-overlay{
            background-image: url(<?php echo $check_in['right_overlay']['url']?>);
            position: absolute;
            top: 0;
            right: 0;
            max-width: 47%;
            width: 100%;
            min-height: 900px;
            z-index: 1;
            background-repeat: no-repeat;
            pointer-events: none;
            background-size:contain;
            background-position: top right;
            @media(max-width:1249px){
                top:-20px;
            }
            @media(max-width:575px){
                max-width:330px;
                min-height:330px;
            }
        }
    <?php }?>
    <?php if ($check_in['left_overlay']) { ?>
        .check-in .left-overlay{
            background-image: url(<?php echo $check_in['left_overlay']['url']?>);
            position: absolute;
            bottom: 0;
            left: -30px;
            max-width: 47%;
            width: 100%;
            min-height: 800px;
            z-index: 1;
            background-repeat: no-repeat;
            pointer-events: none;
            background-size:contain;
            background-position: bottom left;
            @media(max-width:1249px){
                left:-20px;
            }
            @media(max-width:575px){
                max-width:330px;
                min-height:330px;
            }
        }
        <?php }?>
</style>

<section class="check-in">
    <div class="inner">
        <img class="logo" src="<?php echo $check_in['logo']['url']?>" alt="<?php echo $check_in['logo']['alt']?>">
        <p class="text">
            <?php echo $check_in['text']?>
        </p>
        <div class="button-wrap">
            <a class="global-button" href="<?php echo $check_in['button']['url']?>"><?php echo $check_in['button']['title']?></a>
        </div>
    </div>
    <?php if ($check_in['right_overlay']) { ?>
        <div class="top-right-overlay">
        </div>
    <?php }?>
    <?php if ($check_in['left_overlay']) { ?>
        <div class="left-overlay"></div>
    <?php }?>
</section>