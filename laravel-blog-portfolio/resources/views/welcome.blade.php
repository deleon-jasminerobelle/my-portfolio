<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
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
        .animate-swirl {
            animation: swirl 4s infinite ease-in-out;
            display: inline-block;
            cursor: pointer;
        }
        @keyframes swirl {
            0% { transform: rotateY(0deg) rotateX(0deg) translateX(0px) scale(1); }
            25% { transform: rotateY(90deg) rotateX(45deg) translateX(10px) scale(1.05); }
            50% { transform: rotateY(180deg) rotateX(90deg) translateX(0px) scale(1); }
            75% { transform: rotateY(270deg) rotateX(45deg) translateX(-10px) scale(1.05); }
            100% { transform: rotateY(360deg) rotateX(0deg) translateX(0px) scale(1); }
        }
    </style>
</head>
<body class="bg-black text-white font-sans overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-black/80 backdrop-blur-md z-50 border-b border-crimson/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-crimson">Portfolio</a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="#about" class="text-white hover:text-crimson transition duration-300">About</a>
                    <a href="#experience" class="text-white hover:text-crimson transition duration-300">Experience</a>
                    <a href="#skills" class="text-white hover:text-crimson transition duration-300">Skills</a>
                    <a href="#projects" class="text-white hover:text-crimson transition duration-300">Projects</a>
                    <a href="#testimonials" class="text-white hover:text-crimson transition duration-300">Testimonials</a>
                    <a href="#blog" class="text-white hover:text-crimson transition duration-300">Blog</a>
                    <a href="#contact" class="text-white hover:text-crimson transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center bg-gradient-to-br from-black via-gray-900 to-black overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23DC143C" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-crimson/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-crimson/5 rounded-full blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="text-center animate-fade-in">
                <h1 class="text-6xl md:text-8xl font-extrabold text-white mb-6 text-shadow">
                    Hi, I'm <a href="#" class="text-crimson">Jasmine Robelle De Leon</a>
                </h1>
                <p class="text-xl md:text-3xl text-gray-300 mb-8 max-w-4xl mx-auto leading-relaxed">
                    A passionate <span class="text-crimson font-semibold">Full-Stack Developer</span> crafting digital experiences that matter
                </p>
                <div class="flex justify-center space-x-6 mb-12">
                    <a href="#contact" class="bg-crimson text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-crimson-dark transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-crimson/50">
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
                <h2 class="text-4xl font-bold text-black mb-4">About Me</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in">
                    <img src="https://via.placeholder.com/400x400" alt="Profile" class="rounded-lg shadow-2xl mx-auto">
                </div>
                <div class="animate-fade-in animation-delay-200">
                    <h3 class="text-3xl font-semibold text-black mb-6">Who I Am</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed text-lg">
                        I'm a dedicated full-stack developer with a passion for creating innovative solutions that make a difference.
                        With expertise in modern web technologies, I bring ideas to life through clean, efficient code and user-centered design.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                        When I'm not coding, you can find me exploring new technologies, contributing to open-source projects,
                        or enjoying outdoor activities. I believe in continuous learning and staying up-to-date with the latest trends in tech.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="text-crimson hover:text-crimson-dark transition duration-300 transform hover:scale-110">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4">Experience</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="relative">
                <!-- Timeline line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 bg-crimson h-full"></div>
                <div class="space-y-12">
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg animate-fade-in">
                                <h3 class="text-xl font-semibold text-black mb-2">Senior Full-Stack Developer</h3>
                                <p class="text-crimson font-medium mb-2">Tech Company Inc.</p>
                                <p class="text-gray-600">2022 - Present</p>
                                <p class="text-gray-600 mt-2">Led development of scalable web applications using Laravel and React.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10"></div>
                        <div class="w-1/2 pl-8"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8"></div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10"></div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-white p-6 rounded-lg shadow-lg animate-fade-in animation-delay-200">
                                <h3 class="text-xl font-semibold text-black mb-2">Full-Stack Developer</h3>
                                <p class="text-crimson font-medium mb-2">StartupXYZ</p>
                                <p class="text-gray-600">2020 - 2022</p>
                                <p class="text-gray-600 mt-2">Developed and maintained multiple client projects using modern web technologies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="bg-white p-6 rounded-lg shadow-lg animate-fade-in animation-delay-400">
                                <h3 class="text-xl font-semibold text-black mb-2">Junior Developer</h3>
                                <p class="text-crimson font-medium mb-2">Web Agency</p>
                                <p class="text-gray-600">2019 - 2020</p>
                                <p class="text-gray-600 mt-2">Started my journey in web development, learning PHP and JavaScript.</p>
                            </div>
                        </div>
                        <div class="w-8 h-8 bg-crimson rounded-full border-4 border-white shadow-lg z-10"></div>
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
                <h2 class="text-4xl font-bold text-black mb-4">Skills & Technologies</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-semibold text-black mb-2">Frontend Development</h3>
                    <p class="text-gray-600">HTML, CSS, JavaScript, React, Vue.js, Tailwind CSS</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-semibold text-black mb-2">Backend Development</h3>
                    <p class="text-gray-600">PHP, Laravel, Node.js, Python, MySQL, MongoDB</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-xl font-semibold text-black mb-2">Design & Tools</h3>
                    <p class="text-gray-600">Figma, Adobe XD, Git, Docker, AWS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4">Featured Projects</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(\App\Models\Project::all() as $project)
                <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                    <img src="{{ $project->image ?? 'https://via.placeholder.com/400x250' }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-2">{{ $project->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ $project->link }}" class="text-crimson hover:text-crimson-dark font-semibold">View Project →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4">What People Say</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg animate-fade-in">
                    <div class="text-crimson text-4xl mb-4">"</div>
                    <p class="text-gray-600 mb-6 italic">Amazing work! The website exceeded our expectations and brought great results for our business.</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-black">John Doe</h4>
                            <p class="text-gray-500 text-sm">CEO, Company Inc.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg animate-fade-in animation-delay-200">
                    <div class="text-crimson text-4xl mb-4">"</div>
                    <p class="text-gray-600 mb-6 italic">Professional, creative, and delivered on time. Highly recommend for any web development project.</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-black">Jane Smith</h4>
                            <p class="text-gray-500 text-sm">Founder, StartupXYZ</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-lg animate-fade-in animation-delay-400">
                    <div class="text-crimson text-4xl mb-4">"</div>
                    <p class="text-gray-600 mb-6 italic">Great communication and attention to detail. The final product was exactly what we envisioned.</p>
                    <div class="flex items-center">
                        <img src="https://via.placeholder.com/50x50" alt="Client" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-semibold text-black">Mike Johnson</h4>
                            <p class="text-gray-500 text-sm">Marketing Director, BrandCo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section id="blog" class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4">Latest Blog Posts</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach(\App\Models\Post::take(3)->get() as $post)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 animate-fade-in">
                    <img src="{{ $post->image ?? 'https://via.placeholder.com/400x250' }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-2">{{ $post->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($post->content, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
                            <a href="{{ route('posts.show', $post) }}" class="text-crimson hover:text-crimson-dark font-semibold">Read More →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="{{ route('posts.index') }}" class="bg-crimson text-white px-8 py-3 rounded-full font-semibold hover:bg-crimson-dark transition duration-300">
                    View All Posts
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-black mb-4">Get In Touch</h2>
                <div class="w-24 h-1 bg-crimson mx-auto"></div>
            </div>
            <div class="max-w-md mx-auto">
                <form class="space-y-6">
                    <div>
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-crimson">
                    </div>
                    <div>
                        <input type="email" placeholder="Your Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-crimson">
                    </div>
                    <div>
                        <textarea rows="4" placeholder="Your Message" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-crimson"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-crimson text-white py-3 rounded-lg font-semibold hover:bg-crimson-dark transition duration-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2024 Your Name. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
