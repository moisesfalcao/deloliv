<main class="standard">

          <?php if($_SESSION['LANG']=='EN'){ ?>
          <h1><?php echo get_field('en_page_title'); ?></h1>
          <?php echo get_field('en_page_content'); ?>
          <?php echo get_field('en_form'); ?>
          <?php } ?>





          <?php if($_SESSION['LANG']=='FR'){ ?>
          <h1><?php echo get_field('fr_page_title'); ?></h1>
          <?php echo get_field('fr_page_content'); ?>
          <?php echo get_field('fr_form'); ?>
          <?php } ?>





          <?php if($_SESSION['LANG']=='ES'){ ?>
          <h1><?php echo get_field('es_page_title'); ?></h1>
          <?php echo get_field('es_page_content'); ?>
          <?php echo get_field('es_form'); ?>
          <?php } ?>





          <?php if($_SESSION['LANG']=='PT'){ ?>
          <h1><?php echo get_field('pt_page_title'); ?></h1>
          <?php echo get_field('pt_page_content'); ?>
          <?php echo get_field('pt_form'); ?>
          <?php } ?>

</main>