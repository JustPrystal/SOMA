<?php $multiple_cta_section = $block;?>

<style>
    .multiple-cta-section .left-underlay{
        background-image: url(<?php echo $multiple_cta_section['image']['url']?>);
        position: absolute;
        width: 40%; 
        height: 90%;
        left: -40px;
        bottom: -10%;
        background-repeat: no-repeat;
        background-size: contain;
        z-index: 1;
        @media(max-width:1499px){
            height: 70%;
        }
        @media(max-width:1249px){
            height: 60%;
        }
        @media(max-width:767px){
            width: 250px;
            height: 400px;
            bottom: -14%;
        }
    }
</style>

<section class="multiple-cta-section">
    <div class="inner">
        <?php if ($multiple_cta_section['heading']) {?>
            <h2 class="heading title">
                <?php echo $multiple_cta_section['heading']?>
            </h2>
        <?php }?>
        <div class="cta-content-wrap">
            <?php foreach ($multiple_cta_section['cta_content'] as $key => $content) { ?>
                <div class="cta-wrap">
                    <?php if ($content['heading']) { ?>
                        <h4 class="heading">
                            <?php echo $content['heading']?>
                        </h4>
                    <?php }?>
                    <?php if ( $content['button']['title']) { ?>
                        <div class="button-wrap">
                            <a class="global-button"><?php echo $content['button']['title']?></a>
                        </div>
                    <?php }?>
                </div>
            <?php } ?>
        </div>
        <div class="slider-wrap cta-slider">
            <div class="close-btn">
                <svg class="cross" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none">
                <path d="M6.99486 7.00636C6.60433 7.39689 6.60433 8.03005 6.99486 8.42058L10.58 12.0057L6.99486 15.5909C6.60433 15.9814 6.60433 16.6146 6.99486 17.0051C7.38538 17.3956 8.01855 17.3956 8.40907 17.0051L11.9942 13.4199L15.5794 17.0051C15.9699 17.3956 16.6031 17.3956 16.9936 17.0051C17.3841 16.6146 17.3841 15.9814 16.9936 15.5909L13.4084 12.0057L16.9936 8.42059C17.3841 8.03007 17.3841 7.3969 16.9936 7.00638C16.603 6.61585 15.9699 6.61585 15.5794 7.00638L11.9942 10.5915L8.40907 7.00636C8.01855 6.61584 7.38538 6.61584 6.99486 7.00636Z" fill="#0F0F0F"/>
                </svg>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-slides">
                    <?php foreach ($multiple_cta_section['cta_content'] as $testimonial) { ?>
                        <div class="testimonial-slide">
                            <?php if ($testimonial['heading']) { ?>
                                <h3 class="heading content-heading">
                                    <?php echo $testimonial['heading']?>
                                </h3>
                            <?php }?>
                            <?php if ($testimonial['description']) { ?>
                                <div class="description-wrap">
                                    <?php echo $testimonial['description']?>
                            </div>
                            <?php }?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </div>
    <div class="left-underlay">

    </div>
</section>

<script>
  jQuery(document).ready(function($) {
    $('.cta-slider .testimonial-slides').slick({
      arrows: true,
    //   dots: true,
    //   autoplay: true,
      autoplaySpeed: 3000,
      adaptiveHeight: true,
      prevArrow: `<button class="slick-prev slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 9.44 14.51">
        <defs>
            <style>
            .cls-1 {
                fill: #f4b461;
            }
            </style>
        </defs>
        <g id="Layer_1-2" data-name="Layer 1">
            <polygon class="cls-1" points="2.19 9.44 7.25 14.51 9.44 12.32 4.37 7.25 9.44 2.19 7.25 0 2.19 5.07 0 7.25 2.19 9.44"/>
        </g>
        </svg></button>`,
      nextArrow: `<button class="slick-next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 9.44 14.51">
        <defs>
            <style>
            .cls-1 {
                fill: #f4b461;
            }
            </style>
        </defs>
        <g id="Layer_1-2" data-name="Layer 1">
            <polygon class="cls-1" points="7.25 5.07 2.19 0 0 2.19 5.07 7.25 0 12.32 2.19 14.51 7.25 9.44 9.44 7.25 7.25 5.07"/>
        </g>
        </svg></button>`
    });
    $('.multiple-cta-section .cta-wrap .global-button').on('click', function() {
        const section = $(this).closest('.multiple-cta-section'); // find the section for the clicked button
        const sliderWrap = section.find('.slider-wrap');
        const slides = sliderWrap.find('.testimonial-slides');

        // Get index of clicked button within all buttons in this section
        const buttonIndex = section.find('.cta-wrap .global-button').index(this);

        if (!sliderWrap.hasClass('visible')) {
            sliderWrap.addClass('visible');
        }
        slides.slick('slickGoTo', buttonIndex);

        // Force Slick to recalc positions
        slides.slick('setPosition');
    });
    $('.multiple-cta-section .slider-wrap .close-btn').on('click', function() {
        const sliderWrap = $(this).closest('.slider-wrap');
        if (sliderWrap.hasClass('visible')) {
            sliderWrap.removeClass('visible');
        }
    });
  });
</script>