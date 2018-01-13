<?php get_header(); ?>
<!-- Section-Willkommen -->
<!-- ========== Banner - hier kommt: das Headerbild, und die Visitenkarte ============ -->
<section id="banner" class="" style="background-image: url(<?php echo get_background_image(); ?>);">
  <div id="msg-container" class="wrapper">
    <?php dynamic_sidebar( 'header-msg'); ?>
  </div>
</section>
<!-- ========Info - hier kommt: die Adresse, der Öfnungszeiten, und die Google map
Beiträge im kategorien 3 und Google map ist Hardcoded ================-->
<section id="info" class="">
  <div class="wrapper">
    <?php query_posts('cat=3'); ?>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <!-- Loop inhalt ist im templatepart "info" -->
        <?php get_template_part( 'info' ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <!-- <i class="fa fa-map-marker grid_1" aria-hidden="true"></i> -->
    <div id="google-map" class="">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1214.5325463197173!2d13.50934436621146!3d52.496061288537085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84ed1868fe6d7%3A0x2dd447922f8250c1!2sLeonid+Korostashevskyy!5e0!3m2!1sen!2sde!4v1481898796345" width="100%" height="auto" frameborder="0"  style="o" allowfullscreen></iframe>
    </div>
  </div>
  <div class="clear"></div>
</section>
<!-- Section-Leistungen -->
<section id="leistungen" class="">
    <div class="wrapper">
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

</section>
<!-- Wellcome massage  -->
<section id="willkommen" class="wrapper">
    <h2 class="">Herzlich willkommen in unserer Praxis!​</h2>
    <?php dynamic_sidebar( 'willkommen'); ?>
</section>

<!-- Section-Our-team -->
<section id="our-team" class="wrapper">
    <i class="fa fa-ambulance fa-2x" aria-hidden="true"></i>
    <h2 class="">Unser Team</h2>
    <?php dynamic_sidebar( 'our-team'); ?>
</section>

<!-- Section-Praxis -->
<section id="praxis" class="wrapper">
    <i class="fa fa-hospital-o fa-2x " aria-hidden="true"></i>
    <h2 class="">Unsere Praxis</h2>
    <span><?php dynamic_sidebar( 'praxis'); ?></span>

    <div class="clear"></div>
</section>
<!-- Section-Contact -->
<?php get_footer(); ?>
