<!doctype html>

<?php
	if(isset($_POST['login']))
	{
	// Authorisation details.
	$username = "pugalramyaa.p2020@vitstudent.ac.in";
	$hash = "eee53df2ab4dd72a12bddb922a9bd04473774b30fbfcb4fcd57101e1f1f5cfa7";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";
	$name=$_POST['name'];

	// Data for text message. This is the text message data.
	$sender = "ramyaa"; // This is who the message appears to be from.
	$numbers = $_POST['num']; // A single number or a comma-seperated list of numbers
	$otp=mt_rand(100000,999999);
	setcookie("otp",$otp);
	$message = "Hey your OTP is".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('https://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
		echo "otp sent successfully";
	curl_close($ch);
	}
if(isset($_POST['ver'])){
	$verotp=$_POST['otp'];
	if($verotp==$_COOKIE['otp']){
		echo("log in succes");
	}
	else{
		echo("otp wrong");
	}
}
?>
<<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Login 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to CredSecure </h2>
								<p>Verify your account</p>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Verification</h3>
			      		</div>
			      	</div>
							<form method="post" action="phpotp.php" class="signin-form">
								<div class="form-group mb-3">
			      			<label class="label" for="name">mobile number</label>
			      			<input type="text" name="num" class="form-control" placeholder="Re-enter your mobile number" required>
			      		</div>
		     

		            <div class="form-group">
		            	<td><input type="submit" name="ver" value="send otp"></td>
		            </div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">OTP</label>
			      			<input type="text" class="form-control" placeholder="Enter OTP" required>
			      		</div>
		     

		            <div class="form-group">
		            	<td><input type="submit" name="login" value="verify otp"></td>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
