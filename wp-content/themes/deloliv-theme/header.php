<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deloliv</title>
    <?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( 'class-name' ); ?>>
    <div class="deloliv">
      <header class="header-geral">
        <a href="<?php echo get_site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/Brand.png" alt="" /></a>
        <nav>
          <ul>
            
            <li class="lang"><a class="lang <?php if($_SESSION['LANG']=='EN'){ echo 'active'; } ?>" href="<?php echo get_permalink(); ?>?LANG=EN">EN</a></li>
            <li class="lang"><a class="lang <?php if($_SESSION['LANG']=='FR'){ echo 'active'; } ?>" href="<?php echo get_permalink(); ?>?LANG=FR">FR</a></li>
            <li class="lang"><a class="lang <?php if($_SESSION['LANG']=='ES'){ echo 'active'; } ?>" href="<?php echo get_permalink(); ?>?LANG=ES">ES</a></li>
            <li class="lang"><a class="lang <?php if($_SESSION['LANG']=='PT'){ echo 'active'; } ?>" href="<?php echo get_permalink(); ?>?LANG=PT">PT</a></li>
            <li class="menu">
              <a class="toggle" href=""><img src="<?php echo get_template_directory_uri(); ?>/menu.png" alt="" /></a>
              <div class="overlay">
                <div class="layermenu">
                  <ul>
                    <li><a class="close" href="#">X Close</a></li>

                    <?php if($_SESSION['LANG']=='EN'){ ?>
                      <?php wp_nav_menu( array( 'theme_location' => 'en-menu' ) ); ?>
                    <?php } ?>

                    <?php if($_SESSION['LANG']=='FR'){ ?>
                      <?php wp_nav_menu( array( 'theme_location' => 'fr-menu' ) ); ?>
                    <?php } ?>

                    <?php if($_SESSION['LANG']=='ES'){ ?>
                      <?php wp_nav_menu( array( 'theme_location' => 'es-menu' ) ); ?>
                    <?php } ?>

                    <?php if($_SESSION['LANG']=='PT'){ ?>
                      <?php wp_nav_menu( array( 'theme_location' => 'pt-menu' ) ); ?>
                    <?php } ?>

                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </header>