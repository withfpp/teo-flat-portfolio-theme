<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
				



 <div class="container">
      <div class="row row-offcanvas row-offcanvas-left">
		<!-- top navbar -->
	    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
	       <div class="container">
	        <div class="t-center">
	           	<p></p>
	           </div>
	    	<div class="navbar-header">
	           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	             <span class="icon-bar"></span>
	           </button>
	           <a class="navbar-brand" style="color:white;"href="<?php echo home_url(); ?>">Responsive? YES!</a>
	    	</div>
	       </div>
	    </div>

		<!-- sidebar -->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sticky" id="sidebar" role="navigation">
        <div class="info clearfix">
			<div id="name" class="t-center"><a href="<?php echo home_url(); ?> ">Teo Kim</a></div>
			<div id="info-img" class="t-center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/teo.png" alt="teo kim image">
			</div>
			<div id="info" class="t-center">I love what I do. <br>I am happy with coding.</div>
		</div>
        	<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
           <!--  <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>              
            </ul> -->
        </div>


		
