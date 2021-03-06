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
    <title>Newsletter subscription</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/Read_more.js">	</script>
    </head>

<style>

</style>
<body onLoad="run_first()">
		<?php include("include/nav.inc")?>
        
   <div class="container">
  <form action="formnewsletter_process.php" method="post">
        <div class="bg-light mt-3 px-2 member_frm">
        	<h1>Newsletter</h1>
            <h2>Please enter Your details to get notified about latest updates</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            <div class="row">
            	<div class="col">
                	<label for="name">Name:</label>
                    <input type="text" id="name" name="name" size="30" maxlength="50" />
                </div>
            </div>
            <div class="row">
            	<div class="col">
                	<label for="email">Email:</label>
                	<input type="email" id="email" name="email" size="30" maxlength="50" />
                </div>
            </div>
            <div class="col-25">
        <label for="country">Country</label>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
      </div>
            <div class="row py-3">
            	<div class="col">
                	<label for="comment">* Comment:</label><br>
                    <textarea id="comment" name="comment" rows="4" cols="30" required></textarea>
                </div>
            </div>

            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <input type="submit" id="submit" value="Submit" />
                    <input type="reset" id="reset" value="Clear Form" />
                </div>
            </div>
        </div>
        </form>
</div>
</body>

</html>