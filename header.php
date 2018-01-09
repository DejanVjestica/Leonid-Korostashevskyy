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

<!-- ================================================ Header.php ============================================ -->
<header>

    <?php if ( is_front_page()):?>
        <!-- ========== Navigation-Bar - hier kommt: der Hauptmenu ============================= -->
        <div id="nav-bar">
            <div class="container_12">
                <a id="logo" class="menu grid_6" href="<?php bloginfo('url'); ?>"><h2>Leonid Korostashevskyy</h2></a>
                <div class="menu grid_6">
                    <?php wp_nav_menu(array('theme_location'=>'haupt')); ?>
                </div>
            </div>
        </div>

        <!-- ========== Banner - hier kommt: das Headerbild, und die Visitenkarte ============ -->
        <div id="banner" style="background-image: url(<?php echo get_background_image(); ?>);">
            <div class="container_12">
                <div class="banner-msg  margin-top grid_7 push_5">
                    <?php dynamic_sidebar( 'header-msg'); ?>
                </div>
            </div>
        </div>

        <!-- ========Info - hier kommt: die Adresse, der Öfnungszeiten, und die Google map
        Beiträge im kategorien 3 und Google map ist Hardcoded ================-->
        <div id="info" class="">
            <div class="container_12">
                <?php query_posts('cat=3'); ?>
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <!-- Loop inhalt ist im templatepart "info" -->
                        <?php get_template_part( 'info' ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- <i class="fa fa-map-marker grid_1" aria-hidden="true"></i> -->
                <div class="grid_5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1214.5325463197173!2d13.50934436621146!3d52.496061288537085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a84ed1868fe6d7%3A0x2dd447922f8250c1!2sLeonid+Korostashevskyy!5e0!3m2!1sen!2sde!4v1481898796345" width="100%" height="auto" frameborder="0"  style="o" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    <?php elseif ( is_page(2)):?>
        <div id="nav-bar">
            <div class="container_12">
                <a id="logo" class="menu grid_6" href="<?php bloginfo('url'); ?>"><h2>Leonid Korostashevskyy</h2></a>
                <a id="zuruck" class="grid_3 push_3" href="<?php bloginfo('url'); ?>"><h4>zurück zur Startseite</h4></a>
            </div>
        </div>
    <?php endif; ?>

</header>
