<?php
session_start();
include_once('include/config.php');
?>
<!doctype html>
<html>
<head>

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
if(isset($_POST['name'],$_POST['email'], $_POST['phone'], $_POST['message'])) {
    //make the database connection
 $conn  = db_connect();
    	$name = $conn -> real_escape_string($_POST['name']);
    	$email = $conn -> real_escape_string($_POST['email']);
		$phone = $conn -> real_escape_string($_POST['phone']);
    	$message = $conn -> real_escape_string($_POST['message']);
    	//create an insert query
    	$sql = "insert into feedback1 (name, email, phone,message)  VALUES ('$name', '$email', '$phone','$message')";
    //execute the query
    if($conn -> query($sql))
    {
		echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<h1>Thank you</h1>";
        echo "<p>Hi <b>$name</b></p>";
        echo "<p><a href=\"enquire.php\" id=\"4\" 
				onClick=\"nav_item_selected(4)\">One of Our representative will contact you soon.</a></p>";
        echo "</div>";
        echo "</div>";
    }
    $conn -> close();
}
else {
	
	
	echo "<div class=\"container\">";
        echo "<div class=\"row\">";
        echo "<div class=\"col-s-12 col-12\">";
        echo "<h1>Thank you</h1>";
        echo $conn->error;
        echo "</div>";
        echo "</div>";
	
    die("Input error");
}
?>

<?php 
		include_once('include/config.php');
            //make the database connection
            $conn  = db_connect();
          

         $find_comments= $conn -> query("SELECT * FROM feedback1");
          while($row = $find_comments -> fetch_assoc())
		  {
                $feedback_name = $row['name'];
				$message = $row['message'];
            
			 	echo  $feedback_name." - ".$message."<br><p>";
            }
			
			if(isset($_GET['error']))
			{
				echo"Not Valid";
			}
		
		?>
<?php include("include/banner.inc") ?>


</body>
</html>
