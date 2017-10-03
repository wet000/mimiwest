<?php get_header(); ?>
<div id="content"><div id="content_top"><div id="content_btm">
	<div class="spacer"></div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class("postbox"); ?>><div class="postbox2"><div class="postbox3">
				<div class="page_title">
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</div>
				<div class="clear"></div>
				<div class="entry">
					<?php the_content(__('more &raquo;','templatelite')); ?><div class="clear"></div>
					<?php wp_link_pages(array('before' => '<div><center><strong>Pages: ', 'after' => '</strong></center></div>', 'next_or_number' => 'number')); ?>
					<?php edit_post_link(__('Edit this entry','templatelite'), '<p>', '</p>'); ?>
					<div class="clear"></div>
				</div>
			</div></div></div><!-- #postbox3, #postbox2,#postbox -->

<?php	if('open' == $post-> comment_status):?>	
			<div id="postmetadata">
			<?php
				printf(__('You can follow any responses to this entry through the <a href="%s">RSS 2.0</a> feed.','templatelite'), get_post_comments_feed_link());
				if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { // Both Comments and Pings are open
						printf(__('You can <a href="#respond">leave a response</a>, or <a href="%s" rel="trackback">trackback</a> from your own site.','templatelite'),get_trackback_url());
				}elseif(!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {	// Only Pings are Open
						printf(__('Responses are currently closed, but you can <a href="%s" rel="trackback">trackback</a> from your own site.','templatelite'),get_trackback_url());
				}elseif(('open' == $post-> comment_status) && !('open' == $post->ping_status)){	// Comments are open, Pings are not
						printf(__('You can skip to the end and leave a response. Pinging is currently not allowed.','templatelite'));
				} elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {	// Neither Comments, nor Pings are open
						_e('Both comments and pings are currently closed.','templatelite');
				}
				edit_post_link(__('Edit this entry','templatelite'),' (',') '); 
			?>
			</div>			
		<?php 
			comments_template( '', true );
		?>
<?php endif;?>
<?php 
		endwhile; 
	endif;
?>
</div></div></div><!-- #content_btm, #content_top, #content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>