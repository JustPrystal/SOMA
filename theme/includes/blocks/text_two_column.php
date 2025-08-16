<?php 
    $textTwoColumn = $block;
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
?>

<section class="text-two-column" <?php if ($textTwoColumn['section_id']) {?> id="<?php echo $textTwoColumn['section_id']?>" <?php }?>>
    <div class="inner">
        <?php if ($textTwoColumn['title_' . $lang]) {?>
            <h2 class="heading title">
                <?php echo $textTwoColumn['title_' . $lang]?>
            </h2>
        <?php }?>
        <div class="content-wrap">
            <div class="left">
                <?php if ($textTwoColumn['left_' . $lang]['description_' . $lang]) {?>
                    <div class="description-wrap">
                        <?php echo $textTwoColumn['left_' . $lang]['description_' . $lang]?>
                    </div>
                <?php }?>
                <?php if ($textTwoColumn['left_' . $lang]['button_' . $lang]['url'] && $textTwoColumn['left_' . $lang]['button_' . $lang]['title']) {?>
                    <div class="button-wrap">
                        <a href="<?php echo $textTwoColumn['left_' . $lang]['button_' . $lang]['url']?>" class="global-button"><span><?php echo $textTwoColumn['left_' . $lang]['button_' . $lang]['title']?></span></a>
                    </div>
                <?php }?>
            </div>
            <div class="right">
                <?php if ($textTwoColumn['right_' . $lang]['content_' . $lang]) {?>
                    <div class="variations">
                        <?php foreach ($textTwoColumn['right_' . $lang]['content_' . $lang] as $key => $content) { ?>
                            <div class="variation">
                                <?php if ($content['heading']) {?>
                                    <h4 class="heading">
                                        <?php echo $content['heading']?>
                                    </h4>
                                <?php }?>
                                <?php if ($content['description']) {
                                    foreach ($content['description'] as $key => $description) { ?>
                                        <div class="text-wrap">
                                            <p>
                                                <?php if ($description['time']) { ?>
                                                    <span class="time"><?php echo $description['time']?></span>
                                                <?php }?>
                                                /
                                                <?php if ($description['amount']) {?>
                                                    <span class="amount"><?php echo $description['amount']?></span>
                                                <?php }?>
                                                <span class="subtext">+ taxes</span>
                                            </p>
                                        </div>
                                    <?php }
                                }?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
                <?php if ($textTwoColumn['right_' . $lang]['text_' . $lang]) {?>
                    <div class="description-wrap">
                        <?php echo $textTwoColumn['right_' . $lang]['text_' . $lang]?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>