<?php
    $header = get_field('header_fields', 'option');
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
?>


<header class="site-header">
    <div class="inner">
        <?php if ($header['button_' . $lang]['url'] && $header['button_' . $lang]['title']) { ?>
            <div class="button-wrap">
                <a class="global-button" href="<?php echo $header['button_' . $lang]['url']?>"><?php echo $header['button_' . $lang ]['title']?></a>
            </div>
        <?php }?>
        <div class="wrap">
            <div class="hamburger-wrap">
                <svg class="hamburger" xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                    <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <?php if ($header['links_' . $lang]) { ?>
                    <div class="links-wrap">
                        <?php foreach ($header['links_' . $lang] as $key => $links) {?>
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
                    <div class="overlay"></div>
                <?php }?>
            </div>
            <div class="language-wrap">
                <a class="change-language-french<?php echo $lang === 'fr' ? ' active' : ''; ?>">fr</a>
                <span>|</span>
                <a class="change-language-english<?php echo $lang === 'en' ? ' active' : ''; ?>">en</a>
            </div>
        </div>
    </div>
</header>


<script>
  jQuery(document).ready(function($) {
    const hamburger = $('.site-header .hamburger-wrap .hamburger');
    const links = $('.site-header .hamburger-wrap .links-wrap');
    const overlay = $('.site-header .hamburger-wrap .overlay');
    const body = $('body');

    // Open/close when tapping hamburger
    hamburger.on('touchstart click', function(e) {
        e.stopPropagation(); // prevent triggering document click   
        links.toggleClass("visible");
        overlay.show();
        body.addClass("overflow-hidden");
    });

    // Handle clicks on links inside the menu
    links.find('a').on('click', function() {
        // Let the anchor navigation happen first
        setTimeout(() => {
            links.removeClass("visible");
            overlay.hide();
            body.removeClass("overflow-hidden");
        }, 200); // small delay so scroll-to-section works smoothly
    });

    // Close when tapping outside links-wrap
    $(document).on('touchstart click', function(e) {
        if (!$(e.target).closest('.site-header .hamburger-wrap .links-wrap, .site-header .hamburger-wrap .hamburger').length) {
            links.removeClass("visible");
            overlay.hide();
            body.removeClass("overflow-hidden");
        }
    });


    //cookie creation logic
    function setLangCookie(lang) {
        // Set expiry date far in the future (10 years)
        var date = new Date();
        date.setFullYear(date.getFullYear() + 10);

        // Set cookie
        document.cookie = "lang=" + lang + "; expires=" + date.toUTCString() + "; path=/";
        
        // Reload the page
        location.reload();
    }

    $('.change-language-english').on('click', function(e) {
        e.preventDefault();
        setLangCookie('en');
        $(this).addClass("active");
    });
    
    $('.change-language-french').on('click', function(e) {
        e.preventDefault();
        setLangCookie('fr');
        $(this).addClass("active");
    });
});
</script>