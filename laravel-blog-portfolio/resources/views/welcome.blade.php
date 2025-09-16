<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasmine Robelle De Leon - Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'crimson': '#DC143C',
                        'crimson-dark': '#A10E2F'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from { 
                opacity: 0; 
                transform: translateY(50px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        @keyframes slideInLeft {
            from { 
                opacity: 0; 
                transform: translateX(-100px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }

        @keyframes slideInRight {
            from { 
                opacity: 0; 
                transform: translateX(100px); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0); 
            }
        }

        @keyframes scaleIn {
            from { 
                opacity: 0; 
                transform: scale(0.8); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }

        @keyframes rotateIn {
            from { 
                opacity: 0; 
                transform: rotateY(90deg); 
            }
            to { 
                opacity: 1; 
                transform: rotateY(0); 
            }
        }

        @keyframes splitLeft {
            from { 
                opacity: 0; 
                transform: translateX(-50%) rotateY(-15deg); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0) rotateY(0); 
            }
        }

        @keyframes splitRight {
            from { 
                opacity: 0; 
                transform: translateX(50%) rotateY(15deg); 
            }
            to { 
                opacity: 1; 
                transform: translateX(0) rotateY(0); 
            }
        }

        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink {
            from, to { border-color: transparent; }
            50% { border-color: #DC143C; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse-glow {
            0%, 100% { 
                box-shadow: 0 0 20px rgba(220, 20, 60, 0.3);
            }
            50% { 
                box-shadow: 0 0 40px rgba(220, 20, 60, 0.6);
            }
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(100px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }

        @keyframes flipIn {
            from {
                opacity: 0;
                transform: rotateX(-90deg);
            }
            to {
                opacity: 1;
                transform: rotateX(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
            opacity: 0;
        }

        .animate-slide-left {
            animation: slideInLeft 1s ease-out forwards;
            opacity: 0;
        }

        .animate-slide-right {
            animation: slideInRight 1s ease-out forwards;
            opacity: 0;
        }

        .animate-scale-in {
            animation: scaleIn 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-rotate-in {
            animation: rotateIn 1s ease-out forwards;
            opacity: 0;
        }

        .animate-split-left {
            animation: splitLeft 1.2s ease-out forwards;
            opacity: 0;
        }

        .animate-split-right {
            animation: splitRight 1.2s ease-out forwards;
            opacity: 0;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .animate-slide-up {
            animation: slideUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-flip-in {
            animation: flipIn 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-bounce-in {
            animation: bounceIn 0.8s ease-out forwards;
            opacity: 0;
        }

        .typewriter {
            overflow: hidden;
            border-right: 3px solid #DC143C;
            white-space: nowrap;
            animation: 
                typewriter 2s steps(40, end),
                blink 1s step-end infinite;
            animation-delay: 0.5s;
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #DC143C 0%, #A10E2F 100%);
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-300 { animation-delay: 0.3s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-500 { animation-delay: 0.5s; }
        .animation-delay-600 { animation-delay: 0.6s; }
        .animation-delay-700 { animation-delay: 0.7s; }
        .animation-delay-800 { animation-delay: 0.8s; }
        .animation-delay-900 { animation-delay: 0.9s; }
        .animation-delay-1000 { animation-delay: 1s; }

        .perspective-1000 {
            perspective: 1000px;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .hover-tilt:hover {
            transform: rotateY(5deg) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        .stagger-item {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease;
        }

        .stagger-item.animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Intersection Observer Classes */
        .reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.8s ease;
        }

        .reveal-scale.active {
            opacity: 1;
            transform: scale(1);
        }

        .split-text {
            overflow: hidden;
        }

        .split-text span {
            display: inline-block;
            opacity: 0;
            transform: translateY(100%);
            animation: slideUp 0.6s ease forwards;
        }

        .nav-link {
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(220, 20, 60, 0.2), transparent);
            transition: left 0.5s;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        @media (max-width: 768px) {
            .animate-split-left,
            .animate-split-right {
                animation: fadeInUp 1s ease-out forwards;
            }
        }
    </style>
</head>
<body class="bg-black text-white font-sans overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black/80 backdrop-blur-md z-50 border-b border-crimson/20 transform -translate-y-full animate-slide-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-crimson animate-pulse-glow">Jasmine</a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="#about" class="nav-link text-white hover:text-crimson transition duration-300">About</a>
                    <a href="#education" class="nav-link text-white hover:text-crimson transition duration-300">Education</a>
                    <a href="#skills" class="nav-link text-white hover:text-crimson transition duration-300">Skills</a>
                    <a href="#projects" class="nav-link text-white hover:text-crimson transition duration-300">Projects</a>
                    <a href="#experience" class="nav-link text-white hover:text-crimson transition duration-300">Experience</a>
                    <a href="#contact" class="nav-link text-white hover:text-crimson transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center bg-gradient-to-br from-black via-gray-900 to-black overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23DC143C" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-crimson/10 rounded-full blur-3xl animate-float"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-crimson/5 rounded-full blur-3xl animate-float animation-delay-500"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="text-center">
                <div class="animate-split-left">
                    <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-6 text-shadow">
                        Hi, I'm <span class="text-crimson typewriter">Jasmine</span>
                    </h1>
                </div>
                <div class="animate-split-right animation-delay-600">
                    <p class="text-xl md:text-3xl text-gray-300 mb-8 max-w-4xl mx-auto leading-relaxed">
                        An aspiring <span class="text-crimson font-semibold">IT Student</span> passionate about software development and web technologies
                    </p>
                </div>
                <div class="flex justify-center space-x-6 mb-12 animate-bounce-in animation-delay-1000">
                    <a href="#contact" class="bg-crimson text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-crimson-dark transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-crimson/50 animate-pulse-glow">
                        Get In Touch
                    </a>
                    <a href="#projects" class="border-2 border-crimson text-crimson px-10 py-4 rounded-full font-bold text-lg hover:bg-crimson hover:text-white transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-crimson/50">
                        View My Work
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">About Me</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="reveal-left perspective-1000">
                    <img src="https://via.placeholder.com/400x400" alt="Jasmine Robelle De Leon" class="rounded-lg shadow-2xl mx-auto hover-tilt">
                </div>
                <div class="reveal-right animation-delay-300">
                    <div class="split-text">
                        <h3 class="text-3xl font-semibold text-black mb-6">
                            <span class="animation-delay-400">J</span>
                            <span class="animation-delay-500">a</span>
                            <span class="animation-delay-600">s</span>
                            <span class="animation-delay-700">m</span>
                            <span class="animation-delay-800">i</span>
                            <span class="animation-delay-900">n</span>
                            <span class="animation-delay-1000">e</span>
                            <span class="animation-delay-200"> </span>
                            <span class="animation-delay-300">R</span>
                            <span class="animation-delay-400">o</span>
                            <span class="animation-delay-500">b</span>
                            <span class="animation-delay-600">e</span>
                            <span class="animation-delay-700">l</span>
                            <span class="animation-delay-800">l</span>
                            <span class="animation-delay-900">e</span>
                            <span class="animation-delay-200"> </span>
                            <span class="animation-delay-300">C</span>
                            <span class="animation-delay-400">.</span>
                            <span class="animation-delay-500"> </span>
                            <span class="animation-delay-600">D</span>
                            <span class="animation-delay-700">e</span>
                            <span class="animation-delay-800"> </span>
                            <span class="animation-delay-900">L</span>
                            <span class="animation-delay-1000">e</span>
                            <span class="animation-delay-200">o</span>
                            <span class="animation-delay-300">n</span>
                        </h3>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg reveal animation-delay-400">
                        Born on August 4, 2004, I am an aspiring IT student with a strong foundation in software development, 
                        web technologies, and database management. Currently pursuing my Diploma in Information Technology at 
                        the Polytechnic University of the Philippines, Taguig City.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg reveal animation-delay-500">
                        I am motivated to apply technical expertise and problem-solving abilities in a dynamic tech environment. 
                        Eager to contribute to innovative IT projects, collaborate with teams, and grow professionally in the 
                        field of information technology.
                    </p>
                    <div class="mb-6 reveal animation-delay-600">
                        <h4 class="font-semibold text-black mb-2">Location:</h4>
                        <p class="text-gray-600">Taguig City, Philippines 🇵🇭</p>
                    </div>
                    <div class="mb-8 reveal animation-delay-700">
                        <h4 class="font-semibold text-black mb-2">Languages:</h4>
                        <p class="text-gray-600">English (Professional) • Filipino (Native)</p>
                    </div>
                    <div class="flex space-x-6 reveal animation-delay-800">
                        <a href="mailto:cacb.dcforsport.jasmine@gmail.com" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110 animate-bounce-in animation-delay-200">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-.904.732-1.636 1.636-1.636h3.819v.273L12 8.773l6.545-4.68v-.273h3.819c.904 0 1.636.732 1.636 1.636z"/></svg>
                        </a>
                        <a href="#" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110 animate-bounce-in animation-delay-400">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110 animate-bounce-in animation-delay-600">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">Education</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-crimson h-full reveal-scale animation-delay-300"></div>
                <div class="space-y-12">
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg reveal-left hover-tilt perspective-1000">
                                <h3 class="text-xl font-semibold text-black mb-2">Diploma in Information Technology</h3>
                                <p class="text-crimson font-medium mb-2">Polytechnic University of the Philippines, Taguig City</p>
                                <p class="text-gray-600">2023 - 2026 (Present)</p>
                                <p class="text-gray-600 mt-2">Pursuing comprehensive education in IT with focus on software development and database management.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10 animate-pulse-glow"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10 animate-pulse-glow animation-delay-200"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg reveal-right animation-delay-200 hover-tilt perspective-1000">
                                <h3 class="text-xl font-semibold text-black mb-2">Senior High School - STEM Track</h3>
                                <p class="text-crimson font-medium mb-2">Upper Bicutan National High School, Taguig City</p>
                                <p class="text-gray-600">2020 - 2023</p>
                                <p class="text-gray-600 mt-2"><strong>With Highest Honors</strong> - Excellence in Science, Technology, Engineering, and Mathematics</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg reveal-left animation-delay-400 hover-tilt perspective-1000">
                                <h3 class="text-xl font-semibold text-black mb-2">Junior High School</h3>
                                <p class="text-crimson font-medium mb-2">Upper Bicutan National High School, Taguig City</p>
                                <p class="text-gray-600">2014 - 2020</p>
                                <p class="text-gray-600 mt-2"><strong>With High Honors</strong> - Consistent academic excellence throughout junior high</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10 animate-pulse-glow animation-delay-400"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">Technical Skills</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animate-float hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in">💻</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Programming Languages</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">Python</p>
                        <p class="stagger-item">Java</p>
                        <p class="stagger-item">C++</p>
                        <p class="stagger-item">JavaScript</p>
                        <p class="stagger-item">PHP</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animation-delay-200 animate-float animation-delay-500 hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in animation-delay-200">🌐</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Web Development</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">HTML</p>
                        <p class="stagger-item">CSS</p>
                        <p class="stagger-item">Laravel</p>
                        <p class="stagger-item">Responsive Design</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animation-delay-400 animate-float animation-delay-1000 hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in animation-delay-400">🗄️</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Database Management</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">MySQL</p>
                        <p class="stagger-item">PostgreSQL</p>
                        <p class="stagger-item">MongoDB</p>
                        <p class="stagger-item">SQL Queries</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animation-delay-600 animate-float hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in animation-delay-600">🔧</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Development Tools</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">Git & GitHub</p>
                        <p class="stagger-item">Maven</p>
                        <p class="stagger-item">Eclipse</p>
                        <p class="stagger-item">Figma</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animation-delay-800 animate-float animation-delay-500 hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in animation-delay-800">🐛</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Problem Solving</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">Troubleshooting</p>
                        <p class="stagger-item">Debugging</p>
                        <p class="stagger-item">Performance Optimization</p>
                        <p class="stagger-item">System Error Resolution</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition duration-300 reveal-scale animation-delay-1000 animate-float animation-delay-1000 hover-tilt">
                    <div class="text-4xl mb-4 animate-bounce-in animation-delay-1000">📊</div>
                    <h3 class="text-xl font-semibold text-black mb-4">Core Competencies</h3>
                    <div class="text-gray-600 space-y-2">
                        <p class="stagger-item">Software Development</p>
                        <p class="stagger-item">Web Technologies</p>
                        <p class="stagger-item">Technical Documentation</p>
                        <p class="stagger-item">Team Collaboration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">Featured Projects</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 reveal-scale hover-tilt perspective-1000">
                    <img src="https://via.placeholder.com/400x250?text=Coffee+Website" alt="Aniya - Clover Coffee Reserve" class="w-full h-48 object-cover animate-scale-in">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-2 reveal animation-delay-200">Aniya - Clover Coffee Reserve</h3>
                        <p class="text-gray-600 mb-4 reveal animation-delay-400">A comprehensive web platform for a coffee farm investment project. Contributed to the development and gained valuable insights into the coffee industry and product branding.</p>
                        <div class="flex justify-between items-center reveal animation-delay-600">
                            <span class="text-sm text-gray-500 bg-gray-200 px-2 py-1 rounded animate-bounce-in">2025</span>
                            <span class="text-crimson hover:text-crimson-dark font-semibold">Web Development</span>
                        </div>
                    </div>
                </div>
                
                <!-- Placeholder for future projects -->
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 opacity-75 reveal-scale animation-delay-300 hover-tilt perspective-1000">
                    <img src="https://via.placeholder.com/400x250?text=Coming+Soon" alt="Future Project" class="w-full h-48 object-cover animate-scale-in animation-delay-300">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-2 reveal animation-delay-500">Upcoming Project</h3>
                        <p class="text-gray-600 mb-4 reveal animation-delay-700">Stay tuned for more exciting projects as I continue to develop my skills and work on innovative solutions.</p>
                        <div class="flex justify-between items-center reveal animation-delay-900">
                            <span class="text-sm text-gray-500 bg-gray-200 px-2 py-1 rounded animate-bounce-in animation-delay-300">In Progress</span>
                            <span class="text-crimson hover:text-crimson-dark font-semibold">Coming Soon →</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">Volunteer Experience</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="space-y-8">
                <div class="bg-white p-8 rounded-lg shadow-lg reveal-left hover-tilt perspective-1000">
                    <div class="flex flex-col md:flex-row md:items-center mb-4">
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold text-black mb-2 split-text">
                                <span>D</span><span>i</span><span>r</span><span>e</span><span>c</span><span>t</span><span>o</span><span>r</span>
                                <span> </span><span>f</span><span>o</span><span>r</span><span> </span>
                                <span>S</span><span>p</span><span>o</span><span>r</span><span>t</span><span>,</span><span> </span>
                                <span>C</span><span>o</span><span>m</span><span>p</span><span>u</span><span>t</span><span>e</span><span>r</span><span> </span>
                                <span>S</span><span>o</span><span>c</span><span>i</span><span>e</span><span>t</span><span>y</span><span> </span>
                                <span>O</span><span>r</span><span>g</span><span>a</span><span>n</span><span>i</span><span>z</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span>
                            </h3>
                            <p class="text-crimson font-medium mb-2">Polytechnic University of the Philippines</p>
                            <p class="text-gray-600">2025</p>
                        </div>
                        <div class="text-4xl text-crimson animate-float">🏆</div>
                    </div>
                    <p class="text-gray-600">Led efforts to enhance student engagement in athletics by organizing events, developing training programs, and fostering a competitive yet inclusive sporting culture.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg reveal-right animation-delay-200 hover-tilt perspective-1000">
                    <div class="flex flex-col md:flex-row md:items-center mb-4">
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold text-black mb-2 split-text">
                                <span>S</span><span>u</span><span>p</span><span>r</span><span>e</span><span>m</span><span>e</span><span> </span>
                                <span>S</span><span>t</span><span>u</span><span>d</span><span>e</span><span>n</span><span>t</span><span> </span>
                                <span>C</span><span>o</span><span>u</span><span>n</span><span>c</span><span>i</span><span>l</span><span> </span>
                                <span>R</span><span>e</span><span>p</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span><span>a</span><span>t</span><span>i</span><span>v</span><span>e</span>
                            </h3>
                            <p class="text-crimson font-medium mb-2">Upper Bicutan National High School</p>
                            <p class="text-gray-600">2020 - 2023</p>
                        </div>
                        <div class="text-4xl text-crimson animate-float animation-delay-300">👥</div>
                    </div>
                    <p class="text-gray-600">Actively contributed to student governance by advocating for initiatives that foster inclusivity, collaboration, and academic excellence.</p>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-lg reveal-left animation-delay-400 hover-tilt perspective-1000">
                    <div class="flex flex-col md:flex-row md:items-center mb-4">
                        <div class="flex-grow">
                            <h3 class="text-xl font-semibold text-black mb-2 split-text">
                                <span>I</span><span>n</span><span>t</span><span>e</span><span>r</span><span>n</span>
                            </h3>
                            <p class="text-crimson font-medium mb-2">DOST-PCHRD (Department of Science and Technology)</p>
                            <p class="text-gray-600">2023</p>
                        </div>
                        <div class="text-4xl text-crimson animate-float animation-delay-600">🔬</div>
                    </div>
                    <p class="text-gray-600">Gained hands-on experience in research and technical documentation within a structured government environment, developing professional skills and understanding of scientific research processes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4 reveal">Get In Touch</h2>
                <div class="w-24 h-1 bg-crimson mx-auto reveal-scale animation-delay-200"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4 reveal-left hover-tilt">
                        <div class="w-12 h-12 bg-crimson rounded-full flex items-center justify-center animate-pulse-glow">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-black">Address</h3>
                            <p class="text-gray-600">2938 Patricio St. Purok 5 Lower Bicutan<br>Taguig City, Philippines</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 reveal-left animation-delay-200 hover-tilt">
                        <div class="w-12 h-12 bg-crimson rounded-full flex items-center justify-center animate-pulse-glow animation-delay-200">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-black">Phone</h3>
                            <p class="text-gray-600">+63 930 567 0867</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 reveal-left animation-delay-400 hover-tilt">
                        <div class="w-12 h-12 bg-crimson rounded-full flex items-center justify-center animate-pulse-glow animation-delay-400">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-black">Email</h3>
                            <p class="text-gray-600">cacb.dcforsport.jasmine@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="reveal-right animation-delay-300">
                    <div class="bg-white p-8 rounded-lg shadow-lg hover-tilt perspective-1000">
                        <h3 class="text-2xl font-semibold text-black mb-6 split-text">
                            <span>L</span><span>e</span><span>t</span><span>'</span><span>s</span><span> </span>
                            <span>C</span><span>o</span><span>l</span><span>l</span><span>a</span><span>b</span><span>o</span><span>r</span><span>a</span><span>t</span><span>e</span>
                        </h3>
                        <p class="text-gray-600 mb-6">I'm always interested in discussing new opportunities, innovative projects, and ways to contribute to the tech community. Feel free to reach out!</p>
                        <div class="flex space-x-4">
                            <a href="mailto:cacb.dcforsport.jasmine@gmail.com" class="bg-crimson text-white px-6 py-3 rounded-lg font-semibold hover:bg-crimson-dark transition-all duration-300 transform hover:scale-105 animate-pulse-glow">
                                Send Email
                            </a>
                            <a href="#" class="border-2 border-crimson text-crimson px-6 py-3 rounded-lg font-semibold hover:bg-crimson hover:text-white transition-all duration-300 transform hover:scale-105">
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal">
                <p class="text-gray-400 mb-4">© 2025 Jasmine Robelle De Leon. All rights reserved.</p>
                <p class="text-crimson font-semibold">Building the future, one line of code at a time.</p>
            </div>
        </div>
    </footer>

    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // Stagger animation for skill items
                    if (entry.target.querySelector('.stagger-item')) {
                        const items = entry.target.querySelectorAll('.stagger-item');
                        items.forEach((item, index) => {
                            setTimeout(() => {
                                item.classList.add('animate');
                            }, index * 100);
                        });
                    }
                    
                    // Animate split text
                    if (entry.target.querySelector('.split-text span')) {
                        const spans = entry.target.querySelectorAll('.split-text span');
                        spans.forEach((span, index) => {
                            setTimeout(() => {
                                span.style.animationDelay = `${index * 0.1}s`;
                                span.style.opacity = '1';
                                span.style.transform = 'translateY(0)';
                            }, index * 50);
                        });
                    }
                }
            });
        }, observerOptions);

        // Observe all elements with reveal classes
        document.addEventListener('DOMContentLoaded', () => {
            const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => observer.observe(el));

            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add parallax effect to floating elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallax = document.querySelectorAll('.animate-float');
                const speed = 0.5;

                parallax.forEach(element => {
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            });

            // Add mouse follow effect for cursor
            document.addEventListener('mousemove', (e) => {
                const cursor = document.querySelector('.cursor');
                if (!cursor) {
                    const cursorElement = document.createElement('div');
                    cursorElement.className = 'cursor fixed w-4 h-4 bg-crimson rounded-full pointer-events-none z-50 mix-blend-difference';
                    document.body.appendChild(cursorElement);
                }
                
                const cursorEl = document.querySelector('.cursor');
                if (cursorEl) {
                    cursorEl.style.left = e.clientX - 8 + 'px';
                    cursorEl.style.top = e.clientY - 8 + 'px';
                }
            });

            // Add hover effects for interactive elements
            document.querySelectorAll('a, button').forEach(el => {
                el.addEventListener('mouseenter', () => {
                    const cursor = document.querySelector('.cursor');
                    if (cursor) {
                        cursor.style.transform = 'scale(2)';
                        cursor.style.backgroundColor = '#DC143C';
                    }
                });

                el.addEventListener('mouseleave', () => {
                    const cursor = document.querySelector('.cursor');
                    if (cursor) {
                        cursor.style.transform = 'scale(1)';
                    }
                });
            });
        });
    </script>
</body>
</html>