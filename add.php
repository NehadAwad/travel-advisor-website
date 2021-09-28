<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    

	require 'config.php';

	$sql = "INSERT INTO messages VALUES(NULL,'$name', '$email', '$phone', '$message')";
	//$result = mysqli_query($conn, $sql);
	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added contact info. <br>";
	}
	echo "<a href='contact.php'>Back</a>"

?>