#!/usr/bin/php
<?php

require_once __DIR__ . "/../vendor/autoload.php";

$username = $argv[1];

loadRemoteUserData($username);