<!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>	
<meta charset="utf-8" />
	<title><?php wp_title(' : ', true, 'right'); ?> <?php bloginfo('name'); ?></title> 
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->              		
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mobile.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/scrollTop.css" type="text/css" charset="utf-8"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/responsive-nav.css" type="text/css" charset="utf-8"/>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<?php $shortname = "creative"; ?>
	<style type="text/css">
	body {
	<?php if(get_option($shortname.'_background_image_url','') != "") { ?>
		background: url('<?php echo get_option($shortname.'_background_image_url',''); ?>') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;
	<?php } ?>		
	<?php if(get_option($shortname.'_custom_background_color','') != "") { ?>
		background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>;
	<?php } ?>	
	}
	</style>

	<script>
		$( document ).ready(function() {

			/*$('.menu-mobile').on('click', function(event){
		    	event.preventDefault();
		    	// create menu variables
		    	var slideoutMenu = $('.slideout-menu');
		    	var slideoutMenuWidth = $('.slideout-menu').width();
		    	
		    	// toggle open class
		    	slideoutMenu.toggleClass("open");
		    	
		    	// slide menu
		    	if (slideoutMenu.hasClass("open")) {
			    	slideoutMenu.animate({
				    	left: "0px"
			    	});	

			    	$( ".menu-mobile" ).html( "<a href='#'><i class='fa fa-times'></i></a>" );
		    	} else {
			    	slideoutMenu.animate({
				    	left: -slideoutMenuWidth
			    	}, 250);

			    	$( ".menu-mobile" ).html( "<a href='#'>&#9776;</a>" );
		    	}
		    });


			$('.slideout-menu-toggle').on('click', function(event){
			    	event.preventDefault();
			    	// create menu variables
			    	var slideoutMenu = $('.slideout-menu');
			    	var slideoutMenuWidth = $('.slideout-menu').width();
			    	
			    	// slide menu

				if (slideoutMenu.hasClass("open")) {
					slideoutMenu.animate({
					    	left: -slideoutMenuWidth
				    	}, 250);

					$( ".menu-mobile" ).html( "<a href='#'><i class='fa fa-times'></i></a>" );
			    	} 
			    	
		    	slideoutMenu.removeClass("open");
		    	$( ".menu-mobile" ).html( "<a href='#'>&#9776;</a>" );

		    }); */

			$(".projects-button").click(function() {

				$("#drawing, #painting, #ui-ux, #pcomp, #mobile, #craft, #silkscreen, #visual, #industrial").removeClass("projects_selected");

			    var buttonID = this.id;
			    var projectType = "#" + buttonID + "-container";

			    $("#drawing-container, #ui-ux-container, #craft-container, #silkscreen-container, #painting-container, #mobile-container, #industrial-container, #visual-container, #pcomp-container").fadeOut(300, function() {
					$("#drawing-container, #ui-ux-container, #craft-container, #silkscreen-container, #painting-container, #mobile-container, #industrial-container, #visual-container, #pcomp-container").addClass("hidden");
			    });

			    $("#" + buttonID).addClass("projects_selected");

			    $(projectType).fadeIn(300, function() {
			    	$(projectType).removeClass("hidden");
			    });
			});

		});

	</script>

</head>
<body>
<header id="header">
	<div class="container">

		<div class="logo-container">
			<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg" alt="Ariel Cotton The Electronic Sketchbook logo"></a>
		</div>
	
		<div class="menu_container">
			<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
		</div>

		<div class="logo-tablet">
			<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/header-robot.svg" alt="Ariel Cotton The Electronic Sketchbook logo"></a>
		</div>

		<div class="menu-mobile" id="mobile-icon">

			<div class="logo-mobile">
				<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/header-robot.svg" alt="Ariel Cotton The Electronic Sketchbook logo"></a>
			</div>
			<nav class="nav-collapse">
				<div class="double-rule"></div>
				<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
			</nav>
			<!--<a href="#">&#9776;</a>-->
		</div>
		
		<!--<div class="header_right">
			<?php if(get_option($shortname.'_twitter_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_twitter_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.jpg" alt="twitter" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_facebook_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_facebook_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fb-icon.jpg" alt="fb" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_google_plus_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/gplus-icon.jpg" alt="gplus" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_dribbble_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.jpg" alt="Instagram" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_pinterest_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.jpg" alt="pinterest" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_linkedin_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_linkedin_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linked-in.jpg" alt="Linkedin" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_vimeo_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_vimeo_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/vimeo.jpg" alt="Vimeo" /></a>
			<?php } ?>
			<?php if(get_option($shortname.'_youtube_link','') != '') { ?>
				<a href="<?php echo get_option($shortname.'_youtube_link',''); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.jpg" alt="Youtube" /></a>
			<?php } ?>
			
			
			<div class="header_search_cont">
				<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<input type="text" placeholder="SEARCH" name="s" id="s" />
				<INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.jpg" BORDER="0" ALT="Submit Form">
				</form>
			</div>
		</div>-->
		<!--//header_right-->
		
		<div class="clear"></div>

		
	<div class="double-rule"></div>

	</div><!--//container-->

	<!--<div class="slideout-menu">
		<?php wp_nav_menu('theme_location=header-menu&container=false&menu_id='); ?>
	</div>-->

</header><!--//header-->

<div id="main_cont">
	<div class="container">