<main class="home">
        <div class="home-projects">
        
        <?php
          $loop = new WP_Query( array(
              'post_type' => 'project',
              'posts_per_page' => 10
            )
          );
         while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <div
            class="item item1 active"
            style="background-image: url(<?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>);"
          ></div>
          
          <?php endwhile; wp_reset_query(); ?>
          

        </div>
      </main>

      <main>
        <div class="overview">





        <?php if($_SESSION["LANG"]=='EN'){ ?> 
          <h1><?php echo get_field('en_title'); ?></h1>
          <p>
             <?php echo get_field('en_description'); ?>
          </p>
        <?php } ?>  


        <?php if($_SESSION["LANG"]=='FR'){ ?> 
          <h1><?php echo get_field('fr_title'); ?></h1>
          <p>
             <?php echo get_field('fr_description'); ?>
          </p>
        <?php } ?>


        <?php if($_SESSION["LANG"]=='ES'){ ?> 
          <h1><?php echo get_field('es_title'); ?></h1>
          <p>
             <?php echo get_field('es_description'); ?>
          </p>
        <?php } ?>

        <?php if($_SESSION["LANG"]=='PT'){ ?> 
          <h1><?php echo get_field('pt_title'); ?></h1>
          <p>
             <?php echo get_field('pt_description'); ?>
          </p>
        <?php } ?>    



        </div>
        
        
        
        <div class="project-nav">
          <div class="infos">

          <?php
          $loop = new WP_Query( array(
              'post_type' => 'project',
              'posts_per_page' => 10
            )
          );
         while ( $loop->have_posts() ) : $loop->the_post(); ?>

            
            <?php if($_SESSION["LANG"]=='EN'){ ?>   
            <div class="item">
              <h2><?php echo get_field('en_title'); ?></h2>
              <p><?php echo get_field('en_city_and_country'); ?></p>
            </div>
            <?php } ?>

            <?php if($_SESSION["LANG"]=='FR'){ ?>   
            <div class="item">
              <h2><?php echo get_field('fr_title'); ?></h2>
              <p><?php echo get_field('fr_city_and_country'); ?></p>
            </div>
            <?php } ?>

            <?php if($_SESSION["LANG"]=='ES'){ ?>   
            <div class="item">
              <h2><?php echo get_field('es_title'); ?></h2>
              <p><?php echo get_field('es_city_and_country'); ?></p>
            </div>
            <?php } ?>

            <?php if($_SESSION["LANG"]=='PT'){ ?>   
            <div class="item">
              <h2><?php echo get_field('pt_title'); ?></h2>
              <p><?php echo get_field('pt_city_and_country'); ?></p>
            </div>
            <?php } ?>

          
          <?php endwhile; wp_reset_query(); ?>



          </div>
          <div class="arrows">
            <div class="next"></div>
            <div class="prev"></div>
          </div>
        </div>
      </main>