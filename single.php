<?php get_header(); ?>
<?php 
	global $more;
	$more = 0;
?>
        <div id="page-container">
            <div id="page-content">

				<?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h1 class="page-entry-title"><?php the_title(); ?></h1>
					
					<div class="page-entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'hbd-theme' ) . '&after=</div>') ?>
					</div><!-- .entry-utility -->
					
					<div class="entry-utility">
						<span class="octicon octicon-calendar meta-prep meta-prep-entry-date"><?php _e('', 'hbd-theme'); ?></span>
					    <a href="<?php echo get_month_link(get_post_time('Y'), get_post_time('m')); ?>"><span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>&nbsp;</a>
						<?php printf( __( '
							<span class="octicon octicon-book"></span>&nbsp;
	 						%1$s%2$s &nbsp;<span class="octicon octicon-bookmark"></span>&nbsp; <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'hbd-theme' ),
						    get_the_category_list(', '),
						    get_the_tag_list( __( '&nbsp;&nbsp;<span class="octicon octicon-tag"></span>&nbsp;
							', 'hbd-theme' ), ', ', '' ),
						    get_permalink(),
						    the_title_attribute('echo=0'),
	                        get_post_comments_feed_link() ) ?>

					<?php edit_post_link( __( 'Edit', 'hbd-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
					
                	</div><!-- #post-<?php the_ID(); ?> -->                
            
 					<?php comments_template('', true); ?>
				
            
        		</div><!-- #content -->
            
        	</div><!-- #container -->
        <div id="nav-below" class="navigation">
				<?php previous_post_link( '%link', '<span class="mega-octicon octicon-triangle-right"></span> <span class="nav-text next-post meta-nav">%title</span>' ) ?> <?php next_post_link( '%link', '<span class="meta-nav nav-text prev-post">%title</span> <span class="mega-octicon octicon-triangle-left"></span> ' ) ?>
			</div><!-- #nav-below -->
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>