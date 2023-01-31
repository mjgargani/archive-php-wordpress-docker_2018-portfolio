<!-- carregar-tema-orion -->
<link href="<?php echo get_bloginfo('template_directory'); ?>/trabalhos/orion/orion_style.css" rel="stylesheet">

<!-- page-orion -->
<div id="orion-main">
	
	<img id="orion-content-rotatebg" src="<?php echo get_bloginfo('template_directory'); ?>/trabalhos/orion/bg.jpg"></img>
	
	<div id="orion-content-bg1"></div>
	<div id="orion-content-bg2">
	
		<nav id="orion-menu">
			<li class="page_item mintaka"><a href="#">Mintaka</a></li>
			<li class="page_item alnitak"><a href="#">Alnitak</a></li>
			<li class="page_item alnilam"><a href="#">Alnilam</a></li>
			<li class="page_item start-page"><a href="#">Sobre</a></li>
			<li class="page_item go-back"><a href="<?php echo get_bloginfo( 'wpurl' );?>">Voltar</a></li>
		</nav>
		
		<div id="orion-content">
			<ul>
				<li id="orion-item-main"><?php echo get_post_field('post_content', 57);	?></li>
				<?php
					$args = array(
						'sort_order' => 'asc',
						'sort_column' => 'post_title',
						'child_of' => 57,
						'post_type' => 'page',
						'post_status' => 'publish'
					);  
					$pages = get_pages($args); 
					foreach ($pages as $page_data) {
						$slug = $page_data->post_name; 
						$content = apply_filters("the_content", $page_data->post_content); 
						$title = $page_data->post_title;
				?>
				<li id="orion-item-<?php echo $slug; ?>">
					<h3><?php echo $title; ?></h3>
					<p><?php echo $content; ?></p>
				</li>
				<?php } ?>
			</ul>
		</div>
		
	</div>
	
</div>
<!-- /.page-orion -->

<!-- orion-scripts -->
<script src="<?php echo get_bloginfo('template_directory')."/trabalhos/orion/orion_scripts.js" ?>"></script>