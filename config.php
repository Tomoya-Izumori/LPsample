<?php

// デバックモード
ini_set('display_errors', "On");


// path セッティング
if (isset($_SERVER['HTTPS']) AND $_SERVER['HTTPS'] == 'on') { 
	$protocol = 'https://'; 
}else{
	$protocol = 'http://'; 
} 
$homeUrl =  $protocol . $_SERVER['HTTP_HOST'] . '/LPsample';

$dir_path = __DIR__;

// wp rest api
$wpDir = '/wp'; // wordpressをインストールしているディレクトリを指定してください。
$apiUrl = $homeUrl . $wpDir . '/wp-json/wp/v2/'; // {post_id}を記事のIDに置き換えてください。
