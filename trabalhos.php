<div class="main-gen-container v-align-div">
	<p align="center">
		<img id="trab-logo" src="<?php echo get_bloginfo('template_directory'); ?>/trabalhos.png')"></img>
	</p>
	<div id="scroll-hint"><p>Role para ver as opções</p></div>
	
	<style>
		.trab-item-lista { 
			background-image : radial-gradient(rgba(0,0,0,0), rgba(0,0,0,0), rgba(0,0,0,.1)), url('<?php echo get_bloginfo('template_directory'); ?>/post_bg.gif') 
		}
	</style>
	
	<div id="caixa-trabalhos">
	<ul id="lista-trabalhos">
		
		<?php
			/*$args = array(
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

				//limitar texto
				$content = strip_tags($content);
				if (strlen($content) > 75) {
					// truncate string
					$stringCut = substr($content, 0, 75);
					$endPoint = strrpos($stringCut, ' ');

					//if the string doesn't contain any space then it will cut without word basis.
					$content = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
					$content .= '...';
				}*/
		?>
		
			
			<!--<a class="trab-item-link" href="<?php //echo get_bloginfo('wpurl')."/".$slug; ?>">
				<li class="trab-item-lista">
					<div class="trab-item-img-min" style="background-image: url('<?php //echo get_bloginfo('template_directory')."/trabalhos/".$slug ?>/thumbnail.jpg')">
						<h3><?php //echo $title; ?></h3>
					</div>
					<p><?php //echo $content; ?></p>
				</li>
			</a>-->
			
		<?php	//}	?>
		
		<a class="trab-item-link" target="_blank" href="<?php echo get_bloginfo('template_directory')."/portfolio.pdf"; ?>">
				<li class="trab-item-lista">
					<div class="trab-item-img-min" style="background-image: url('<?php echo get_bloginfo('template_directory') ?>/portfolio.jpg')">
						<h3>Portfólio</h3>
					</div>
					<p>Apresentação dos trabalhos desenvolvidos neste espaço.</p>
				</li>
		</a>
		
		<a class="trab-item-link" target="_blank" href="https://www.youtube.com/watch?v=HkVhGiEGZlk">
				<li class="trab-item-lista">
					<div class="trab-item-img-min" style="background-image: url('<?php echo get_bloginfo('template_directory') ?>/yt.jpg')">
						<h3>Dirty Art Club - The Beginning</br>(8 bit Remix)</h3>
					</div>
					<p>Minha primeira interpretação em 8-bit, "The Beginning" do Dirty Art Club.</p>
				</li>
		</a>
	</ul>
	</div>
</div>

<a class="page-anc" id="color-inv" href="#main-bot-container">
	<p>Sobre o autor </br>
	<span class="anc-icon"></span></p>
</a>