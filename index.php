<?php get_header(); ?>
<div id="container">
 
    <div id="content">
		<?php /* Top post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>

		<?php } ?>
		
		<?php /* The Loop — with comments! */ ?>
		<?php while ( have_posts() ) : the_post() ?>

		<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>
		                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php /* Microformatted, translatable post meta */ ?>
		                    
		<?php /* The entry content */ ?>
			                <div class="entry-content">               
			                    <div class="post-title-meta">
			                    	<a class="post-link" href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"></a>
				                    <h2 class="entry-title"><?php $title = get_the_title(); if (strlen($title) == 0) { echo 'Untitled';} else {the_title();} ?></h2>
									<div class="entry-meta">
					                    <span class="octicon octicon-calendar meta-prep meta-prep-entry-date"><?php _e('', 'hbd-theme'); ?></span>
					                    <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
					                    <?php edit_post_link( __( 'Edit', 'hbd-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
			                    	</div>
			                    	
		                    	</div><!-- .entry-meta -->
		                    	
								<?php
									if (has_post_thumbnail()) {
										$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'post-thumbnail');
										echo '<div style="background:url('. $thumbnail[0] .') repeat;background-size:contain;" class="entry-bg-top"></div>';
										echo '<div style="background:url('. $thumbnail[0] .') repeat;background-size:contain;" class="entry-bg-bottom"></div>';
									} else {
										echo '<div class="content-preview">';
										the_content();
										echo '</div>';
									}
								?>
								<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
			                </div>
		                </div><!-- .entry-content -->

		<?php /* Microformatted category and tag links along with a comments link */ ?>
		                    

		<?php /* Close up the post div and then end the loop with endwhile */ ?>      

		<?php endwhile; ?>
		
		<?php /* Bottom post navigation */ ?>
		<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		                <div id="nav-below" class="navigation">
		                    <?php previous_posts_link(__( '<span class="nav-text prev-post">Newer Posts</span> <span class="mega-octicon octicon-triangle-left"></span>', 'hbd-theme' )) ?> <?php next_posts_link(__( '<span class="mega-octicon octicon-triangle-right"></span> <span class="nav-text next-post">Older Posts</span>', 'hbd-theme' )) ?>
		                </div><!-- #nav-below -->
		<?php } ?>
    </div><!-- #content -->

	<?php get_sidebar(); ?>
 
</div><!-- #container -->
 
<?php get_footer(); ?>