<!-- template part info -->

<article class="widget-box">
  <i class="fa <?php $customFields = get_post_meta(get_the_ID(), "FontAwesome", true); echo $customFields;?> fa-2x"></i>
  <h3><?php the_title();?></h3>
  <p><?php the_content();?></p>
</article>
