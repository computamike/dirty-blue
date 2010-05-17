<?php get_header(); ?>

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

	    <div class="post" id="post-<?php the_ID(); ?>">
	    <div class="post-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><span><a href="<?php comments_link(); ?>"><?php comments_number('no comment','1 comment','% comments'); ?></a></span></div>
		<?php the_content("<br />" . "Read more.."); ?>
		<div class="post-meta">
		  <span class="author1"><?php the_author_posts_link(); ?>&nbsp;<?php edit_post_link(__(' Edit'), '|', ''); ?></span> 
		  <span class="date1"><?php the_time('M j, Y'); ?></span> 
		  <img src="wp-content/themes/dirty-blue-theme/img/document.png" style="margin:0; padding:0 5px 0 0; border:0; background:transparent; float:left;"/><span class="category1"><?php the_category(', ') ?></span></div>
		</div>

		<?php endwhile; ?>
				<div class="navigation">
				<?php next_posts_link('&laquo; Older Entries') ?>
	                        <?php previous_posts_link('Newer Entries &raquo;') ?>	
				</div>
		<?php else : ?>

		<h2>Not Found</h2>
		<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

		<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


