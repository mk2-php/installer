<?php

$start=\memory_get_usage();

use Mk2\Libraries\Generator;

require "../../vendor/autoload.php";

define("MK2_ROOT",dirname(__DIR__));

new Generator();

$end=\memory_get_peak_usage();