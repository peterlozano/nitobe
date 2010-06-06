<?php
/**
 * @file block.tpl.php
 * Block rendering for Nitobe.
 *
 * In addition to the standard variables Drupal makes available to node.tpl.php,
 * these variables are made available by the theme:
 *
 * - $nitobe_block_id - A complete unique ID for the block.
 * - $nitobe_block_class - The CSS classes to apply to the block. If the Block
 *          Class module is installed, those classes will be added to these.
 *
 * $Id: block.tpl.php,v 1.1.2.1 2009/08/01 17:58:31 shannonlucas Exp $
 */
?>
<div id="<?php print $nitobe_block_id; ?>" class="<?php print $nitobe_block_class; ?>">
  <?php if (!empty($block->subject)): ?>
  	<h2><?php print $block->subject ?></h2>
  <?php endif;?>
  <?php print $block->content ?>
</div><!-- /<?php print $nitobe_block_id; ?> -->
<hr class="break"/>