<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
		
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
							
							<div class="page-header"><h1 class="page-title" itemprop="headline"></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td align="left" valign="top">&nbsp;</td>
							    <td width="950" align="left" valign="top">
								<div id="body_pieces_main_table">
									<div id="display_thumbs">

									<?php 
										$args = array(
											'post_parent'    => $post->ID,			// For the current post
											'post_type'      => 'attachment',		// Get all post attachments
											'post_mime_type' => 'image',			// Only grab images
											'order'			 => 'ASC',				// List in ascending order
											'orderby'        => 'menu_order',		// List them in their menu order
											'numberposts'    => -1,					// Show all attachments
											'post_status'    => null,				// For any post status
										); 

										$attachments = get_posts($args);
									?>
									<?php if ($attachments) { ?>
											<ul id="ig-thumbs">
												<?php 
												$count = 1;
												foreach ($attachments as $attachment) {
													$thumb_attr = array(
														'class' => "thumb",
														); ?>
													<li class="thumb_pic" id="ig-thumb-<?php echo $count; ?>">
														<?php echo wp_get_attachment_image($attachment->ID, 'pfk-thumb-80', false, $thumb_attr); ?>
													</li>
													<?php $count++;
												} ?>
											</ul>
									<?php } else { ?>
										<div id="display_text_box">
											<div id="text1">
												<?php the_content(); ?>
											</div>
										</div>
									<?php } ?>
									</div>


									<div id="display_mainphoto">
										<div id="mainphoto">
										  <div id="Layer1">
												<div id="layer_row1">
													<?php if ( has_post_thumbnail() ) {
														echo the_post_thumbnail( 'pfk-page', array('id' => 'ig-hero')); 
													} else { ?>
														<img src="<?php echo get_template_directory_uri(); ?>/library/images/default-image.png" id="ig-hero" />
													<?php }	?>
												</div>
												<!-- Image Title -->
												<div id="layer_row2">
												  <h4 id="ig-title"></h4>
												</div>
										  </div>
										</div>
									</div>

									<div id="display_subnav">
									<div id="subnav_rows">
										<div id="subnav_nav">
											<?php pfk_gallery_nav(); // Adjust using Menus in Wordpress Admin ?>
										</div>
									</div>
									<div id="subnav_rows2"><?php the_title(); ?></div>
									</div>
								</div>
								</td>
							    <td align="left" valign="top" background="images/back_line2.gif">&nbsp;</td>
							  </tr>
							</table>
					
						</section> <!-- end article section -->
						
					</article> <!-- end article -->
					
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
        
			</div> <!-- end #content -->

<?php get_footer(); ?>