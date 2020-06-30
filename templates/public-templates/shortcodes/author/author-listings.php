<?php
/**
 * @author  AazzTech
 * @since   7.0
 * @version 7.0
 */
?>
<div class="row">
	<div class="col-md-12">
		<div class="atbd_author_listings_area">

			<?php if ($display_title){ ?>
				<h1><?php esc_html_e("Author Listings", 'directorist'); ?></h1>
			<?php } ?>

			<?php if($display_cat_filter) {?>
				<div class="atbd_author_filter_area">
					<?php
                    /*
                     * @since 6.2.3
                     */
                    do_action('atbpd_before_author_listings_category_dropdown', $listings->query);
                    ?>

                    <div class="atbd_dropdown">
                    	<a class="atbd_dropdown-toggle" href="#" id="dropdownMenuLink"><?php esc_html_e("Filter by category", 'directorist'); ?> <span class="atbd_drop-caret"></span></a>

                    	<div class="atbd_dropdown-menu atbd_dropdown-menu--lg" aria-labelledby="dropdownMenuLink">
                    		<?php
                    		foreach ($categories as $category) {
                    			$active = (isset($_GET['category']) && ($category->slug == $_GET['category'])) ? 'active' : '';
                    			printf('<a class="atbd_dropdown-item %s" href="%s">%s</a>', $active, add_query_arg('category', $category->slug), $category->name);
                    		}
                    		?>
                    	</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="atbd_authors_listing">
	<?php if ($display_listings) { ?>
		<div class="row" <?php echo (get_directorist_option('grid_view_as', 'normal_grid') !== 'masonry_grid') ? '' : 'data-uk-grid'; ?>>
			<?php
			if ($listings->query->have_posts()) {
				$listings->loop_template('grid');
			}
			else { ?>
				<p class="atbdp_nlf"><?php esc_html_e('No listing found.', 'directorist'); ?></p>
				<?php
			}

			if ( $display_pagination ) {
				echo atbdp_pagination($listings->query, atbdp_get_paged_num());
			}
			?>
		</div>
	<?php } ?>
</div>