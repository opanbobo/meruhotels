<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('-', true, 'right'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
if ( function_exists('wp_body_open') ) {
    wp_body_open();
}
?>
