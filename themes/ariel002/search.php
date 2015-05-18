<?php get_header(); ?>	
		
		<?php
		global $wp_query;
		$args = array_merge( $wp_query->query, array( 'posts_per_page' => -1 ) );
		query_posts( $args );        
		while (have_posts()) : the_post(); ?>                    			
			
			<div class="home_wide_box">
				<div class="home_wide_box_img">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-box-wide'); ?></a>
				</div><!--//home_wide_box_img-->
				<div class="home_wide_box_right">
					<div class="left">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
						<p class="post_meta">By <?php the_author(); ?> | <?php the_time('F js, Y'); ?> | <?php the_category(', '); ?> |  <?php comments_number( '0 Comment', '1 Comment', '% Comments' ); ?></p>
						
						<p><?php echo ds_get_excerpt('328'); ?></p>
					</div>
					<a class="right" href="<?php the_permalink(); ?>">
						<div class="link_cont">
							<p class="link_inside_cont">&gt;</p>
						</div>
					</a>
					<div class="clear"></div>
				</div><!--//home_wide_box_right-->
				<div class="clear"></div>
			</div><!--//home_wide_box-->			
						
		<?php endwhile; ?>
		
		<div class="load_more_cont">
			<a href="#">LOAD MORE</a>
		</div><!--//load_more_cont-->		
		
		<div class="clear"></div>		
		
<?php get_footer(); ?> 		