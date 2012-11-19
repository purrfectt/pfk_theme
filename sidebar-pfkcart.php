				<div id="pfkcart" class="fluid-sidebar sidebar" role="complementary">
				
					<?php if ( is_active_sidebar( 'pfkcart' ) ) : ?>

						<?php dynamic_sidebar( 'pfkcart' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","pfk"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>