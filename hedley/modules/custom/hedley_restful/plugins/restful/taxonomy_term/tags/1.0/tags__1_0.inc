<?php

$plugin = array(
  'label' => t('Tags'),
  'resource' => 'tags',
  'name' => 'tags__1_0',
  'entity_type' => 'taxonomy_term',
  'bundle' => 'tags',
  'description' => t('Export the "tags" taxonomy term.'),
  'class' => 'HedleyTaxonomyTermTags',
  'authentication_types' => TRUE,
  'authentication_optional' => TRUE,
);
