<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Movie extends BaseController
{

  public function index()
  {
    // Get get movie genre
    $getGenre = getMovieGenre('movie')->genres;
    $movieGenres = [];
    foreach ($getGenre as $genre) {
      $movieGenres[$genre->id] = $genre->name;
    }

    // Get movie & tv languange
    $getLange = getLang();
    $lang = [];
    foreach ($getLange as $la) {
      $lang[$la->iso_639_1] = $la->english_name;
    }

    // Tv genre
    $getTvGenre = getTvGenre()->genres;
    $tvGenres = [];
    foreach ($getTvGenre as $genre) {
      $tvGenres[$genre->id] = $genre->name;
    }
    // dd($tvGenres);

    $data = [
      'title' => 'Movie Review',
      'movie_upcoming' => curl('movie', 'upcoming'),
      'movie_top_rated' => curl('movie', 'top_rated'),
      'movie_popular' => curl('movie', 'popular'),
      'tv_new_releases' => curl('tv', 'airing_today'),
      'movie_genre' => $movieGenres,
      'tv_genre' => $tvGenres,
      'lang' => $lang,
    ];
    return view('index', $data);
  }

  public function detailMovie($id)
  {
    $getGenre = getMovieGenre('movie')->genres;
    $movieGenres = [];
    foreach ($getGenre as $genre) {
      $movieGenres[$genre->id] = $genre->name;
    }

    $trailers = getTrailerMovie($id)->results;
    $trailer = [];
    foreach ($trailers as $item) {
      $trailer[$item->type] = $item->key;
    }

    $data = [
      'title' => 'Moview - Detail',
      'detail' => getDetailMovie($id),
      'trailer' => $trailer['Trailer'],
      'similar_movie' => getSimilarMovie($id),
      'movie_genre' => $movieGenres,
    ];
    // dd($data);

    return view('movie-details', $data);
  }

  public function movie($page = null)
  {
    $curl = curl('movie', 'upcoming')->results;

    if ($page != null) {
      $curl = curl('movie', 'upcoming', $page)->results;
    }

    $getGenre = getMovieGenre('movie')->genres;
    $movieGenres = [];
    foreach ($getGenre as $genre) {
      $movieGenres[$genre->id] = $genre->name;
    }

    $data = [
      'title' => 'Movies',
      'movie_genre' => $movieGenres,
      'movie_upcoming' => $curl,
    ];

    return view('movie', $data);
  }

  public function tv($page = null)
  {
    $curl = curl('tv', 'airing_today')->results;

    if ($page != null) {
      $curl = curl('tv', 'airing_today', $page)->results;
    }

    $getTvGenre = getTvGenre()->genres;
    $tvGenres = [];
    foreach ($getTvGenre as $genre) {
      $tvGenres[$genre->id] = $genre->name;
    }

    $data = [
      'title' => 'Tv Show',
      'tv_genre' => $tvGenres,
      'tv_new' => $curl,
    ];

    return view('tv-show', $data);
  }
}
