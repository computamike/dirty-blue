<?php get_header(); ?>



<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>



	    <div class="post" id="post-<?php the_ID(); ?>">

	    <div class="post-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><span><a href="<?php comments_link(); ?>"><?php comments_number('no comment','1 comment','% comments'); ?></a></span><div style="clear:both;"></div></div>

		<?php the_content("<br />" . "Read more.."); ?>

		


		</div>

		<?php endwhile; ?>

		<?php else : ?>



		<h2>Not Found</h2>

		<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>



		<?php endif; ?>



<?php get_sidebar(); ?>

<?php get_footer(); ?>