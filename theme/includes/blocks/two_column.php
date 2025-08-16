<?php
    $twoColumn = $block;
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';  
?>

<section class="two-column" <?php if ($twoColumn['section_id']) {?> id="<?php echo $twoColumn['section_id']?>" <?php }?>>
    <div class="inner">
      <?php if ($twoColumn['title_' . $lang]) {?>
        <h2 class="heading title">
            <?php echo $twoColumn['title_' . $lang]?>
        </h2>
      <?php }?>
        <div class="content">
            <?php if ($twoColumn['image']) { ?>
                <div class="left">
                    <img class="image" src="<?php echo $twoColumn['image']['url']?>" alt="<?php echo $twoColumn['image']['alt']?>">
                </div>
            <?php }?>
            <div class="right">
              <?php if ($twoColumn['content_' . $lang]) { 
                foreach ($twoColumn['content_' . $lang] as $key => $content) { ?>
                    <div class="text-wrap">
                        <?php if ($content['heading_' . $lang]) { ?>
                            <h3 class="heading content-heading">
                                <?php echo $content['heading_' . $lang]?>
                            </h3>
                        <?php }?>
                        <?php if ($content['subtext_' . $lang]) { ?>
                            <h4 class="heading subheading">
                                <?php echo $content['subtext_' . $lang]?>
                            </h4>
                        <?php }?>
                        <?php if ($content['description_' . $lang]) { ?>
                            <p class="description"><?php echo $content['description_' . $lang]?></p>
                        <?php }?>
                    </div>
                <?php }
              }?>
            </div>
        </div>
        <div class="slider-wrap two-column-slider">
             <div class="testimonial-slider">
                <div class="testimonial-slides">
                  <?php if ($twoColumn['content_' . $lang]) {
                    foreach ($twoColumn['content_' . $lang] as $testimonial) { ?>
                        <div class="testimonial-slide">
                            <?php if ($testimonial['heading_' . $lang]) { ?>
                                <h3 class="heading content-heading">
                                    <?php echo $testimonial['heading_' . $lang]?>
                                </h3>
                            <?php }?>
                            <?php if ($testimonial['subtext_' . $lang]) { ?>
                                <h4 class="heading subheading">
                                    <?php echo $testimonial['subtext_' . $lang]?>
                                </h4>
                            <?php }?>
                            <?php if ($testimonial['description_' . $lang]) { ?>
                                <p class="description"><?php echo $testimonial['description_' . $lang]?></p>
                            <?php }?>
                        </div>
                    <?php } 
                  }?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  jQuery(document).ready(function($) {
    $('.two-column-slider .testimonial-slides').slick({
      arrows: true,
    //   dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
    //   adaptiveHeight: true, // 👈 handles dynamic height
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
  });
</script>