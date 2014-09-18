Geo Distance
============

Calculate distance between two points on earth using longitude and longitude.

Example:
--------


<pre>
require_once('geo-distance.php');

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

$distance = calculateDistance($start,$end);

echo "Distance between the two points is: {$distance} miles\n";
</pre>

The above should output the following:
--------------------------------------
<pre>
Distance between the two points is: 1.3532202220106
</pre>
