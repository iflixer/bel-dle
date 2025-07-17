<?php

return array (
  'on' => 'on',
  'api' => 
  array (
    'token' => 'b7db8a2be83d0f4d5b0c4788a1627fa6',
    'domain' => '',
  ),
  'xfields' => 
  array (
    'search' => 
    array (
      'kinopoisk_id' => 'kinopoisk_id',
      'imdb_id' => 'imdb_id',
    ),
    'write' => 
    array (
      'source' => 'video_url',
      'quality' => 'quality',
      'translation' => 'translation',
      'translations' => 'translations',
      'season' => 'season_last',
      'episode' => 'episode_last',
      'custom_quality' => 'quality_custom',
      'custom_translation' => 'translation_custom',
      'custom_translations' => '',
      'format_season_type' => '1',
      'format_season' => 'season_pretty',
      'format_episode_type' => '1',
      'format_episode' => 'episode_pretty',
      'title_rus' => 'name_rus',
      'title_orig' => 'name_foreign',
      'slogan' => 'slogan',
      'description' => 'description',
      'year' => 'year',
      'duration' => 'movie_length',
      'genres' => 'genres',
      'countries' => 'country',
      'age' => 'age_rating',
      'poster' => 'poster',
    ),
    'npt_update' => 'not_update',
  ),
  'seo' => 
  array (
    'on' => 'on',
    'url' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][custom_translation] {custom_translation}[/custom_translation][custom_quality] {custom_quality}[/custom_quality][serial][season] {season} сезон[/season][episode] {episode} серия[/episode][/serial]',
    'title' => '[title_rus]{title_rus}[/title_rus]',
    'meta' => 
    array (
      'title' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][translation] {translation}[/translation][quality] {quality}[/quality][serial][format_season] {format_season}[/format_season][format_episode] {format_episode}[/format_episode][/serial]',
      'description' => '[title_rus]{title_rus}[/title_rus][year] {year}[/year][translation] {translation}[/translation][quality] {quality}[/quality][serial][season] {season} сезон[/season][episode] {episode} серия[/episode][/serial]',
    ),
  ),
  'update' => 
  array (
    'type' => '1',
    'interval' => '3h',
    'movies' => 
    array (
      'on' => 'on',
    ),
    'serials' => 
    array (
      'on' => 'on',
      'up' => '1',
      'priority' => '',
    ),
  ),
  'serials' => 
  array (
    'updates' => 
    array (
      'on' => 'on',
      'days' => '',
      'items' => '',
    ),
  ),
  'custom' => 
  array (
    'qualities' => 
    array (
      'webdl' => 'крутое',
    ),
    'translations' => 
    array (
    ),
  ),
  'cronkey' => '7a67b8d987fbbc750cb1b84f55793aa7',
);