<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
require __DIR__ . '/config.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$client = new Client([
    'timeout'  => 3.0,
    'verify'   => false, // Assurez-vous que le chemin est correct
]);

$coderequest = $_GET['code'];

try {
    $response = $client->post('https://oauth2.googleapis.com/token', [
        'form_params' => [
            'client_id' => '<?php echo api_id ?>',
            'client_secret' => '<?php echo $api_key ?>',
            'redirect_uri' => 'http://localhost:3000/config/connect.php',
            'grant_type' => 'authorization_code',
            'code' => $coderequest,
        ],
    ]);

    $result = (string)$response->getBody()->getContents();
    $responseData = json_decode($result, true);
    print_r($responseData);

    $accessToken = json_decode($response->getBody())->access_token;

    $response = $client->get('https://www.googleapis.com/oauth2/v2/userinfo', [
        'headers' => [
            'Authorization' => "Bearer $accessToken",
        ],
    ]);

    $result = $response->getBody()->getContents();
    $userData = json_decode($result, true);
    print_r($userData);


} catch (RequestException $e) {
    echo "Erreur lors de la requête : " . $e->getMessage();
}


// 