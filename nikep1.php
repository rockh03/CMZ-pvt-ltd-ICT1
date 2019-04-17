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



	   
<div class="container red">
      <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: grey solid thick">	
		<div class="row">
			
        	<div id="col1" class="col-sm-8">
            	<div class="cont" style="margin-left:15%"><br>
     			<br><br>
                <img src="air-max-97-qs-mens-shoe-B6dsCp.jpg"  alt="avtar" 
						style="max-width: 120%; height: 450px; float: right; "><p style="color:Black; font-size:35px">Price $100</p></div>
                        
			</div>
           <div id="col1" class="col-sm-4">
            	<div class="cont">
     			<form action="pprocess.php" method="post" style="float:right" >
        
        
        	<h2>To Purchase this Product
            Please enter your Details</h2>
            <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
            
            <strong> <div class="row">
            	<div class="col">
                	<pre><label for="name">* Name:</label>    <input type="name" id="name" name="name" size="30" maxlength="50" required /></pre>
                	
                </div>
                
            </div></strong>
            <div class="row">
            	<div class="col">
                	<pre><label for="email">* Email:</label>    <input type="email" id="email" name="email" size="30" maxlength="50" required /></pre>
                	
                </div>
                
            </div>
            <div class="row">
            	<div class="col">
                	<pre><label for="phone">* Phone:</label>    <input type="number" id="Phone" name="Phone"  maxlength="10" placeholder="10 digits"  required /></pre>
                	
                </div>
                
            </div>
            
            
            
            <div class="row">
            	<div class="col">
                	<pre><label for="Address">* Address:</label>   <input type="textarea" id="Address" name="Address" size="30"   required /></pre>
                	
                </div>
                
            </div>
            
             <div class="row">
            	<div class="col">
                	<pre><label for="zip">* Postcode:</label> <input type="number" id="zip" name="zip" size="10" maxlength="4" placeholder="4 digits" onChange="checkZIPCode(document)" required /> <span class="error_msg" id="zip_msg"></span></pre>
                </div>
            </div>
             
            <div class="row">
            	<div class="col">
                	<pre><label for="message">* Message:</label>   <input type="text" id="message" name="message" size="30"    /></pre>
                	
                </div>
                
            </div>
            <div class="row">
            	<div class="col">
                	<label>&nbsp;</label>
                    <pre><center><input type="submit" id="submit" value="Submit" onClick="return validateInfo(document)" />  <input type="reset" id="reset" value="Clear Form" onClick="reset_frm(document)" /></center></pre>
                </div>
            </div>
        </div>
        </form>
       </div></div>
			</div>
             
            
 </div>
</div><br>
    	
    	
    </div>
    	
   
	</body>
    <?php include("include/banner.inc") ?>
</html>