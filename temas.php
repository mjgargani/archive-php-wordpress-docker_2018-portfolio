<div class="main-gen-container" id="tema-lista">
<p align="center">
	<a name="temas"><img id="tema-logo" src="<?php echo get_bloginfo('template_directory'); ?>/temas.png')"></img></a>
</p>
	<?php
	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'exclude' => '29,30,31',
		'child_of' => 65,
		'post_type' => 'page',
		'post_status' => 'publish'
	);  
	$pages = get_pages($args); 
	foreach ($pages as $page_data) {
		$slug = $page_data->post_name; 
		$content = apply_filters("the_content", $page_data->post_content); 
		$title = $page_data->post_title; 
	?>
	<a class="post-link" href="<?php echo get_bloginfo('wpurl')."/".$slug; ?>">
		<div class="blog-post" id="tema-item">
			<div class="topo-post" style="background-image: url('<?php echo get_bloginfo('template_directory')."/temas/".$slug ?>/thumbnail.jpg')">
				<h3><?php echo $title; ?></h3>
			</div>
			<p><?php echo $content; ?></p>
		</div>
	</a>
	<?php } ?>
</div>