<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-stacked">
    <fieldset>
		<div class="clearfix">
			<div class="input-append input-prepend">
				<span class="add-on"><i class="icon-search"></i></span><input type="text" name="s" id="search" placeholder="<?php _e("Search","pfk"); ?>" value="<?php the_search_query(); ?>" /><button type="submit" class="btn btn-primary"><?php _e("Search","pfk"); ?></button>
			</div>
        </div>
    </fieldset>
</form>