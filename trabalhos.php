<div class="main-gen-container v-align-div">
	<p align="center">
		<img id="trab-logo" src="<?php echo get_bloginfo('template_directory'); ?>/trabalhos.png')"></img>
	</p>
	
	<style>
		.trab-item-lista { 
			background-image : radial-gradient(rgba(0,0,0,0), rgba(0,0,0,0), rgba(0,0,0,.1)), url('<?php echo get_bloginfo('template_directory'); ?>/post_bg.gif') 
		}
	</style>
	
	<div id="caixa-trabalhos">
	<ul id="lista-trabalhos">
		
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
		
			
			<a class="trab-item-link" href="<?php echo get_bloginfo('wpurl')."/".$slug; ?>">
				<li class="trab-item-lista">
					<div class="trab-item-img-min" style="background-image: url('<?php echo get_bloginfo('template_directory')."/trabalhos/".$slug ?>/thumbnail.jpg')">
						<h3><?php echo $title; ?></h3>
					</div>
					<p><?php echo $content; ?></p>
				</li>
			</a>
			
		<?php	}	?>
		
	</ul>
	</div>
</div>

<a class="page-anc" id="color-inv" href="#main-bot-container">
	<p>Sobre o autor </br>
	<span class="anc-icon"></span></p>
</a>