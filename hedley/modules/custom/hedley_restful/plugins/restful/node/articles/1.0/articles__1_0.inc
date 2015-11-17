<?php

$plugin = array(
  'label' => t('Articles'),
  'resource' => 'articles',
  'name' => 'articles__1_0',
  'entity_type' => 'node',
  'bundle' => 'article',
  'description' => t('Export the "Article" content type.'),
  'class' => 'HedleyArticlesResource',
  'authentication_types' => TRUE,
);
