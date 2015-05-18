	</div><!--//container-->
</div><!--//main_cont-->
<?php $shortname = "creative"; ?>
<footer id="footer">
	<SCRIPT LANGUAGE="JavaScript"> 
		<!-- 
		today=new Date(); 
		y0=today.getFullYear();
		// end hiding ---> 
	</SCRIPT>
	<div class="container">
	
		<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>		
		
		<?php endif; ?>
		
		<div class="clear"></div>
		
		<div class="copyright_text">
			Website design and portfolio work &#169; 
			<a href="mailto:ariel@electricstud.io">Ariel Cotton</a> <SCRIPT LANGUAGE="JavaScript"> 
			<!--- Hide from old browsers 
			document.write(y0); 
			// end hiding ---> 
		</SCRIPT> 
		</div><!--//copyright_text-->

		<div class="social-media">
			<a href="https://www.facebook.com/arielcott0n"target="blank"><i class="fa fa-facebook-official fa-lg"></i></a>
			<a href="https://instagram.com/argoncobalt/"target="blank"><i class="fa fa-instagram fa-lg"></i></a>
			<a href="https://twitter.com/argoncobalt"target="blank"><i class="fa fa-twitter fa-lg"></i></a>
			<a href="https://github.com/argoncobalt"target="blank"><i class="fa fa-github-alt fa-lg"></i></a>
		</div><!--//footer_box-->
		
	</div><!--//container-->
</footer><!--//footer-->
<?php wp_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/load-more.js"></script>
<script src="../wp-content/themes/ariel002/js/readmore.js"></script>
<script>
$(window).scroll(function() {
    if ($(this).scrollTop() > 5){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});
</script>
<script>
	$('article').readmore({speed: 500});
</script>
</body>
</html>