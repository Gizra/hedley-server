<?php

/**
 * @file
 * Contains \HedleyArticlesResource.
 */

class HedleyArticlesResource extends \HedleyEntityBaseNode {

  /**
   * Overrides \RestfulEntityBaseNode::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['body'] = array(
      'property' => 'body',
      'sub_property' => 'value',
    );

    $public_fields['tags'] = array(
      'property' => 'field_tags',
      'resource' => array(
        'tags' => 'tags',
      ),
    );

    $public_fields['image'] = array(
      'property' => 'field_image',
      'process_callbacks' => array(
        array($this, 'imageProcess'),
      ),
      'image_styles' => array('thumbnail', 'medium', 'large'),
    );

    return $public_fields;
  }

  /**
   * Process callback; Clean the "location" field output.
   *
   * @param array $value
   *   The entire array of the location field.
   *
   * @return array
   *   Array keyed by "lat" and "lng".
   */
  protected function processLocation($value) {
    return array(
      'lat' => $value['lat'],
      'lng' => $value['lng'],
    );
  }
}
