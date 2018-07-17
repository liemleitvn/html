<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/about.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon.png">
</head>
<body>
<div class="hero">
    <header>
        <div class="wrapper">
            <a style="float: left" href="../index.php">
                <img src="../img/logo.png" alt="logo">
            </a>
            <ul><li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contract</a></li>
                <li>
                    <button class="login_btn" onclick="document.getElementById('id_login').style.display='block'" style="width:auto;">
                        Login
                    </button>
                    <div id="id_login" class="modal style_word">
                        <form class="content-modal animate" action="#" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id_login').style.display = 'none'"
                                      class="close" title="Close Modal">&times;</span>
                                <img src="../img/login.png" alt="avatar" class="avatar">
                            </div>
                            <div class="containner">
                                <label for="id_user"><b>Username</b></label>
                                <input type="text" name="user" id="id_user" placeholder="Enter Username" required>
                                <label for="id_pass"><b>Password</b></label>
                                <input type="password" name="password" id="id_pass" placeholder="Enter Password" required>
                                <button class="login_btn" type="submit" name="btn_login">Login</button>
                                <input type="checkbox" name="remember"> Remember password
                            </div>
                            <div class="containner style_word" style="background-color: #f1f1f1">
                                <button onclick="document.getElementById('id_login').style.display = 'none'"
                                        class="btn_cancel">Cancel</button>
                                <span class="forgot_psw">Forgot <a class="link" href="#">password?</a> </span>
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
<div class="about_detail">
    <div class="wrapper">
        <h1 class="title">Giới thiệu về Dot Property</h1>
        <p class="detail">
            Dot Property Việt Nam kết nối người mua,
            thuê và đầu tư bất động sản đến gần với người bán,
            người cho thuê, nhà môi giới và nhà phát triển dự án tốt nhất trên toàn quốc.

            Dot Property cung cấp hàng ngàn bất động sản để tìm kiếm và
            cập nhập thông tin thường xuyên cho người dùng thông thuộc bản tin,
            các tips và một số tính năng khác.
            Website Dot Property nhằm mục đích cung cấp trải nghiệm trực tuyến nhanh chóng và
            đơn giản hơn trở thành một trong những công cụ tốt nhất hỗ trợ việc bán hoặc cho thuê bất động sản.

            Bắt đầu hoạt động vào Tháng 6 2015,
            Dot Property Việt Nam đã nhanh chóng trở thành một trong những trang web bất động sản hàng đầu và
            là một trong 9 cổng thông tin bất động sản được điều hành bởi tập đoàn Dot Property -
            một trong những mạng lưới bất động sản lớn nhất khắp Châu Á.
        </p>
        <img style="margin-bottom: 30px" src="../img/map.png" usemap="#detail" alt="map-place">
        <map name="detail">
            <area shape="circle" coords="31,65,15" alt="myanmar" href="../img/myanmar.jpg" target="_blank">
            <area shape="circle" coords="139,46,15" alt="vietname" href="../img/vietnam.jpg" target="_blank">
            <area shape="circle" coords="104,74,15" alt="laos" href="../img/laos.jfif" target="_blank">
            <area shape="circle" coords="84,128,15" alt="thailand" href="../img/thailand.jpg" target="_blank">
            <area shape="circle" coords="132,146,15" alt="cambodia" href="../img/cambodia.jfif" target="_blank">
            <area shape="circle" coords="290,130,15" alt="philipines" href="../img/philippines.jpg" target="_blank">
            <area shape="circle" coords="103,231,15" alt="malaysia" href="../img/malaysia.jpg" target="_blank">
            <area shape="circle" coords="130,271,15" alt="singapore" href="../img/singapore.jpg" target="_blank">
            <area shape="circle" coords="136,347,15" alt="indonesia" href="../img/indonesia.jpg" target="_blank">
        </map>
    </div>
</div>
<footer>
    <div class="wrapper">
        <ul>
            <li>
                <ul >
                    <li>
                        <a href="../about/index.php">About</a>
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
                    <img src="../img/facebook.png" alt="facebook">
                </a>
            </li>
            <li>
                <a href="http://twitter.com/" class="twitter" target="_blank">
                    <img src="../img/twitter.png" alt="twitter">
                </a>
            </li>
            <li>
                <a href="http://plus.google.com/" class="google" target="_blank">
                    <img src="../img/google+.png" alt="googlePlus">
                </a>
            </li>
            <li>
                <a href="https://web.skype.com/en/" class="skype" target="_blank">
                    <img src="../img/skype.png" alt="skype">
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
<script src="../js/main.js"></script>
</body>
</html>