<!DOCTYPE html>
<head>

    <!--- Basic Page Needs
	================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
	 ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" >

    <?php wp_head(); ?>
</head>

<body>

<!-- Header
================================================== -->
<header>

    <div class="row">
        <div class="twelve columns">

            <div class="logo">
                <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

                <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <?php wp_nav_menu([
				   'theme_location'  => 'header-menu',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav',
					'menu_id'         => 'nav',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
               ]); ?>

        </div>

    </div>

</header> <!-- Header End -->
