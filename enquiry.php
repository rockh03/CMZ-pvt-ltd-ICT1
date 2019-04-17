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



<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    
    <div class="column">
      <form action="enquiryprocess.php" method="post">
      <label for="name">* Name:</label>    
      <input type="text" id="name" name="name"  placeholder="Your name.." required />
      
        <label for="email">* Email:</label>    
      <input type="text" id="email" name="email"  placeholder="Your email.." required />
      
      <label for="phone">* Phone:</label>    
      <input type="text" id="phone" name="phone"  placeholder="Your number.." required />
      
     
      
      
        
        <label for="subject">Any Message</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
       <input type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />  <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" />
      </form>
    </div>
  </div>
</div><

</body>
<?php include("include/banner.inc") ?>
</html>
