	  </div>
      <div id="rightcolumn">
	    <div><a id="rss-right" href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to this site'); ?>"></a></div>
		




		  
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


<h3>Categories</h3>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>

<h3>Archives</h3>
<ul>
<?php wp_get_archives( $args ); ?> 
</ul>

<h3>Tags</h3>
<?php wp_tag_cloud( $args ); ?> 



		<?php endif; ?>
	
		


	  </div>
	  <div class="clear"></div>
	</div>