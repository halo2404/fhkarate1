<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-3">

			<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
			
		</div>
		
		<div class="col-md-9">
			<div id ="primary" class="site-content">
				<div id="content" role="main">
	
				<?php 
					if( have_posts() ):
					
						while( have_posts() ): the_post(); ?>
							
							<h1><?php the_title(); ?></h1>
							
							<p><?php the_content(); ?></p>
					
						<?php endwhile;
						
				    endif;
				?>
				
				</div>
			</div>
		</div>

<?php get_footer(); ?>
