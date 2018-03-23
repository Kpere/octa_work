<style>
    body{
    background: white;
    background-size:auto;
    background-repeat: no-repeat;
    color: deepskyblue;
    }
    .section-title {
    padding: 50px;
    position: relative;
    text-align: center;
    margin-bottom: 5px;
    }
     .form {
    border: 1px solid red;
    padding: 5px;
    font-size: 16px;
    font-family:serif;
    position: relative;
    text-align: center;
    margin-bottom: 2px;
    }
     .form{
    display:grid;
    width: auto;
    font-family: serif;
    border: 2px solid transparent;
    padding: 5px;
    margin: 10px 15px 10px 15px;
    text-align: center;
    white-space: normal;
    word-spacing: normal;
    }

</style>


<!DOChtml>
<html>
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
        <body>      
            <div class="section-title">
                <form class="form" onsubmit="return formvalid();">
                        <centre><img src="images/one.png" id="imd"></centre>
						<h2 id="logintxt">Login</h2>

					<select name="user" class="form-control">
                        <option value="Admin">Admin</option>
                        <option value="Pers">Personnel</option>
                    </select>
                    
					<div class="" data-validate = "Username is required">
						<input class="form-control" type="text" name="uname" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="" data-validate = "Password is required">
						<input class="form-control" type="pwd" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
                        <br>
						<div>
							<a href="registration.php" class="txt1">
								Sign Up?
							</a>
						</div>
					</div>

					<div class="">
                        <a href="index.php" class="btn btn-primary" role="button" name="submit">Login</a>
					</div>
                </form>
            </div>
                
        </body>
</html>
