<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 04/05/17
 * Time: 03:12 م
 */

// Composer autoload
use Adwairi\PropertyFinder\Sorter;

require_once __DIR__ . '/vendor/autoload.php';

$sorter   = new Sorter();
$journey_desc = $sorter->buildJourney();

echo "<pre>" . $journey_desc . "</pre>";

