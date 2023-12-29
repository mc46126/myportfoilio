<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candle</title>
    <style>
        #candle {
            margin-top: 30rem;
            width: 15rem;
            height: 40rem;
            position: relative;
            display: grid;
        }
        #flame,
        #thread,
        #blue-part,
        #glow,
        #wax,
        #candle-bottom {
            position: absolute;
            justify-self: center;
        }
        #thread::after,
        #blue-part::after,
        #wax::before {
            content: '';
            display: block;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Candle</h1>
    <div id="main-container">
        <div id="candle">
            <div id="glow"></div>
            <div id="flame"></div>
            <div id="blue-part"></div>
            <div id="thread"></div>
            <div id="wax"></div>
            <div id="candle-bottom"></div>
        </div>
    </div>
</body>
</html>
