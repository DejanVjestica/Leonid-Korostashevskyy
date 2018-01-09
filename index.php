<?php get_header(); ?>


<!-- Section-Willkommen -->
<div id="willkommen" class="section">

  <div class="container_12">
    <!-- <i class="fa fa-ambulance grid_1" aria-hidden="true"></i> -->
    <h2 class="grid_12">Herzlich willkommen in unserer Praxis!​</h2>

    <?php dynamic_sidebar( 'willkommen'); ?>

  </div>

</div>




<!-- Section-Our-team -->
<div id="our-team" class="section">

  <div class="container_12">
    <i class="fa fa-ambulance grid_1" aria-hidden="true"></i>
    <h2 class="grid_11">Unser Team</h2>

    <?php dynamic_sidebar( 'our-team'); ?>

  </div>

</div>

<!-- Section-Praxis -->

<div id="praxis" class="section">


  <div class="container_12">
    <i class="fa fa-hospital-o grid_1" aria-hidden="true"></i>
    <h2 class="grid_11">Unsere Praxis</h2>

    <?php dynamic_sidebar( 'praxis'); ?>
  </div>

</div>

<!-- Section-Leistungen -->
<div id="leistungen" class="section">

  <div class="container_12">
    <i class="fa fa-stethoscope grid_1" aria-hidden="true"></i>
    <h2 class="grid_11">Leistungen</h2>


    <?php $my_postid = 17;//This is page id or post idd
      $content_post = get_post($my_postid);
      $content = $content_post->post_content;
      $content = apply_filters('the_content', $content);
      $content = str_replace(']]>', ']]&gt;', $content);
      echo $content;
    ?>
  </div>

</div>

<!-- Section-Contact -->
<?php get_footer(); ?>
