<?php
    $check_in = $block;
    $footer = get_field('footer_fields', 'option');
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
?>

<style>
    <?php if ($check_in['right_overlay']) { ?>
        .check-in .top-right-overlay{
            background-image: url(<?php echo $check_in['right_overlay']['url']?>);
            position: absolute;
            top: 0;
            right: -30px;
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
                min-height:260px;
            }
        }
    <?php }?>
    <?php if ($footer['button_background']) { ?> 
        .global-button::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: url('<?php echo $footer['button_background']['url']; ?>');
        background-size: cover;
        background-position: center center;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -2;
        }
  <?php }?>
</style>

<section class="check-in">
    <div class="language-wrap">
        <a class="change-language-french<?php echo $lang === 'fr' ? ' active' : ''; ?>">fr</a>
        <span>|</span>
        <a class="change-language-english<?php echo $lang === 'en' ? ' active' : ''; ?>">en</a>
    </div>
    <div class="inner">
        <?php if ($check_in['logo']) { ?>
            <img class="logo" src="<?php echo $check_in['logo']['url']?>" alt="<?php echo $check_in['logo']['alt']?>">
        <?php }?>
        <?php if ($check_in['text_' . $lang]) { ?>
            <p class="text">
                <?php echo $check_in['text_' . $lang]?>
            </p>
        <?php }?>
        <?php if ($check_in['button_' . $lang]['url'] && $check_in['button_' . $lang]['title']) { ?>
            <div class="button-wrap">
                <a class="global-button" id="confirm-checkin">
                    <span>
                        <?php echo $check_in['button_' . $lang]['title']?>
                    </span>
                </a>
            </div>
        <?php }?>
    </div>
    <?php if ($check_in['right_overlay']) { ?>
        <div class="top-right-overlay">
        </div>
    <?php }?>
    <?php if ($check_in['left_overlay']) { ?>
        <div class="left-overlay"></div>
    <?php }?>
</section>

<script>
jQuery(document).ready(function($) {
    //redirect logic
    $('.check-in #confirm-checkin').on('click', function(e) {
        e.preventDefault();

        // Set cookie for ~20 years
        var expires = new Date();
        expires.setFullYear(expires.getFullYear() + 20);
        document.cookie = "checkin_done=1; path=/; expires=" + expires.toUTCString();

        // Redirect to homepage
        window.location.href = "/";
    });


    //language cookie creation logic
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
    });
    
    $('.change-language-french').on('click', function(e) {
        e.preventDefault();
        setLangCookie('fr');
    });
});
</script>