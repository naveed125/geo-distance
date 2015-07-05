<?php

namespace GeoDistance;

class GeoDistance {
    
	/**
	 * Country constants
	 */
	const COUNTRY_US = 'us';
	const COUNTRY_CANADA = 'ca';
	const COUNTRY_MEXICO = 'mx';
	const COUNTR_UK = 'uk';
	
	public static $countries = array(
		self::COUNTRY_US => 'United States',
		self::COUNTRY_CANADA => 'Canada',
		self::COUNTRY_MEXICO => 'Mexico',
		self::COUNTR_UK => 'United Kingdom'
	);
	
    /**
     * Metro area constants
     */
    const METRO_AREA_SF_BAY = 1;
    const METRO_AREA_NEW_YORK = 2;
    const METRO_AREA_LOS_ANGELES = 3;
    const METRO_AREA_SEATTLE = 4;
    const METRO_AREA_PORTLAND = 5;
    const METRO_AREA_CHICAGO = 6;
    
    private static $metro_areas = array(
        self::METRO_AREA_SF_BAY =>
            array(
                    'title' => 'San Francisco Bay Area',
                    'country' => self::COUNTRY_US,
                    'longitude' => 37.615834,
                    'latitude' => -122.231167
            ),
        self::METRO_AREA_NEW_YORK =>
            array(
                    'title' =>'New York',
                    'country' => self::COUNTRY_US,
                    'longitude' => 40.6443351,
                    'latitude' => -73.97350120
            ),
        self::METRO_AREA_LOS_ANGELES =>
            array(
                    'title' =>'Los Angeles',
                    'country' => self::COUNTRY_US,
                    'longitude' => 34.0204989,
                    'latitude' => -118.4117325
            ),
        self::METRO_AREA_SEATTLE =>
            array(
                    'title' =>'Seattle',
                    'country' => self::COUNTRY_US,
                    'longitude' => 47.614848,
                    'latitude' => -122.3359058
            ),
        self::METRO_AREA_PORTLAND =>
            array(
                    'title' =>'Portland',
                    'country' => self::COUNTRY_US,
                    'longitude' => 45.5424364,
                    'latitude' => -122.654422
            ),
        self::METRO_AREA_CHICAGO =>
            array(
                    'title' =>'Chicago',
                    'country' => self::COUNTRY_US,
                    'longitude' => 41.8337329,
                    'latitude' => -87.7321555
            )
    );
    

   /**
    * Calculate direct line distance between two points on earth using longitude and latitude
    * @param array $point1
    * @param array $point2
   */
  function distance($point1, $point2)
  {
    $distance = (3958 * 3.1415926 * sqrt(
                ($point1['latitude'] - $point2['latitude'])
                * ($point1['latitude'] - $point2['latitude'])
                + cos($point1['latitude'] / 57.29578)
                * cos($point2['latitude'] / 57.29578)
                * ($point1['longitude'] - $point2['longitude'])
                * ($point1['longitude'] - $point2['longitude'])
        ) / 180);

    return $distance;
  }
  
  /**
   * Get the nearest metro area from the given point
   * @param string $latitude
   * @param string $longittude
   * @return string
   */
  public function findMetroArea($location){

  	$metro = self::$metro_areas[self::METRO_AREA_SF_BAY];
  	$shortest = PHP_INT_MAX;
  	foreach(self::$metro_areas as $id=>$data){
  		$distance = $this->distance($location, $data);
  		if($distance < $shortest){
  			$shortest = $distance;
  			$metro = $data;
  		}
  	}
  	
  	return $metro;
  }
  
  
  
  
}