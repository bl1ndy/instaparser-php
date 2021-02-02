#!/usr/bin/php
<?php

use function Instaparser\Load\loadRemoteUserData;

require_once __DIR__ . "/../vendor/autoload.php";

if (empty($argv[1])) {
    echo "Empty username argument. \n";
    echo "Usage load.php <username>\n";
    exit(1);
}

$username = $argv[1];

loadRemoteUserData($username);
