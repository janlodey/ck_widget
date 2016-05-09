<?php

/**
 * @file
 * Definition of \Drupal\editor_experience\Plugin\CKEditorPlugin\BtButton.
 */

namespace Drupal\ck_widget\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Bootstrap Buttons" plugin.
 *
 * @CKEditorPlugin(
 *   id = "widgettemplatemenu",
 *   label = @Translation("Widget Template Menu")
 * )
 */
class WidgetTemplateMenu extends CKEditorPluginBase {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return drupal_get_path('module', 'ck_widget') . 'js/plugins/widgettemplatemenu/plugin.js';
    //return libraries_get_path('widgettemplatemenu') . '/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  public function getButtons() {
    return [
      'widgettemplatemenu' => [
        'label' => t('Widgets'),
        'image' => drupal_get_path('module', 'ck_widget') . 'js/plugins/widgettemplatemenu/icons/widgettemplatemenu.png'
        //'image' => libraries_get_path('widgettemplatemenu') . '/icons/widgettemplatemenu.png'
      ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array();
  }

}