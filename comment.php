
<?php
	$SERVER = "localhost";
	$USER = "root";
	$PASS = "";
	$DB = "comments";


	$email = $_POST['plantiffemail'];
	$comm = $_POST['comment'];
	
	$conn = mysqli_connect ($SERVER, $USER , $PASS, $DB);
	if(mysqli_connect_errno())
	{
		echo "Connection failed, ". mysqli_connect_error();
	}
	$sql = "INSERT INTO comment VALUES ('$email','$comm')";
	$result = mysqli_query($conn, ($sql)) ;
	if($result)
	{
		header("location: comment.html");
	}
	else
		echo "Operation failed......";

?>