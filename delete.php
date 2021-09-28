<?php
	$id = $_GET['id'];
	
	require 'config.php';

	$sql = "DELETE FROM messages WHERE Id='$id'";
	//$result = mysqli_query($conn, $sql);
	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during deletion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully deleted contact info. <br>";
	}
	echo "<a href='contact.php'>Back</a>"

?>