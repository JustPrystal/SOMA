<?php
    $accordian = $block;
?>

<section class="accordian-section" <?php if ($accordian['section_id']) {?> id="<?php echo $accordian['section_id']?>" <?php }?>>
    <div class="inner">
        <?php if ($accordian['heading']) { ?>
            <h2 class="heading slide-from-top"><?php echo $accordian['heading'] ?></h2>
        <?php } ?>
        <?php if ($accordian['description']) { ?>
            <p class="description">
                <?php echo $accordian['description']?>
            </p>
        <?php }?>
        <div class="accordian-wrap">
            <ul class="accordion slide-from-bottom">
                <?php if ($accordian['accordian_content']) {
                    foreach ($accordian['accordian_content'] as $key => $accordian_content) { ?>
                        <li class="accordion-item ">
                            <?php if ($accordian_content['label']) { ?>
                                <div class="accordion-thumb"> 
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9" fill="none">   
                                            <path d="M1.33398 1.33325L8.00065 7.99992L14.6673 1.33325" stroke="#f4b461" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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