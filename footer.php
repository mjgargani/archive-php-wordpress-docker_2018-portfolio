	<?php wp_footer(); ?>
	<?php	if ((is_front_page() || is_page( 'trabalhos' ) || have_posts()) && !is_page( array( 'orion'))) { ?>
		<link href="<?php echo get_bloginfo('template_directory'); ?>/main_style.css" rel="stylesheet">
	<?php } ?>
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script src="<?php echo get_bloginfo('template_directory')."/scripts.js" ?>"></script>
  </body>
</html>