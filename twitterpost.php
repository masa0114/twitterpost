<?php

//require dirname(__FILE__)."lib/TwitterOAuth.php";

// OAuthライブラリの読み込み

echo dirname(__FILE__);

//require (dirname(__FILE__).'/twitteroauth/autoload.php');
require (dirname(__FILE__).'/twitteroauth/src/TwitterOAuth.php');
//require (dirname(__FILE__).'/twitteroauth/autoload.php');
//use Abraham\TwitterOAuth\TwitterOAuth;

//認証情報４つ
$consumerKey = "fnmUm8h8VExeY2DulXhe2Yzqh";
$consumerSecret = "t17aBKftnPTmnOYeAV7mVY32PXZC0XW2t4h28QyyhGpSadDGqb";
$accessToken = "57595798-LUSxa2RpRKygnC78L309zhkuZZZ3Nna2VJxQoKV1V";
$accessTokenSecret = "4UbFP1Bo1HsNHdL4KmRdgCBCHw1iNotDz4W9jkGtbD2wH";

//接続
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

//ツイート
$res = $connection->post("statuses/update", array("status" => "テストテストメッセージ"));

//レスポンス確認
var_dump($res);
