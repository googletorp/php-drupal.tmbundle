/**
 * Implements hook_field_display_alter().
 */
function <?php print $basename; ?>_field_display_alter(&\$display, \$context) {
  ${1:// Leave field labels out of the search index.
  // Note: The check against \$context['entity_type'] == 'node' could be avoided
  // by using hook_field_display_node_alter() instead of
  // hook_field_display_alter(), resulting in less function calls when
  // rendering non-node entities.
  if (\$context['entity_type'] == 'node' && \$context['view_mode'] == 'search_index') {
    \$display['label'] = 'hidden';
  \}}
}

$2