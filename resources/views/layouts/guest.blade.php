<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SANAR + | Acceso al Sistema</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
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
                                'menta': '#B2F2BB',
                                'limon': '#FFF9C4',
                                'cielo': '#AEEEEE',
                                'coral': '#FFB3A7',
                            },
                            fontFamily: {
                                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                            },
                            animation: {
                                'float': 'float 6s ease-in-out infinite',
                            },
                            keyframes: {
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
    </head>
    <body class="font-sans text-slate-800 antialiased bg-slate-50 min-h-screen">
        <div class="min-h-screen flex flex-col items-center justify-center p-4">
            <div class="w-full max-w-5xl bg-white shadow-2xl rounded-[3rem] overflow-hidden border border-white">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
