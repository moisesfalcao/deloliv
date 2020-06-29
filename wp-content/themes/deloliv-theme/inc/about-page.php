<main class="standard">

          <?php if($_SESSION['LANG']=='EN'){ ?>

          <h1><?php echo get_field('en_page_title'); ?></h1>
          <?php echo get_field('en_page_content'); ?>
          <div class="discovery">
              <p><?php echo get_field('en_discovery_text_box'); ?></p>
            <div class="arrow"></div>
            <a href="#"><?php echo get_field('en_discovery_text_button'); ?></a>
          </div>

          <?php } ?>





          <?php if($_SESSION['LANG']=='FR'){ ?>

          <h1><?php echo get_field('fr_page_title'); ?></h1>
          <?php echo get_field('fr_page_content'); ?>
          <div class="discovery">
              <p><?php echo get_field('fr_discovery_text_box'); ?></p>
            <div class="arrow"></div>
            <a href="#"><?php echo get_field('fr_discovery_text_button'); ?></a>
          </div>

          <?php } ?>





          <?php if($_SESSION['LANG']=='ES'){ ?>

          <h1><?php echo get_field('es_page_title'); ?></h1>
          <?php echo get_field('es_page_content'); ?>
          <div class="discovery">
              <p><?php echo get_field('es_discovery_text_box'); ?></p>
            <div class="arrow"></div>
            <a href="#"><?php echo get_field('es_discovery_text_button'); ?></a>
          </div>

          <?php } ?>





          <?php if($_SESSION['LANG']=='PT'){ ?>

          <h1><?php echo get_field('pt_page_title'); ?></h1>
          <?php echo get_field('pt_page_content'); ?>
          <div class="discovery">
              <p><?php echo get_field('pt_discovery_text_box'); ?></p>
            <div class="arrow"></div>
            <a href="#"><?php echo get_field('pt_discovery_text_button'); ?></a>
          </div>

          <?php } ?>

</main>