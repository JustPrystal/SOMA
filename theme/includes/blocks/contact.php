<?php $contact = $block; ?>

<section class="contact-section">
    <div class="inner">
        <?php if ($contact['heading']) {?>
            <h2 class="heading title">
                <?php echo $contact['heading']?>
            </h2>
        <?php }?>
        <div class="content">
            <div class="left">
                <?php if ($contact['contact_details']) { ?>
                    <div class="contact-details-wrap">
                        <?php foreach ($contact['contact_details'] as $key => $contactDetails) { ?>
                            <div class="detail-wrap">
                                <?php if ($contactDetails['icon']) { ?>
                                    <img src="<?php echo $contactDetails['icon']['url']?>" alt="<?php echo $contactDetails['icon']['alt']?>">
                                <?php }?>
                                <?php if ($contactDetails['description']['url'] && $contactDetails['description']['title']) {?>
                                    <a href="<?php echo $contactDetails['description']['url']?>"><?php echo $contactDetails['description']['title']?></a>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                <?php }?>
                <?php if ($contact['map_embed']) { ?>
                    <div class="map-wrap">
                        <?php echo $contact['map_embed']?>
                    </div>
                <?php }?>
                <div class="form-wrap">
                        <?php if ($contact['form_details']['text']) { ?>
                            <p class="text"><?php echo $contact['form_details']['text']?></p>
                        <?php }?>
                        <?php if ($contact['form_details']['embed']) { 
                            echo do_shortcode( $contact['form_details']['embed']);
                        }?>
                </div>
            </div>
            <div class="right">
                <?php if ($contact['text_description']) {?>
                    <div class="description-wrap">
                        <?php echo $contact['text_description']?>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>