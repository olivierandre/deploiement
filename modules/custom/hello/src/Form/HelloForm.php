<?php

namespace Drupal\hello\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloForm extends FormBase {

  public function getFormID() {
    return 'hello_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    if(isset($form_state->getRebuildInfo()['result'])) {
      $form['result'] = [
        '#markup' => '<h2>'.$this->t('Result :').$form_state->getRebuildInfo()['result'].'</h2>',
      ];
    }

    $form['value1'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Valeur 1'),
      '#required' => TRUE,
    ];
    $operations = ['+', '-', '*', '/'];
    $form['operation'] = [
      '#type' => 'radios',
      '#title' => $this->t('Operations'),
      '#options' => $operations,
      '#required' => TRUE,
    ];
    $form['value2'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Valeur 2'),
      '#required' => TRUE,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Calculer'),
    ];

    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $val1 = $form_state->getValue('value1');
    $val2 = $form_state->getValue('value2');
    $op = $form_state->getValue('operation');

    if(!is_numeric($val1)) {
      $form_state->setErrorByName('value1', $this->t('First value must be numeric!'));
    }
    if(!is_numeric($val2)) {
      $form_state->setErrorByName('value2', $this->t('Second value must be numeric!'));
    }
    if($val2 == '0' && $op == '3') {
      $form_state->setErrorByName('value2', $this->t('Cannot divide by zero!'));
    }

    unset($form['result']);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $val1 = $form_state->getValue('value1');
    $val2 = $form_state->getValue('value2');
    $op = $form_state->getValue('operation');

    // kint($op); exit();

    switch($op) {
      case '0':
        $res = $val1 + $val2;
        break;
      case '1':
        $res = $val1 - $val2;
        break;
      case '2':
        $res = $val1 * $val2;
        break;
      case '3':
        $res = $val1 / $val2;
        break;
    }

    $form_state->addRebuildInfo('result', $res);
    $form_state->setRebuild();
    $form_state->setRedirect('hello.form');
  }
}
