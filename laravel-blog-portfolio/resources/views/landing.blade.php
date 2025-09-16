<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JRD - Portfolio</title>
    @import url('https://fonts.googleapis.com/css?family=Audiowide');
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            perspective: 1000px;
            background: radial-gradient(circle, rgba(0,0,0,1) 0%, rgba(20,20,20,1) 50%, rgba(0,0,0,1) 100%);
            overflow: hidden;
            margin: 0;
            padding: 0;
        }



        #backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        @keyframes spin {
            0% {
                transform: rotateY(0deg) rotateX(0deg);
            }
            25% {
                transform: rotateY(90deg) rotateX(45deg);
            }
            50% {
                transform: rotateY(180deg) rotateX(90deg);
            }
            75% {
                transform: rotateY(270deg) rotateX(135deg);
            }
            100% {
                transform: rotateY(360deg) rotateX(180deg);
            }
        }

        #cube {
            position: relative;
            width: 300px;
            height: 300px;
            animation: 120s spin infinite linear;
            transform-style: preserve-3d;
            cursor: pointer;
            box-shadow: 0 0 50px rgba(255,255,255,0.3);
        }

        #cube .side {
            box-sizing: border-box;
            position: absolute;
            width: 100%;
            height: 100%;
            border: 30px solid white;
        }

        #cube #front {
            transform: translateZ(150px);
            background: rgba(0, 0, 0, 0.5);
        }

        #cube #back {
            transform: translateZ(-150px);
            background: rgba(0, 0, 0, 0.5);
        }

        #cube #top {
            transform: translateY(-150px) rotateX(-90deg);
            background: rgba(0, 0, 0, 0.5);
        }

        #cube #bottom {
            transform: translateY(150px) rotateX(90deg);
            background: rgba(0, 0, 0, 0.5);
        }

        #cube #left {
            transform: translateX(-150px) rotateY(-90deg);
            background: rgba(0, 0, 0, 0.5);
        }

        #cube #right {
            transform: translateX(150px) rotateY(90deg);
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <canvas id="backdrop"></canvas>
    <div id="cube">
        <canvas id="front" class="side" width="300" height="300"></canvas>
        <canvas id="back" class="side" width="300" height="300"></canvas>
        <canvas id="top" class="side" width="300" height="300"></canvas>
        <canvas id="bottom" class="side" width="300" height="300"></canvas>
        <canvas id="left" class="side" width="300" height="300"></canvas>
        <canvas id="right" class="side" width="300" height="300"></canvas>
    </div>

    <script>
        const STAR_COLORS = [
            '#0000FF'
        ];

        const BACKDROP_STAR_COUNT = 2000;
        const BACKDROP_STAR_MAX_SPEED = 0.5;
        const BACKDROP_STAR_MAX_RADIUS = 1;

        const CUBE_SIDE_STAR_COUNT = 400;
        const CUBE_SIDE_STAR_MAX_SPEED = 1.5;
        const CUBE_SIDE_STAR_MAX_RADIUS = 1.5;

        class StarScene {
            context;
            stars;
            maxParticleSpeed;
            maxParticleRadius;
            letter;

            constructor(canvas, numStars, maxParticleSpeed, maxParticleRadius, letter = null) {
                this.context = canvas.getContext('2d');
                this.maxParticleSpeed = maxParticleSpeed;
                this.maxParticleRadius = maxParticleRadius;
                this.letter = letter;
                this.stars = this._generateStars(numStars);
            }

            _generateStars = (numStars) => {
                let stars = [];
                for (let i = 0; i < numStars; i++) {
                    stars.push({
                        x: Math.random() * this.context.canvas.width,
                        y: Math.random() * this.context.canvas.height,
                        vx: Math.random() * this.maxParticleSpeed * 2 - this.maxParticleSpeed,
                        vy: Math.random() * this.maxParticleSpeed * 2 - this.maxParticleSpeed,
                        color: STAR_COLORS[Math.floor(Math.random() * STAR_COLORS.length)]
                    });
                }
                return stars;
            };

            clear = () => {
                this.context.clearRect(0, 0, this.context.canvas.width, this.context.canvas.height);
            };

            draw = () => {
                this.stars.forEach((star) => {
                    this.context.fillStyle = star.color;
                    this.context.beginPath();
                    this.context.arc(star.x, star.y, Math.random() * this.maxParticleRadius, 0, Math.PI * 2);
                    this.context.fill();
                });
                if (this.letter) {
                    this.context.fillStyle = 'white';
                    this.context.shadowColor = 'white';
                    this.context.shadowBlur = 20;
                    this.context.font = '100px Audiowide, sans-serif';
                    this.context.textAlign = 'center';
                    this.context.textBaseline = 'middle';
                    this.context.fillText(this.letter, this.context.canvas.width / 2, this.context.canvas.height / 2);
                }
            };

            update = () => {
                this.stars.forEach((star) => {
                    star.x += star.vx;
                    star.y += star.vy;
                    if (star.x < 0 || star.x > this.context.canvas.width) {
                        star.vx *= -1;
                    }
                    if (star.y < 0 || star.y > this.context.canvas.height) {
                        star.vy *= -1;
                    }
                });
            };

            tick = () => {
                this.clear();
                this.draw();
                this.update();
            };
        }

        class BackdropScene extends StarScene {
            update = () => {
                this.stars.forEach((star) => {
                    star.x += Math.abs(star.vx);
                    if (star.x > this.context.canvas.width) {
                        star.x = 0;
                    }
                });
            };
        }

        let backdrop = document.getElementById('backdrop');
        backdrop.width = window.innerWidth;
        backdrop.height = window.innerHeight;
        let backdropScene = new BackdropScene(
            backdrop,
            BACKDROP_STAR_COUNT,
            BACKDROP_STAR_MAX_SPEED,
            BACKDROP_STAR_MAX_RADIUS
        );

        let sides = [
            { canvas: document.getElementById('front'), letter: 'J' },
            { canvas: document.getElementById('back'), letter: 'D' },
            { canvas: document.getElementById('top') },
            { canvas: document.getElementById('bottom') },
            { canvas: document.getElementById('left') },
            { canvas: document.getElementById('right'), letter: 'R' },
        ].map((side) => {
            return new StarScene(
                side.canvas,
                CUBE_SIDE_STAR_COUNT,
                CUBE_SIDE_STAR_MAX_SPEED,
                CUBE_SIDE_STAR_MAX_RADIUS,
                side.letter
            );
        });

        let loop = () => {
            backdropScene.tick();
            sides.forEach((side) => {
                side.tick();
            });
            requestAnimationFrame(loop);
        };

        loop();

        document.getElementById('cube').addEventListener('click', () => {
            window.location.href = '{{ url("/home") }}';
        });
    </script>
</body>
</html>
