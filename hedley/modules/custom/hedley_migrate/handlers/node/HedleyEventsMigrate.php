<?php

/**
 * @file
 * Contains \HedleyEventsMigrate.
 */

class HedleyEventsMigrate extends \HedleyMigrateBase {

  public $entityType = 'node';
  public $bundle = 'event';

  public $fields = array(
    '_location',
    '_company',
    '_author',
  );

  public $dependencies = array(
    'HedleyCompaniesMigrate',
    'HedleyUsersMigrate',
  );


  public function __construct($arguments) {
    parent::__construct($arguments);

    $this
      ->addFieldMapping(OG_AUDIENCE_FIELD, '_company')
      ->sourceMigration('HedleyCompaniesMigrate');

    $this
      ->addFieldMapping('uid', '_author')
      ->sourceMigration('HedleyUsersMigrate');
  }

  /**
   * Map location field.
   *
   * @todo: Move to value callback.
   */
  public function prepare($entity, $row) {
    list($lat, $lng) = explode('|', $row->_location);
    $wrapper = entity_metadata_wrapper('node', $entity);
    $values = array(
      'lat' => $lat,
      'lng' => $lng,
    );
    $wrapper->field_location->set($values);
  }
}
