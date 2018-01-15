<!--
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 * -->

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
     <?php
        $args = array('cat' => 6, 'posts_per_page' => '2',);
        $category_posts = new WP_Query($args);
        if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();?>
       <?php get_template_part( 'template-parts/info' ); ?>
     <?php endwhile; else: ?>
         <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
     <?php endif; ?>
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
     <h2 class="padd-top">Leistungen</h2>
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
   <!-- <h2 class="">Herzlich willkommen in unserer Praxis!​</h2> -->
   <?php
      $args = array('cat' => 7, 'posts_per_page' => '1',);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();?>
     <h1><?php the_title(); ?></h1>
     <p><?php the_content(); ?></p>
   <?php endwhile; else: ?>
       <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
   <?php endif; ?>



 </section>

 <!-- Section-Our-team -->
 <section id="our-team" class="wrapper">
   <i class="fa fa-ambulance fa-2x" aria-hidden="true"></i>
   <h2 class="padd-top">Unser Team</h2>
   <?php dynamic_sidebar( 'our-team'); ?>
 </section>

 <!-- Section-Praxis -->
 <section id="praxis" class="wrapper">
   <i class="fa fa-hospital-o fa-2x " aria-hidden="true"></i>
   <h2 class="padd-top">Unsere Praxis</h2>

   <?php
      $args = array('cat' => 8);
      $category_posts = new WP_Query($args);
      if($category_posts->have_posts()) : while($category_posts->have_posts()) : $category_posts->the_post();?>
     <!-- <h1><?php the_title(); ?></h1> -->
     <p><?php the_content(); ?></p>
   <?php endwhile; else: ?>
       <?php _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); ?>
   <?php endif; ?>
   <div class="clear">

   </div>

   <!-- <span><?php dynamic_sidebar( 'praxis'); ?></span> -->

   <div class="clear"></div>
 </section>
 <!-- Section-Contact -->
 <?php get_footer(); ?>
