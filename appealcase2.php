<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="applystyle.css">
	<title>Apeal registration</title>
</head>
<body>
	<div class="icon">
		<h2 class="logo"> <img src="picf3.jpg" height="70px"> <span id="green"> FEDERAL SUP</span> <span id="yellow"> REME COURT </span> <span id="red"> OF ETHIOPIA </span> </h2>
	</div><br>
       <hr>
    <div style="color:white;">
    <?php 
    
	    if(isset($_SESSION['status']))
	    {
	        ?>
	            <div class="alert alert-warning alert-dismissible fade show" role="alert">
	                <strong>Successfully inserted......</strong> <?= $_SESSION['status']; ?>
	                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	            </div>
	        <?php 
	        unset($_SESSION['status']);
	    }

	?>
    </div>
	<div class="app">
		<h1>Appeal Registration Form</h1>
	</div>
	<div class="main">
		<form action="appealcase.php" method="post" enctype="multipart/form-data">
			<div id="name">
				<h2 class="pid"> Plantiff Id: </h2>
				<input type="text" name="plantiffid" class="name">
				<h2 class="pname"> Plantiff Name: </h2>
				<input type="text" name="plantiffname" class="name">
				<h2 class="padd"> Plantiff Address: </h2>
				<h3 class="padd"> Woreda: </h3>
				<input type="number" name="plantiffworeda" class="name">
				<h3 class="padd"> City: </h3>
				<input type="text" name="plantiffcity" class="name">
				<h3 class="padd"> Region:</h3>
				<select class="name" name="plantiffregion">
					<option value="">-select region-</option>
					<option value="Tigiray">Tigray</option>
					<option value="Amhara">Amhara</option>
					<option value="Afar">Afar</option>
					<option value="Oromia">Oromia</option>
					<option value="SNNP">SNNP</option>
					<option value="Sidama">Sidama</option>
					<option value="Somali">Somali</option>
					<option value="Gambela">Gambela</option>
					<option value="Harari">Harari</option>
					<option value="Benishangul">Benishangul</option>
					<option value="Addis Ababa">Addis Ababa</option>
					<option value="Dire Dawa">Dire Dawa</option>
				</select>
				<h2 class="pemail"> Plantiff Email: </h2>
				<input type="text" name="plantiffemail" class="name">
				<h2 class="pphone"> Plantiff Phone:</h2>
				<input type="text" name="plantiffphone" class="name">
				<h2 class="law"> Lawyer/Prosecutor Name: </h2>
				<input type="text" name="lawyer/prosecutor" class="name">
				<h2 class="dname"> Defendant Name: </h2>
				<input type="text" name="defendantname" class="name">
				<h2 class="dadd"> Defendant Address: </h2>
				<h3 class="dadd"> Woreda: </h3>
				<input type="number" name="defendantworeda" class="name">
				<h3 class="dadd"> City: </h3>
				<input type="text" name="defendantcity" class="name">
				<h3 class="dadd"> Region:</h3>
				<select class="name" name="defendantregion">
					<option value="">-select region-</option>
					<option value="Tigiray">Tigray</option>
					<option value="Amhara">Amhara</option>
					<option value="Afar">Afar</option>
					<option value="Oromia">Oromia</option>
					<option value="SNNP">SNNP</option>
					<option value="Sidama">Sidama</option>
					<option value="Somali">Somali</option>
					<option value="Gambela">Gambela</option>
					<option value="Harari">Harari</option>
					<option value="Benishangul">Benishangul</option>
					<option value="Addis Ababa">Addis Ababa</option>
					<option value="Dire Dawa">Dire Dawa</option>
				</select>
				<h2 class="case"> Case Type: </h2>
				<h3> Criminal </h3>
				<input type="radio" name="casetype" value="Criminal" class="name"> 
				<h3> Civil </h3>
				<input type="radio" name="casetype" value="Civil" class="name"> 
				<h2 class="file"> File: <br>
				<input type="file" name="applicationletter" class="name" style="width: 300px;"> <br> <br>
				<input type="submit" value="Submit" name="submit" class="bt"> 
				<input type="reset" value="Clear" name="clear" class="bt"> 
			</div>
		</form>
	</div>
		<div class="footer">
			<table>
				<tr>			
					<td>
						<h3 > Quick Links </h3>
						<ul>
							<li> <a href="index.html">Home</a></li>
							<li> <a href="eservice.html">E-Service</a></li>
						</ul>
					</td>
					<td>
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

				
				 
				