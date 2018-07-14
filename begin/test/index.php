<!DOCTYPE html>
<html>
<head>
    <style>
        .background {
            background: url("../image/background.jpg") repeat;
            border: 2px solid black;
        }
        .trans {
            margin: 30px;
            background: rgba(255,0,0,0.5);
            border: 1px solid black;
        }

        .trans:hover {
            background: rgba(255,0,0,1.0);
        }

        .trans p {
            margin: 5px;
            font-size: 30px;
            font-weight: bold;
            color: yellow;
        }

    </style>
</head>
<body>
    <div class="background">
        <div class="trans">
            <p>This is text</p>
        </div>
    </div>
</body>
</html>
