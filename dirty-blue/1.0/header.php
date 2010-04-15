<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>"  />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>"  />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<script src="<?php echo bloginfo(stylesheet_directory) .'/script/jquery.js'; ?>" type="text/javascript"></script>
<script src="<?php echo bloginfo(stylesheet_directory) .'/script/fader.js'; ?>" type="text/javascript"></script>
<!--[if IE 6]>
<script src="<?php echo bloginfo(stylesheet_directory) .'/script/jquery.pngFix.pack.js'; ?>" type="text/javascript"></script>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script>
<link rel="stylesheet" href="<?php echo bloginfo(stylesheet_directory) .'/style-ie6.css'; ?>" type="text/css" media="screen" />
<![endif]-->

<?php wp_head(); ?>
</head>

<body>
  <div id="wrap">
    <div id="header">
	  <span class="navi nav-left"></span><div id="nav">
	    <div id="page">
		  <ul>
		    <li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li=&depth=1'); ?>
			<li><a href="#" class="t1 navswitch">Search</a></li>
			<li><a href="#" class="t2 navswitch">RSS</a></li>
		  </ul>
		</div>	
		<div id="search" class="t1 tab">
	      <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		  <div class="t1"><input id="textfield" name="s" type="text" value=""/>
		  <input id="searchbutton" name="submit" type="image" src="<?php echo bloginfo(stylesheet_directory)?>/img/search.png" /></div>
		  </form>
		</div>	
	    <div id="rss" class="t2 tab">
	      <span>RSS</span> | Subscribe to our <span><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to this site'); ?>">Articles</a></span> | <span><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>">Comments</a></span>
		</div>	

	  </div><span class="navi nav-right"></span>
	  <p style="float:left; margin: 10px 0 0 40px;"><?php get_bloginfo ( 'description' );  ?></p>
	  <a id="logo" href="<?php echo get_option('home'); ?>"></a>
	</div>
    <div id="content">
	  <div id="leftcolumn">