<?php get_header(); ?>


<?php if(have_posts()): ?>
		<?php while(have_posts()): the_post(); ?>
				<h3><?php the_title(); ?></h3><i>Created on <?php the_time('F j, Y'); ?> </i>
				<?php the_category(); ?>
				<p><?php the_title(); ?></p>
		<?php endwhile; ?>	
<?php endif; ?>

<?php get_footer(); ?>