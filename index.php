<?php get_header(); ?>


<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); 
			   //echo "Post Format:".get_post_format(); ?>
				<?php get_template_part('content'); 
				//it includes content.php 
				// get_template_part('content', get_post_format()); it will include content-{format}.php file eg: if the post format is image. it will give content-image.php so we need to create this file in base directory and put code of content in it according to our need. 
				?>

		<?php endwhile; ?>	
<?php endif; ?>

<?php get_footer(); ?>