<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
	<div id="main-wrapper">
		<div class="site-slogan">Welcome to Blog from a Developer</div>
		
		<div id="header-wrapper">
			<div class="logo"><a href="/">mishraDileep</a></div>
			<div class="search-box">
				<div class="search-box-wrapper">
					<form action="#" method="GET">
						<input type="text" value="Search..." id="search-box" />
						<input type="image" src="<?php print base_path() . path_to_theme(); ?>/images/magnifier.png" />
					</form>
				</div>
			</div>
		</div>
		
		<div id="content-wrapper">
			<div class="left-content">
<?php print render($page['content']); ?>
				
				<div id="pagination">
				<div class="pagination-wrapper">
					<ul>
						<li class="first"><a href="#">&laquo; First</a></li>
						<li class="previous"><a href="#">&larr; Previous</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="next"><a href="#">Next &rarr;</a></li>
						<li class="last"><a href="#">Last &raquo;</a></li>
					</ul>
				</div>
			</div>
				
			</div>
			
			
			
			<div class="right-content">
				<div class="right-content-wrapper">
					<div class="tabs-wrapper">
						<div class="tab-links">
							<a href="#" class="active">Latest</a>
							<a href="#">Popular</a>
							<a href="#">Comments</a>
						</div>
						<div class="tab-content-wrapper">
							<div class="tab-content latest" id="latest">
								<div class="tab-article">
									<div class="article-img">
										<img src="<?php print base_path() . path_to_theme(); ?>/images/article-img-small-1.png" />
									</div>
									<div class="article-content">
										<h3 class="article-title"><a href="#">Welcome to Blog from a Developer</a></h3>
										<span>August 5, 2013</span>
									</div>
								</div>
								<div class="tab-article">
									<div class="article-img">
										<img src="<?php print base_path() . path_to_theme(); ?>/images/article-img-small-1.png" />
									</div>
									<div class="article-content">
										<h3 class="article-title"><a href="#">Welcome to Blog from a Developer</a></h3>
										<span>August 5, 2013</span>
									</div>
								</div>
								<div class="tab-article">
									<div class="article-img">
										<img src="<?php print base_path() . path_to_theme(); ?>/images/article-img-small-1.png" />
									</div>
									<div class="article-content">
										<h3 class="article-title"><a href="#">Welcome to Blog from a Developer</a></h3>
										<span>August 5, 2013</span>
									</div>
								</div>
								<div class="tab-article">
									<div class="article-img">
										<img src="<?php print base_path() . path_to_theme(); ?>/images/article-img-small-1.png" />
									</div>
									<div class="article-content">
										<h3 class="article-title"><a href="#">Welcome to Blog from a Developer</a></h3>
										<span>August 5, 2013</span>
									</div>
								</div>
								<div class="tab-article">
									<div class="article-img">
										<img src="<?php print base_path() . path_to_theme(); ?>/images/article-img-small-1.png" />
									</div>
									<div class="article-content">
										<h3 class="article-title"><a href="#">Welcome to Blog from a Developer</a></h3>
										<span>August 5, 2013</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ad-wrpper">
					<img src="<?php print base_path() . path_to_theme(); ?>/images/google_adsence.png" />
				</div>
				<div class="right-content-wrapper tags-n-cats">
					<div class="tabs-wrapper">
						<div class="tab-links">
							<a href="#" class="active">Tags</a>
							<a href="#">Categories</a>
						</div>
						<div class="tab-content-wrapper">
							<div class="tab-content tags" id="latest">
								<a href="#" class="level1">adipiscing</a>
								<a href="#" class="level3">blockquote</a>
								<a href="#" class="level5">elements</a>
								<a href="#" class="level4">golf</a>
								<a href="#" class="level2">lists</a>
								<a href="#" class="level6">ordered</a>
								<a href="#" class="level3">slider</a>
								<a href="#" class="level4">strong</a>
								<a href="#" class="level5">unordered</a>
								<a href="#" class="level1">video</a>
								<a href="#" class="level5">vivamus</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<div id="footer">
		<div class="footer-wrapper">
			<div class="footer-upper">
			<div class="footer-about">
				<h1>About mishraDileep</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue massa in tellus condimentum malesuada. Nunc eget justo orci. Integer ac augue dolor. Integer porttitor neque vitae tortor sagittis lobortis. In rutrum, est eget aliquet cursus, leo dui scelerisque magna, ac pharetra velit velit vel purus.</p>
			</div>
			<div class="footer-recent-posts">
				<h1>Recent Posts</h1>
				<ul>
					<li><a href="#">Hello world! Greetings from WooThemes HQ</a></li>
					<li><a href="#">Image in a post</a></li>
					<li><a href="#">Lorem ipsum awesome sauce</a></li>
					<li><a href="#">Another post with an image and a long title</a></li>
					<li><a href="#">Testing The Elements</a></li>
					<li><a href="#">Feature your blog posts in the slider</a></li>
					<li><a href="#">Gravida vivamus adipiscing</a></li>
				</ul>
			</div>
			<div class="footer-categories">
				<h1>Categories</h1>
				<ul>
					<li><a href="#">Server Configuration</a></li>
					<li><a href="#">Drupal Business Process</a></li>
					<li><a href="#">Drupal Pre-Installation</a></li>
					<li><a href="#">Drupal Post Installation</a></li>
					<li><a href="#">Wordpress Business Process</a></li>
					<li><a href="#">Wordpress Technology</a></li>
					<li><a href="#">HTML &amp; CSS</a></li>
					<li><a href="#">Media Query &amp; Responsive website design</a></li>
				</ul>
			</div>
			</div>
		
			<div class="copy-right">mishraDileep.com © 2013. All Rights Reserved.</div>
			<div class="social-media-icons">
				<img src="images/footer-icon-fb.png" />
				<img src="images/footer-icon-twitter.png" />
				<img src="images/footer-icon-linkedin.png" />
				<img src="images/footer-icon-google.png" />
			</div>
		</div>
	</div>