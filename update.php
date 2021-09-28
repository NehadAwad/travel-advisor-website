<?php
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	
	require 'config.php';

	$sql = "UPDATE messages 
			SET
				Name = '$name',
				Phone = '$phone',
				Email = '$email'
			WHERE Id='$id'";
	//$result = mysqli_query($conn, $sql);
	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated contact info. <br>";
	}
	echo "<a href='contact.php'>Back</a>"

?>