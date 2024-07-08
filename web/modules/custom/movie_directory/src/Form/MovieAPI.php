<?php

namespace Drupal\movie_directory\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class MovieAPI extends FormBase {

  #create a static variable to access the form everywhere
  const MOVIE_API_CONFIG_PAGE = 'movie_api_config_page:values';
 
  /**
   * {@inheritdoc}
   */

  public function getFormId() {
    return 'movie_api_config_page';
  }

   /**
   * {@inheritdoc}
   */
   #this is the actual form that you see on the page
 public function buildForm(array $form, FormStateInterface $form_state) {
    $values = \Drupal::state()->get(self::MOVIE_API_CONFIG_PAGE);

    $form['api_base_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Base URL'),
      '#description' => $this->t('This is the API Base URL'),
      '#default_value' => ($values['api_base_url']) ?: 'https://api.themoviedb.org/3',
      '#required' => TRUE,
    ];

    $form['api_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('API Key (v3 auth)'),
      '#description' => $this->t('This can be obtained from https://www.themoviedb.org/settings/api. You must have an account with themoviedb.'),
      '#default_value' => $values['api_key'],
      '#required' => TRUE,
    ];

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
   #after clicking on save will vanish so we need to save the data in the database
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $submitted_values = $form_state->cleanValues()->getValues();

    \Drupal::state()->set(self::MOVIE_API_CONFIG_PAGE, $submitted_values);

    $messenger = \Drupal::service('messenger');
    $messenger->addMessage($this->t('Your new configuration has been saved.'));
  }

}
