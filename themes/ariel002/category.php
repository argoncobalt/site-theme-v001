<?php get_header(); ?>		

		<div class="desktop"><?php get_sidebar(); ?> </div>
		<div id="content" class="archives">

		<p class="page-title"><?php
		    printf( __( '<a href="/ariel/blog">Blog</a> <i class="fa fa-caret-right"></i> Categories <i class="fa fa-caret-right"></i> <b>%s</b>', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
		?></p>
		
		<?php if(is_category()) { ?>
		<!--<div class="archive_title">
			<?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
		</div><!--//archive_title-->
		<?php } ?>
		
		<?php
		global $wp_query;
		$args = array_merge( $wp_query->query, array( 'posts_per_page' => 7 ) );
		query_posts( $args );        
		while (have_posts()) : the_post(); ?>                    			
			
			<div class="home_wide_box">
				<!--<div class="home_wide_box_img">
					<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
						<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
					<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
						<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=085e17" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } else { ?>								
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-box-wide'); ?></a>
					<?php } ?>
				</div><!--//home_wide_box_img-->
				<div class="home_wide_box_right">
					<div class="left">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						
						<p class="post_details"><?php the_time('F j, Y g:i'); ?> <i class="fa fa-arrows"></i> <?php the_category(', '); ?> <!--|  <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?>--></p>
						
						<p><?php echo ds_get_excerpt('328'); ?></p>
					</div>
					<div class="clear"></div>
				</div><!--//home_wide_box_right-->
				<div class="clear"></div>
			</div><!--//home_wide_box-->		
						
		<?php endwhile; ?>
		
		</div><!--//content-->
		
		<div class="load_more_cont">
			<?php next_posts_link('LOAD MORE'); ?>
		</div><!--//load_more_cont-->	
		
		<div class="clear"></div>		
		
		<div class="mobile"><?php include( TEMPLATEPATH . '/sidebar.php'); ?></div>		
		
<?php get_footer(); ?> 		