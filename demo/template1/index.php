<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>
<div class="hero">
    <header>
        <div class="wrapper">
            <a style="float: left" href="index.php">
                <img src="img/logo.png" alt="logo">
            </a>
            <ul><li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="about/index.php">About</a></li>
                <li><a href="#">Contract</a></li>
                <li>
                    <button class="login-btn" onclick="document.getElementById('id-login').style.display='block'" style="width:auto;">
                        Login
                    </button>
                    <div id="id-login" class="modal style-word">
                        <form class="content-modal animate" action="#" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id-login').style.display = 'none'"
                                      class="close" title="Close Modal">&times;</span>
                                <img src="img/login.png" alt="avatar" class="avatar">
                            </div>
                            <div class="containner">
                                <label for="id-user"><b>Username</b></label>
                                <input type="text" name="user" id="id-user" placeholder="Enter Username" required>
                                <label for="id-pass"><b>Password</b></label>
                                <input type="password" name="password" id="id-pass" placeholder="Enter Password" required>
                                <button class="login-btn" type="submit" name="btn-login">Login</button>
                                <input type="checkbox" name="remember"> Remember password
                            </div>
                            <div class="containner style-word" style="background-color: #f1f1f1">
                                <button onclick="document.getElementById('id-login').style.display = 'none'"
                                        class="btn-cancel">Cancel</button>
                                <span class="forgot-psw">Forgot <a class="link" href="#">password?</a> </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="caption">
        <h2>Find You Dream Home</h2>
        <h3>Appartement - Houses - Mansions</h3>
    </div>
</div>
<div class="search">
    <div class="wrapper">
        <form class="frm-question" action="#" method="get">
            <input type="text" id="search" placeholder="WHAT ARE YOU LOOKING FOR ?">
            <input type="submit" value="">
        </form>
        <div>
            <a class="advanced-search-icon" href="#">
                <img src="img/advanced_search_icon.png" alt="search" onclick="search_detail()">
            </a>
        </div>
    </div>
    <div class="advanced-search">
        <div class="wrapper">
            <span class="arrow"></span>
            <form action="#" method="get">
                <div class="search-field">
                    <input type="text" class="check-in-date" name="check_in_date" placeholder="Check in date">
                    <hr class="field-sep pull-left">
                    <input type="text" class="check-out-date" name="check_out_date" placeholder="Check out date">
                </div>
                <div class="search-field">
                    <input type="text" class="min-price" placeholder="Min price" name="min_price" >
                    <hr class="field-sep pull-left">
                    <input type="text" class="max-price" placeholder="Max price" name="max_price">
                </div>
                <div>
                    <input type="text" id="keyword" name="keyword" placeholder="keyword">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="listings">
    <div class="wrapper">
        <ul>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_1.jpg" alt="property1">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_2.jpg" alt="property2">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li style="margin-right: 0">
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_3.jpg" alt="property3">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_1.jpg" alt="property4">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_2.jpg" alt="property5">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li style="margin-right: 0">
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_3.jpg" alt="property6">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_1.jpg" alt="property7">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li>
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_2.jpg" alt="property8">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
            <li style="margin-right: 0">
                <a href="#">
                    <div class="position">
                        <img class="property" src="img/property_3.jpg" alt="property9">
                        <p>2000$</p>
                    </div>
                </a>
                <div class="property-detail">
                    <h1>
                        <a href="#">Fuisque dictum tortor at purus libero</a>
                    </h1>
                    <h2>2 kitchens, 2 bed, 2 bath... <span>(288ftsq)</span></h2>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="more-listings">
    <a href="#">VIEW MORE LISTINGS</a>
</div>
<footer>
    <div class="wrapper">
        <ul>
            <li>
                <ul >
                    <li>
                        <a href="/about/index.php">About</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                    <li>
                        <a href="#">Term</a>
                    </li>
                    <li>
                        <a href="#">Policy</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <a href="#">Appartements</a>
                    </li>
                    <li>
                        <a href="#">Houses</a>
                    </li>
                    <li>
                        <a href="#">Vilas</a>
                    </li>
                    <li>
                        <a href="#">Mansions</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>
                        <a href="#">New York</a>
                    </li>
                    <li>
                        <a href="#">Los Anglos</a>
                    </li>
                    <li>
                        <a href="#">Miami</a>
                    </li>
                    <li>
                        <a href="#">Washington</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="about">
            <p>
                La Casa is real estate minimal html5 website template,
                designed and coded by pixelhint, tellus varius,
                dictum erat vel, maximus tellus. Sed vitae auctor ipsum
            </p>
        </div>
        <ul class="info">
            <li>
                <a href="https://www.facebook.com/fhtmedia/" class="facebook" target="_blank">
                    <img src="img/facebook.png" alt="facebook">
                </a>
            </li>
            <li>
                <a href="http://twitter.com/" class="twitter" target="_blank">
                    <img src="img/twitter.png" alt="twitter">
                </a>
            </li>
            <li>
                <a href="http://plus.google.com/" class="google" target="_blank">
                    <img src="img/google+.png" alt="googlePlus">
                </a>
            </li>
            <li>
                <a href="https://web.skype.com/en/" class="skype" target="_blank">
                    <img src="img/skype.png" alt="skype">
                </a>
            </li>
        </ul>
        <div class="clear"></div>
        <hr>
        <div class="copyrights">
            <span>Copyright © 2018</span>
            <a href="https://www.facebook.com/levanliem" target="_blank">
                Liem Le.
            </a>
            <span>All Rights Reserved.</span>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>