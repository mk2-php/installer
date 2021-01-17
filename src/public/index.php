<?php

$start=\memory_get_usage();

use Mk2\Libraries\Generator;

require "../../vendor/autoload.php";

define("MK2_ROOT",dirname(__DIR__));

new Generator();

$end=\memory_get_peak_usage();

echo '<div style="position:fixed;right:10px;bottom:10px;">';
echo '<div>Start:'.($start/1024).'KB</div>';
echo '<div>End  :'.($end/1024).'KB</div>';
echo '</div>';