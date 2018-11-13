<?php
   include 'dbconfig.php';
    $eventDate = $_POST['eventDate'];
    $query="select * from `tbl1` where `date` = '" . $eventDate . "'";
    $result = mysqli_query($conn,$query) or die('Unsuccessful: ' . mysql_error());
    $eventResult = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $eventResult[] = $row;
    }
    echo json_encode($eventResult);
 ?>
