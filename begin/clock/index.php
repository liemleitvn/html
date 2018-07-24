<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Học CSS3 toidicode.com</title>
</head>
<style type="text/css" media="screen">
    /*Tạo chuyển động cho giây, bat dau tu 0*/

    @-webkit-keyframes second {
        from {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        to {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    }

    @keyframes second {
        from {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        to {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    }


    /*Tạo chuyển động cho phút bat dau tu 3*/

    @-webkit-keyframes minute {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes minute {
        from {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }


    /*Tạo chuyển động cho giờ bat dau tu 0*/

    @-webkit-keyframes hour {
        from {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        to {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    }

    @keyframes hour {
        from {
            -webkit-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }
        to {
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }
    }


    /*CSS cho Đồng hồ*/

    .clock {
        position: relative;
        width: 320px;
        margin: 0 auto;
    }

    .radius {
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 15px solid orange;
        z-index: 2;
    }

    .test, [class*="line-"] {
        position: absolute;
        top: 90px;
        left: 14px;
        background: black;
        width: 155px;
        height: 5px;
        z-index: -1;
    }

    .line-1 {
        /*tạo góc 12h và 6h*/
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .line-2 {
        /*Tạo góc 1h và 7h*/
        -webkit-transform: rotate(-60deg);
        transform: rotate(-60deg);
    }

    .line-3 {
        /*Tạo góc 2h và 8h*/
        -webkit-transform: rotate(-30deg);
        transform: rotate(-30deg);
    }

    .line-4 {
        /*Tạo góc 3h và 9h*/
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    .line-5 {
        /*Tạo góc 4h và 10h*/
        -webkit-transform: rotate(30deg);
        transform: rotate(30deg);
    }

    .line-6 {
        /*Tạo góc 5h và 11h*/
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
    }

    .solid {
        background-color: white;
        width: 140px;
        height: 140px;
        position: absolute;
        border-radius: 50%;
        top: 20px;
        left: 20px;
    }

    .second {
        /*Tạo chuyển động cho kim giây chạy 60s 1 vòng*/
        -webkit-animation: second 60s infinite;
        animation: second 60s infinite steps(60, end);
        left: 90px;
        top: 90px;
        -webkit-transform-origin: left;
        position: absolute;
        background: gray;
        width: 65px;
        height: 2px;
    }

    .minute {
        /*Tạo chuyển động cho kim phút chạy 3600s =1h*/
        -webkit-animation: minute 3600s infinite;
        animation: minute 3600s infinite;
        left: 90px;
        top: 90px;
        -webkit-transform-origin: left;
        position: absolute;
        background: gray;
        width: 60px;
        height: 3px;
    }

    .hour {
        /*Tạo chuyển động cho kim giờ chạy 216000s  = 24h*/
        -webkit-animation: hour 216000s infinite;
        animation: hour 216000s infinite;
        left: 91px;
        top: 90px;
        -webkit-transform-origin: left;
        position: absolute;
        background: gray;
        width: 50px;
        height: 5px;
    }

    .center {
        background: red;
        border-radius: 50%;
        width: 25px;
        height: 25px;
        position: absolute;
        top: 80px;
        left: 78.5px;
        z-index: 10;
    }
</style>

<body>
<div class="clock">
    <div>
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
        <div class="line-4"></div>
        <div class="line-5"></div>
        <div class="line-6"></div>
        <div class="solid"></div>
    </div>
    <div class="radius"></div>
    <div class="center"></div>
    <div class="second"></div>
    <div class="minute"></div>
    <div class="hour"></div>
</div>
</body>

</html>