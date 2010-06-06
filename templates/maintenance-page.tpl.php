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
 * $Id: maintenance-page.tpl.php,v 1.1.2.1 2009/08/01 17:58:31 shannonlucas Exp $
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
	<head>
		<title><?php print $head_title; ?></title>
		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<!--[if lt IE 8]>
			<?php print phptemplate_get_ie_styles() . "\n"; ?>
		<![endif]-->
	</head>
	<body class="nitobe <?php print $body_classes; ?>">
		<div id="page-wrapper" class="clear-block">
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
					<?php print $help; ?>
					<?php if (!empty($mission)): ?>
						<div id="mission" class="clear-block"><?php print $mission; ?></div>
					<?php endif;?>
					<?php if (!empty($title)): ?>
          				<div id="page-headline" class="clear-block">
    					    <?php print $nitobe_page_title; ?>
          				</div><!-- #page-headline -->
					<?php endif; ?>
					<?php print $content; ?>
				</div><!-- /content -->
				<?php if (!empty($left)): ?>
					<div id="left-sidebar" class="<?php print $nitobe_classes['left']; ?>">
					  <?php print $left; ?>
					</div><!-- /left-sidebar -->
				<?php endif; ?>
				<?php if (!empty($right)): ?>
					<div id="right-sidebar" class="<?php print $nitobe_classes['right']; ?>">
						<?php print $right; ?>
					</div> <!-- /right-sidebar -->
				<?php endif; ?>
			</div><!-- /content-area -->
			<hr/>
			<div id="footer-area" class="container-16">
				<hr class="rule-top grid-16"/>
				<div id="footer" class="grid-16">
					<?php print $footer_message . $footer; ?>
				</div><!-- /footer -->
			</div><!-- /footer-area -->
			<hr/>
		</div><!-- /page-wrapper -->
		<?php print $closure; ?>
	</body>
</html>