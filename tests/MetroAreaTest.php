<?php

require_once __DIR__ . "/../src/GeoDistance/GeoDistance.php";
        
use GeoDistance\GeoDistance;

class MetroAreaTest extends PHPUnit_Framework_TestCase
{
    /**
     * 1 Market st is in SF
     */
    public function testOneMarket()
    {
        $point = [
            'latitude' => 37.793369,
            'longitude' => -122.394234
        ];

        $gd = new GeoDistance();
        $metro = $gd->findMetroArea($point);
        $this->assertEquals($metro['id'], GeoDistance::METRO_AREA_SF_BAY);
    }
}
