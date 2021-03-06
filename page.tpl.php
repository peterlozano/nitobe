<?php
/**
 * @file page.tpl.php
 * The variable-layout page structure for Nitobe.
 *
 * In addition to the standard variables Drupal makes available to page.tpl.php,
 * these variables are made available by the theme:
 *
 * - $nitobe_classes - The CSS classes to apply to the content and sidebar
 *   regions. This array will have 'content', 'left', and 'right' as keys. The
 *   values will include the grid size for the region and any push/pull
 *   classes needed for the region in that context.
 *
 * - $nitobe_content_width - The CSS class providing the full width of the
 *   content region without any push/pull classes.
 *
 * - $nitobe_logo - The HTML for the linked logo image.
 *
 * - $nitobe_page_title - The pre rendered page title element with the
 *   appropriate CSS classes assigned.
 *
 * - $nitobe_placement - The theme setting for how the sidebars should be
 *   rendered relative to the content region. Will be one of:
 *           left   - Both sidebars rendered left of the content region.
 *           center - A sidebar is rendered on either side of the content
 *                    region.
 *           right  - Both sidebars rendered right of the content region.
 *
 * - $nitobe_main_menu - The HTML for the rendered primary links.
 *
 * - $nitobe_render_date - whether or not to render the date for this type if
 *   the page is a node page.
 *
 * - $nitobe_secondary_menu - The HTML for the rendered secondary links.
 *
 * - $nitobe_slogan - The HTML for the site slogan.
 *
 * - $nitobe_title - The HTML for the linked title.
 *
 * - $tabs2 - The HTML for the menu secondary local tasks.
 *
 * $Id: page.tpl.php,v 1.16.2.1 2009/06/19 02:36:38 shannonlucas Exp $
 */
?>
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
          		<?php if (isset($nitobe_main_menu)): ?>
            		<div id="header-links" class="grid-16">
            		    <?php if (isset($nitobe_main_menu)) { print $nitobe_main_menu; } ?>
            		    <?php if (isset($nitobe_secondary_menu)) : ?>
              			<hr/>
            		    <?php print $nitobe_secondary_menu; ?>
            		    <?php endif; ?>
          			</div><!-- #header-links -->
          		<?php else: ?>
          			<hr id="no-menu-rule" class="rule-bottom grid-16"/>
          		<?php endif; ?>
          		<div id="masthead" class="grid-16">
          		    <?php if (isset($masthead)) { print $masthead; } ?>
          		</div><!-- /masthead -->
          		<hr class="rule-top grid-16"/>
			</div><!-- /header-area -->
			<hr/>
			<div id="content-area" class="container-16">
				<div id="content" class="<?php print $nitobe_classes['content']; ?>">
					<?php if (!empty($breadcrumb)) { print $breadcrumb; } ?>
					<?php if ($show_messages && !empty($messages)) { print $messages; } ?>
					<?php print render($page['help']); ?>
					<?php if (!empty($mission)): ?>
						<div id="mission" class="clearfix"><?php print $mission; ?></div>
					<?php endif;?>
					<?php if (!empty($title)): ?>
          				<div id="page-headline" class="clearfix">
    					    <?php print $nitobe_page_title; ?>
    					    <?php if (isset($nitobe_node_timestamp)): ?>
                  				<span class="timestamp"><?php print $nitobe_node_timestamp; ?></span>
    					    <?php endif; ?>
          				</div><!-- #page-headline -->
					<?php endif; ?>
					<?php if (!empty($tabs)):?>
                    	<div id="tabs-wrapper" class="<?php print $nitobe_content_width; ?> alpha omega clearfix">
                        	<ul class="tabs primary clearfix<?php if ($tabs2) { print ' has-secondary'; } ?>"><?php print render($tabs); ?></ul>
                              <?php if ($tabs2): ?>
                              	  <ul class="tabs secondary"><?php print render($tabs2); ?></ul>
                              <?php endif; ?>
                    	</div>
                    	<br clear="all"/>
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
					</div> <!-- /sidebar_second -->
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
