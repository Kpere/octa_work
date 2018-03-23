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
   
    <body class="mgtform">
        <nav class="navbar navbar-light-bg-faded justify content-between" role="navigation" id="navbr">  
                <a class="navbar-brand" href="#" id="navbrhead">The Nigerian Airforce Stock Managment System</a>     
            <div>       
                <form class="form-inline" role="search">                      
                    <input class="form-control mr-sm-2" type="text" placeholder="Name of item you looking for....">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    
                </form>
            </div>
        </nav>
        
        <div class="row"> 
             <div class="col-md-6 col-lg-2" id="links">
                 <ul id="menu">
                     <li><a href="index.php" id="linkon">Home</a></li>
                     <li><a href="receive.php">Receive Items</a></li>
                     <li><a href="issue.php">Issue Items</a></li>
                     <li><a href="">Modify Records</a></li>
                     <li><a href="">View Hsitory</a></li>
                     <li><a href="">Print Receipt</a></li>
                     <li><a href="">Logout</a></li>
                 </ul>
            </div> 
 
      <div class="col-md-6 col-lg-10" id="linkarea">       
          <form>
              <p>Welcome to the Nigerian Airforce Stock Management System. <br>
                The System takes proper charge of all incoming and outgoing items with proper documentation of each item.</p>
          </form>  
        </div> 
                </div>