<?php

namespace Instaparser\Load;

use function Instaparser\Storage\saveUserData;

function loadRemoteUserData(string $username, ?string $sessionId): string
{
    $httpClient = new \GuzzleHttp\Client();
    $fullUrl = "https://www.instagram.com/$username/?__a=1";
    $options = [];
    if ($sessionId !== null) {
        $options = [
            'headers' => [
                'cookie' => "sessionid=$sessionId",
            ],
        ];
    }
    $response = $httpClient->get($fullUrl, $options);
    $contents = $response->getBody()->getContents();
    $data = json_decode($contents);
    if (!is_object($data)) {
        throw new \Exception("User data is not object: " . $contents);
    }
    return saveUserData($username, $data);
}
