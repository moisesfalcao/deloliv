<footer>
        <address>
          <div class="wrapper">
            <ul>
              <li class="arroba"><i class="icone arroba"></i></li>
              <li>
                <i class="icone location"></i>
                <p>5 avenue Dubé, Montreal, <br />QC H1B4W5, Canada</p>
              </li>
            </ul>
          </div>
        </address>
        <div class="sobre">
          <div class="wrapper">

            <?php if($_SESSION['LANG']=='EN'){ ?>
              <?php dynamic_sidebar( 'home_footer_en' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='FR'){ ?>
              <?php dynamic_sidebar( 'home_footer_fr' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='ES'){ ?>
              <?php dynamic_sidebar( 'home_footer_es' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='PT'){ ?>
              <?php dynamic_sidebar( 'home_footer_pt' ); ?>
            <?php } ?>
           
          </div>
        </div>
      </footer>
    </div>
    <div class="footer-mobile">
    <footer>
        
        <div class="sobre">
          <div class="wrapper">

            <?php if($_SESSION['LANG']=='EN'){ ?>
              <?php dynamic_sidebar( 'home_footer_en' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='FR'){ ?>
              <?php dynamic_sidebar( 'home_footer_fr' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='ES'){ ?>
              <?php dynamic_sidebar( 'home_footer_es' ); ?>
            <?php } ?>

            <?php if($_SESSION['LANG']=='PT'){ ?>
              <?php dynamic_sidebar( 'home_footer_pt' ); ?>
            <?php } ?>
           
          </div>

          <address>
          <div class="wrapper">
            <ul>
              <li class="arroba"><i class="icone arroba"></i></li>
              <li>
                <i class="icone location"></i>
                <p>5 avenue Dubé, Montreal, <br />QC H1B4W5, Canada</p>
              </li>
            </ul>
          </div>
        </address>
        </div>
      </footer>
    </div>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri() . '/deloliv.js'; ?>"></script>  
  </body>
</html>
