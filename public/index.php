<?php

require __DIR__ . '/../loader.php';

use Framework\App;
use Framework\Request;

$app = App::make(Request::capture());

$app->run();