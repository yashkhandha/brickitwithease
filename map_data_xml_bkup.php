<?php

$servername = "localhost";
$username = "bitnami";
$password = "jW26eZ4av76b";
$dbname = "brickit





";

// Start XML file, create parent node
$doc = new DOMDocument("1.0");
$node = $doc->createElement("location");
$parnode = $doc->appendChild($node);

// Opens a connection to a MySQL server
$connection = new mysqli($servername, $username, $password, $dbname);
if (!$connection) {
    die('Not connected : ' . $connection->connect_error);
}

// Set the active MySQL database
$db_selected = mysqli_connect($servername,$username,$password,$dbname);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM location WHERE 1";
$result = mysqli_query($connection,$query);
if (!$result) {
    die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");
$root = $doc->createElement("root");
// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
    // Add to XML document node
    $node = $doc->createelement("location");
    $newnode = $parnode->appendchild($node);

    $newnode->setattribute("id", $row['id']);
    $newnode->setattribute("name", $row['name']);
    $newnode->setattribute("address", $row['address']);
    $newnode->setattribute("lat", $row['lat']);
    $newnode->setattribute("lng", $row['lng']);
    $newnode->setattribute("type", $row['type']);
}

$xmlfile = $doc->saveXML();
echo $xmlfile;

?>