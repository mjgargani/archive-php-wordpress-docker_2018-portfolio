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
	
	<?php	if ((is_front_page() || is_page( 'temas' ) || have_posts()) && !is_page( array( 'orion', 'tema1', 'tema2' ))) { ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/main_style.css" rel="stylesheet">
	<?php } ?>
  </head>

  <body>
  
	<?php	if (is_front_page() || is_page( 'temas' )) { ?>
		<section id="main-midtop-container">
				<div id="logo"></div>
				<p><?php	echo get_post_field('post_content', 65);	?></br>
				<a id="temas-anc" href="#temas">ﬅ</a></p>
		</section> <!-- /#main-midtop-container-->
	<?php } ?>
	
	<?php	if (is_front_page() || is_page( 'temas' )) { ?>
		<header class="main-top-container" id="main-menu" style="position: fixed; 	top: 0">
	<?php	}	else	{	?>
		<header class="main-top-container" id="main-menu" style="position: fixed; 	top: 0">
	<?php	}	?>
	
		<div class="main-gen-container" style="overflow:hidden">
			<div id="main-logo-icon"><a href="<?php echo get_bloginfo( 'wpurl' );?>"></a></div>
			<div id="main-logo-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
			<nav class="main-page-nav">
				<?php wp_list_pages( 'sort_order=desc&depth=1&title_li=' ); ?>
			</nav>
		</div>
		
	</header>
	<header class="main-top-container" id="main-submenu">
	
		<div class="main-gen-container">
			<nav class="main-page-nav">
				<?php wp_list_pages( 'depth=1&title_li=&child_of=65' ); ?>
			</nav>
		</div><!-- /.main-gen-container-->
	
	</header><!-- /#main-top-container-->