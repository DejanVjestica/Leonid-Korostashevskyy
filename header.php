<!doctype html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- Header.php ======== -->
  <header>
    <article id="navbar" class="wrapper">
      <?php if ( is_front_page()):?>
        <!-- Navigation-Bar - Main menu and link to Home page ======= -->
        <!-- link to Home page -->
        <a id="logo" class="" href="<?php bloginfo('url'); ?>">
          <h2>Leonid Korostashevskyy</h2>
        </a>
        <!-- menu icon -->
        <div class="container" onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>

        <!-- es wird nun zeigen wann <700px -->
        <nav id="hauptmenu" class="">
          <?php wp_nav_menu(array('theme_location'=>'haupt')); ?>
        </nav>
        <div class="clear"></div>
      <?php endif; ?>
      <!-- link to Home page -->
      <a id="logo" class="" href="<?php bloginfo('url'); ?>">
        <h2>Leonid Korostashevskyy</h2>
      </a>
    </article>
    <!-- es wird nun zeigen wann >700px -->
    <nav id="hauptmenu-resp" class="">
      <?php wp_nav_menu(array('theme_location'=>'haupt')); ?>
    </nav>

  </header>
