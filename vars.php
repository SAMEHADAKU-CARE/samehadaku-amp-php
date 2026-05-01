<?php
$site_url = 'https://samehadaku.today';
$api_key = 'kMZw4y87@@';
$api_url_slider = $site_url . '/wp-json/anime/v1/slider?api_key=' . $api_key;
$api_url_popular = $site_url . '/wp-json/anime/v1/popular-anime-today?api_key=' . $api_key;
$api_url_latest = $site_url . '/wp-json/anime/v1/latest-release-episode-by-date?api_key=' . $api_key;
$url_anime = $site_url . '/anime/';
$url_bookmark = $site_url . '/bookmark/';
$url_schedule = $site_url . '/schedule/';
$brand_logo = 'assets/logo-samehadaku.png';
$brand_name = 'Samehadaku';
$title = 'Samehadaku 😎| Situs Nonton Anime Subtitle Indonesia Terlengkap';
$description = 'Samehadaku adalah Website Nonton Anime Subtitle Indonesia Gratis Disini Bisa Download Dengan Mudah Dan Streaming Dengan Kualitas Terbaik';
$keywords = 'anime, samehadaku, download anime, nonton anime, streaming anime, anime sub indo, samehada';
$google_verification = 'google-site-verification';
$favicon_url = 'assets/favicon.jpg';
$google_analytics = 'UA-123456789-1';
$contact_email = 'wkwkwk@samehadaku.today';
$content_category = 'anime';

$redis_host = 'localhost';
$redis_port = 6379;
$redis_password = '';
$redis_db = 1;
$redis_key_popular = 'samehadaku:popular_anime';
$redis_ttl_popular = 300;
$redis_key_latest = 'samehadaku:latest_episode';
$redis_ttl_latest = 300;
$redis_key_slider = 'samehadaku:slider';
$redis_ttl_slider = 300;
?>