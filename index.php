<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 04/05/17
 * Time: 03:12 م
 */

include_once('API.php');

$cards = [
    [
        "Departure"             => "Gerona Airport",
        "Arrival"               => "Stockholm",
        "Transportation"        => "Plane",
        "Transportation_number" => "SK455",
        "Seat"                  => "3A",
        "Gate"                  => "45B",
        "Baggage"               => "334",
    ],
    [
        "Departure"      => "Barcelona",
        "Arrival"        => "Gerona Airport",
        "Transportation" => "Bus",
    ],
    [
        "Departure"             => "Madrid",
        "Arrival"               => "Barcelona",
        "Transportation"        => "Train",
        "Transportation_number" => "78A",
        "Seat"                  => "45B",
    ],
    [
        "Departure"             => "Stockholm",
        "Arrival"               => "New York",
        "Transportation"        => "Plane",
        "Transportation_number" => "SK22",
        "Seat"                  => "7B",
        "Gate"                  => "22",
    ],
];

$trip = new Trip($cards);
$journey_desc = $trip->getTrip();
echo "<pre>" . $journey_desc . "</pre>";

