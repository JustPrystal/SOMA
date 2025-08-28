<?php
    $banner = $block;
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'fr';
?>

<style>
        <?php if ($banner['circle_image']) {?>
            .banner .inner .right .text-wrap{
                background-image: url(<?php echo $banner['circle_image']['url']?>);
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                z-index: 1;
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
                @media(max-width:1249px){
                    top:-60px;
                }
                @media(max-width:767px){
                    background-size: contain;
                    right: -5%;
                    top:-20px;
                }
                @media(max-width:575px){
                    max-width:330px;
                    min-height:330px;
                }
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
                @media(max-width:991px){
                    min-height: 390px;
                    width: 530px;
                }
                @media(max-width:575px){
                    min-height: 270px;
                    width: 330px;
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
            <?php if ($banner['logo']) { ?>
                <div class="logo-wrap">
                    <img src="<?php echo $banner['logo']['url']?>" alt="">
                </div>
            <?php }?>
        </div>
        <div class="right">
            <div class="image-wrap">
                <?php if ($banner['banner_text_' . $lang]) { ?>
                    <div class="text-wrap">
                        <?php echo $banner['banner_text_' . $lang]?>
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
    <?php }?>
    <div class="bottom-left-overlay">
        <?php if ( $banner['bottom_left_overlay']['overlay']) { ?>
            <div class="overlay"></div>
        <?php }?>
        <?php if ($banner['bottom_left_overlay']['line_image']) { ?>
            <div class="line-image"></div>
        <?php }?>
    </div>
</section>