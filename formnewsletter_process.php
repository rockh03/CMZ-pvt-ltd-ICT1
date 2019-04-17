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
    <script src="js/nav.js"></script>
    <title>Thank you</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/Read_more.js">	</script>
    </head>

<style>

</style>
<body onLoad="run_first()">
		<?php include("include/nav.inc")?>
<?php
if(isset($_POST['name'], $_POST['email'], $_POST['comment'])) {
    //make the database connection
    $conn  = db_connect();
    $name = $conn -> real_escape_string($_POST['name']);
    $email = $conn -> real_escape_string($_POST['email']);
    $comment = $conn -> real_escape_string($_POST['comment']);
    //create an insert query
    $sql = "insert into newsletter (name, email, comment) 
			VALUES ('$name', '$email', '$comment')";
    //execute the query
    if($conn -> query($sql))
    {
        echo "<div class=\"container\">";
        echo "<p>Thank you very much.</p>";
        echo "</div>";
    }
    $conn -> close();
}
else {
    die("Input error");
}
?>

</body>
</html>




