<?php

namespace GeoDistance;

class GeoDistance {

    /**
     * Country constants
     */
    const COUNTRY_US         = 'us';
    const COUNTRY_CANADA     = 'ca';
    const COUNTRY_MEXICO     = 'mx';
    const COUNTRY_UK         = 'uk';
    
    /**
     * Country definitions
     */
    public static $countries = array(
        self::COUNTRY_US => 'United States',
        self::COUNTRY_CANADA => 'Canada',
        self::COUNTRY_MEXICO => 'Mexico',
        self::COUNTRY_UK => 'United Kingdom'
    );

    /**
     * Metro area constants
     */
    const METRO_AREA_SF_BAY           = 1;
    const METRO_AREA_NEW_YORK         = 2;
    const METRO_AREA_LOS_ANGELES      = 3;
    const METRO_AREA_SEATTLE          = 4;
    const METRO_AREA_PORTLAND         = 5;
    const METRO_AREA_CHICAGO          = 6;
    const METRO_AREA_ATLANTA          = 7;
    const METRO_AREA_CHARLOTTE        = 8;
    const METRO_AREA_CHATTANOOGA      = 9;
    const METRO_AREA_DALLAS_FORTWORTH = 10;
    const METRO_AREA_HOUSTON          = 11;
    const METRO_AREA_MIAMI            = 12;
    const METRO_AREA_NASHVILLE        = 13;
    const METRO_AREA_PHOENIX          = 14;
    const METRO_AREA_SACRAMENTO       = 15;
    const METRO_AREA_SAN_ANTONIO      = 16;
    const METRO_AREA_SAN_DIEGO        = 17;
    const METRO_AREA_TAMPA            = 18;
    
    /**
     * Metro area definitions
     */
    private static $metro_areas = array(
        self::METRO_AREA_SF_BAY =>
            array(
                    'id' => self::METRO_AREA_SF_BAY,
                    'title' => 'San Francisco Bay Area',
                    'country' => self::COUNTRY_US,
                    'latitude' => 37.615834,
                    'longitude' => -122.231167
            ),
        self::METRO_AREA_NEW_YORK =>
            array(
                    'id' => self::METRO_AREA_NEW_YORK,
                    'title' =>'New York',
                    'country' => self::COUNTRY_US,
                    'latitude' => 40.6443351,
                    'longitude' => -73.97350120
            ),
        self::METRO_AREA_LOS_ANGELES =>
            array(
                    'id' => self::METRO_AREA_LOS_ANGELES,
                    'title' =>'Los Angeles',
                    'country' => self::COUNTRY_US,
                    'latitude' => 34.0204989,
                    'longitude' => -118.4117325
            ),
        self::METRO_AREA_SEATTLE =>
            array(
                    'id' => self::METRO_AREA_SEATTLE,
                    'title' =>'Seattle',
                    'country' => self::COUNTRY_US,
                    'latitude' => 47.614848,
                    'longitude' => -122.3359058
            ),
        self::METRO_AREA_PORTLAND =>
            array(
                    'id' => self::METRO_AREA_PORTLAND,
                    'title' =>'Portland',
                    'country' => self::COUNTRY_US,
                    'latitude' => 45.5424364,
                    'longitude' => -122.654422
            ),
        self::METRO_AREA_CHICAGO =>
            array(
                    'id' => self::METRO_AREA_CHICAGO,
                    'title' =>'Chicago',
                    'country' => self::COUNTRY_US,
                    'latitude' => 41.8337329,
                    'longitude' => -87.7321555
            ),
        self::METRO_AREA_ATLANTA =>
            array(
                    'id' => self::METRO_AREA_ATLANTA,
                    'title' =>'Atlanta',
                    'country' => self::COUNTRY_US,
                    'latitude' => 33.748314,
                    'longitude' => -84.391108
            ),
        self::METRO_AREA_CHARLOTTE =>
            array(
                    'id' => self::METRO_AREA_CHARLOTTE,
                    'title' =>'Charlotte',
                    'country' => self::COUNTRY_US,
                    'latitude' => 35.222820,
                    'longitude' => -80.837910
            ),
        self::METRO_AREA_CHATTANOOGA =>
            array(
                    'id' => self::METRO_AREA_CHATTANOOGA,
                    'title' =>'Chattanooga',
                    'country' => self::COUNTRY_US,
                    'latitude' => 35.053515,
                    'longitude' => -85.311321
            ),
        self::METRO_AREA_DALLAS_FORTWORTH =>
            array(
                    'id' => self::METRO_AREA_DALLAS_FORTWORTH,
                    'title' =>'Dallas/Fortworth',
                    'country' => self::COUNTRY_US,
                    'latitude' => 32.778156,
                    'longitude' => -96.795401
            ),
        self::METRO_AREA_HOUSTON =>
            array(
                    'id' => self::METRO_AREA_HOUSTON,
                    'title' =>'Houston',
                    'country' => self::COUNTRY_US,
                    'latitude' => 29.760452,
                    'longitude' => -95.369782
            ),
        self::METRO_AREA_MIAMI =>
            array(
                    'id' => self::METRO_AREA_MIAMI,
                    'title' =>'Miami',
                    'country' => self::COUNTRY_US,
                    'latitude' => 25.774811,
                    'longitude' => -80.197735
            ),
        self::METRO_AREA_NASHVILLE =>
            array(
                    'id' => self::METRO_AREA_NASHVILLE,
                    'title' =>'Nashville',
                    'country' => self::COUNTRY_US,
                    'latitude' => 36.167870,
                    'longitude' => -86.778060
            ),
        self::METRO_AREA_PHOENIX =>
            array(
                    'id' => self::METRO_AREA_PHOENIX,
                    'title' =>'Phoenix',
                    'country' => self::COUNTRY_US,
                    'latitude' => 33.442770,
                    'longitude' => -112.072530
            ),
        self::METRO_AREA_SACRAMENTO =>
            array(
                    'id' => self::METRO_AREA_SACRAMENTO,
                    'title' =>'Sacramento',
                    'country' => self::COUNTRY_US,
                    'latitude' => 38.579332,
                    'longitude' => -121.490901
            ),
        self::METRO_AREA_SAN_ANTONIO =>
            array(
                    'id' => self::METRO_AREA_SAN_ANTONIO,
                    'title' =>'San Antonio',
                    'country' => self::COUNTRY_US,
                    'latitude' => 29.424580,
                    'longitude' => -98.494610
            ),
        self::METRO_AREA_SAN_DIEGO =>
            array(
                    'id' => self::METRO_AREA_SAN_DIEGO,
                    'title' =>'San Diego',
                    'country' => self::COUNTRY_US,
                    'latitude' => 32.715000,
                    'longitude' => -117.162880
            ),
        self::METRO_AREA_TAMPA =>
            array(
                    'id' => self::METRO_AREA_TAMPA,
                    'title' =>'Tampa',
                    'country' => self::COUNTRY_US,
                    'latitude' => 27.946530,
                    'longitude' => -82.459270
            ),
    );
    

   /**
    * Calculate direct line distance between two points on earth using longitude and latitude
    * @param array $point1
    * @param array $point2
   */
  public function distance($point1, $point2)
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
