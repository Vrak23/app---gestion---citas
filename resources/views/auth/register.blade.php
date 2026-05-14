<x-guest-layout>
    <div class="flex flex-col lg:flex-row min-h-[700px]">
        <!-- Left Side: Branding -->
        <div class="hidden lg:flex lg:w-1/3 bg-slate-900 p-12 flex-col justify-between text-white relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-12">
                    <img src="{{ asset('imágenes/assets/Logo_Citas.jpeg') }}" alt="Logo" class="w-12 h-12 rounded-xl border-2 border-white/20">
                    <span class="text-3xl font-black italic tracking-tight">SANAR<span class="text-verde-agua">+</span></span>
                </div>
                <h2 class="text-4xl font-black leading-tight mb-6">Comienza tu viaje hacia una mejor salud.</h2>
                <p class="text-slate-400 font-bold text-lg leading-relaxed">Únete a la plataforma líder en gestión hospitalaria y toma el control de tu bienestar.</p>
            </div>
            
            <div class="relative z-10 text-sm font-black uppercase tracking-widest text-slate-500">
                &copy; 2024 SANAR + | Gestión Inteligente
            </div>

            <!-- Abstract circles -->
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-verde-agua opacity-10 rounded-full blur-3xl"></div>
        </div>

        <!-- Right Side: Form -->
        <div class="w-full lg:w-2/3 p-8 sm:p-16 flex flex-col justify-center bg-white">
            <div class="mb-10 text-center lg:text-left">
                <h2 class="text-4xl font-black text-slate-800 tracking-tight">Crea tu Cuenta</h2>
                <p class="text-slate-400 font-bold mt-2">Forma parte de la comunidad SANAR +</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                <!-- Name -->
                <div class="md:col-span-2">
                    <label for="name" class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-wider">Nombre Completo</label>
                    <input id="name" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Tu nombre y apellido" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="md:col-span-2">
                    <label for="email" class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-wider">Correo Electrónico</label>
                    <input id="email" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="ejemplo@sanar.app" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-wider">Contraseña</label>
                    <input id="password" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" 
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-wider">Confirmar</label>
                    <input id="password_confirmation" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" 
                                    placeholder="••••••••" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="md:col-span-2 pt-4">
                    <button type="submit" class="w-full bg-verde-agua hover:bg-[#3d9a91] text-white font-black text-lg py-5 rounded-2xl shadow-xl shadow-verde-agua/20 transition-all transform hover:-translate-y-1 active:scale-95">
                        Registrarme Ahora ✨
                    </button>
                </div>

                <!-- Social Login Separator -->
                <div class="md:col-span-2 relative py-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-100"></div>
                    </div>
                    <div class="relative flex justify-center text-xs font-black">
                        <span class="bg-white px-6 text-slate-400 uppercase tracking-[0.2em]">O regístrate con</span>
                    </div>
                </div>

                <!-- Social Buttons -->
                <div class="md:col-span-2 flex justify-center gap-6">
                    <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="flex items-center justify-center w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 hover:border-verde-agua hover:bg-white hover:shadow-2xl transition-all hover:-translate-y-2 group">
                        <svg class="w-7 h-7 group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.16v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.16C1.43 8.55 1 10.22 1 12s.43 3.45 1.16 4.93l3.68-2.84z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.16 7.07l3.68 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                    </a>
                    <a href="{{ route('social.redirect', ['provider' => 'github']) }}" class="flex items-center justify-center w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 hover:border-verde-agua hover:bg-white hover:shadow-2xl transition-all hover:-translate-y-2 group">
                        <svg class="w-7 h-7 text-slate-800 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="flex items-center justify-center w-16 h-16 rounded-2xl bg-slate-50 border border-slate-100 hover:border-verde-agua hover:bg-white hover:shadow-2xl transition-all hover:-translate-y-2 group">
                        <svg class="w-7 h-7 text-[#1877F2] group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>

                <div class="md:col-span-2 text-center pt-8">
                    <p class="text-sm text-slate-400 font-bold">
                        ¿Ya eres parte de SANAR +? 
                        <a href="{{ route('login') }}" class="text-verde-agua font-black hover:underline transition-colors ml-1">
                            Inicia sesión aquí
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
