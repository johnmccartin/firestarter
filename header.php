<!DOCTYPE html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php bloginfo('name');?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        	<!--[if lte IE 8]>
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
			<![endif]-->
			<!--[if gt IE 8]><!-->
				<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
			<!--<![endif]-->
			
	    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/style.css">
        <script src="<?php bloginfo('stylesheet_directory');?>/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico">
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
        
  		<?php wp_head(); ?>
    </head>
    
    	<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<div class="layout pure-g">
		
			<div class="sidebar pure-u-1 pure-u-md-1-3 pure-u-lg-1-4 padding-top-1 padding-left-2 padding-right-2 padding-bottom-1 border-mid border-bottom-1">
			
				<div class="header">
					<h1 class="brand-title">
						<a href="<?php bloginfo('url'); ?>" class="link-no-decor">
							<!-- <img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" /> -->
    						<?php bloginfo('name'); ?>
    					</a>
    				</h1>
    				
    				
    				<p id="description"><?php bloginfo('description'); ?></p>
    		
					<div class="pure-menu pure-menu-open border border-top-1 margin-top-1">
						<?php 
							$menu_args = array(
								'container' => false
							);
						?>
						<?php wp_nav_menu( $menu_args ); ?>
					</div>
				</div>
				
				
				
			</div><!--/.sidebar-->
    	
    	
    	<div class="content pure-u-1 pure-u-md-2-3 pure-u-lg-3-4 padding-top-1 padding-left-2 padding-right-2 padding-bottom-2">
    	
    	
    	<!-- end header.php -->