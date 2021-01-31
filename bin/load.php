#!/usr/bin/php
<?php

require_once __DIR__ . "/../vendor/autoload.php";

$username = $argv[1];

if (empty($argv[1])) {
    echo "Empty username argument. \n";
    echo "Usage load.php <username>\n";
    exit(1);
}

loadRemoteUserData($username);