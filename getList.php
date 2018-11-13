<?php
include 'dbconfig.php';
$query = "Select * from `tbl1`";
$result = mysqli_query($conn, $query) or die('Unsuccessful: ' . mysql_error());
$eventResult = array();
while ($row = mysqli_fetch_assoc($result)) {
    $eventResult[] = $row;
}
echo json_encode($eventResult);
?>