<?php

namespace Drupal\movie_directory\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * provides search input field
 */
class MovieSearch extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'movie_search';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['search_term'] = [
      '#type' => 'textfield',
      '#placeholder' => $this->t('Shazam'),
      '#attributes' => [
         'autocomplete' => 'OFF',
         'class' => ['search-button', 'search-field'],
      ],
      '#title' => $this->t('Search for a movie')
    ];


    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Search'),
      '#attributes' => [
        'class' => ['search-btn', 'benjamin']
      ]
    ];
    return $form;
  }

    /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $route_name = 'movie_directory.listing'; #the routing file machine name
    $search_term = $form_state->getValue('search_term');

     if (!empty($search_term)) {
      return $form_state->setRedirect($route_name, ['search_term' => $search_term]);
    }
  }
}
