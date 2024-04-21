<?php session_start(); ?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#EE2326" />
	
	<link rel="icon" href="" type="image/x-icon" />
	<link rel="shortcut icon" href="" type="image/x-icon" />
	<link rel="apple-touch-icon" href="" />
	
	<?php global $current_user; wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="top-shadow"></div>
<div class="dark-layer"></div>
<?php
global $current_user;
?>
<header>
	<div class="wrapper">
		<div class="column flex-between flex">
			<div class="w100 flex-start flex header-items">
				<a class="logo samewidth" href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" alt="Logo">
				</a>
				<ul class="samewidth main-menu flex-center flex">
					<li><a href="#">All Projects</a></li>
					<li><a href="#">My Projects</a></li>
					<li><a href="#">About</a></li>
				</ul>
				<div class="samewidth login flex flex-end">
					<?php
						if(is_user_logged_in()) {
					?>
							<a href="<?php echo get_home_url(); ?>/my-account/">
						<div class="login-done flex position-relative">
								<div class="user-text">
									<?php echo $current_user->user_login; ?>
								</div>
								<?php $avatar = get_avatar( $current_user->ID, 64 ); echo $avatar; ?>
							</div>
						</a>
					<?php
						} else {
					?>
						<div class="active-btn btn login-btn">Register | Login</div>
						<?php echo do_shortcode('[user_registration_form id="49"]'); ?>
						<?php echo do_shortcode('[user_registration_login]'); ?>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</header>
