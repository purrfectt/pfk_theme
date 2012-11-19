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
											<div id="display_text">
												<div id="display_text_box">
													<div id="text1">
														<?php the_content(); ?>
													</div>
												</div>
											</div>
											<div id="display_mainphoto">
												<div id="mainphoto">
											  		<div id="Layer11"><?php the_post_thumbnail( 'pfk-page' ); ?></div>
												</div>
											</div>
											<div id="display_subnav">
												<div id="subnav_rows3"><?php the_title(); ?></div>
											</div>
										</div>
									</td>
								    <td align="left" valign="top">&nbsp;</td>
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