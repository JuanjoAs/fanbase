<?php
require_once 'assets/Composer/vendor/autoload.php';
session_start();
// init configuration
$clientID = '839427167234-tcs6jo32qrvoal8vhcbiqnf6iati1eh5.apps.googleusercontent.com';
$clientSecret = 'FDO7u7RpvTG_hVDPUN5J0Lxa';
$redirectUri = 'http://localhost/fanbase/pruebalogingoogle.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    // get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    echo $google_account_info->id."<br>";
    echo $google_account_info->name."<br>";
    echo $google_account_info->email."<br>";
    echo $google_account_info->familyName."<br>";
    echo $google_account_info->getPicture()."<br>";


    // now you can use this profile info to create account in your website and make user logged in.
} else {
    echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}
?>