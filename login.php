<?php
//must appear BEFORE the <html> tag
session_start();
include_once('include/config.php');

if (isset($_SESSION['valid_user'])) {
    header("location: member_only.php");
}
//make the database connection
$conn  = db_connect();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $email = $conn -> real_escape_string($_POST['email']);
    $password = $conn -> real_escape_string($_POST['password']);

    //make a query to check if user login successfully
    $sql = "select * from users where email='$email' and password='$password'";
    $result = $conn -> query($sql);
    $numOfRows = $result -> num_rows;
    $row = $result -> fetch_assoc();
    if ($numOfRows == 1) {
        $_SESSION['valid_user'] = $email;
        //get the first word of the name and uppercase the first letter
        $tempStr = trim($row["name"]);
        $tempArr = explode(' ',$tempStr);
        $_SESSION['name'] = ucwords($tempArr[0]);
        header("location: member_only.php");
    }else {
        $error = 'Your Login Name or Password is invalid';
    }
}
?>
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
    <div class="container"><br><br><br><br><br><br><br><br>
    	<form action="login.php" method="post" >
		<div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: #555555 solid thick">
        	<h1 style="margin:5px; text-align:center; font-size:50px;">Login</h1>
            <p>Please enter your email and password</p>
            <div class="row">
            	<div class="col">
                	<label for="email">Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" required />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="password">Password:</label>
                    <input type="password" id="password" name="password"
                           size="20" maxlength="20" required />
                </div>
           	</div>
			<div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 					font-weight: bold; background: #555555; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Submit" />
                    <input style="width: 200px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; 					font-weight: bold; background: #555555; color: #FFFFFF; border-radius: 10px; border: 1px solid #999; font-size: 100%;" type="button" value="Clear"/>
                    <?php
                    if(isset($error)) {
                        echo "<p style=\"color: red;\">$error</p>";
                        unset($error);
                    }
                    ?>
                </div>
            </div>            
        </div>
        </form>
    </div><br><br><br><br><br><br><br>
    <br>
	<?php include("include/footer.inc") ?>    
</body>
</html>