<?php 
    $textTwoColumn = $block;
?>

<section class="text-two-column" <?php if ($textTwoColumn['section_id']) {?> id="<?php echo $textTwoColumn['section_id']?>" <?php }?>>
    <div class="inner">
        <?php if ($textTwoColumn['title']) {?>
            <h2 class="heading title">
                <?php echo $textTwoColumn['title']?>
            </h2>
        <?php }?>
        <div class="content-wrap">
            <div class="left">
                <?php if ($textTwoColumn['left']['description']) {?>
                    <div class="description-wrap">
                        <?php echo $textTwoColumn['left']['description']?>
                    </div>
                <?php }?>
                <?php if ($textTwoColumn['left']['button']['url'] && $textTwoColumn['left']['button']['title']) {?>
                    <div class="button-wrap">
                        <a href="<?php echo $textTwoColumn['left']['button']['url']?>" class="global-button"><span><?php echo $textTwoColumn['left']['button']['title']?></span></a>
                    </div>
                <?php }?>
            </div>
            <div class="right">
                <?php if ($textTwoColumn['right']['content']) {?>
                    <div class="variations">
                        <?php foreach ($textTwoColumn['right']['content'] as $key => $content) { ?>
                            <div class="variation">
                                <?php if ($content['heading']) {?>
                                    <h4 class="heading">
                                        <?php echo $content['heading']?>
                                    </h4>
                                <?php }?>
                                <?php foreach ($content['description'] as $key => $description) { ?>
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
                                <?php }?>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
                <?php if ($textTwoColumn['right']['text']) {?>
                    <div class="description-wrap">
                        <?php echo $textTwoColumn['right']['text']?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>