<?php
/**
 * @file node.tpl.php
 * The node rendering logic for Nitobe.
 *
 * In addition to the standard variables Drupal makes available to node.tpl.php,
 * these variables are made available by the theme:
 *
 * - $nitobe_node_author - The node's "posted by" text and author link.
 *
 * - $nitobe_node_class - The CSS classes to apply to the node.
 *
 * - $nitobe_node_links - The node links with a separator placed between each.
 *
 * - $nitobe_perma_title - The localized permalink text for the node.
 *
 * - $nitobe_term_links - The taxonomy links with a separator placed between
 *   each.
 *
 * - $nitobe_node_timestamp - The timestamp for this type, if one should be
 *   rendered for this type.
 *
 * $Id: node.tpl.php,v 1.1.2.1 2009/08/01 17:58:31 shannonlucas Exp $
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php echo $nitobe_node_class; ?>">
<?php if ($page == 0): ?>
  <div class="node-headline clear-block">
    <h2><a href="<?php print $node_url; ?>" rel="bookmark" title="<?php print $nitobe_perma_title; ?>"><?php print $title; ?></a></h2>
    <?php if (isset($nitobe_node_timestamp)): ?>
        <span class="timestamp"><?php print $nitobe_node_timestamp; ?></span>
    <?php endif; ?>
  </div>
<?php endif; ?>
  <div class="content clear-block">
    <?php if (isset($nitobe_node_author)): ?>
    	<div class="node-author"><?php print $nitobe_node_author; ?></div>
    <?php endif; ?>
    <?php print $picture; ?>
    <?php print $content; ?>
  </div>
  <?php if (!empty($taxonomy) || !empty($links)): ?>
    <div class="meta">
      <?php
      if ($taxonomy) { print $nitobe_term_links; }
      if (!empty($links)): ?>
          <div class="links"><?php print $nitobe_node_links; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
</div> <!-- node -->