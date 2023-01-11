<?php

namespace Drupal\addweb\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure add web settings for this site.
 */
class AddWebForm extends ConfigFormBase {

  /**
   * Implements getEditableConfigNames().
   */
  protected function getEditableConfigNames() {
    return [
      'addweb.settings',
    ];
  }

  /**
   * Implements getFormId().
   */
  public function getFormId() {
    return 'addweb_form';
  }

  /**
   * Implements buildForm().
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('addweb.settings');
    $form['assets_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Assets Type'),
      '#options' => [
        'default' => $this->t('Default'),
        'custom' => $this->t('Custom'),
      ],
      '#default_value' => $config->get('assetsType'),
      '#attributes' => [
        'name' => 'assets_type',
      ],
    ];

    $form['assets_paths'] = [
      '#type' => 'textarea',
      '#size' => '60',
      '#placeholder' => 'Enter CSS and JS',
      '#attributes' => [
        'id' => 'assets-custom',
      ],
      '#default_value' => $config->get('assetsPaths'),
      '#states' => [
        'visible' => [
          ':input[name="assets_type"]' => ['value' => 'custom'],
        ],
      ],
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * Implement submitForm().
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Getting value for assets.
    $form_values = $form_state->getValues();

    $this->config('addweb.settings')
      // Set assets value setting.
      ->set('assetsType', $form_values['assets_type'])
      ->set('assetsPaths', $form_values['assets_paths'])
      ->save();
    parent::submitForm($form, $form_state);

  }

}
