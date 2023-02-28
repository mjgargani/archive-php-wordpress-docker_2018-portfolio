<?php get_header(); ?>
	
<section id="main-midtop-container">
	
	<div id="logo" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/logo.png')"></div>
	
	<a class="page-anc" href="#main-midbot-container">
		<p>Projetos </br>
		<span class="anc-icon"></span></p>
	</a>
	
</section> <!-- /#main-midtop-container-->
	
<article id="main-midbot-container" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/theme_bg.gif')">

		<?php		get_template_part( 'trabalhos', get_post_format() ); 	?>
		
</article> <!-- /#main-midbot-container-->

<footer id="main-bot-container" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/sobre.jpg')">

	<div class="main-gen-container v-align-div">
		<div class="outro-conteudo">
			<h1><?php	echo get_post_field('post_title', 7);	?></h1>
			<p><?php	echo get_post_field('post_content', 7);	?></p>
		</div>
	</div>
	
	<a class="page-anc" href="#main-midtop-container">
		<p>voltar ao topo </br>
		<span class="anc-icon"></span></p>
	</a>
	
</footer><!-- /#main-bot-container -->

<?php get_footer(); ?>