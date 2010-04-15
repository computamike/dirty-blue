<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php if (is_category()) : ?>
	<h4 class="pagetitle">Archive for the &#8216; <?php single_cat_title(); ?> &#8217; Category</h4>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
	<h4 class="pagetitle">Blog Archives</h4>
	<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>

	    <div class="post" id="post-<?php the_ID(); ?>">
	    <div class="post-header"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2><span><a href="<?php comments_link(); ?>"><?php comments_number('no comment','1 comment','% comments'); ?></a></span></div>
		<?php the_content("<br />" . "Read more.."); ?>
		<div class="post-meta">
		  <span class="author"><?php the_author_posts_link(); ?>&nbsp;<?php edit_post_link(__(' Edit'), '|', ''); ?></span> 
		  <span class="date"><?php the_time('M j'); ?></span> 
		  <span class="category"><?php the_category(', ') ?></span></div>
		</div>

		<?php endwhile; ?>
				<div class="navigation">
					<?php posts_nav_link('','','&laquo; Previous Entries') ?>
					<?php posts_nav_link('','Next Entries &raquo;','') ?>
				</div>
		<?php else : ?>

		<h2>Not Found</h2>
		<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

		<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>