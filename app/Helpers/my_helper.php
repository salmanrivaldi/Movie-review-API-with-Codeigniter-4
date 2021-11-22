<?php


function curl($type, $category)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://api.themoviedb.org/3/$type/$category?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}

function getMovieGenre($type)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/genre/$type/list?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}

function getLang()
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/configuration/languages?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}

function getTvGenre()
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/genre/tv/list?api_key=$api_key&language=en-US");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}

function getDetailMovie($id)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/$id?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}


function getTrailerMovie($id)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/$id/videos?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}

function getTrailerSliderArea($id)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/$id/videos?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  $trailers = json_decode($response);

  $trailer = [];
  foreach ($trailers->results as $item) {
    $trailer[$item->type] = $item->key;
  }

  return $trailer['Trailer'];
}

function getSimilarMovie($id)
{
  $api_key = 'bd3b77b0db915a809f11ad2bd7469481';

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/movie/$id/similar?api_key=$api_key");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_HEADER, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
  $response = curl_exec($ch);
  curl_close($ch);

  return json_decode($response);
}
