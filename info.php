<!-- template part info -->
<i class="fa <?php $customFields = get_post_meta(get_the_ID(), "FontAwesome", true); echo $customFields;?> fa-5x grid_1"></i>
<div class="grid_3 ">
    <h3><?php the_title();?></h3>
    <p><?php the_content();?></p>
</div>
