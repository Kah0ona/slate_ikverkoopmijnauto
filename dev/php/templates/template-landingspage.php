<?php
/*
Template Name: Landingspage
*/
?>

<?php get_header(); ?>

<div class="Home-wrap">
		<div class="Slider">
			<div class="Slider-bg">
			<!-- <img src="http://placehold.it/2000x300/114062/114062"></img> -->
			<div class="u-gridContainer">
				<div class="u-gridRow">
					 

					<!--  <div class="Logo-img">
  				 		 <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.svg" /></a>
  				 		 <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_wit_footer.svg" /></a>
   					 </div> -->


					<h2 class="Slider-tagline">Verkoop uw auto razendsnel en super simpel</h2>
					<h4 class="Slider-tagline2">Altijd binnen één dag het beste bod. Helemaal gratis en 100% vrijblijvend.</h4>
				</div>
			</div>
			</div>
		</div>

		<div class="Usp">
			<div class="u-gridContainer">
				<div class="u-gridRow" style="position: relative;">
			  		<div class="Usp-imagewrap">
				 		<img class="Usp-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/computer.png" />
			    	</div>

			    	<div class="Directverkoop-imagewrap">
				 		<a href="auto-verkopen"><img class="Directverkoop-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/directverkopen.png" /></a>
			    	</div>

			    	<div class="Usp-list">
			    		<!-- <h3 class="Usp-title">Lorem ipsum</h3> -->
			    		<ul class="Usp-text">
			    			<li class="icon check">Gegarandeerd: betrouwbaar & veilig</li>
			    			<li class="icon check">Uitgebreid: netwerk van erkende auto-inkopers</li>
			    			<li class="icon check">Helemaal gratis: en niet tot verkoop verplicht</li>
			    			<li class="icon check">Geen gedoe: maar wel binnen 24 uur een eerlijk bod</li>
			    		</ul>
					</div>
				</div>
			</div>
		</div>
				  
		<div class="Explain">
			<div class="u-gridContainer">
				<div class="u-gridRow">
					<h3 class="Explain-title">Hoe het werkt</h3>
					<div class="Explain-box">
						<div class="Explain-header-Autogegevens"></div>
						<p class="Explain-box-title">Autogegevens</p>
						<p class="Explain-box-text">U vult de kenmerken van uw auto in, zoals merk, model en de uitvoering.</p>
					</div>

					<div class="Explain-box">
						<div class="Explain-header-Persoonsgegevens"></div>
						<p class="Explain-box-title">Contactgegevens</p>
						<p class="Explain-box-text">U vult uw contactgegevens in, zodat we u kunnen contacteren.</p>
					</div>

					<div class="Explain-box">
						<div class="Explain-header-Info"></div>
						<p class="Explain-box-title">Aanvullende informatie</p>
						<p class="Explain-box-text">U geeft antwoord op enkele korte vragen over uw auto.</p>
					</div>

					<div class="Explain-box">
						<div class="Explain-header-Verkoop"></div>
						<p class="Explain-box-title">Klaar voor de verkoop!</p>
						<p class="Explain-box-text">Wij plaatsen uw auto in een gesloten, online veiling. Hier brengen onze erkende auto-inkopers er een bod op uit.  Binnen 1 dag geven wij het beste bod aan u door. U beslist of u uw auto wel of niet wilt verkopen. Dit alles kost u niets en is geheel vrijblijvend!</p>
					</div>
				</div>

				<a href="/auto-verkopen"><div class="Explain-button">
					<p>Auto verkopen</p>
				</div></a>
			</div>
		</div>
		<div class="Content Content--landingspage">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="u-gridContainer" id="post-<?php the_ID(); ?>">
				<div class="u-gridRow">
					<div class="u-gridCol8">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="Explain-button Explain-button--inverse">
							<p>
								<a href="/auto-verkopen">
									Auto verkopen
								</a>
							</p>
						</div>
					</div>
				</div>
			</article>
			<?php endwhile; endif; ?>
		</div>
		<div class="Customers">
			<div class="u-gridContainer">
				<div class="u-gridRow">
					<h3 class="Explain-title">Onze klanten vertellen</h3>
					<?php echo do_shortcode('[ikverkoopmijnauto_ads]'); ?>
				</div>  
			</div>
		</div>	
			<!-- <img src="http://placehold.it/2000x250/39a2fb/39a2fb"></img> -->
		</div>

		
</div>
<?php get_footer(); ?>

