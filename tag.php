<?php get_header(); ?>
 
        <div id="container">
            <div id="content">
 
                <?php the_post(); ?>          

				<h1 class="page-title"><?php _e( 'Tag Archives:', 'hbd-theme' ) ?> <span><?php single_tag_title() ?></span></h1>

				<?php rewind_posts(); ?>           

				<?php while ( have_posts() ) : the_post(); ?>

				                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				                	<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
										if ($post_image_id) {
											$thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
											if ($thumbnail) (string)$thumbnail = $thumbnail[0];
									} ?>
			                		<div style="background:url('<?php echo $thumbnail; ?>') repeat;background-size:contain;" class="entry-content">
					                    <div class="post-title-meta">
					                    	<a class="post-link" href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"></a>
						                    <h2 class="entry-title"><?php the_title(); ?></h2>
											<div class="entry-meta">
							                    <span class="octicon octicon-calendar meta-prep meta-prep-entry-date"><?php _e('', 'hbd-theme'); ?></span>
							                    <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span><br>
											    <span class="octicon octicon-tag"></span>&nbsp;<?php echo get_the_tag_list('',', ',''); ?>
							                    <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
					                    	</div>
				                    	</div>
			                    	</div>
			                    </div>
				<?php endwhile; ?>            

				<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		                <div id="nav-below" class="navigation">
		                    <?php previous_posts_link(__( '<span class="nav-text prev-post">Newer Posts</span> <span class="mega-octicon octicon-triangle-left"></span>', 'hbd-theme' )) ?> <?php next_posts_link(__( '<span class="mega-octicon octicon-triangle-right"></span> <span class="nav-text next-post">Older Posts</span>', 'hbd-theme' )) ?>
		                </div><!-- #nav-below -->
				<?php } ?>                  
 
            </div><!-- #content -->
			<?php get_sidebar(); ?>
        </div><!-- #container -->

<?php get_footer(); ?>