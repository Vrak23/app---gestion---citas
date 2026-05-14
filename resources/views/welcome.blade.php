<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SANAR + | Sistema de Gestión Hospitalaria</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (via Vite or CDN) -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            'verde-agua': '#4DB6AC',
                            'azul-fisico': '#2A6F97',
                            'cian-virtual': '#00B4D8',
                            'menta': '#B2F2BB',
                            'limon': '#FFF9C4',
                            'cielo': '#AEEEEE',
                            'coral': '#FFB3A7',
                        },
                        fontFamily: {
                            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        },
                        animation: {
                            'blob': 'blob 7s infinite',
                            'float': 'float 6s ease-in-out infinite',
                        },
                        keyframes: {
                            blob: {
                                '0%': { transform: 'translate(0px, 0px) scale(1)' },
                                '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                                '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                                '100%': { transform: 'translate(0px, 0px) scale(1)' },
                            },
                            float: {
                                '0%, 100%': { transform: 'translateY(0)' },
                                '50%': { transform: 'translateY(-20px)' },
                            }
                        }
                    }
                }
            }
        </script>
    @endif

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .glass-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .text-gradient {
            background: linear-gradient(135deg, #4DB6AC 0%, #2A6F97 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden selection:bg-verde-agua selection:text-white">
    
    <!-- Background Decor (Blobs) -->
    <div class="absolute top-0 -left-4 w-96 h-96 bg-menta/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-96 h-96 bg-cielo/30 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-96 h-96 bg-verde-agua/10 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-header border-b border-white/50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img src="{{ asset('imágenes/assets/Logo_Citas.jpeg') }}" alt="Logo SANAR +" class="h-12 w-auto rounded-xl shadow-md border-2 border-white">
                    <span class="text-2xl font-black text-slate-800 tracking-tight">SANAR<span class="text-verde-agua">+</span></span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-8">
                        <a href="#hero" class="text-slate-600 hover:text-verde-agua transition-colors text-base font-bold">Inicio</a>
                        <a href="#servicios" class="text-slate-600 hover:text-verde-agua transition-colors text-base font-bold">Especialidades</a>
                        <a href="#contacto" class="text-slate-600 hover:text-verde-agua transition-colors text-base font-bold">Soporte</a>
                        
                        <div class="h-6 w-px bg-slate-200 mx-2"></div>

                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-black text-white bg-verde-agua hover:bg-[#3d9a91] px-6 py-3 rounded-2xl transition-all shadow-lg shadow-verde-agua/20">
                                    Panel de Gestión
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-black text-slate-700 hover:text-verde-agua transition-colors">Iniciar Sesión</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm font-black text-white bg-verde-agua hover:bg-[#3d9a91] px-6 py-3 rounded-2xl transition-all shadow-lg shadow-verde-agua/20">
                                        Registrarme
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="hero" class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 bg-verde-agua/10 text-verde-agua px-4 py-2 rounded-full text-sm font-black mb-6 border border-verde-agua/20">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-verde-agua opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-verde-agua"></span>
                        </span>
                        SISTEMA DE GESTIÓN HOSPITALARIA 2024
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-black text-slate-800 leading-[1.1] tracking-tight mb-8">
                        Tu salud, nuestra <br> 
                        <span class="text-gradient">máxima prioridad.</span>
                    </h1>
                    <p class="text-lg lg:text-xl text-slate-500 font-semibold mb-10 max-w-2xl leading-relaxed">
                        Gestiona tus citas médicas, accede a tu historial clínico y mantente en contacto con tus especialistas de confianza en un solo lugar.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('register') }}" class="w-full sm:w-auto px-10 py-5 bg-verde-agua hover:bg-[#3d9a91] text-white font-black rounded-[2rem] shadow-2xl shadow-verde-agua/30 transition-all transform hover:-translate-y-1 text-lg flex items-center justify-center gap-3">
                            Agendar Cita Ahora
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#servicios" class="w-full sm:w-auto px-10 py-5 bg-white text-slate-700 font-black rounded-[2rem] shadow-xl hover:bg-slate-50 transition-all text-lg border border-slate-100">
                            Ver Especialidades
                        </a>
                    </div>
                </div>

                <!-- 3D Image -->
                <div class="flex-1 relative">
                    <div class="relative z-10 animate-float">
                        <img src="{{ asset('imágenes/assets/medical_login.png') }}" alt="SANAR + 3D Illustration" class="w-full max-w-xl mx-auto drop-shadow-[0_35px_35px_rgba(77,182,172,0.3)]">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-10 -right-10 w-32 h-32 bg-coral/20 rounded-full blur-2xl animate-pulse"></div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 bg-cielo/30 rounded-full blur-2xl"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="servicios" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl lg:text-5xl font-black text-slate-800 mb-6">Excelencia en <span class="text-verde-agua">Especialidades</span></h2>
                <p class="text-slate-500 font-bold max-w-2xl mx-auto text-lg leading-relaxed">Contamos con un equipo de profesionales dedicados a brindarte la mejor atención médica personalizada.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $services = [
                        ['title' => 'Gestión de Citas', 'desc' => 'Agenda citas con tus especialistas favoritos en segundos, sin filas ni esperas.', 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'color' => 'bg-verde-agua/10 text-verde-agua'],
                        ['title' => 'Expediente Digital', 'desc' => 'Acceso seguro a tus diagnósticos, recetas y resultados de laboratorio desde cualquier lugar.', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'color' => 'bg-azul-fisico/10 text-azul-fisico'],
                        ['title' => 'Telemedicina', 'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z', 'desc' => 'Consultas virtuales de alta calidad para cuando no puedes asistir físicamente.', 'color' => 'bg-cian-virtual/10 text-cian-virtual'],
                    ];
                @endphp

                @foreach($services as $service)
                <div class="p-10 rounded-[3rem] bg-slate-50 border border-slate-100 hover:border-verde-agua hover:bg-white hover:shadow-2xl hover:shadow-verde-agua/10 transition-all group">
                    <div class="{{ $service['color'] }} w-16 h-16 rounded-[1.5rem] flex items-center justify-center mb-8 group-hover:scale-110 transition-transform shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-800 mb-4">{{ $service['title'] }}</h3>
                    <p class="text-slate-500 font-bold leading-relaxed">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 pt-20 pb-10 text-white rounded-t-[4rem]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16 border-b border-slate-800 pb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 mb-8">
                        <img src="{{ asset('imágenes/assets/Logo_Citas.jpeg') }}" alt="Logo SANAR +" class="h-12 w-auto rounded-xl">
                        <span class="text-3xl font-black tracking-tight italic">SANAR<span class="text-verde-agua">+</span></span>
                    </div>
                    <p class="text-slate-400 font-bold text-lg max-w-md leading-relaxed">Innovando en la gestión de salud para brindar tranquilidad y bienestar a cada paciente.</p>
                </div>
                <div>
                    <h4 class="text-lg font-black mb-6 uppercase tracking-widest text-verde-agua">Enlaces</h4>
                    <ul class="space-y-4 text-slate-400 font-bold">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre Nosotros</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Especialistas</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Términos Legales</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-black mb-6 uppercase tracking-widest text-verde-agua">Contacto</h4>
                    <ul class="space-y-4 text-slate-400 font-bold">
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-verde-agua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            +1 800 SANAR-PLUS
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-verde-agua" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            info@sanarplus.app
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center text-slate-500 font-black text-sm tracking-widest uppercase">
                &copy; 2024 SANAR + | Todos los derechos reservados
            </div>
        </div>
    </footer>
</body>
</html>