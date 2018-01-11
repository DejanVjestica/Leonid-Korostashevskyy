<?php get_header(); ?>
<!-- Section-Willkommen -->
<section id="willkommen" class="">
  <div class="">
    <h2 class="">Herzlich willkommen in unserer Praxis!​</h2>
    <?php dynamic_sidebar( 'willkommen'); ?>
  </div>
</section>
<!-- Section-Our-team -->
<div id="our-team" class="">
    <i class="fa fa-ambulance fa-2x" aria-hidden="true"></i>
    <h2 class="">Unser Team</h2>
    <?php dynamic_sidebar( 'our-team'); ?>
</div>
<!-- Section-Praxis -->
<div id="praxis" class="">
    <i class="fa fa-hospital-o fa-2x " aria-hidden="true"></i>
    <h2 class="">Unsere Praxis</h2>
    <?php dynamic_sidebar( 'praxis'); ?>
</div>
<!-- Section-Leistungen -->
<div id="leistungen" class="">
  <div class="">
    <i class="fa fa-stethoscope fa-2x " aria-hidden="true"></i>
    <h2 class="">Leistungen</h2>
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
