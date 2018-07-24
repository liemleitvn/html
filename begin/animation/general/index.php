<!doctype html>
<html>
    <head>
        <style>
            .main{
                width: auto;
                margin: 50px auto;
                background: antiquewhite;
                display: inline-block;
                text-align: left;
            }

            *{
                margin: 0;
                padding: 0;
            }
            .animation{
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
            .animation-delay-1s{
                -webkit-animation-delay: 1s;
            }
            .animation-delay-2s{
                -webkit-animation-delay: 2s;
            }
            .animation-delay-3s{
                -webkit-animation-delay: 3s;
            }
            .animation-delay-4s{
                -webkit-animation-delay: 4s;
            }
            .animation-infinite{
                -webkit-animation-iteration-count: infinite;
            }
            @-webkit-keyframes flash {
                from,
                50%,
                to{
                    opacity: 1;
                }
                25%,
                75%{
                    opacity: 0;
                }
            }
            @keyframes flash {
                from,
                50%,
                to{
                    opacity: 1;
                }
                25%,
                75%{
                    opacity: 0;
                }
            }
            .flash{
                -webkit-animation-name: flash;
                -moz-animation-name: flash;
                -o-animation-name: flash;
                animation-name: flash;
            }
            
            @-webkit-keyframes pulse {
                from {
                    -webkit-transform: scale(1,1);
                    transform: scale(1,1);
                }
                50% {
                    -webkit-transform: scale(1.05,1.05);
                    transform: scale(1.05,1.05);
                }
                to {
                    -webkit-transform: scale(1,1);
                    transform: scale(1,1);
                }
            }
            @keyframes pulse {
                from {
                    -webkit-transform: scale(1,1);
                    transform: scale(1,1);
                }
                50% {
                    -webkit-transform: scale(1.05,1.05);
                    transform: scale(1.05,1.05);
                }
                to {
                    -webkit-transform: scale(1,1);
                    transform: scale(1,1);
                }
            }

            .pulse {
                -webkit-animation-name: pulse;
                -moz-animation-name: pulse;
                -o-animation-name: pulse;
                animation-name: pulse;
                -webkit-animation-timing-function: linear;
            }
            
            @-webkit-keyframes rubberBand {
                from,to{
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1, 1 , 1);
                }
                30% {
                    -webkit-transform: scale3d(1.25,0.75,1);
                    transform: scale3d(1.25, 0.75 , 1);
                }
                40%{
                    -webkit-transform: scale3d(0.75,1.25,1);
                    transform: scale3d(0.75,1.25,1);
                }
                50% {
                    -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
                }

                65% {
                    -webkit-transform: scale3d(0.95, 1.05, 1);
                    transform: scale3d(0.95, 1.05, 1);
                }

                75% {
                    -webkit-transform: scale3d(1.05, 0.95, 1);
                    transform: scale3d(1.05, 0.95, 1);
                }
            }
            @keyframes rubberBand {
                from,to{
                    -webkit-transform: scale3d(1,1,1);
                    transform: scale3d(1, 1 , 1);
                }
                30% {
                    -webkit-transform: scale3d(1.25,0.75,1);
                    transform: scale3d(1.25, 0.75 , 1);
                }
                40%{
                    -webkit-transform: scale3d(0.75,1.25,1);
                    transform: scale3d(0.75,1.25,1);
                }
                50% {
                    -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
                }

                65% {
                    -webkit-transform: scale3d(0.95, 1.05, 1);
                    transform: scale3d(0.95, 1.05, 1);
                }

                75% {
                    -webkit-transform: scale3d(1.05, 0.95, 1);
                    transform: scale3d(1.05, 0.95, 1);
                }
            }
            .rubberBand{
                -webkit-animation-name: rubberBand;
                -moz-animation-name: rubberBand;
                -o-animation-name: rubberBand;
                animation-name: rubberBand;
            }
            
            @-webkit-keyframes shake {
                from,to {
                    -webkit-transform: translate(0,0);
                    transform: translate(0,0);
                }
                10%,30%,50%,70%,90% {
                    -webkit-transform: translate(-10px,0);
                    transform: translate(-10px,0);
                }
                20%,40%,60%,80%{
                    -webkit-transform: translate(10px,0);
                    transform: translate(10px,0);
                }
            }
            @keyframes shake {
                from,to {
                    -webkit-transform: translate(0,0);
                    transform: translate(0,0);
                }
                10%,30%,50%,70%,90% {
                    -webkit-transform: translate(-10px,0);
                    transform: translate(-10px,0);
                }
                20%,40%,60%,80%{
                    -webkit-transform: translate(10px,0);
                    transform: translate(10px,0);
                }
            }

            .shake{
                -webkit-animation-name: shake;
                -moz-animation-name: shake;
                -o-animation-name: shake;
                animation-name: shake;
            }
            @-webkit-keyframes headShake {
                0% {
                    -webkit-transform: translateX(0);
                    transform: translateX(0);
                }

                6.5% {
                    -webkit-transform: translateX(-6px) rotateY(-9deg);
                    transform: translateX(-6px) rotateY(-9deg);
                }

                18.5% {
                    -webkit-transform: translateX(5px) rotateY(7deg);
                    transform: translateX(5px) rotateY(7deg);
                }

                31.5% {
                    -webkit-transform: translateX(-3px) rotateY(-5deg);
                    transform: translateX(-3px) rotateY(-5deg);
                }

                43.5% {
                    -webkit-transform: translateX(2px) rotateY(3deg);
                    transform: translateX(2px) rotateY(3deg);
                }

                50% {
                    -webkit-transform: translateX(0);
                    transform: translateX(0);
                }
            }

            @keyframes headShake {
                0% {
                    -webkit-transform: translateX(0);
                    transform: translateX(0);
                }

                6.5% {
                    -webkit-transform: translateX(-6px) rotateY(-9deg);
                    transform: translateX(-6px) rotateY(-9deg);
                }

                18.5% {
                    -webkit-transform: translateX(5px) rotateY(7deg);
                    transform: translateX(5px) rotateY(7deg);
                }

                31.5% {
                    -webkit-transform: translateX(-3px) rotateY(-5deg);
                    transform: translateX(-3px) rotateY(-5deg);
                }

                43.5% {
                    -webkit-transform: translateX(2px) rotateY(3deg);
                    transform: translateX(2px) rotateY(3deg);
                }

                50% {
                    -webkit-transform: translateX(0);
                    transform: translateX(0);
                }
            }

            .headShake {
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                -webkit-animation-name: headShake;
                animation-name: headShake;
            }

            @-webkit-keyframes swing {
                from,to{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                10% {
                    -webkit-transform: rotate(15deg);
                    transform: rotate(15deg);
                }
                20% {
                    -webkit-transform: rotate(-15deg);
                    transform: rotate(-15deg);
                }
                30% {
                    -webkit-transform: rotate(11deg);
                    transform: rotate(11deg);
                }
                40% {
                    -webkit-transform: rotate(-11deg);
                    transform: rotate(-11deg);
                }
                50% {
                    -webkit-transform: rotate(7deg);
                    transform: rotate(7deg);
                }
                60% {
                    -webkit-transform: rotate(-7deg);
                    transform: rotate(-7deg);
                }
                70% {
                    -webkit-transform: rotate(4deg);
                    transform: rotate(4deg);
                }
                80% {
                    -webkit-transform: rotate(-4deg);
                    transform: rotate(-4deg);
                }
                90% {
                    -webkit-transform: rotate(2deg);
                    transform: rotate(2deg);
                }
            }

            @keyframes swing {
                from,to{
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                10% {
                    -webkit-transform: rotate(15deg);
                    transform: rotate(15deg);
                }
                20% {
                    -webkit-transform: rotate(-15deg);
                    transform: rotate(-15deg);
                }
                30% {
                    -webkit-transform: rotate(11deg);
                    transform: rotate(11deg);
                }
                40% {
                    -webkit-transform: rotate(-11deg);
                    transform: rotate(-11deg);
                }
                50% {
                    -webkit-transform: rotate(7deg);
                    transform: rotate(7deg);
                }
                60% {
                    -webkit-transform: rotate(-7deg);
                    transform: rotate(-7deg);
                }
                70% {
                    -webkit-transform: rotate(4deg);
                    transform: rotate(4deg);
                }
                80% {
                    -webkit-transform: rotate(-4deg);
                    transform: rotate(-4deg);
                }
                90% {
                    -webkit-transform: rotate(2deg);
                    transform: rotate(2deg);
                }
            }
            .swing{
                -webkit-animation-name: swing;
                -moz-animation-name: swing;
                -o-animation-name: swing;
                animation-name: swing;
                -webkit-transform-origin: top center;
                transform-origin: top center;
            }

            p{
                padding: 10px 30px;
                color: rgb(4, 213, 249);
                font-size: 30px;
                float: left;
            }

            select {
                padding: 5px 10px;
                float: left;
                font-size: unset;
                color: black;
                margin: 11.5px 30px;
            }

        </style>
    </head>
    <body>
    <div style="width: 100%; text-align: center">
        <div class="main">
            <p id="type">CSS-ANIMATION</p>
            <select class="select-css">
                <option value="">---select---</option>
                <option value="flash">flash</option>
                <option value="pulse">pulse</option>
                <option value="rubberBand">rubberBand</option>
                <option value="shake">shake</option>
                <option value="headShake">headShake</option>
                <option value="swing">swing</option>
            </select>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".select-css").on("change", function () {
                var value = $(".select-css").val();
                $("#type").removeClass().addClass( "animation " + value);
            })
        })
    </script>
    </body>
</html>