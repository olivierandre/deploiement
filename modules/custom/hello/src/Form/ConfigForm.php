<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigForm extends ConfigFormBase {

  public function getFormID() {
    return 'admin_form';
  }

  public function getEditableConfigNames() {
    return ['hello.config'];
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $options = [
      '' => $this->t('No color'),
      'blue-class' => $this->t('Blue'),
      'yellow-class' => $this->t('Yellow'),
      'red-class' => $this->t('Red'),
    ];
    $color = $this->config('hello.config')->get('color');

    $form['color'] = [
      '#type' => 'select',
      '#title' => $this->t('Choose a block color'),
      '#options' => $options,
      '#default_value' => $color,
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('hello.config');
    $color = $form_state->getValue('color');

    $config
      ->set('color', $color)
      ->save();

    \Drupal::entityTypeManager()->getViewBuilder('block')->resetCache();

    parent::submitForm($form, $form_state);
  }
}
