<?php

require __DIR__ . '/../loader.php';

use Framework\App;
use Framework\Request;

echo App::make(Request::capture())
    ->handle()
    ->send();