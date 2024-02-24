<?php
require '../vendor/autoload.php';

use Uganda\Geo;
$uganda = new Geo();

// $districts = $uganda->districts();

$counties = $uganda->counties();

    echo '<pre>';
    print_r($counties);
    echo '</pre>';