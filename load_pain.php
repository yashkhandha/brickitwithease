<?php

//session_start();

include ('includes/dbh.inc.php');

$output = array();

$sql = "SELECT * FROM pains order by pain_name asc";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
}

echo json_encode($output);
