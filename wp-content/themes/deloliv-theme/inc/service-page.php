
      <main class="standard">

<?php if($_SESSION["LANG"]=='FR'){ ?>
    <h1><?php echo get_field('page_title_french'); ?></h1>
    <?php echo get_field('page_description_french'); ?>
<?php } ?>

<?php if($_SESSION["LANG"]=='EN'){ ?>
    <h1><?php echo get_field('page_title_english'); ?></h1>
    <?php echo get_field('page_description_english'); ?>
<?php } ?>

<?php if($_SESSION["LANG"]=='ES'){ ?>
    <h1><?php echo get_field('page_title_spanish'); ?></h1>
    <?php echo get_field('page_description_spanish'); ?>
<?php } ?>

<?php if($_SESSION["LANG"]=='PT'){ ?>
    <h1><?php echo get_field('page_title_portuguese'); ?></h1>
    <?php echo get_field('page_description_portuguese'); ?>
<?php } ?>
              
</main>

<div class="services-list">
      <ul>
          <?php
          $loop = new WP_Query( array(
              'post_type' => 'servico',
              'posts_per_page' => 10
            )
          );
         while ( $loop->have_posts() ) : $loop->the_post(); ?>

          
          
          <?php if($_SESSION["LANG"]=='FR'){ ?>
          <li>
              <figure>
                  <figcaption><?php echo get_field('french_title'); ?></figcaption>
                  <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
              </figure>
              <?php echo get_field('french_content'); ?>
          </li>
          <?php } ?>
          
          
          <?php if($_SESSION["LANG"]=='EN'){ ?>
          <li>
              <figure>
                  <figcaption><?php echo get_field('english_title'); ?></figcaption>
                  <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
              </figure>
              <?php echo get_field('english_content'); ?>
          </li>
          <?php } ?>
          

          <?php if($_SESSION["LANG"]=='ES'){ ?>
          <li>
              <figure>
                  <figcaption><?php echo get_field('spanish_title'); ?></figcaption>
                  <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
              </figure>
              <?php echo get_field('spanish_content'); ?>
          </li>
          <?php } ?>

          <?php if($_SESSION["LANG"]=='PT'){ ?>
          <li>
              <figure>
                  <figcaption><?php echo get_field('portuguese_title'); ?></figcaption>
                  <?php echo get_the_post_thumbnail( $page->ID, 'full' ); ?>
              </figure>
              <?php echo get_field('portuguese_content'); ?>
          </li>
          <?php } ?>

          <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>