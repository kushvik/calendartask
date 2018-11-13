<?php
	include 'dbconfig.php';
	$taskname = $taskdate = $reminder = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $taskname = $_POST["taskname"];
	  $taskdate = $_POST["taskdate"];
	  $reminder = $_POST["reminder"];
	}	

	$sql = "INSERT INTO `tbl1`(`title`, `date`, `Reminder`) VALUES ('$taskname', '$taskdate', '$reminder')";

if (mysqli_query($conn, $sql)) {
    header('Location: display.php');
} else {
    echo "<script>
    window.location.href='index.html';
	alert('Record not inserted. Please try again.');
</script>";
}

mysqli_close($conn);
?>
