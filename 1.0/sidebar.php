	  </div>
      <div id="rightcolumn">
	    <div><a id="rss-right" href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to this site'); ?>"></a></div>
		<h3>Categories</h3>
		  <ul>
			<?php wp_list_cats('sort_column=name&optioncount=0'); ?>
		  </ul>

		<h3>Blogroll</h3>
		  <ul>
			<?php get_links(-1, '<li>', '</li>', ' - '); ?>
		  </ul>
		  
		<h3>Archives</h3>
		  <ul>
			<?php wp_get_archives('type=monthly&show_post_count=0'); ?>
		  </ul>
		  
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	
		<div id="ads-right">
		  <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad125.jpg" alt="Ad 1" /></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad125.jpg" alt="Ad 2" /></a>
		  <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad125.jpg" alt="Ad 3" /></a><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad125.jpg" alt="Ad 4" /></a>
	    </div>
	  </div>
	  <div class="clear"></div>
	</div>