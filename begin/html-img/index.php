<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../link/link-style.css">
    </head>
    <body>
        <h1>HTML Images Syntax</h1>
        <img src="../image/workplace.jpg" alt="image" style="width: 200px;height: 200px;">
        <br>
        <h1>Image as a Link</h1>
        <a href="https://facebook.com" target="_blank">
            <img src="../image/facebook.png" alt="facebook" style="height: 50px" width="90px">
        </a>
        <h1>Image map</h1>
        <img src="../image/workplace.jpg" usemap="#decription" alt="image">
        <map name="decription">
            <area shape="rect" coords="36,46,270,345" alt="macbook" style="width: 100px;height: 100px" href="../image/mac.jpg">
            <area shape="rect" coords="290,172,333,250" alt="phone" style="width: 100px;height: 100px" href="../image/cellphone.jpg">
            <area shape="circle" coords="337,300,44" alt="coffee" style="width: 100px;height: 100px;" href="../image/coffeehouse2.jpg";
        </map>
        <br>
        <h1>Picture element</h1>
        <picture>
            <source media="(min-width:500px" srcset="../image/background.jpg">
            <source media="(min-width: 450px" srcset="../image/workplace.jpg">
            <img src="../image/mac.jpg" alt="text-image" style="width: 200px;height: 200px;">
        </picture>
    </body>
</html>