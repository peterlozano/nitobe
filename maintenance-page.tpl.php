<?php
/**
 * @file maintenance-page.tpl.php
 * Provides a custom maintenance notice page for Nitobe.
 *
 * The maintenance page has the same additional variables that are provided
 * in page.tpl.php
 *
 * TODO Fix maintenance page.
 *
 * $Id: maintenance-page.tpl.php,v 1.3.8.1 2009/06/19 02:36:38 shannonlucas Exp $
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
		<title><?php print $head_title; ?></title>
		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<!--[if IE]>
			<?php print nitobe_get_ie_styles() . "\n"; ?>
		<![endif]-->
	</head>
	<body class="nitobe <?php print $body_classes; ?>">
		<?php print $page_top; ?>
		<div id="page-wrapper" class="clearfix">
			<div id="header-area" class="container-16">
					<div id="title-group" class="<?php print nitobe_ns('grid-16', $header, 6, $search_box, 4); ?>">
			            <?php if (isset($nitobe_logo)) { print $nitobe_logo; } ?>
			            <?php if (isset($nitobe_title)) { print $nitobe_title; } ?>
			            <?php if (isset($nitobe_slogan)) { print $nitobe_slogan; } ?>
			        </div><!-- /title-group -->
			        <?php if (!empty($header)): ?>
    			        <div id="header-region" class="grid-6">
    			        	<?php if (isset($header)) { print $header; } ?>
    			        </div><!-- /header-region -->
			        <?php endif; ?>
			        <?php if (!empty($search_box)): ?>
			        	<div id="search-top" class="grid-4"><?php print $search_box; ?></div>
			        <?php endif; ?>
          		<hr/>
          		<hr id="no-menu-rule" class="rule-bottom grid-16"/>
          		<div id="masthead" class="grid-16">
          		    <?php if (isset($masthead)) { print $masthead; } ?>
          		</div><!-- /masthead -->
          		<hr class="rule-top grid-16"/>
			</div><!-- /header-area -->
			<hr/>
			<div id="content-area" class="container-16">
				<div id="content" class="<?php print $nitobe_classes['content']; ?>">
					<?php if ($show_messages && !empty($messages)) { print $messages; } ?>
					<?php print render($page['help']); ?>
					<?php if (!empty($mission)): ?>
						<div id="mission" class="clearfix"><?php print $mission; ?></div>
					<?php endif;?>
					<?php if (!empty($title)): ?>
          				<div id="page-headline" class="clearfix">
    					    <?php print $nitobe_page_title; ?>
          				</div><!-- #page-headline -->
					<?php endif; ?>
					<?php print render($page['content']); ?>
				</div><!-- /content -->
				<?php if ($page['sidebar_first']): ?>
					<div id="sidebar-first" class="<?php print $nitobe_classes['sidebar_first']; ?>">
					  <?php print render($page['sidebar_first']); ?>
					</div><!-- /sidebar-first -->
				<?php endif; ?>
				<?php if ($page['sidebar_second']): ?>
					<div id="sidebar-second" class="<?php print $nitobe_classes['sidebar_second']; ?>">
						<?php print render($page['sidebar_second']); ?>
					</div> <!-- /sidebar-second -->
				<?php endif; ?>
			</div><!-- /content-area -->
			<hr/>
			<div id="bottom-blocks" class="container-16">
				<hr class="rule-bottom grid-16"/>
				<div id="bottom-left" class="grid-4">
					<?php if ($page['bottom_left']) { print render($page['bottom_left']); } ?>
				</div><!-- /bottom-left -->
				<div id="bottom-center-left" class="grid-4">
					<?php if ($page['bottom_center_left']) { print render($page['bottom_center_left']); } ?>
				</div><!-- /bottom-center-left -->
				<div id="bottom-center-right" class="grid-4">
					<?php if ($page['bottom_center_right']) { print render($page['bottom_center_right']); } ?>
				</div><!-- /bottom-center-right -->
				<div id="bottom-right" class="grid-4">
					<?php if ($page['bottom_right']) { print render($page['bottom_right']); } ?>
				</div><!-- /bottom-right -->
			</div><!-- /bottom-blocks -->
			<hr/>
			<div id="footer-area" class="container-16">
				<hr class="rule-top grid-16"/>
				<div id="footer" class="grid-16">
					<?php print render($page['footer']); ?>
				</div><!-- /footer -->
			</div><!-- /footer-area -->
			<hr/>
		</div><!-- /page-wrapper -->
		<?php print $page_bottom; ?>
	</body>
</html>
