/**
 * Implements hook_user_cancel_methods_alter().
 */
function <?php print $basename; ?>_user_cancel_methods_alter(&\$methods) {
  ${1:// Limit access to disable account and unpublish content method.
  \$methods['user_cancel_block_unpublish']['access'] = user_access('administer site configuration');

  // Remove the content re-assigning method.
  unset(\$methods['user_cancel_reassign']);

  // Add a custom zero-out method.
  \$methods['mymodule_zero_out'] = array(
    'title' => t('Delete the account and remove all content.'),
    'description' => t('All your content will be replaced by empty strings.'),
    // access should be used for administrative methods only.
    'access' => user_access('access zero-out account cancellation method'),
  );}
}

$2