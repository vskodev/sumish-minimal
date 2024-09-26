<?php

require "vendor/autoload.php";

$config = require "config/web.php";

(new Sumish\Application($config))->run();
