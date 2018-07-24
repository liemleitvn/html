<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            #navlist {
                position: relative;
            }

            #navlist li {
                margin: 0;
                padding: 0;
                list-style: none;
                position: absolute;
                top: 0;
            }

            #navlist li, #navlist a {
                height: 44px;
                display: block;
            }

            #home {
                left: 0;
                width: 46px;
                background: url('/img/img_navsprites_hover.gif') 0 0;
            }

            #prev {
                left: 63px;
                width: 43px;
                background: url('/img/img_navsprites_hover.gif') -47px 0;
            }

            #next {
                left: 129px;
                width: 43px;
                background: url('/img/img_navsprites_hover.gif') -91px 0;
            }

            #home a:hover {
                background: url('/img/img_navsprites_hover.gif') 0 -45px;
            }

            #prev a:hover {
                background: url('/img/img_navsprites_hover.gif') -47px -45px;
            }

            #next a:hover {
                background: url('/img/img_navsprites_hover.gif') -91px -45px;

            }

        </style>
    </head>
    <body>
        <ul id="navlist">
            <li id="home"><a href="#a"></a></li>
            <li id="prev"><a href="#b"></a></li>
            <li id="next"><a href="#c"></a></li>
        </ul>
        <div id="test"></div>
    </body>
</html>
