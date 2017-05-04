<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 04/05/17
 * Time: 11:16 م
 */

/**
 * Disallow direct access to the file
 */
if (count(get_included_files()) == 1) exit("Direct access not permitted. Please refer to the docs provided with your API");

require_once __DIR__ . '/vendor/autoload.php';

use Adwairi\PropertyFinder\Sorter;

/**
 * Class Trip
 */
class Trip{

    private $trip;

    /**
     * Trip constructor.
     * @param array $cards
     */
    public function __construct($cards = [])
    {
        $sorter   = new Sorter($cards);
        $this->trip = $sorter->buildJourney();
    }

    /**
     * @return \Adwairi\PropertyFinder\HTML
     */
    public function getTrip(){
        return $this->trip;
    }

}