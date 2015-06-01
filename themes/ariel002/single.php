<?php get_header(); ?>	
		
		<div class="single_left">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h2 class="single_title"><?php the_title(); ?></h2>
				<p class="post_details"><?php the_time('F j, Y g:i') ?> <i class="fa fa-arrows"></i> <?php the_category(', ') ?></p>
				
				<div class="single_inside_content blog_post">
				
					<?php the_content(); ?>
					
				</div><!--//single_inside_content-->
				
				<div class="next_prev_cont">
					<div class="left">
						 <?php previous_post_link('%link', '<div class="left"><i class="fa fa-caret-left fa-lg"></i></div><div class="right">Previous post<br /><b>%title</b></div>'); ?> 
					</div>
					<div class="right">
						 <?php next_post_link('%link', '<div class="left">Next post <br /><b>%title</b></div><div class="right"><i class="fa fa-caret-right fa-lg"></i></div>'); ?> 
					</div>
					<div class="clear"></div>
				</div><!--//next_prev_cont-->
				
				<?php comments_template(); ?>	
				
			<?php endwhile; else: ?>
			
				<h3>Sorry, no posts matched your criteria.</h3>
			<?php endif; ?>                    									
	
		</div><!--//single_left-->
		
		<div class="single_sidebar"><?php get_sidebar(); ?></div>
		
		<div class="clear"></div>
		
<?php get_footer(); ?> 		