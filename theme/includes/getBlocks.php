<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'banner':
              include 'blocks/banner.php';
              break;
            case 'text_section':
              include 'blocks/text_section.php';
              break;
            case 'accordian':
              include 'blocks/accordian.php';
              break;
            case 'two_column':
              include 'blocks/two_column.php';
              break;
            case 'text_two_column':
              include 'blocks/text_two_column.php';
              break;
            case 'multiple_cta_section':
              include 'blocks/multiple_cta_section.php';
              break;
            case 'contact':
              include 'blocks/contact.php';
              break;
            case 'divider':
              include 'blocks/divider.php';
              break;
            case 'check_in':
              include 'blocks/check_in.php';
              break;
            
          }
        }
      }
    }
  }

?>