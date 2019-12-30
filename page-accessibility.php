<?php
/**
 * @package InsightCustom
 */
get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section id="pageContent">
			<div class="pageWidth paddedSection">
				<h1>Website Accessibility</h1>
				<p>
					<?php printf( get_bloginfo ( 'name' ) ); ?> is committed to facilitating the accessibility and
					usability all of its digital properties, for all people with disabilities.
				</p>
				<p>
					Our website is regularly tested using leading web accessibility technologies.
				</p>
				<p>
					Please be aware that our efforts are ongoing. If at any time you have specific
					questions or concerns about the accessibility of any particular web page on this
					site, please fill out the form below and we will contact you.
				</p>
				<h3>Website features for visitors with web access disabilities</h3>
				<h4>Visitors with reading difficulties</h4>
				<p>
					It is possible to download software which enables your computer to read 'out loud' the words on our website. This means that you can listen to the words on the site as they are read 'out loud' by your computer. This is useful for people who have reading difficulties, mild vision disabilities or for whom English is a second language.
				</p>
				<p>
					To 'read out loud' words on our website you can:
				</p>
				<p>
					Download a small software program provided by many companies that specialise in making websites accessible to people with reading difficulties.
					Point at the website text you want to hear with your mouse
					The software will then read the text 'out loud'.
				</p>
				<p>
					If you can't hear any sound:<br><br>

					Make sure your computer/mobile device has sound capability and that speakers or headphones are plugged in ensure the volume is turned on and is loud enough to hear.
				</p>
				<p>
					Changing text size on this website
				</p>
				<p>
					If you find the text size on this website is too small to read comfortably, you can change its size. The way you do this depends on the browser (i.e. the software program) you use to view the web.
				</p>
				<p>
					Some computers also let you change text size simply by holding down the 'ctrl' or 'alt' keys, which are to the left and right of the space bar, and using the wheel in the middle of your mouse, if you mouse has a wheel, to make the text larger and smaller.
				</p>
				<p>
					Changing text size using Microsoft Internet Explorer OR Mozilla Firefox on a Personal Computer (PC):
				</p>
				<p>
					Go to the menu at the top of the browser window and select View, From the list of options, select Text Size, From the side menu that opens up, select the size you wish to view the website in.
				</p>
				<p>
					Changing text size using Google Chrome on a Personal Computer (PC):
					You can adjust the size of everything on the webpages you visit, including text, images, and videos.
					Click the Chrome menu Customise and Control Google Chrome Menu Icon on the browser toolbar
					Select Settings.
					Click Show advanced settings.
					In the "Web Content" section, use the "Font size" drop-down menu to make adjustments.
				</p>
				<p>
					Firefox also allows you to change the text size using keyboard shortcuts:
					Press Ctrl and + at the same time to increase the size.
					Press Ctrl and - at the same time to decrease the size.
					Press Ctrl and 0 at the same time to go back to the normal size.
				</p>
				<p>
					Shortcuts are also used to change text size on Google Chrome:
					Click the Chrome menu Customise and Control Google Chrome Menu Icon on the browser toolbar.
					Find the "Zoom" section in the menu and choose one of the following options:
					Click plus symbol to make everything on the page larger. You can also use the keyboard shortcuts Ctrl and + (Windows, Linux, and Chrome OS)
					Click minus symbol to make everything smaller. You can also use the keyboard shortcuts Ctrl and - (Windows, Linux, and Chrome OS)
				</p>
				<p>
					Shortcuts are also used to change text size on an Apple Mac (all browsers):
					Press Cmd and + at the same time to increase the size.
					Press Cmd and - at the same time to decrease the size.
					Press Cmd and 0 at the same time to go back to the normal size.
					For mobile devices, just enter your settings and click on the Accessibility tab for the option to change the text size to suit you.
				</p>
				<!-- Add Contact Form Here -->
				<?php echo do_shortcode('[caldera_form id="CF5e0a87254bfbb"]'); ?>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
