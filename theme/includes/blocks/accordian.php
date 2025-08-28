<?php
    $accordian = $block;
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'fr';
?>

<section class="accordian-section" <?php if ($accordian['section_id']) {?> id="<?php echo $accordian['section_id']?>" <?php }?>>
    <div class="inner">
        <?php if ($accordian['heading_' . $lang]) { ?>
            <h2 class="heading slide-from-top"><?php echo $accordian['heading_' . $lang] ?></h2>
        <?php } ?>
        <?php if ($accordian['description_' . $lang]) { ?>
            <p class="description">
                <?php echo $accordian['description_' . $lang]?>
            </p>
        <?php }?>
        <div class="accordian-wrap">
            <ul class="accordion slide-from-bottom">
                <?php if ($accordian['accordian_content_' . $lang]) {
                    foreach ($accordian['accordian_content_' . $lang] as $key => $accordian_content) { ?>
                        <li class="accordion-item ">
                            <?php if ($accordian_content['label']) { ?>
                                <div class="accordion-thumb"> 
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 15.31 23.54">
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
                                    </div>  
                                    <h3 class="title">
                                        <?php echo $accordian_content['label']; ?>
                                    </h3>
                                </div>
                            <?php }?>
                            <?php if ($accordian_content['content']) { ?>
                                <div class="accordion-panel">
                                    <div class="description-wrap">
                                        <?php echo $accordian_content['content']; ?>
                                    </div>
                                </div>
                            <?php }?>
                        </li>
                    <?php }
                }?>
            </ul>
        </div>
    </div>
</section>

<script>
    $(function() {
        // (Optional) Active an item if it has the class "is-active"	
        $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
        
        $(".accordion > .accordion-item").click(function() {
            // Cancel the siblings
            $(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
            // Toggle the item
            $(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
        });
    });
</script>