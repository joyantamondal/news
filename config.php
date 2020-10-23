<?php


session_start();

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('969548276108-esifs8vnornqmenefo0ciqkm0v3dehhq.apps.googleusercontent.com');

$google_client->setClientSecret('crFEI8UjrGUlHBpOgmEPQ9a_');

$google_client->setRedirectUri('https://newsbddemo.herokuapp.com/m.php');

$google_client->addScope('email');

$google_client->addScope('profile');

?>