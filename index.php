<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into+Light">

    <title>Menu</title>
</head>

<body>
    <header>
        <div class="overlay"></div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="cart">
                    <a href="cart.html">
                        <ion-icon name="basket"></ion-icon>Cart<span>0</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <hr>
    <img src="./images/Trader.png" style="width:100%; height:100%" alt="logo1" class="logo1">
    <hr>
    <h1 class="Order-head" style="text-align:center">Online Ordering system</h1>
    <h2 class="header-h" style="text-align:center">Full Menu</h2>
    <h2 class="description" style="text-align:center"> Here are a few items featured on Trader Joe's New ordering
        System.</h2>
    <div class="container">
        <div class="image">
            <img src="images/eggfrittata.jpg" style="width: 600px; height: 600px;" alt="eggfrittata">
            <h3>Egg Frittata</h3>
            <p>Entrées & Sides</p>
            <h3>$3.00</h3>
            <a class="add-cart cart1" href="#">Add Cart</a>
            <input type="hidden" value="3" />
        </div>

        <div class="image">
            <img src="images/elote.jpg" alt="elote">
            <h3>Elote</h3>
            <p>Elote based drink</p>
            <h3>$2.00</h3>
            <a class="add-cart cart2" href="#">Add Cart</a>
            <input type="hidden" value="3" />
        </div>
        <div class="image">
            <img src="images/batteredfishnuggets.jpg" style="width: 600px; height: 600px;" alt="batteredfishnuggets">
            <h3>Battered Fish Nuggets</h3>
            <p>Entrées & Sides</p>
            <h3>$5.00</h3>
            <a class="add-cart cart3" href="#">Add Cart</a>
            <input type="hidden" value="5" />
        </div>
        <div class="image">
            <img src="images/coconutbodybutter.jpg" style="width: 600px; height: 600px;" alt="coconutbodybutter">
            <h3>Coconut Body Butter</h3>
            <p>Face & Body</p>
            <h3>$5.00</h3>
            <a class="add-cart cart4" href="#">Add Cart</a>
            <input type="hidden" value="5" />
        </div>
        <div class="image">
            <img src="images/mangonada.jpg" style="width: 600px; height: 600px;" alt="mangonada">
            <h3>Mangonada</h3>
            <p>Mango mix with tangerine</p>
            <h3>$3.00</h3>
            <a class="add-cart cart5" href="#">Add Cart</a>
            <input type="hidden" value="3" />
        </div>
        <div class="image">
            <img src="images/reuseablebags.jpg" style="width: 600px; height: 600px;" alt="reuseablebags">
            <h3>Reuseable Bags</h3>
            <p>Household Essential</p>
            <h3>$1.00</h3>
            <a class="add-cart cart6" href="#">Add Cart</a>
            <input type="hidden" value="1" />
        </div>
        <div class="image">
            <img src="images/reuseableflowerbags.jpg" style="width: 600px; height: 600px;" alt="reuseableflowerbags">
            <h3>Reuseable Flower Bags</h3>
            <p>Household Essential</p>
            <h3>$1.00</h3>
            <a class="add-cart cart7" href="#">Add Cart</a>
            <input type="hidden" value="1" />
        </div>
        <div class="image">
            <img src="images/fresasconcrema.jpg" style="width: 600px; height: 600px;" alt="fresasconcrema">
            <h3>Fresas Con Crema</h3>
            <p>Strawberry mexican milkshake</p>
            <h3>$3.50</h3>
            <a class="add-cart cart8" href="#">Add Cart</a>
            <input type="hidden" value="3.5" />
        </div>
        <div class="image">
            <img src="images/quattroformaggi.jpg" style="width: 600px; height: 600px;" alt="quattroformaggi">
            <h3>Quattro Formaggi</h3>
            <p>Slices, Shreds, Crumbles</p>
            <h3>$3.50</h3>
            <a class="add-cart cart9" href="#">Add Cart</a>
            <input type="hidden" value="3.5" />
        </div>
        <div class="image">
            <img src="images/truffleburrata.jpg" style="width: 600px; height: 600px;" alt="truffleburrata">
            <h3>Truffle Burrata</h3>
            <p>Cream and Creamy Cheeses</p>
            <h3>$5.00</h3>
            <a class="add-cart cart10" href="#">Add Cart</a>
            <input type="hidden" value="5" />
        </div>
        <div class="image">
            <img src="images/bluecococream.jpg" style="width: 600px; height: 600px;" alt="bluecococream">
            <h3>Blue Coco Cream</h3>
            <p>Coconut and cream cotton candy flavor</p>
            <h3>$3.50</h3>
            <a class="add-cart cart11" href="#">Add Cart</a>
            <input type="hidden" value="3.5" />
        </div>
        <div class="image">
            <img src="images/raspberrymoussecake.jpg" style="width: 600px; height: 600px;" alt="raspberrymoussecake">
            <h3>Raspberry Mousse Cake</h3>
            <p>Sweet Stuff</p>
            <h3>$3.00</h3>
            <a class="add-cart cart12" href="#">Add Cart</a>
            <input type="hidden" value="3" />
        </div>
    </div>

    <script src="main.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>