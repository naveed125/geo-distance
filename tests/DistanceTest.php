<?php

require_once __DIR__ . "/../src/GeoDistance/GeoDistance.php";
        
use GeoDistance\GeoDistance;

class DistanceTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test distance greater than 0
     */
    public function testSomeDistance()
    {
        $sf = [
            'latitude' => 37.615834,
            'longitude' => -122.231167
        ];

        $la = [
            'latitude' => 34.0204989,
            'longitude' => -118.4117325
        ];

        $gd = new GeoDistance();
        $distance = ceil($gd->distance($sf, $la));
        $this->assertEquals(328, $distance);
    }

    /**
     * Distance should be zero for the same point on earth
     */
    public function testNoDistance()
    {
        $start = [
            'latitude' => 37.615834,
            'longitude' => -122.231167
        ];

        $end = [
            'latitude' => 37.615834,
            'longitude' => -122.231167
        ];

        $gd = new GeoDistance();
        $distance = $gd->distance($start, $end);
        $this->assertEquals(0, $distance);
    }

    
}