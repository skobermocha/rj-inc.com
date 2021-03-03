<?php
/**
 * Template: header.php 
 *
 * @package WPFramework
 * @subpackage Template
 */
?>
<!-- HEADER FILE -->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="WordPress" />
	    <meta name="framework" content="WP Framework" />
        
        <title><?php semantic_title(); ?></title>
        <meta name="<?php bloginfo( 'description' ); ?>" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Favicon: Browser + iPhone Webclip -->
<link rel="shortcut icon" href="<?php echo IMAGES . '/favicon.ico'; ?>" />
<link rel="apple-touch-icon" href="<?php echo IMAGES . '/iphone.png'; ?>" />
        
       <!-- Stylesheets -->
       <link rel="stylesheet" href="css/normalize.css">
       <link rel="stylesheet" href="css/main.css">
       <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="<?php echo CSS . '/print.css'; ?>" type="text/css" media="print" />
<link rel="stylesheet" href="<?php echo CSS . '/skins/' . get_option('unisphere_skin') . '/skin.css'; ?>" type="text/css" media="screen, projection" />

        <!-- javascript -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <!-- Links: RSS + Atom Syndication + Pingback etc. -->
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo( 'rss_url' ); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo( 'atom_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
       <!-- Theme Hook -->
       <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); // loads the javascript required for threaded comments ?>
	   <?php wp_head(); ?>

    </head>
    
    <body>
        <div id="header">
            <div class="logo">
                <a href="#"><img src="img/logo.png" alt="Blog Name"></a>
            </div>
            <div class="nav">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Schools</a>
                <a href="#">Churches</a>
                <a href="#">Hospitals</a>
                <a href="#">Contact</a>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        