<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="RodOlv">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head();?>
	<style>
	@font-face {
		font-family: "mjgargani Lab";
		src: url('<?php echo get_bloginfo('template_directory'); ?>/mjgargani_lab.woff');
	}
	</style>	
  </head>

  <body>
  
	<div id="fade"></div>
   
	<?php	if ((is_front_page() || is_page( 'trabalhos' ) || have_posts()) && !is_page( array( 'orion'))) { ?>
	<header class="main-top-container" id="mjgargs-main-menu">
		
		<div class="main-gen-container" style="overflow:hidden">
			<div id="main-logo-icon"><a href="<?php echo get_bloginfo( 'wpurl' );?>"></a></div>
			<div id="main-logo-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
			<nav class="main-page-nav">
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'menu-superior', 
					'container_class' => 'main-page-nav' ) ); 
				?>
			</nav>
		</div>
		
	</header>
	<?php } ?>