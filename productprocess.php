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
    <script src="file://///jcub.edu.au/homedirs$/team17nov18/HT/lab06/js/nav.js"></script>
    <title>Sports WareHouse</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="file://///jcub.edu.au/homedirs$/team17nov18/HT/lab06/js/Read_more.js">	</script>



</head>
	<body onLoad="run_first()">
   
    <?php include("include/nav.inc")?>
    

<?php
if(isset($_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['email'], $_POST['subject'])) {
    //make the database connection
    $conn  = db_connect();
    $fname = $conn -> real_escape_string($_POST['fname']);
	$lname = $conn -> real_escape_string($_POST['lname']);
	$phone = $conn -> real_escape_string($_POST['phone']);
    $email = $conn -> real_escape_string($_POST['email']);
	$subject = $conn -> real_escape_string($_POST['subject']);
	
    //create an insert query
    $sql = "insert into products (fname, lname, phone, email, subject)  VALUES ('$fname', '$lname', '$phone', '$email', '$subject' )";
    //execute the query
    if($conn -> query($sql))
    {
	echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
		echo "<h1>Hi <b>$fname</b></h1>";
        echo "<h2>Thanks for Buying.</h2>";
		echo "<h3>Our team will contact Soon For payment options and Quantity.</h3>";
        
        echo "<p><a href=\"brand.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">For More BRANDED PRODUCTS Click Here</a></p>";
        echo "</div>";
        echo "</div>";	
    }
    $conn -> close();
}

else {
	
	

       echo "Error";
}
?>
<?php include("include/banner.inc") ?>


</body>
