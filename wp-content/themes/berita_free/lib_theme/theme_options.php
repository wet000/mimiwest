<?php

/*

  FILE STRUCTURE:

- GLOBAL THEME OPTIONS:
  * General Theme Settings
  * Navigation Settings
  * Archive Content Boxes
  * Single Post Content Box
  * Ad Banners
  * WYSIWYG Widget
- GLOBAL DESIGN OPTIONS:
  * General Styling
  * Module Styling
  * Content Boxes Styling
  * Widget Styling

*/

/* GLOBAL THEME OPTIONS */
/*------------------------------------------------------------------*/
				
$options[] = array(	"type" => "maintabletop");
		
	/// General Theme Settings												
				
		$options[] = array(	"name" => "General Theme Settings",
						    "type" => "heading");
													
			$options[] = array(	"name" => "Modules Layout Control",
								"toggle" => "true",
								"type" => "subheadingtop");
								
				$options[] = array(	"name" => "Front Page Display Modules",
				                    "desc" => "Check all modules you would like to display on your FRONT PAGE. If you want to customize the look even further DRAG and DROP the elements to change the order in which they appear. All modules are located in <code>library/hooks</code> folder.",
				                    "type" => "help");
												
				$options[] = array(	"type" => "sorttop");
				$options[] = array(	"id" => $shortname."_index_s",
						            "std" => "",
									"type" => "multisort",
									"options" => array(																				
										'logo' => array('name' => __('Logo & Search Form'), 'show' => true),
										'navigation' => array('name' => __('Navigation Menu'), 'show' => true),
										'slider' => array('name' => __('Featured Page Slider'), 'show' => true),
										'footer' => array('name' => __('Footer Widgets'), 'show' => true),
									));
				$options[] = array(	"type" => "sortbottom");
				
				$options[] = array(	"name" => "Archive Display Modules",
				                    "desc" => "Check all modules you would like to display on your ARCHIVES <em>[Archive for > Posts, Tags, Categories, Authors, Search, FAQs, ...]</em>. If you want to customize the look even further DRAG and DROP the elements to change the order in which they appear. All modules are located in <code>lib_theme/hooks</code> folder.",
				                    "type" => "help");
												
				$options[] = array(	"type" => "sorttop");
				$options[] = array(	"id" => $shortname."_archive_s",
						            "std" => "",
									"type" => "multisort",
									"options" => array(										
									    'logo' => array('name' => __('Logo & Search Form'), 'show' => true),
										'navigation' => array('name' => __('Navigation Menu'), 'show' => true),
										'slider' => array('name' => __('Featured Page Slider'), 'show' => false),
										'archive' => array('name' => __('Archive Content & Sidebar'), 'show' => true),
										'footer' => array('name' => __('Footer Widgets'), 'show' => true),
									));
				$options[] = array(	"type" => "sortbottom");
																
				$options[] = array(	"name" => "Single Post Display Modules",
				                    "desc" => "Check all modules you would like to display on your SINGLE POSTS. If you want to customize the look even further DRAG and DROP the elements to change the order in which they appear. All modules are located in <code>library/hooks</code> folder.",
				                    "type" => "help");
												
				$options[] = array(	"type" => "sorttop");
				$options[] = array(	"id" => $shortname."_post_s",
						            "std" => "",
									"type" => "multisort",
									"options" => array(										
										'logo' => array('name' => __('Logo & Search Form'), 'show' => true),
										'navigation' => array('name' => __('Navigation Menu'), 'show' => true),
										'slider' => array('name' => __('Featured Page Slider'), 'show' => false),
										'single' => array('name' => __('Post Content & Sidebar'), 'show' => true),
										'footer' => array('name' => __('Footer Widgets'), 'show' => true),
									));
				$options[] = array(	"type" => "sortbottom");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Sidebar Alignment",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$options[] = array(	"name" => "General Sidebar Alignment",
				                    "desc" => "Select how to align your sidebar on all pages, excluding front page.",
						            "id" => $shortname."_sidebar_align",
						            "std" => "alignright",
									"type" => "radio",
									"options" => array("alignleft" => "Left","alignright" => "Right"));	
									
			$options[] = array(	"type" => "subheadingbottom");
			
		    $options[] = array(	"name" => "Logo Module",
						        "toggle" => "true",
								"type" => "subheadingtop");

                $options[] = array(	"name" => "Choose Your Logo",
				                    "desc" => "Upload your image or paste the full URL address to it next to upload button. <span class='important'>Save your settings after upload is finished.</span>",
						            "id" => $shortname."_logo_url",
						            "std" => "",
						            "type" => "upload");

				$options[] = array(	"name" => "Choose Blog Title over Logo",
				                    "desc" => "If you don't yet have a logo, choose your default blog Title &amp; Tagline - <a href='" . $bloghomeurl . "wp-admin/options-general.php'>Change your settings here</a>. This option overrides logo selection above.",
						            "label" => "Show Blog Title + Tagline.",
						            "id" => $shortname."_show_blog_title",
						            "std" => "false",
						            "type" => "checkbox");				

			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Portfolio Template",
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
		
	/// Navigation Settings												
				
		$options[] = array(	"name" => "Navigation Settings",
							"type" => "heading");
						
			$options[] = array(	"name" => "Main Navigation",
								"toggle" => "true",
								"type" => "subheadingtop");
								
			if ( function_exists('wp_nav_menu') ) {

				$options[] = array(	"name" => "Use WordPress 3.0 Menus",
				                    "desc" => "Since WordPress 3.0, this theme only supports WordPress menus to handle theme navigation, so <a href='" . $bloghomeurl . "wp-admin/nav-menus.php'>head over to the menus</a> and do some magic.<span class='important'>Don't forget to pick the right theme location for your created menus</span>",
				                    "type" => "help");					
									
			} else {
			    
				$options[] = array(	"name" => "Main Navigation Items",
				                    "desc" => "Check all posts you would like to include in your main navigation menu. Pages are listed alphabetically, however you may change the order in which they appear by going <a href='" . $bloghomeurl . "wp-admin/admin.php?page=bizz_mypageorder'>here</a>. Logo &amp; Navigation module is located in <code>library/hooks/navigation.php</code> file.",
				                    "type" => "help");
												
				$options = pages_exclude($options);	
				
				$options[] = array(	"label" => "Include Home Link in Main Navigation.",
									"id" => $shortname."_home_link2",
						            "std" => true,
						            "type" => "checkbox");
			
			}
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Breadcrumbs Navigation",
						        "toggle" => true,
								"type" => "subheadingtop");
						
				$options[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");	
						
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Footer Navigation",
						        "toggle" => "true",
								"type" => "subheadingtop");
			
			if ( function_exists('wp_nav_menu') ) {

				$options[] = array(	"name" => "Use WordPress 3.0 Menus",
				                    "desc" => "Since WordPress 3.0, this theme only supports WordPress menus to handle theme navigation, so <a href='" . $bloghomeurl . "wp-admin/nav-menus.php'>head over to the menus</a> and do some magic.<span class='important'>Don't forget to pick the right theme location for your created menus</span>",
				                    "type" => "help");					
									
			} else {
			    
				$options[] = array(	"name" => "Footer Navigation Items",
				                    "desc" => "Check all posts you would like to include in your right footer section. Pages are listed alphabetically, however you may change the order in which they appear by going <a href='" . $bloghomeurl . "wp-admin/admin.php?page=bizz_mypageorder'>here</a>.",
				                    "type" => "help");
									
				$options = pages_exclude3($options);	
			
			}
						
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
		
	/// Slider Settings											
				
		$options[] = array(	"name" => "Featured Slider",
							"type" => "heading");
			
			$options[] = array(	"name" => "Slider Pages",
								"toggle" => true,
								"type" => "subheadingtop");
								
				$options[] = array(	"name" => "Select &amp; Order Slider Items",
				                    "desc" => "Check all pages you would like to include in your featured slider. Pages are listed alphabetically, however you may change the order in which they appear by drag'n'dropping slider items.",
				                    "type" => "help");
																
				$options = select_pages($options,'slider_pag'); // 10 characters only
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Auto Rotation",
								"toggle" => true,
								"type" => "subheadingtop");
								
				$options[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");	
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Height Options",
								"toggle" => true,
								"type" => "subheadingtop");
								
				$options[] = array(	"name" => "Fix Height?",
				                    "desc" => "Check this options if you don't want to adjust height for every slide. Make sure your content on every slide will fit you predefined height if you choose to manually control slide height.",
									"label" => "Don't adjust height for every slide.",
									"id" => $shortname."_slider_adjust",
						            "std" => false,
						            "type" => "checkbox");
									
				$options[] = array(	"name" => "Slider Height",
				                    "desc" => "Choose the appropriate height for slides (in px).",
						            "id" => $shortname."_slider_height",
						            "std" => 350,
						            "type" => "text");	
									
				$options[] = array(	"name" => "Button Height",
				                    "desc" => "Spacing between top and slider buttons - back &amp; forward (in px).",
						            "id" => $shortname."_sliderb_height",
						            "std" => 50,
						            "type" => "text");
					
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
		
	/// Archive Content Boxes											
				
		$options[] = array(	"name" => "Archive Content Boxes",
							"type" => "heading");
							
			$options[] = array(	"name" => "Display Options",
								"toggle" => "true",
								"type" => "subheadingtop");
									
				$options[] = array(	"name" => "Display Full Posts?",
				                    "label" => "Full Post Content",
						            "desc" => "Instead of default excerpts, display full post contant on Archive pages, including blog section.",
						            "id" => $shortname."_archive_full",
						            "std" => "false",
						            "type" => "checkbox");	
									
				$options[] = array(	"name" => "Meta Settings",
				                    "desc" => "Check all fields you would like to display in your archive post meta box.",
				                    "type" => "help");
									
				$options[] = array(	"label" => "Post Author",
									"id" => $shortname."_meta_auth",
						            "std" => "false",
						            "type" => "checkbox");
									
			    $options[] = array(	"label" => "Post Date",
									"id" => $shortname."_meta_date",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => "Post Comments",
									"id" => $shortname."_meta_com",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => "Post Edit (only visible to administrators)",
									"id" => $shortname."_meta_edit",
						            "std" => "false",
						            "type" => "checkbox");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Image Options",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$options[] = array(	"name" => "Thumbnail Image Dimensions",
				                    "desc" => "Select image thumbnail dimensions for archive pages like blog, search, category, date archives etc.. If your checked option to Resize Images Dynamically (in Image Setup above), thumbnails will be automatically resized and cropped to fit desired dimensions. Numeric values are defined as pixels (px).",
				                    "type" => "help");
									
				$options[] = array(	"name" => "width",
									"id" => $shortname."_thumb_width",
						            "std" => "75",
						            "type" => "text");	
									
				$options[] = array(	"name" => "height",
						            "id" => $shortname."_thumb_height",
						            "std" => "75",
						            "type" => "text");
									
				$options[] = array(	"name" => "Thumbnail Image Alignment",
				                    "desc" => "Select how to align your images with post archives.",
						            "id" => $shortname."_thumb_align",
						            "std" => "alignleft",
									"type" => "radio",
									"options" => array("alignleft" => "Left","aligncenter" => "Center","alignright" => "Right"));
																				
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Read More... Options",
						        "toggle" => "true",
								"type" => "subheadingtop");
						
				$options[] = array(	"name" => "'Read More...' Text?",
				                    "label" => "Display 'Read More' text",
						            "desc" => "Show 'Read More' text at the end of each post, displayed in archive pages.",
						            "id" => $shortname."_readmore",
						            "std" => "true",
						            "type" => "checkbox");

				$options[] = array(	"name" => "Change 'Read More' text",
				                    "desc" => "Change 'Read More' text to suit your own taste.",
						            "id" => $shortname."_readmore_text",
						            "std" => "Read more...",
						            "type" => "text");					
						
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
		
	/// Single Post Content Box											
				
		$options[] = array(	"name" => "Single Content Box",
							"type" => "heading");
							
			$options[] = array(	"name" => "Display Options",
								"toggle" => "true",
								"type" => "subheadingtop");
									
				$options[] = array(	"name" => "Meta Settings",
				                    "desc" => "Check all fields you would like to display in your archive post meta box.",
				                    "type" => "help");
				
				$options[] = array(	"label" => "Post Date",
									"id" => $shortname."_smeta_date",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => "Post Author",
									"id" => $shortname."_smeta_auth",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => "Post Comments",
									"id" => $shortname."_smeta_com",
						            "std" => "true",
						            "type" => "checkbox");
									
				$options[] = array(	"label" => "Post Edit (only visible to administrators)",
									"id" => $shortname."_smeta_edit",
						            "std" => "true",
						            "type" => "checkbox");
					
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Image Options",
						        "toggle" => "true",
								"type" => "subheadingtop");
								
				$options[] = array(	"name" => "Show in Single Posts/Pages?",
				                    "label" => "Show in Single Posts/Pages",
						            "desc" => "Show thumbnail images in single posts/pages.",
						            "id" => $shortname."_image_single",
						            "std" => "false",
						            "type" => "checkbox");
									
				$options[] = array(	"name" => "Thumbnail Image Dimensions",
				                    "desc" => "Select image thumbnail dimensions for single posts and pages. If your checked option to Resize Images Dynamically (in Image Setup above), thumbnails will be automatically resized and cropped to fit desired dimensions. Numeric values are defined as pixels (px).",
				                    "type" => "help");
									
				$options[] = array(	"name" => "width",
						            "id" => $shortname."_single_width",
						            "std" => "200",
						            "type" => "text");	
									
				$options[] = array(	"name" => "height",
						            "id" => $shortname."_single_height",
						            "std" => "200",
						            "type" => "text");
									
				$options[] = array(	"name" => "Thumbnail Image Alignment",
				                    "desc" => "Select how to align your images in single posts & pages.",
						            "id" => $shortname."_single_align",
						            "std" => "alignright",
									"type" => "radio",
									"options" => array("alignleft" => "Left","aligncenter" => "Center","alignright" => "Right"));
																				
			$options[] = array(	"type" => "subheadingbottom");
			
			$options[] = array(	"name" => "Comments Options",
								"toggle" => "true",
								"type" => "subheadingtop");
																					
				$options[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");	
					
			$options[] = array(	"type" => "subheadingbottom");
						
		$options[] = array(	"type" => "maintablebreak");
						
$options[] = array(	"type" => "maintablebottom");

/* GLOBAL DESIGN OPTIONS */
/*------------------------------------------------------------------*/

$design[] = array(	"type" => "maintabletop");

    ////// General Styling
	
	    $design[] = array(	"name" => "General Styling",
						    "type" => "heading");
						
		    $design[] = array(	"name" => "Layout Control",
						        "toggle" => "true",
								"type" => "subheadingtop");
								
				$design[] = array(	"name" => "Predefined Skins",
				                    "desc" => "Please select the CSS skin for your website here. CSS skin files are located in your theme skins folder.",
					                "id" => $shortname."_alt_stylesheet",
					                "std" => "",
					                "type" => "select",
					                "options" => $alt_stylesheets);
									
				$design[] = array(	"name" => "Hide custom.css",
				                    "label" => "Hide Custom Stylesheet",
						            "desc" => "Custom.css file allows you to make custom design changes using CSS. You have option to create your own css skin in skins folder or to simply enable and <a href='" . $bloghomeurl . "wp-admin/theme-editor.php'>edit custom.css file</a>.<span class='important'>Check this option to disable custom.css file output.</span>",
						            "id" => $shortname."_custom_css",
						            "std" => "false",
						            "type" => "checkbox");	
									
				$design[] = array(	"name" => "Hide layout.css",
				                    "label" => "Hide Design Control Tweaks",
						            "desc" => "If you want to hide all CSS design tweaks you've created using theme design control panel, check this option.",
						            "id" => $shortname."_layout_css",
						            "std" => "false",
						            "type" => "checkbox");
						
			$design[] = array(	"type" => "subheadingbottom");	

			$design[] = array(	"name" => "Body Background",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(  "name" =>  "Background Color",
					                "desc" => "Pick a custom background color for the whole site body.",
									"id" => $shortname."_body_bg",
									"std" => "",
									"type" => "color");
									
				$design[] = array(	"name" => "Background Image?",
				                    "desc" => "Upload your image or paste the full URL address to it next to upload button.",
						            "id" => $shortname."_body_img",
						            "std" => "",
						            "type" => "upload");
									
				$design[] = array(  "name" => "Background Image Properties",
				                    "desc" => "Specify background image properties: <br/><code>background color | repeating | positioning</code>",
									"id" => $shortname."_body_img_prop",
									"std" => array('color'=>'#ffffff', 'repeat'=>'no-repeat', 'position'=>'top left'),
									"type" => "bgproperties");  
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Body Links",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(  "name" =>  "Link Text Color",
					                "desc" => "Pick a custom link color to be applied to major text links.",
									"id" => $shortname."_c_links",
									"std" => "#2A4BAF",
									"type" => "color");
									
				$design[] = array(  "name" =>  "Link <code>:onhover</code> Color",
					                "desc" => "Pick a custom onhover link color to be applied to major text links.",
									"id" => $shortname."_c_links_onhover",
									"std" => "#2A4BAF",
									"type" => "color");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Body Text",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(  "name" => "General Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H1</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_general",
									"std" => array('size'=>'12', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H1</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H1</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h1",
									"std" => array('size'=>'25', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H2</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H2</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h2",
									"std" => array('size'=>'23', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H3</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H3</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h3",
									"std" => array('size'=>'21', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H4</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H4</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h4",
									"std" => array('size'=>'19', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H5</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H5</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h5",
									"std" => array('size'=>'17', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
									
				$design[] = array(  "name" => "<b>H6</b> Font",
				                    "desc" => "Select the typography you want for your text, displayed inside <code>H6</code> tags. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_h6",
									"std" => array('size'=>'15', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#222222'),
									"type" => "typography");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Button Styling",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(  "name" =>  "Button Background Color",
					                "desc" => "Pick a custom background color to be applied to custom button links. To create a link as a button, simply add <code>.button</code> class to desired link.",
									"id" => $shortname."_bg_button",
									"std" => "",
									"type" => "color");
									
				$design[] = array(  "name" =>  "Button <code>:onhover</code> Background Color",
					                "desc" => "Pick a custom onhover link background color to be applied to custom button links.",
									"id" => $shortname."_bg_button_onhover",
									"std" => "",
									"type" => "color");
									
				$design[] = array(  "name" => "Button Font Properites",
				                    "desc" => "Select the typography you want for your button link. <span class='important'>* Web-safe font.</span>",
									"id" => $shortname."_f_button",
									"std" => array('size'=>'17', 'face'=>'georgia', 'style'=>'normal', 'color'=>'#ffffff'),
									"type" => "typography");
						
			$design[] = array(	"type" => "subheadingbottom");
								
		$design[] = array(	"type" => "maintablebreak");
		
	////// Module Styling
	
	    $design[] = array(	"name" => "Module Styling",
						    "type" => "heading");
						
			$design[] = array(	"name" => "Logo & Search Form",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Main Navigation",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Footer Widgets & Navogation",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
														
		$design[] = array(	"type" => "maintablebreak");
		
	////// Slider Styling
	
	    $design[] = array(	"name" => "Slider Styling",
						    "type" => "heading");
									
	        $design[] = array(	"name" => "Slider Styling Options",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Slider Navigation Options",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
														
		$design[] = array(	"type" => "maintablebreak");
						
$design[] = array(	"type" => "maintablebottom");
				
$design[] = array(	"type" => "maintabletop");
		
	////// Post&Page Styling
	
	    $design[] = array(	"name" => "Post and Page Styling",
						    "type" => "heading");
									
	        $design[] = array(	"name" => "Content Area",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Main Title",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
			    $design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Breadcrumbs Navigation",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Archive Styling",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Read More Button Styling",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Pagination Styling",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Comments Styling",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
														
		$design[] = array(	"type" => "maintablebreak");
		
	////// Widget Styling
	
	    $design[] = array(	"name" => "Widget Styling",
						    "type" => "heading");
									
	        $design[] = array(	"name" => "Title",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
			
			$design[] = array(	"name" => "Content",
						        "toggle" => "true",
								"type" => "subheadingtop");
									
				$design[] = array(	"name" => "To use these options, please <a href='http://bizzthemes.com/2010/03/enkelt/'>Upgrade to Standard or Agency Theme Package</a>.",
				                    "type" => "help");
						
			$design[] = array(	"type" => "subheadingbottom");
														
		$design[] = array(	"type" => "maintablebreak");
						
$design[] = array(	"type" => "maintablebottom");

?>