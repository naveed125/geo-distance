Geo Distance
============

Calculate distance between two points on earth using longitude and longitude. Can be used to find out the closest metro area based on distance.

Example:
--------


<pre>

// 1 Market St. San Francisco, California, USA
$start = array (
  'lat' => 37.793629,
  'long' => -122.394264
);

// Pier 39, San Francisco, California, USA
$end = array (
  'lat' => 37.808868, 
  'long' => -122.409842
);

$gd = new GeoDistance\GeoDistance();
$distance = $gd->distance($start,$end);

echo "Distance between the two points is: {$distance} miles\n";
</pre>

The above should output the following:
--------------------------------------
<pre>
Distance between the two points is: 1.3532202220106
</pre>
