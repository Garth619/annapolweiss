<div class="sidebar">
	
	<div class="my_newsletter">
		
		<span class="large_header">follow our latest new updates</span><!-- large_header -->
		
		<div class="newsletter_form">
			
		
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
			
			
		</div><!-- newsletter_form -->
		
	</div><!-- my_newsletter -->
	
	<div class="my_recent_posts">
		
		<span class="sub_header">Recent Posts</span><!-- sub_header -->
		<span class="blog_greyline"></span><!-- blog_greyline -->
		
		<ul>
		
		<?php dynamic_sidebar('recent-posts-area'); ?>
		

		</ul>
		
				
	</div><!-- my_recent_posts -->
	
	<div class="my_posts_by_topic">
		
		<span class="sub_header">posts by topics</span><!-- sub_header -->
		<span class="blog_greyline"></span><!-- blog_greyline -->
		
		<ul>
			<?php dynamic_sidebar('topics-widget-area'); ?>
		</ul>
		

	</div><!-- my_posts_by_topic -->
	
		
</div><!-- sidebar -->