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

    $public_fields['user'] = array(
      'property' => 'author',
      'resource' => array(
        // The bundle of the entity.
        'user' => array(
          // The name of the resource to map to.
          'name' => 'users',
          // Determines if the entire resource should appear, or only the ID.
          'full_view' => TRUE,
        ),
      ),
    );


    return $public_fields;
  }

}
