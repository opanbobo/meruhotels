<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('-', true, 'right'); ?></title>

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/select2/css/select2.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
  
  <?php wp_head(); ?>
</head>
<body >
  <div id="wrapper">

    
  </div>
  <div id="footer" class="py-5">
    <div class="container">
      <div class="title-section text-center">
        <h1>Join Our Exclusive Mailing List for a Refined Experience</h1>
      </div>
      <div class="subtitle text-center">
        <p>Your visit has been truly delightful and we can't wait to enhance your next stay even further. Subscribe to our mailing list for a world of elevated experiences awaiting you.</p>
      </div>
      <div class="form text-center">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="" placeholder="Enter email">
          </div>
        </form>
      </div>
      <div class="after-form text-center">
        <p>By subscribing, you are agreeing to our terms and conditions. See privacy policy for more.</p>
      </div>
      <div class="footer-menus-wrapper border-top">
        <div class="footer-menu-left">
          <div class="footer-block">
            <p class="text-uppercase">about us</p>
            <ul>
              <li><a href="#">philosophy</a></li>
              <li><a href="#">Directions</a></li>
              <li><a href="#">faq</a></li>
              <li><a href="#">contact us</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-right">
          <div class="block">
            <p>THE MERU sanur</p>
            <p>Jalan Hang Tuah
            Sanur Kaja, Denpasar Selatan,
            Kota Denpasar, Bali 8022</p>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-between">
        <div class="footer-bottom-left flex">
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-meru-bottom.png" alt="" class="img-fluid"></a>
          <a href="#" class="pt-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-bumn-footer.png" alt="" class="img-fluid"></a>
        </div>
        <div class="footer-bottom-right">
          <ul>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-twt.png" alt="" class="img-fluid"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-fb.png" alt="" class="img-fluid"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-tiktok.png" alt="" class="img-fluid"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-ig.png" alt="" class="img-fluid"></a></li>
            <li><a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/ico-yt.png" alt="" class="img-fluid"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/vendor/select2/js/select2.min.js"></script>
  </div>
<?php wp_footer(); ?>
</body>
</html>