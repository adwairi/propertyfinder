<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 04/05/17
 * Time: 04:08 م
 */

namespace Adwairi\Tests;


use Adwairi\PropertyFinder\Sorter;
use PHPUnit\Framework\TestCase;

class Tests extends TestCase
{
    /**
     *
     */
    function testSavedTree()
    {

        $sorter   = new Sorter();
        $journey_desc = $sorter->buildJourney();
        if (!is_dir("output")){
            mkdir("output");
        }
        return file_put_contents('output/trip.html', $journey_desc);
        $this->assertFileExists('output/trip.html');
        // -----------------------
    }

}