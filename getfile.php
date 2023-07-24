
<?php
	$SERVER = "localhost";
	$USER = "root";
	$PASS = "";
	$DB1 = "cases";
	$DB2 = "appeals";


	$type = $_POST['filetype'];
	$email = $_POST['plantiffemail'];
	
	if($type == 1)
	{
		$conn = mysqli_connect ($SERVER, $USER , $PASS, $DB1);
		if(mysqli_connect_errno())
		{
			echo "Connection failed, ". mysqli_connect_error();
		}
		$sql = "SELECT * FROM cases WHERE plantiffemail = '$email'";
		$result = mysqli_query($conn, $sql) ;
	}
	else
	{
		$conn = mysqli_connect ($SERVER, $USER , $PASS, $DB2);
		if(mysqli_connect_errno())
		{
			echo "Connection failed, ". mysqli_connect_error();
		}
		$sql = "SELECT * FROM cases WHERE plantiffemail = '$email'";
		$result = mysqli_query($conn, $sql) ;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Getting file </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url('pic1.jpg'); width: 100%; height: 100%; ">
	<legend> <h2 align="center" style="color: orange; font-size: 55px;">FILE RECORD</h2> </legend>
	<table align="center" border="1px" style="width:600px; line-height: 30px; background: rgb(100, 100, 100);">
	<?php
		while ($rows = mysqli_fetch_assoc($result)) 
		{
	?>
		<tr>
			<th><h3>File Number</h3></th>
			<td> <?php echo $rows['filenumber']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Id</h3></th>
			<td> <?php echo $rows['plantiffid']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Name</h3></th>
			<td> <?php echo $rows['plantiffname']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Woreda</h3></th>
			<td> <?php echo $rows['plantiffworeda']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff City</h3></th>
			<td> <?php echo $rows['plantiffcity']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Region</h3></th>
			<td> <?php echo $rows['plantiffregion']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Email</h3></th>
			<td> <?php echo $rows['plantiffemail']; ?> </td>
		</tr>
		<tr>
			<th><h3>Plantiff Phone</h3></th>
			<td> <?php echo $rows['plantiffphone']; ?> </td>
		</tr>
		<tr>
			<th><h3>Defendant Name</h3></th>
			<td> <?php echo $rows['defendantname']; ?> </td>
		</tr>
		<tr>
			<th><h3>Defendant Woreda</h3></th>
			<td> <?php echo $rows['defendantworeda']; ?> </td>
		</tr>
		<tr>
			<th><h3>Defendant City</h3></th>
			<td> <?php echo $rows['defendantcity']; ?> </td>
		</tr>
		<tr>
			<th><h3>Defendant Region</h3></th>
			<td> <?php echo $rows['defendantregion']; ?> </td>
		</tr>
		<tr>
			<th><h3>Lawyer/Prosecutor Name</h3></th>
			<td> <?php echo $rows['lawyer_prosecutor']; ?> </td>
		</tr>
		<tr>
			<th><h3>Case Type</h3></th>
			<td> <?php echo $rows['casetype']; ?> </td>
		</tr>
	<?php
		}
	?>
	</table>
	<div class="footer" style="margin-top: 2px;">
			<table>
				<tr>			
					<td style="padding-left: 300px;">
						<h3> Quick Links </h3>
						<ul>
							<li> <a href="index.html">Home</a></li>
							<li> <a href="applycase.html">Apply Case</a></li>
							<li> <a href="appealcase.html">Appeal Case</a></li>
							<li> <a href="getfile.html">Get File</a></li>
						</ul>
					</td>
					<td style="padding-left: 250px;">
						 <h3 class="add"> Address</h3>
						<ul class="add">
							<li>Phone: 0112374023</li>
							<li>Email: federalsupremecourtet@gmail.com </li>
						</ul>
					</td>
				</tr>
			</table>
			<div class="footer_bottom">
				<p class="copyright"> <i>&copy FEDERAL SUPREME COURT OF ETHIOPIA </i></p>
			</div>
		</div>
</body>
</html>