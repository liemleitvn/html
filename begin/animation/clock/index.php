<!DOCTYPE html>
<html>
<head>
    <style>

        /*tao animation cho kim giay*/
        @keyframes second {
            from {transform: rotate(0deg);}
            to {transform: rotate(360deg);}
        }
        @-webkit-keyframes second {
                 from {transform: rotate(0deg);}
                 to {transform: rotate(360deg);}
             }

        /*Tao animation cho kim phut*/
        @-webkit-keyframes minute {
            from {transform: rotate(0deg);}
            to {transform: rotate(360deg);}
        }
        @keyframes minute {
            from {transform: rotate(0deg);}
            to {transform: rotate(360deg);}
        }

        /*Tao animation cho kim gio*/
        @-webkit-keyframes hour {
            from {transform: rotate(0deg)}
            to {transform: rotate(360deg)}
        }
        @keyframes hour {
            from {transform: rotate(0deg)}
            to {transform: rotate(360deg)}
        }

        /*Hinh nen lon phia ngoai*/
        .clock {
            background: rgb(225, 227, 232);
            position: relative;
            width: 400px;
            height: 400px;
            margin: 0;
        }

        /*Hinh duong vien mau cam*/
        .radius{
            background: white;
            border-radius: 50%;
            position: absolute;
            left: 65px;
            top: 65px;
            width: 210px;
            height: 210px;
            border: 15px solid orange;

        }

        /*Cai nay la cac thanh de nut den tren dong ho*/
        [class*='line-']{
            position: absolute;
            top: 102px;
            left: 0;
            width: 210px;
            height: 6px;
            background: black;
        }

        /*Tao hinh nen mau tran de che lap cac phan du cua cac thanh tao nut den tren man hinh*/
        .solid {
            background: url("img/img_flwr.gif") no-repeat, white;
            background-size: cover;
            position: absolute;
            left: 5px;
            top: 5px;
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        /*Tao hinh tron ngay tam cua dong ho*/
        .center {
            background: red;
            position: absolute;
            top: 90px;
            left: 90px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }


        /*Diem 3 va 9*/
        .line-1 {
            transform: rotate(0deg);
        }
        /*Diem 4 va 10*/
        .line-2 {
            transform: rotate(30deg);
        }
        /*Diem 5 va 11*/
        .line-3 {
            transform: rotate(60deg);
        }
        /*Diem 6 va 12*/
        .line-4 {
            transform: rotate(90deg);
        }
        /*Diem 1 va 7*/
        .line-5 {
            transform: rotate(120deg);
        }
        /*Diem 2 va 8*/
        .line-6 {
            transform: rotate(150deg);
        }

        /*Tao kim giay va set chuyen dong cho kim giay*/
        .second {
            background: red;
            position: absolute;
            top: 15px;
            left: 104px;
            width: 2px;
            height: 90px;
            -webkit-animation: second 60s infinite;
            animation: second 60s infinite;
            -webkit-transform-origin: bottom;
            transform-origin: bottom;
            animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
        }

        /*Tao kim phut va set chuyen dong cho kim phut*/
        .minute {
            background: gray;
            position: absolute;
            top: 103px;
            left: 105px;
            width: 75px;
            height: 4px;
            -webkit-animation: minute 3600s infinite;
            animation: minute 3600s infinite;
            -webkit-transform-origin: left;
            transform-origin: left;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
        }

        /*Tao kim gio va set chuyen dong cho kim gio*/
        .hour {
            background: gray;
            position: absolute;
            top: 45px;
            left: 102px;
            width: 6px;
            height: 60px;
            -webkit-animation: hour 216000s infinite;
            animation: hour 216000s infinite;
            -webkit-transform-origin: bottom;
            transform-origin: bottom;
            animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
        }

    </style>
</head>
<body>
    <div class="clock">
        <div class="radius">
            <div>
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
                <div class="line-4"></div>
                <div class="line-5"></div>
                <div class="line-6"></div>
            </div>
            <div class="solid"></div>
            <div class="second"></div>
            <div class="minute"></div>
            <div class="hour"></div>
            <div class="center"></div>
        </div>
    </div>
</body>
</html>
