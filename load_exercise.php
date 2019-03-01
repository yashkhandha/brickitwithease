<?php

//session_start();

include ('includes/dbh.inc.php');

$output = array();

$data = json_decode(file_get_contents("php://input"));

$sql = "SELECT * FROM exercises where pain_id='".$data->pain_id."' ORDER BY exercise_name ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
}

echo json_encode($output);
