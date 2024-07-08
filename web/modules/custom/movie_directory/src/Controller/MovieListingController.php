<?php

namespace Drupal\movie_directory\Controller;

use Drupal\Core\Controller\ControllerBase;

class MovieListingController extends ControllerBase{
  public $searhTerm;

  public function view($search_term) {
    $this->listMovies();
    $content = [];

    $this->searchTerm = $search_term;

    $content['search'] = \Drupal::formbuilder()->getForm('Drupal\movie_directory\Form\MovieSearch');
    $content['search_term'] = \Drupal::routeMatch()->getRawParameter('search_term');
    $content['movies'] = $this->createMovieCard();
  
    return [
      '#theme' => 'movie-listing',
      '#content' => $content,
      '#attached' => [
        'library' => [
          'movie_directory/movie_directory_styling',
        ],
      ],
    ];
  }
  #call our movies
  public function listMovies() {
    $movie_api_connector_service = \Drupal::service('movie_directory.api_connector');
    $movie_list = $movie_api_connector_service->discoverMovies($this->searchTerm);

    if (!empty($movie_list->results)) {
       return $movie_list->results;
    }
    return [];
  }

  public function createMovieCard(){
    $movie_api_connector_service = \Drupal::service('movie_directory.api_connector');
    $movieCrads = [];

    $movies = $this->listMovies();

    if (!empty($movies)) {
      foreach ($movies as $movie) {
        $content = [
          'title' => $movie->title,
          'description' => $movie->overview,
          'movie_id' => $movie->id,
          'image' => $movie_api_connector_service->getImageUrl($movie->poster_path)
        ];
        $movieCrads[] = [
          '#theme' => 'movie-card',
          '#content' => $content,
        ];
      }
    }
    return $movieCrads;
  }
}
