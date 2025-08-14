<?php
    $footer = get_field('footer_fields', 'option');
?>
<style>
  <?php if ($footer['background_image']) { ?>
    .site-footer .background{
      background-image:url(<?php echo $footer['background_image']['url']?>);
      position: absolute;
      width: 100%;
      height:100%;
      background-size: cover;
      background-repeat:no-repeat;
      z-index: 1;
      pointer-events: none; 
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
  <footer class="site-footer">
    <?php if ($footer['background_image']) { ?>
      <div class="background"></div>
    <?php }?>
    <div class="inner">
      <img src="<?php echo $footer['logo']['url']?>" alt="<?php echo $footer['logo']['alt']?>">
    </div>
  </footer>
       
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
