<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid ring-page">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $pfk_story = get_field('pfk_story'); ?>

					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'pfk-featured-home' ); 
								// not sure why this isn't working yet
							?>
						
							<div class="hero-unit" style="background-image: url('<?php echo $featured_src; ?>'); background-repeat: no-repeat; background-position: 0 0;">

								<?php the_post_thumbnail( 'pfk-featured-home' ); ?>
							
							</div>

						</header>

						<section class="row-fluid post_subheader">
							<div class="span8 box" id="photo-box">
								<img src="<?php the_field('pfk_main_image'); ?>" alt="The Ring of Kerry"/>
								<p>Reconnected...</p>
							</div>
							<div class="span4 box">
								<?php
									$args = array( 'post_type' => 'product', 'posts_per_page' => 1 );
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
											
											<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>
										
								<?php endwhile; ?>
							</div>
						</section>
						
						<section class="row-fluid post_content box">
						
							<div class="span8 offset2">
						
								<?php the_content(); ?>
								
							</div>
													
						</section>

						<section class="row-fluid post_story">
							<div class="span4 box">
								Test
							</div>
							<div class="span8 box">
								<?php echo $pfk_story; ?>
							</div>
						
						<footer>
							<div class="row-fluid box">
								<div class="span8 offset2">
									Testimonials
								</div>
							</div>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "pfk"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "pfk"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>