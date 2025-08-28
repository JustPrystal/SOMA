<?php 
    $contact = $block;
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'fr';
?>

    <style>
        <?php if ($contact['image_overlay']) { ?>
            .contact-section .right-overlay{
                background-image: url(<?php echo $contact['image_overlay']['url']?>);
                background-size: contain;
                position:absolute;
                right: -20px;
                bottom:-40px;
                width: 45%;
                min-height: 800px;
                background-repeat: no-repeat;
                background-position: bottom right;
                pointer-events:none;
                @media(max-width:767px){
                    min-height: 260px;
                    width: 70%;
                }
            }
        <?php }?>   
    </style>

<section class="contact-section" <?php if ($contact['section_id']) {?> id="<?php echo $contact['section_id']?>" <?php }?>>
    <div class="inner">
        <?php if ($contact['heading_' . $lang]) {?>
            <h2 class="heading title">
                <?php echo $contact['heading_' . $lang]?>
            </h2>
        <?php }?>
        <div class="content">
            <div class="left">
                <?php if ($contact['contact_details_' . $lang]) { ?>
                    <div class="contact-details-wrap">
                        <?php foreach ($contact['contact_details_' . $lang] as $key => $contactDetails) { ?>
                            <div class="detail-wrap">
                                <?php if ($contactDetails['icon']) { ?>
                                    <img src="<?php echo $contactDetails['icon']['url']?>" alt="<?php echo $contactDetails['icon']['alt']?>">
                                <?php }?>
                                <?php if ($contactDetails['description']['url'] && $contactDetails['description']['title']) {?>
                                    <a target="<?php echo esc_attr($contactDetails['description']['target']); ?>" href="<?php echo $contactDetails['description']['url']?>"><?php echo $contactDetails['description']['title']?></a>
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
            </div>
            <div class="right">
                <?php if ($contact['text_description_' . $lang]) {?>
                    <div class="description-wrap">
                        <?php echo $contact['text_description_' . $lang]?>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="bottom-content">
            <div class="form-wrap">
                    <?php if ($contact['form_details_' . $lang]['text']) { ?>
                        <p class="text"><?php echo $contact['form_details_' . $lang]['text']?></p>
                    <?php }?>
                    <?php if ($contact['form_details_' . $lang]['embed']) { 
                        echo do_shortcode( $contact['form_details_' . $lang]['embed']);
                    }?>
            </div>
        </div>
    </div>
    <?php if ($contact['image_overlay']) {?>
        <div class="right-overlay">
        </div>
    <?php }?>
</section>