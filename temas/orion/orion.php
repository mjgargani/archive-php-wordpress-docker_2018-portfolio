<!-- carregar-tema-orion -->
<link href="<?php echo get_bloginfo('template_directory'); ?>/temas/orion/orion_style.css" rel="stylesheet">
<!-- page-orion -->
<div id="orion-main" style="background-image: url(<?php echo get_bloginfo('template_directory'); ?>/temas/orion/bg.jpg)">
	<div id="orion-content-bg">
		<nav id="orion-menu">
			<?php wp_list_pages( 'depth=1&title_li=&child_of=57' ); ?>
			<li class="start-page"><a href="http://localhost/wordpress/temas/orion/">Sobre</a></li>
			<li class="go-back"><a href="<?php echo get_bloginfo( 'wpurl' );?>">Voltar ao início</a></li>
		</nav>
		<p>
		<?php
		$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'child_of' => 57,
			'post_type' => 'page',
			'post_status' => 'publish'
		);  
		$pages = get_pages($args); 
		//foreach ($pages as $page_data) {
		//	$slug = $page_data->post_name; 
		//	$content = apply_filters("the_content", $page_data->post_content); 
		//	$title = $page_data->post_title; 
		echo get_post_field('post_content', 57);
		?>
		</p>
	</div>
</div>
<!-- /.page-orion -->
<!-- orion-scripts -->
<script src="<?php echo get_bloginfo('template_directory')."/temas/orion/orion_scripts.js" ?>"></script>