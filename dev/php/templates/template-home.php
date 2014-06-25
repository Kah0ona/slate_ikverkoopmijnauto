<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="Home-wrap">
		<div class="Slider">
			<!-- <img src="http://placehold.it/2000x300/114062/114062"></img> -->
			<div class="u-gridContainer">
				<div class="u-gridRow">
					<p>Lorem ipsum dolor sit amet!</p>
				</div>
			</div>
		</div>

		<div class="Usp">
			<div class="u-gridContainer">
				<div class="u-gridRow">
			  		<div class="Usp-imagewrap">
				 		<img class="Usp-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/computer.png" />
			    	</div>
			    	<div class="Usp-list">
			    		<h3>Lorem ipsum</h3>
			    		<ul>
			    			<li>Lorem ipsum dolor sit ametLorem ipsum dolor sit amet</li>
			    			<li>Lorem ipsum dolor sit ametLorem ipsum dol</li>
			    			<li>Lorem ipsum dolor sit ametLorem ipsum dolor sit am</li>
			    		</ul>
					</div>
				</div>
			</div>
		</div>
				
		<div class="Explain">
			<img src="http://placehold.it/2000x250/39a2fb/39a2fb"></img>
		</div>

		<div class="u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<!--<h2><?php the_title(); ?></h2>-->
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</div>	
</div>
<?php get_footer(); ?>
