<?php
$connection = mysqli_connect("localhost", "root", "", "naf");
if(!$connection){
    die("Database connection failed: ".mysql_error());
}

$db_select = mysqli_select_db($connection, "naf");
if($db_select){
echo "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>AFMS</title>
	<meta name="keywords" content="management" "system" "online">
	<meta name="description" content="Manages all stock records of individual unit with a centralized function">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/util.css">
    
	<link rel="stylesheet" href="css/main.css">
    
    <link rel="stylesheet" href="css/main2.css">
    
    </head>
   
    <body class="">
        
				<form class="regform" name="myform" action="index.php" method="post" onsubmit="return validateForm();">
					<span class="">
                        <center>
                        <img src="images/one.png" id="imd" class="img-rounded">
						<h2 id="logintxt">Register</h2>
                        </center>
					</span>

					<select class="form-control">
                        <option>Admin</option>
                        <option>Personnel</option>
                    </select>
                    
					<div class="" data-validate = "Full name is required">
						<input class="form-control" type="text" name="fname" placeholder="Fullname" onkeyup="count_u(this);" maxlength="50">
						<span class="focus-input100"></span>
					</div>
                    
					
					<div class="" data-validate = "Username is required">
						<input class="form-control" type="text" name="uname" value="NAF" placeholder="Username" maxlength="11">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="" data-validate = "Service  Number is required">
						<input class="form-control" type="text" name="svcnum" placeholder="Service Number" maxlength="10">
						<span class="focus-input100"></span>
					</div>
                    
                    <select class="form-control">
                        <option value="#">Rank</option>
                       <optgroup label="Officers">
                        <option value="marshalairforce" name="rank">Marshal of the Airforce</option>
                        <option value="airmarshal" name="rank">Air Marshal</option>
                        <option  value="avm" name="rank">Air Vice Marshal</option>
                        <option value="aircdre" name="rank">Air Commodore</option>
                        <option value="gpcapt" name="rank">Group Captain</option>
                        <option value="wgcmdr" name="rank">Wing Commander</option>
                        <option value="sqnldr" name="rank">Squadron Leader</option>
                        <option value="fltlt" name="rank">Flight Lieutenant</option>
                        <option value="flyoffr" name="rank">Flying Officer</option>
                        <option value="pltoffr" name="rank">Pilot Officer</option>
                        </optgroup>
                        <optgroup label="Airmen">
                        <option value="awo" name="rank">Air Warrant Officer</option>
                        <option value="mwo" name="rank">Master Warrant Officer</option>
                        <option value="fs" name="rank">Flight Sergeant</option>
                        <option value="sgt" name="rank">Sergeant</option>
                        <option value="cpl" name="rank">Corporal</option>
                        <option value="lcpl" name="rank">Lance Corporal</option>
                        <option value="acm" name="rank">Aircraftman/woman</option>
                        </optgroup>
                    </select>
                    
					<div class="" data-validate = "Password is required">
						<input class="form-control" type="password" name="pwd" placeholder="Password" maxlength="10">
						<span class="focus-input100"></span>
					</div>
					
                    <div class="" data-validate = "Password is required">
						<input class="form-control" type="password" name="pwd1" placeholder="Confirm Password" maxlength="10">
						<span class="focus-input100"></span>
					</div>
                    
                <center>
					<div class="btn">
						<div class="">
                        <a href="index.php" class="btn btn-primary" role="button">Login</a>
					</div>
					</div></center>
                    
            
		
<?php

/*if(isset($_POST['submit']))
{
$name = $_POST['uname'];
$svc = $_POST['svcnum'];
$pass =  $_POST['pwd'];
}

$result= mysqli_query("INSERT INTO userst(user_name, svc_num, pwd) VALUES('".$name."','".$svc."','". $pass."')");

if(!$result){
     die ("Database query failed: ".mysqli_error());
} else{
       echo "New record sucessful";
}

mysqli_close($connection);
*/

?>
                    
				</form>


    </body>
    
</html>