<?php

  /**
   * Calculate direct line distance between two points on earth
   * using longitude and latitude
   * @param array $point1
   * @param array $point2
   */
  function calculateDistance($point1, $point2)
  {
    $distance = (3958 * 3.1415926 * sqrt(
                ($point1['lat'] - $point2['lat'])
                * ($point1['lat'] - $point2['lat'])
                + cos($point1['lat'] / 57.29578)
                * cos($point2['lat'] / 57.29578)
                * ($point1['long'] - $point2['long'])
                * ($point1['long'] - $point2['long'])
        ) / 180);

    return $distance;
  }
