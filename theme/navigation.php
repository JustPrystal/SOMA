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
        </div>
    </div>
</header>