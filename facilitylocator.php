<?php

require("includes/dbh.inc.php");
// Get parameters from URL
$center_lat = $_GET["lat"];
$center_lng = $_GET["lng"];
$radius = $_GET["radius"];
$sport = $_GET["sport"];
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
// Opens a connection to a mySQL server
$connection = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$connection) {
    die('Not connected : ' . $connection->connect_error);
}
// Set the active mySQL database
$db_selected = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$db_selected) {
    die ("Can\'t use db : " . mysqli_error());
}
// Search the rows in the markers table
$query = sprintf("SELECT id, facility_name, address, latitude, longitude,sports,number_of_field_courts, field_surface_type, facility_since, facility_condition, changing_room, ( 6371 * acos( cos( radians('%s') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( latitude ) ) ) ) AS distance FROM markers WHERE sports LIKE '%%%s%%' HAVING distance < '%s'  ORDER BY distance LIMIT 0 , 60",
    ($center_lat),
    ($center_lng),
    ($center_lat),
    ($sport),
    ($radius));
$result = mysqli_query($connection,$query);
if (!$result) {
    die("Invalid query: " . mysqli_error());
}
header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("id", $row['id']);
    $newnode->setAttribute("name", $row['facility_name']);
    $newnode->setAttribute("address", $row['address']);
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
    $newnode->setAttribute("sports", $row['sports']);
    $newnode->setAttribute("number_of_field_courts", $row['number_of_field_courts']);
    $newnode->setAttribute("field_surface_type", $row['field_surface_type']);
    $newnode->setAttribute("facility_since", $row['facility_since']);
    $newnode->setAttribute("facility_condition", $row['facility_condition']);
    $newnode->setAttribute("changing_room", $row['changing_room']);
    $newnode->setAttribute("distance", $row['distance']);
}
echo $dom->saveXML();
?>