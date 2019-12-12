<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// display the plugin settings page
function display_welcome_page() {
	// check if user is allowed access
	if ( ! current_user_can( 'manage_options' ) ) return;
	?>
	<div id="welcome" class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<h2>Working in Your WordPress Dashboard</p>
		<h3>Media</h3>
		<p>
			Your media folder is where you will find all the images that are used on your website.
		</p>
		<h3>Posts</h3>
		<p>
			If you have a blog here is where your blog posts can be found and new posts can be created.
		</p>
		<h3>Pages</h3>
		<p>
			Contains all the pages for your website.
		</p>
		<h3>Contact</h3>
		<p>
			Here is where you will find your contact forms and settings.
		</p>
		<h2>WordPress Theme</h2>
		<p>

		</p>
	</div>
	<?php
}
