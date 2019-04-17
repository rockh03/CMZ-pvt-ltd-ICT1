<?php

    if (!isset($_GET['category']) || !$_GET['product_id']) {
        echo "Page not found"; die();
    }

    $category = $_GET['category'];
    $id = $_GET['product_id'];

    $products = [
        1 => [
            1 => [
                'image' => 'img13.jpg',
                'price' => '35'
            ],
            2 => [
                'image' => 'img14.jpg',
                'price' => '40'
            ]
        ],
        2 => [
            1 => [
                'image' => 'img12.jpg',
                'price' => '45'
            ],
            2 => [
                'image' => 'img15.jpg',
                'price' => '50'
            ]
        ]
    ];

    if (!isset($products[$category][$id])) {
        echo "Page not found"; die();
    }

    $product = $products[$category][$id];
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
    <script src="file://///jcub.edu.au/homedirs$/jc485881/HT/lab06/js/nav.js"></script>
    <title>Sports WareHouse</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="file://///jcub.edu.au/homedirs$/jc485881/HT/lab06/js/Read_more.js">	</script>



</head>

<body onLoad="run_first()">
<nav class="container navbar navbar-expand-lg bg-dark navbar-dark" style="border-radius: 7px;">
    	<span
            class="navbar-brand"  style= "margin-right:40%; font-size:26px"
            onclick="index.html'">
Sports WareHouse
</span>




    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar" >
        <!-- md-auto: left, ml-auto: right, mx-auto: center -->
        <ul class="navbar-nav" >
            <li class="nav-item">
                <a class="nav-link" href="index.html" id="0" onClick="nav_item_selected(0)">New Arrival</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="2" onClick="nav_item_selected(1)">Men</a></li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="3" onClick="nav_item_selected(2)">Women</a></li>

            <!-- Dropdown -->
            <li class=" dropdown">
                <a class="nav-link " href="#" id="3" onhover="nav_item_selected(3)" data-toggle="dropdown">
                    Children
                </a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#">Below 5 yr	</a>
                    <a class="dropdown-item" href="#">Under 5 to 14 yr</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="4" onClick="nav_item_selected(4)">Brands</a>
            </li>
            <li class=" dropdown">
                <a class="nav-link " href="#" id="3" onhover="nav_item_selected(3)" data-toggle="dropdown">
                    Register
                </a>
                <div class="dropdown-content">
                    <a class="dropdown-item" href="#">Log In	</a>
                    <a class="dropdown-item" href="#">Sign Up</a>
                </div>
            </li>

        </ul>
    </div>




</nav><br>





<div class="container red">
    <div class="bg-light mt-3 px-2 member_frm" style="border-radius: 5px; border: grey solid thick">
        <div class="row">

            <div id="col1" class="col-sm-8">
                <div class="cont" style="margin-left:15%"><br><div class="zoom">
                        <img src="<?php echo $product['image']; ?>"  alt="avtar"
                             style="max-width: 120%; height: 450px; float: right; "><p style="color:Black; font-size:35px">Price $<?php echo $product['price']; ?></p></div></div>

            </div>
            <div id="col1" class="col-sm-4">
                <div class="cont">
                    <form action="siteprocess.php" method="post" style="float:right">


                        <h2>To Purchase this Product
                            Please enter your Details</h2>
                        <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
                        <div class="row">
                            <div class="col">
                                <pre><label for="name">* Name:</label>     <input type="text" id="name" name="name" size="30" maxlength="50" required /></pre>

                            </div>
                        </div>
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
                	<pre><label for="Quantity">* Quantity:</label> <select name="Quantity">
                    <option selected hidden>Choose</option>
					<option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option></select></pre>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <pre><label for="id">* P-ID:</label>     <input  id="id" name="id" value="<?php echo $id; ?>" readonly ></pre>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <pre><label for="Address">* Address:</label>  <input type="textarea" id="Address" name="Address" size="30"   required /></pre>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col">
                                <pre><label for="zip">* Postcode:</label> <input type="text" id="zip" name="zip" size="10" maxlength="4" placeholder="4 digits" onChange="checkZIPCode(document)" required /> <span class="error_msg" id="zip_msg"></span></pre>
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
</html>




