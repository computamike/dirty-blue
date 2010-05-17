<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<?php if ( is_singular() ) wp_enqueue_script( ‘comment-reply’ ); wp_head(); ?>


<?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>
<h1 id="logo_text"><a href="<?php echo get_option('home'); ?>"><?php echo bloginfo('name'); ?></a></h1>
<p id="tagline_text"><?php echo get_bloginfo ( 'description' );  ?></p>

 <div id="wrap">
    <div id="header">
	  <span class="navi nav-left">
</span>
<div id="nav">

	    <div id="page">
		  <ul>
		    <li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<?php wp_list_pages('title_li=&depth=1'); ?>
		  </ul>
		</div>	
		<div id="search" class="t1 tab">
	      <form method="get" action="">
		  <div class="t1"><input id="textfield" name="s" type="text" value=""/>
		  <input id="searchbutton" name="submit" type="image" src="<?php echo bloginfo(stylesheet_directory)?>/img/search.png" /></div>
		  </form>
		</div>	
	      </div>
 <span class="navi nav-right">
</span>
	</div>
    <div id="content">
	  <div id="leftcolumn">