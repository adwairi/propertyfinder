<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 04/05/17
 * Time: 01:50 م
 */

namespace Adwairi\PropertyFinder\Repositories;


/**
 * Class Card
 * @package Adwairi\PropertyFinder\Repositories
 */
class Card
{
    /**
     * The cards array.
     *
     * @var array
     */
    private $cards = [
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

    /**
     * Cards constructor.
     * You can use your own cards array rather than the default one
     *
     * @param array $cards
     */
    public function __construct($cards = [])
    {
        if (count($cards)) {
            $this->cards = $cards;
        }
    }

    /**
     * get the journey cards.
     *
     * @return array
     */
    public function getCards()
    {
        return $this->cards;
    }
}