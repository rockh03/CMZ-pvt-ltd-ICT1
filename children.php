<?php

if (isset($_GET['category'])) {
    $ageCategory = $_GET['category'];
    if ($ageCategory >= 2) {
        $ageCategory = 2;
    } else if ($ageCategory < 1) {
        $ageCategory = 1;
    }
} else {
    $ageCategory = 1;
}

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
    <title>Sports WareHouse</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/Read_more.js">	</script>
</head>

<style>

</style>



<body>
<nav class="container navbar navbar-expand-lg bg-dark navbar-dark" style="border-radius: 7px;">
    	<span class="navbar-brand"  style= "margin-right:40%; font-size:26px" onclick="location='file:///H:/work/tri%203/site%20work/index.html#'">
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

<br><br><br>
<div class="container">
    <div class="row">
        <?php foreach ($products[$ageCategory] as $key => $product) { ?>
            <div id="col1" class="col-sm-4">
            <div class="cont">

                <div class="bttn">
                    <img src="<?php echo $product['image']; ?>"  alt="avtar"
                         style="max-width: 100%; height: auto; float: right; ">
                    <div class="overlay"> Price $<?php echo $product['price']; ?><a href="buy_product.php?category=<?php echo $ageCategory; ?>&product_id=<?php echo $key; ?>"><button class="btn">Buy Now</button></a></div>

                </div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>


<div class="container">
    <div class="row">
        <div id="col1" class="col-sm-12">
            <footer class="footer-distributed">
                <div class="footer-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>

                </div>

                <div class="footer-left">

                    <p class="footer-links">
                        <a href="index.html">New Arrival</a>
                        ·
                        <a href="#">Men</a>
                        ·
                        <a href="#">Women</a>
                        ·
                        <a href="#">Children</a>
                        ·
                        <a href="#">Brands</a>
                        ·
                        <a href="#">Register</a>
                    </p>

                    <p>Sports WareHouse &copy; 2019</p>
                </div></div></div></div></div></footer>



</body>
</html>

