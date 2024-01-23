<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('-', true, 'right'); ?></title>

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>
  <div id="wrapper">

    
  </div>
  <footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </footer>
<?php wp_footer(); ?>
</body>
</html>