<?php 

add_action( 'bizz_footer', 'bizz_footer_area' );

add_action( 'bizz_footer_branding_inside', 'bizz_footer_branding' );

function bizz_footer_area() { 

?>

<?php bizz_footer_before(); ?>

<div class="footer-area clearfix">
<div class="container_12">
	
	<?php bizz_widgets(); ?>
	
</div><!--/.container_12-->
</div><!--/.footer-area-->
		
<div class="credentials-area clearfix">
<div class="container_16">

    <div class="footer clearfix">
	<div class="grid_3 date">
	    &copy; <?php echo date("Y") ?> <?php bloginfo(); ?>
	</div><!-- /.grid_3 -->
	<div class="grid_10">
	<?php if ( function_exists('wp_nav_menu') ) { ?>
	    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'sf-menu' ) ); ?>
	<?php } else { ?>
	    <ul class="sf-menu">
		    <?php if (get_inc_pages("pag_exclude3_") == '') { $exclude2 = '9999999'; } else { $exclude2 = get_inc_pages("pag_exclude3_"); } ?>
		    <?php add_last_class(wp_list_pages('title_li=&echo=0&depth=-1&include=' . $exclude2 .'&sort_column=menu_order')); ?>
	    </ul><!-- /.sf-menu -->
	<?php } ?>
	</div><!-- /.grid_9 -->
	<div class="grid_3">
		<?php bizz_footer_branding_inside(); ?>
	</div><!-- /.grid_3 -->
	</div><!-- /.footer -->
	
</div><!-- /.container_16 -->
</div><!--/.footer-area-->

<?php bizz_footer_after(); ?>

<?php } ?>