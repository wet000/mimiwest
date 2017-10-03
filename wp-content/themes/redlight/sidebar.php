<?php global $tpinfo;?>
<div id="sidebar1">
		<ul>
	<?php if(!dynamic_sidebar('sidebar-1')) : ?>
		<?php wp_list_pages('title_li=<h4 class="sb1_title">Pages</h4>'); ?>
		<?php wp_list_categories('show_count=1&title_li=<h4 class="sb1_title">Categories</h4>'); ?>
		<li id="archives">
			<h4 class="sb1_title">Archives</h4>
			<ul><?php wp_get_archives('type=monthly'); ?></ul>
		</li>
		<li class="widget_calendar"><h4 class="sb1_title">Calendar</h4><?php get_calendar(); ?></li>
	<?php	endif;?>		
		</ul>
</div>
<div id="sidebar2">
	<ul>
	<?php if(!dynamic_sidebar('sidebar-2')) : ?>
		<li><h4 class="sb2_title">Recent Posts</h4><ul><?php wp_get_archives('type=postbypost&limit=5')?></ul></li>
		<li class="widget_tag_cloud"><h4 class="sb2_title">Tag Cloud</h4><div><?php wp_tag_cloud('smallest=10&largest=20&number=30&unit=px&format=flat&orderby=name'); ?></div></li>
				<?php if ( is_home() || is_page() ) { 	/* If this is the frontpage */ 
					wp_list_bookmarks('orderby=rand&title_before=<h4 class="sb2_title">&title_after=</h4>&between=<br/>&show_description=1&limit=20');
				} 
		?>
		<li id="meta">
			<h4 class="sb2_title">Meta</h4>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	<?php	endif;?>
	<?php theme_sb_credit();?>	
		</ul>	
</div>
<div id="rss_search">
	<a href="<?php echo (!empty($tpinfo['templatelite_feedurl']))? $tpinfo['templatelite_feedurl'] : bloginfo('rss2_url'); ?>" title="RSS Feed" class="rss"></a>
	<?php if(!empty($tpinfo['templatelite_twitter_username'])) echo '<a href="http://www.twitter.com/' . $tpinfo['templatelite_twitter_username'].'" title="Follow me" class="twitter"></a>';?>
	<form id="mainsearchform" action="<?php bloginfo('url'); ?>/" method="get">
		<input class="submit" value="" type="submit"/>
		<input class="input" type="text" value="" name="s" id="s" />
	</form>
</div>