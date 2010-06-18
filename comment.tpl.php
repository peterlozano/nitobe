<?php
/**
 * @file comment.tpl.php
 * Comment rendering for Nitobe.
 *
 * *        - 'nitobe_author_date' - The formatted author link and date for the
 *          comment's meta data area.
 *        - 'nitobe_comment_class' - The CSS classes to apply to this comment.
 *        - 'nitobe_comment_links' - The comment links with a delimiter added.
 * $Id: comment.tpl.php,v 1.6.8.1 2009/06/19 02:36:38 shannonlucas Exp $
 */
?>
<div class="<?php print $nitobe_comment_class; ?>">
  <div class="content clearfix">
    <?php if (!empty($picture)) { print $picture; } ?>
    <?php if ($comment->new): ?>
      <span class="new"><?php print drupal_ucfirst($new); ?></span>
    <?php endif; ?>
    <?php if (!empty($title)) { ?><h3><?php print $title ?></h3><?php } ?>
    <?php print $content ?>
    <hr/>
    <?php if ($signature): ?>
      <div class="user-signature clearfix">
        <?php print $signature ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="comment-meta">
    <span class="author-date"><?php print $nitobe_author_date; ?></span>
    <?php if ($nitobe_comment_links) { print $nitobe_comment_links; } ?>
  </div>
</div>
