<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap');

        body {
            background: linear-gradient(-45deg, #02beff,#ff2878, #ffef05);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Fredoka", sans-serif;
            font-optical-sizing: auto;
            font-weight: 650;
            font-style: normal;
            position: relative;
            overflow: hidden;
        }

        .image-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vmin;
            height: 100vmin;
            animation: rotate 20s linear infinite;
        }

        .image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .main {
            position: relative;
            text-align: center;
            padding: 20px;
            z-index: 1;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 100px;
            background: linear-gradient(-45deg, #02beff, #a94aff, #ffef05);
            background-clip: text;
            color: transparent;
            margin: 0;
            padding: 20px 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        p, button {
            color: darkslateblue;
            text-align: center;
            font-size: 30px;
            margin: 20px 0;
        }

        button {
            background-color: transparent;
            border: 2px solid white;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 20px;
            font-family: "Fredoka", sans-serif;

        }

        button:hover {
            background-color:#a94aff ;
            color: white;
            box-shadow: 0px 0px 20px 10px white;
        }
    </style>
</head>
<body>
<div class="image-container">
    <img src="/MVC/src/hotel%20mini%20bg.png" alt="" class="image">
</div>

<div class="main">
    <h2>Error 404</h2>
    <p>Parece que te perdiste entre todos los servicios del hotel</p>
    <a href="/MVC/public/index.php/inicio"><button>Regresar</button></a>
</div>
</body>
</html>

