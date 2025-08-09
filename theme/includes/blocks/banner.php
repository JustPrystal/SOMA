<?php
    $banner = $block;
?>

<style>
    <?php if ($banner['circle_image']) {?>
        .banner .inner .right .text-wrap{
            background-image: url(<?php echo $banner['circle_image']['url']?>);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            z-index: 1;
            pointer-events: none;
        }
        <?php }?>
        <?php if ($banner['top_right_overlay']) { ?>
            .banner .top-right-overlay{
                background-image: url(<?php echo $banner['top_right_overlay']['url']?>);
                position: absolute;
                top: 0;
                right: 0;
                max-width: 900px;
                width: 100%;
                min-height: 900px;
                z-index: 1;
                background-repeat: no-repeat;
                pointer-events: none;
            }
            <?php }?>
            <?php if ($banner['bottom_left_overlay']['overlay']) { ?>
                .banner .bottom-left-overlay .overlay{
                    background-image: url(<?php echo $banner['bottom_left_overlay']['overlay']['url']?>);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    /* max-width: 730px; */
                    width: 730px;
                    /* min-height: 32vw; */
                    min-height: 600px;
                    z-index: 1;
                    pointer-events: none;
                    background-repeat: no-repeat;
                    background-position: bottom left;
                    background-size: contain;
                    @media(max-width:1600px){
                        min-height: 515px;
                        width: 620px;
                    }
                }
                <?php }?>
                <?php if ($banner['bottom_left_overlay']['line_image']) { ?>
                    .banner .bottom-left-overlay .line-image{
                        background-image: url(<?php echo $banner['bottom_left_overlay']['line_image']['url']?>);
                        min-height: 49vw;
                        width: 100%;
                        position: absolute;
                        bottom: -24.5vw;
                        left: 0;    
                        z-index: 1;
                        pointer-events: none;
                        background-repeat: no-repeat;
                        @media(max-width:1500px){
                            bottom: -14vw;
                        }
        }
    <?php }?>
</style>

<section class="banner">
    <div class="inner">
        <div class="left">
            <div class="logo-wrap">
                <img src="<?php echo $banner['logo']['url']?>" alt="">
            </div>
        </div>
        <div class="right">
            <div class="image-wrap">
                <?php if ($banner['banner_text']) { ?>
                    <div class="text-wrap">
                        <?php echo $banner['banner_text']?>
                    </div>
                <?php }?>
                <?php if ($banner['banner_image']) { ?>
                    <img src="<?php echo $banner['banner_image']['url']?>" alt="banner image">
                <?php }?>
            </div>
        </div>
    </div>
    <?php if ($banner['top_right_overlay']) { ?>
        <div class="top-right-overlay">
        </div>
        <div class="bottom-left-overlay">
            <div class="overlay"></div>
            <div class="line-image"></div>
        </div>
    <?php }?>
</section>