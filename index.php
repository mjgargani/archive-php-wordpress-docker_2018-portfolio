<?php get_header(); ?>
	<article id="main-midbot-container">

			<?php
			
			if (is_front_page() || is_page( 'temas' )) {
				get_template_part( 'temas', get_post_format() ); 
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

	</article> <!-- /#main-midbot-container-->	
<?php get_footer(); ?>