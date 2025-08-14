<?php
    $header = get_field('header_fields', 'option');
?>


<header class="site-header">
    <div class="inner">
        <?php if ($header['button']['url'] && $header['button']['title']) { ?>
            <div class="button-wrap">
                <a class="global-button" href="<?php echo $header['button']['url']?>"><?php echo $header['button']['title']?></a>
            </div>
        <?php }?>
        <div class="hamburger-wrap">
            <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
            </svg>
            <?php if ($header['links']) { ?>
                <div class="links-wrap">
                    <?php foreach ($header['links'] as $key => $links) {?>
                        <?php if ($links['link']['url'] && $links['link']['title']) { ?>
                            <a class="link-wrap" href="<?php echo $links['link']['url']?>">
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 15.31 23.54">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #f4b461;
                                        }
                                        </style>
                                    </defs>
                                    <g id="Design">
                                        <polygon class="cls-1" points="11.77 8.22 3.55 0 0 3.55 8.22 11.77 0 19.99 3.55 23.54 11.77 15.31 15.31 11.77 11.77 8.22"/>
                                    </g>
                                </svg>
                                <span class="link"><?php echo $links['link']['title']?></span>
                            </a>
                        <?php }?>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</header>


<script>
  jQuery(document).ready(function($) {
    $('.site-header .hamburger-wrap').hover(
      function() { // mouse enter
        $('.site-header .hamburger-wrap .links-wrap').addClass("visible");
      },
      function() { // mouse leave
        $('.site-header .hamburger-wrap .links-wrap').removeClass("visible");
      }
    );
  });
</script>