<?php
	$blog_list = get_sites( 0, 'all' );
	$bg_image = get_field('intro_logo', 'option');
	$intro_text = get_bloginfo('name');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo bloginfo('description'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body style="background-image: url(<?php the_field('intro_bg', 'option'); ?>);">
		<div class="logo">
			<a class="site-logo" href="<?php bloginfo('url'); ?>">
				<img src="<?php echo $bg_image; ?>" alt="<?php echo $intro_text ?>">
			</a>
		</div>
		
		<ul>
		<?php
			$template_dir = get_template_directory_uri();

			/*
			 * Flags:
			 *
			 * Denmark	: dk-flag
			 * Sweden	: se-flag
			 * Germany	: de-flag
			 * UK		: gb-flag
			 */

			foreach ($blog_list AS $blog) {
				$blog_id = get_blog_details($blog->blog_id)->blog_id;
				$siteurl = get_blog_details($blog->blog_id)->siteurl;
				$blogname = get_blog_details($blog->blog_id)->blogname;

				$flag_class = '';

				switch($blog_id){
					case 2:
						$flag_class = 'dk-flag';
						break;
					case 3:
						$flag_class = 'gb-flag';
						break;
					default:
						break;
				}

				if($blog_id != 1) :
			?>
			<li>
				<a class="<?php echo $flag_class; ?> flag" href="<?php echo $siteurl; ?>">
					<span class="span1"></span>
					<span class="span2"></span>
					<span class="span3"></span>
					<span class="span4"></span>
				</a>
			</li>
			<?php
				endif;
			}
		?>
		</ul>
		
		<div class="intro-text"><?php _e('Please select your country', 'rasmusbihllarsen'); ?></div>
	</body>
</html>