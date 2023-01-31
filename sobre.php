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
<div class="blog-post">
	<div class="topo-post" style="background-image: url('http://localhost/wordpress/wp-content/themes/startwordpress/temas/<?php echo $slug ?>/thumbnail.jpg')">
		<h3><?php echo $title; ?></h3>
	</div>
	<p><?php echo $content; ?></p>
</div>
<?php } ?>