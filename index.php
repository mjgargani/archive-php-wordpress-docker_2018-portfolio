<?php get_header(); ?>
	
	<?php	if (is_front_page() || is_page( 'temas' )) { ?>
		<section id="main-midtop-container">
			
			<div class="main-gen-container" id="logo" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/logo.png')"></div>
			
			<a class="page-anc" href="#main-midbot-container">
				<p><?php	echo get_post_field('post_content', 65);	?> </br>
				<span class="anc-icon"></span></p>
			</a>
			
		</section> <!-- /#main-midtop-container-->
	<?php } ?>
	
	<article id="main-midbot-container" style="background-image:  url('<?php echo get_bloginfo('template_directory'); ?>/theme_bg.gif')">

			<?php
			
			if (is_front_page() || is_page( 'temas' )) {
				get_template_part( 'trabalhos', get_post_format() ); 
			}elseif (is_page('orion')){
				get_template_part( '/temas/orion/orion', get_post_format() );
			}elseif ( have_posts() ) { 
				while ( have_posts() ) {
					the_post(); 
					get_template_part( 'content', get_post_format() ); 
					}
			}else{
					get_template_part( 'ops', get_post_format() );
			}
			?>
			
			<a class="page-anc" id="color-inv" href="#main-bot-container">
				<p>Sobre o autor </br>
				<span class="anc-icon"></span></p>
			</a>
			
	</article> <!-- /#main-midbot-container-->

	<?php	if (is_front_page() || is_page( 'temas' )) { ?>
		<footer id="main-bot-container" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/sobre.jpg')">
		
			<div class="main-gen-container v-align-div">
				<div class="outro-conteudo">
					<h1><?php	echo get_post_field('post_title', 8);	?></h1>
					<p><?php	echo get_post_field('post_content', 8);	?></p>
				</div>
			</div>
			
			<a class="page-anc" href="#main-midtop-container">
				<p>voltar ao topo </br>
				<span class="anc-icon"></span></p>
			</a>
			
		</footer><!-- /#main-bot-container -->
	<?php } ?>

<?php get_footer(); ?>