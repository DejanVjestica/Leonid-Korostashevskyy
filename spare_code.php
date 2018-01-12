<!-- modified header, when not front page -->
<?php elseif ( is_page(2)):?>
<section id="navbar" class="">
  <a id="logo" class="menu" href="<?php bloginfo('url'); ?>"><h2>Leonid Korostashevskyy</h2></a>
  <!-- es wird nun zeigen wann <700px -->
  <nav id="hauptmenu" class="menu ">
    <?php wp_nav_menu(array('theme_location'=>'haupt')); ?>
  </nav>
  <!-- menu icon -->
  <div class="container" onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <!-- es wird nun zeigen wann >700px -->
  <nav id="hauptmenu-resp" class="menu display">
    <?php wp_nav_menu(array('theme_location'=>'haupt')); ?>
  </nav>
</section>
<?php endif; ?>
