<?php if(arg(2) === null): ?>
<?php print $node->content['view']['#value']; $node=node_load(arg(1)); drupal_set_title($node->title); ?>

<?php elseif(arg(2) == 'info'): ?>
<?php print $node->body; ?>

<?php endif; ?>