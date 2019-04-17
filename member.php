<?php
session_start();
include_once('include/config.php');
?>

<!doctype html>
<html>
<head>
<style>




</style>

 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="nav.js"></script>
    <title>Sports WareHouse</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="Read_more.js">	</script>



</head>

<body onLoad="run_first()">
	<?php include("include/nav.inc")?>

	
     <div class="container"><br><br><br><br><br>
    	<form action="member_only.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm" style=" border-radius: 5px; border: #555555 solid thick">
        	<h1 style="margin:5px; text-align:center; font-size:50px;">Membership Form</h1><br>
            <h2>Please enter your profile</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">* Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">* Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">* Password:</label>
                    <input type="password" id="password" name="password" size="20" maxlength="20" required />
                    <span id="pwd_msg" class="error_msg"></span>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="rePassword">* Re-try:</label>
                    <input type="password" id="rePassword" size="20" maxlength="20"
                               onChange="checkRePassword(document)" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="zip">* Postcode:</label>
                    <input type="text" id="zip" name="zip" size="10" maxlength="10" placeholder="4 digits"
                               onChange="checkZIPCode(document)" required />
                    <span class="error_msg" id="zip_msg"></span><br>
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 					font-weight: bold; background: #555555; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Submit" onClick="return validateInfo(document)" />
                    <input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 					font-weight: bold; background: #555555; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Reset" onClick="reset_frm(document)" />
                </div>
            </div>
        </div>
        </form>
    </div>
    <br><br><br>
    
	<?php include("include/footer.inc") ?>
</body>
</html>


