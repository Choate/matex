<?php

/**
 * Matex basic example
 * Simple evaluation of a formula
 */

require dirname(__DIR__).'\vendor\autoload.php';

use \choate\matex\Evaluator;

$evaluator = new Evaluator();
$formula = '1 + 2';
$result = $evaluator->execute($formula);

echo $formula . ' = '. $result;
