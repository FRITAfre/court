<?php
	$SERVER = "localhost";
	$USER = "root";
	$PASS = "";
	$DB = "appeals";


	$plantiffid = $_POST['plantiffid'];
	$plantiffname = $_POST['plantiffname'];
	$plantiffworeda = $_POST['plantiffworeda'];
	$palntiffcity = $_POST['plantiffcity'];
	$plantiffregion = $_POST['plantiffregion'];
	$plantiffemail = $_POST['plantiffemail'];
	$plantiffphone = $_POST['plantiffphone'];
	$lawyer = $_POST['lawyer/prosecutor'];
	$defendantname = $_POST['defendantname'];
	$defendantworeda = $_POST['defendantworeda'];
	$defendantcity = $_POST['defendantcity'];
	$defendantregion = $_POST['defendantregion'];
	$casetype = $_POST['casetype'];

	$file = $_FILES['applicationletter']['name'];
	$tmp = $_FILES['applicationletter']['tmp_name'];
	move_uploaded_file($tmp, "appealletter/".$file);

	$conn = mysqli_connect ($SERVER, $USER , $PASS, $DB);
	if(mysqli_connect_errno())
	{
		echo "Connection failed, ". mysqli_connect_error();
	}
	$sql = "INSERT INTO appeals (plantiffid, plantiffname, plantiffworeda, plantiffcity, plantiffregion, plantiffemail, plantiffphone, defendantname, defendantworeda, defendantcity, defendantregion, lawyer_prosecutor, casetype, file) VALUES ('$plantiffid', '$plantiffname', $plantiffworeda, '$palntiffcity', '$plantiffregion', '$plantiffemail', $plantiffphone, '$defendantname', $defendantworeda, '$defendantcity', '$defendantregion', '$lawyer', '$casetype', '$file')";
	$result = mysqli_query($conn, ($sql)) ;
	if($result)
	{
		header("location: appealcase.html");
	}
	else
		echo "Operation failed......";

?>