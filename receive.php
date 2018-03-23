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
                     <li><a href="index.php">Home</a></li>
                     <li><a href="receive.php" id="linkon">Receive Items</a></li>
                     <li><a href="issue.php">Issue Items</a></li>
                     <li><a href="">Modify Records</a></li>
                     <li><a href="">View Hsitory</a></li>
                     <li><a href="">Print Receipt</a></li>
                     <li><a href="">Logout</a></li>
                 </ul>
            </div> 
 
      <div class="col-md-6 col-lg-10" id="linkarea">       
          <form action="receipt.php" method="post" class="modform">
              <div class="fillform">
                <div> <label>Voucher Number</label> </div>
                <div class="form-groupa">
                <label>Incoming Item Category:</label> <select class="inside-control">
                        <option>Office Item</option>
                        <option>Residential Item</option>
                        <option>Aircraft item</option>
                        <option>Other Infrastructure</option>
                    </select></div>
              <div class="form-groupb">
                  <label>Name of item: </label> <input type="text" name="noi" class="inside-control"></div>
                <div class="form-groupb">
                    <label>Number of item: </label> <input type="number" name="numofi" class="inside-control"></div> 
                <div class="form-groupc">
                    <label>Releasing Authority: </label> <input type="text" name="releaseauth" class="inside-control"></div>
              <div class="form-groupb">
                  <label>Releasing officer: </label> <input type="text" name="reloffr" class="inside-control"></div>
              <div class="form-groupc">
                  <label>Receiving Authority: </label> <input type="text" name="recoffr" class="inside-control"></div>
              <div class="form-groupb">
                  <label>Receiving Officer: </label> <input type="text" name="recvoffr" class="inside-control"></div>
                  <div class="">
                        <a href="" class="btn btn-primary" role="button">View Entry</a>
					</div><br>
                  <div class="">
                        <a href="" class="btn btn-primary" role="button">Update</a>
					</div>
              </div>
          </form>  
        </div> 
                </div>