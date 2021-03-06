/**
 * Implements hook_field_storage_purge().
 */
function <?php print $basename; ?>_field_storage_purge(\$entity_type, \$entity, \$field, \$instance) {
  ${1:list(\$id, \$vid, \$bundle) = entity_extract_ids(\$entity_type, \$entity);

  \$table_name = _field_sql_storage_tablename(\$field);
  \$revision_name = _field_sql_storage_revision_tablename(\$field);
  db_delete(\$table_name)
    ->condition('entity_type', \$entity_type)
    ->condition('entity_id', \$id)
    ->execute();
  db_delete(\$revision_name)
    ->condition('entity_type', \$entity_type)
    ->condition('entity_id', \$id)
    ->execute();}
}

$2