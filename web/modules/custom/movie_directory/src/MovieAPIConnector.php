<?php
namespace Drupal\movie_directory;
class MovieAPIConnector {
    private $client; #http client which will allow us to actually speak to our api
    private $query;

    #create the endpoint
    public function __construct(\Drupal\Core\Http\ClientFactory $client) { #here we're getting our data from the form and store it in our connector class
            $movie_api_config = \Drupal::state()->get(\Drupal\movie_directory\Form\MovieAPI::MOVIE_API_CONFIG_PAGE);
            $api_url = ($movie_api_config['api_base_url']) ?: 'https://api.themoviedb.org';
            $api_key = ($movie_api_config['api_key']) ?: '';
            $query = ['api_key' => $api_key];
            $this->query = $query;
            $this->client = $client->fromOptions( #here we connect to our endpoint
              [
                'base_uri' => $api_url,
                'query' => $query
              ]
            );
    }

    #to call our api and gets some movies to be displayed in our page.
    #we set our endpoint, we set the options the required parameters that this endpoint needs, then get make a request to it,
    # and then get the content of it, and then decode the results so that we can then use it as an array

    public function discoverMovies($search_term) {
      $data = []; #to store the data that we collect from the api
      $endpoint = '/3/discover/movie'; #store the endpoint
      $options =['query' => $this->query]; #connect to our endpoint
      if($search_term != ''){
        $endpoint = '/3/search/movie';
        $options['query']['query'] = $search_term;
      }
      try{
        $request = $this->client->get($endpoint, $options);
        $result = $request->getbody()->getContents();
        $data = json_decode($result);
      }
      catch(\GuzzleHttp\Exception\requestException $e) {
        watchdog_exception('movie_directory', $e, $e->getMessage());
      }
      return $data;
    }
    public function getImageUrl($image_path) {
      return 'https://image.tmdb.org/t/p/w500' . $image_path; 
    }
}
 



