<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JRD - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *, *::before, *::after {
            padding: 0;
            margin: 0 auto;
            box-sizing: border-box;
        }

        :root {
            --perspectivOriginY: 25%;
        }

        body {
            font-family: 'Anton', sans-serif;
            background-color: #151515;
            color: #aaa;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: opacity 1s;
        }

        body.fade-out {
            opacity: 0;
        }

        .wireframe_input {
            position: fixed;
            top: -100%;
            left: -100%;
            visibility: hidden;
        }

        .wireframe_input:checked + .wireframe_label {
            color: chartreuse;
        }

        .wireframe_input:checked + .wireframe_label::before {
            background-color: chartreuse;
        }

        .wireframe_input:checked ~ .towerOuter > .tower > .card,
        .wireframe_input:checked ~ .towerOuter > .tower > .card::after {
            background-image: unset;
            box-shadow: 0 0 1px 1px #fff inset;
        }

        .center-letter {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 100px;
            font-weight: bold;
            z-index: 4;
            pointer-events: none;
            display: none;
        }

        .wireframe_input:checked ~ .towerOuter .center-letter {
            display: block;
            -webkit-text-stroke: 2px #fff;
            color: transparent;
        }

        .wireframe_label {
            position: fixed;
            top: 0%;
            left: 0%;
            font-size: 20px;
            padding: 0.5em;
            z-index: 3;
            transition: color 0.25s;
        }

        .wireframe_label::before {
            content: '';
            display: inline-block;
            width: 0.75em;
            height: 0.75em;
            margin-right: 0.25em;
            background-color: maroon;
            border-radius: 0.25em;
            border: 2px solid #aaa;
            transition: background-color 0.25s;
        }

        .hoverPad {
            position: absolute;
            z-index: 2;
            width: 100%;
            height: 10%;
        }

        .hoverPad:nth-child(3) {
            top: 0%;
        }

        .hoverPad:nth-child(3):hover ~ .towerOuter {
            --perspectivOriginY: 15%;
        }

        .hoverPad:nth-child(4) {
            top: 10%;
        }

        .hoverPad:nth-child(4):hover ~ .towerOuter {
            --perspectivOriginY: 20%;
        }

        .hoverPad:nth-child(5) {
            top: 20%;
        }

        .hoverPad:nth-child(5):hover ~ .towerOuter {
            --perspectivOriginY: 25%;
        }

        .hoverPad:nth-child(6) {
            top: 30%;
        }

        .hoverPad:nth-child(6):hover ~ .towerOuter {
            --perspectivOriginY: 30%;
        }

        .hoverPad:nth-child(7) {
            top: 40%;
        }

        .hoverPad:nth-child(7):hover ~ .towerOuter {
            --perspectivOriginY: 35%;
        }

        .hoverPad:nth-child(8) {
            top: 50%;
        }

        .hoverPad:nth-child(8):hover ~ .towerOuter {
            --perspectivOriginY: 40%;
        }

        .hoverPad:nth-child(9) {
            top: 60%;
        }

        .hoverPad:nth-child(9):hover ~ .towerOuter {
            --perspectivOriginY: 45%;
        }

        .hoverPad:nth-child(10) {
            top: 70%;
        }

        .hoverPad:nth-child(10):hover ~ .towerOuter {
            --perspectivOriginY: 50%;
        }

        .hoverPad:nth-child(11) {
            top: 80%;
        }

        .hoverPad:nth-child(11):hover ~ .towerOuter {
            --perspectivOriginY: 55%;
        }

        .hoverPad:nth-child(12) {
            top: 90%;
        }

        .hoverPad:nth-child(12):hover ~ .towerOuter {
            --perspectivOriginY: 60%;
        }

        .towerOuter {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            perspective: 700px;
            perspective-origin: center var(--perspectivOriginY);
            transition: perspective-origin 0.25s;
        }

        .tower {
            position: absolute;
            top: 50%; left: 50%;
            width: 50px;
            transform-style: preserve-3d;
            animation: towerRotate 60s infinite linear;
        }

        @keyframes towerRotate {
            from { transform: translateX(-50%) rotateY(0deg); }
            to { transform: translateX(-50%) rotateY(360deg); }
        }

        .card {
            position: absolute;
            width: 50px;
            height: 70px;
            background-image: url('https://assets.codepen.io/1948355/cardsheet01.jpg');
            background-size: 650px 280px;
            border-radius: 8px;
            transform-style: preserve-3d;
            box-shadow: 0 0 10px #0007 inset;
            backface-visibility: hidden;
        }

        .card::after {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 50px;
            height: 70px;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            background-image: url('https://assets.codepen.io/1948355/cardback01.jpg');
            background-size: 50px 70px;
            border: 1px solid #fff7;
            border-radius: 8px;
        }

        .shadow {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%) rotateX(-90deg) translateZ(131px);
            width: 630px;
            height: 630px;
            background-image: radial-gradient(#0000, #000 210px, #0000 315px);
        }
    </style>
</head>
<body>
    <input type="checkbox" id="wf" class="wireframe_input">
    <label for="wf" class="wireframe_label"></label>

    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>
    <div class="hoverPad"></div>

    <div class="towerOuter">
        <div class="tower">
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>

            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>

            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>
            <div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div><div class="card"></div>

            <div class="shadow"></div>
            <div class="center-letter">JRD</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.card');
            const towerRadius = 210;
            const cardWidth = 50;
            const cardHeight = 70;
            const ringHeight = 33;

            cards.forEach((card, index) => {
                const r = Math.floor(index / 72);
                const localIndex = index % 72;
                const i = (localIndex % 24) + 1;
                const set = Math.floor(localIndex / 24);

                let rotateY, translateY, rotateX;
                if (set === 0) {
                    rotateY = ((i - 1 + r * 0.5) * 360 / 24);
                    translateY = (r - 1.5) * (ringHeight * 2);
                    rotateX = -20;
                } else if (set === 1) {
                    rotateY = ((i - 24.5 + r * 0.5) * 360 / 24);
                    translateY = (r - 1.5) * (ringHeight * 2);
                    rotateX = 200;
                } else {
                    rotateY = ((i - 48.75 + r * 0.5) * 360 / 24);
                    translateY = (r - 2) * (ringHeight * 2);
                    rotateX = -90;
                }

                card.style.transform = `rotateY(${rotateY}deg) translateX(${towerRadius}px) translateY(${translateY}px) rotateX(${rotateX}deg)`;

                const bgX = Math.floor(Math.random() * 13) * cardWidth;
                const bgY = Math.floor(Math.random() * 4) * cardHeight;
                card.style.backgroundPosition = `${bgX}px ${bgY}px`;
            });

            document.body.addEventListener('click', function(e) {
                if (e.target !== document.querySelector('.wireframe_label')) {
                    document.body.classList.add('fade-out');
                    setTimeout(() => {
                        window.location.href = '/home';
                    }, 1000);
                }
            });
        });
    </script>
</body>
</html>
