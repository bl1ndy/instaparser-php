<?php

function loadRemoteUserData(string $username): string
{
    $httpClient = new \GuzzleHttp\Client();
    $fullUrl = "https://www.instagram.com/$username?__a=1";
    $response = $httpClient->get($fullUrl);
    $contents = $response->getBody()->getContents();
    var_dump($response->getBody()->getContents());

    return "";
}