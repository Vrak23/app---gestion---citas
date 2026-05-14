<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-extrabold text-3xl text-white leading-tight tracking-tight">
                SISTEMA DE GESTIÓN SANAR +
            </h2>
            <div class="flex items-center gap-2 text-white/80 bg-white/10 px-4 py-2 rounded-xl backdrop-blur-sm border border-white/10">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <span class="text-xs font-bold uppercase tracking-widest">API Sincronizada</span>
            </div>
        </div>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <!-- Quick Access Cards -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-12">
            @php
                $cardItems = [
                    ['title' => 'Pacientes', 'count' => $stats['pacientes'], 'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z', 'color' => 'bg-emerald-50 text-emerald-600'],
                    ['title' => 'Médicos', 'count' => $stats['medicos'], 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'color' => 'bg-blue-50 text-blue-600'],
                    ['title' => 'Citas', 'count' => $stats['citas'], 'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'color' => 'bg-indigo-50 text-indigo-600'],
                    ['title' => 'Diagnósticos', 'count' => $stats['diagnosticos'], 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2', 'color' => 'bg-purple-50 text-purple-600'],
                    ['title' => 'Tratamientos', 'count' => $stats['tratamientos'], 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'color' => 'bg-rose-50 text-rose-600'],
                    ['title' => 'Medicamentos', 'count' => $stats['medicamentos'], 'icon' => 'M19.423 15.423a2 2 0 010 2.828l-.707.707a2 2 0 01-2.828 0L8.71 11.78a2 2 0 010-2.828l.707-.707a2 2 0 012.828 0l7.178 7.178zM15.547 5.405A2 2 0 0015 5H5a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-.453-1.595', 'color' => 'bg-amber-50 text-amber-600'],
                ];
            @endphp

            @foreach($cardItems as $card)
            <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 hover:border-verde-agua transition-all transform hover:-translate-y-2 cursor-pointer group text-center">
                <div class="{{ $card['color'] }} w-14 h-14 rounded-2xl flex items-center justify-center mb-4 mx-auto group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}"></path>
                    </svg>
                </div>
                <h3 class="text-slate-800 font-bold text-lg leading-none mb-1">{{ $card['title'] }}</h3>
                <p class="text-2xl font-black text-slate-900 mb-1">{{ $card['count'] }}</p>
                <p class="text-slate-400 text-[10px] font-black uppercase tracking-widest">Total Registrados</p>
            </div>
            @endforeach
        </div>

        <!-- Appointments Table -->
        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-white overflow-hidden">
            <div class="p-8 border-b border-slate-50 flex items-center justify-between bg-slate-50/50">
                <div class="flex flex-col md:flex-row md:items-center gap-4">
                    <div>
                        <h3 class="text-2xl font-black text-slate-800">Próximas Citas</h3>
                        <p class="text-slate-500 font-bold text-sm">Monitoreo en tiempo real de pacientes</p>
                    </div>
                    <!-- Search Bar -->
                    <form action="{{ route('dashboard') }}" method="GET" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar por paciente o DNI..." class="bg-white border border-slate-200 rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-verde-agua focus:border-verde-agua transition-all w-64 font-bold">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                        </span>
                    </form>
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('citas.export') }}" class="bg-slate-100 text-slate-600 font-black px-6 py-3 rounded-2xl hover:bg-slate-200 transition-all flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                        Exportar CSV
                    </a>
                    <a href="{{ route('citas.create') }}" class="bg-verde-agua/10 text-verde-agua font-black px-6 py-3 rounded-2xl hover:bg-verde-agua hover:text-white transition-all">
                        + Nueva Cita
                    </a>
                </div>
            </div>
            <div class="overflow-x-auto scrollbar-thin scrollbar-thumb-verde-agua scrollbar-track-slate-100">
                <table class="w-full text-left border-collapse min-w-[1100px]">
                    <thead>
                        <tr class="text-slate-400 uppercase text-[10px] font-black tracking-[0.2em] bg-slate-50/30">
                            <th class="px-8 py-5">Paciente</th>
                            <th class="px-8 py-5">Fecha / Hora</th>
                            <th class="px-8 py-5">Motivo</th>
                            <th class="px-8 py-5">Médico</th>
                            <th class="px-8 py-5">Sala</th>
                            <th class="px-8 py-5 text-right">Estado</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @foreach($citas as $cita)
                        <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <span class="font-black text-slate-800 text-base">{{ $cita->paciente->nombre }} {{ $cita->paciente->apellido }}</span>
                                    <span class="text-[10px] text-slate-400 font-black tracking-widest uppercase">ID: {{ $cita->paciente->dni }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <span class="font-bold text-slate-800">{{ \Carbon\Carbon::parse($cita->fecha_cita)->format('d M, Y') }}</span>
                                    <span class="text-[10px] text-slate-400 font-black uppercase tracking-tighter">{{ \Carbon\Carbon::parse($cita->hora_cita)->format('h:i A') }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="text-xs font-bold text-slate-600 bg-slate-100 px-3 py-1.5 rounded-xl inline-block">
                                    {{ $cita->motivo }}
                                </span>
                            </td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-xl bg-verde-agua/10 flex items-center justify-center text-verde-agua font-black text-xs shadow-sm shadow-verde-agua/5">
                                        {{ strtoupper(substr($cita->medico->nombre, 0, 1) . substr($cita->medico->apellido, 0, 1)) }}
                                    </div>
                                    <span class="font-bold text-slate-700 text-sm">{{ $cita->medico->nombre }} {{ $cita->medico->apellido }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <span class="bg-azul-fisico text-white px-5 py-2 rounded-xl text-[10px] font-black shadow-lg shadow-azul-fisico/20 uppercase tracking-[0.1em] inline-block">
                                    {{ $cita->sala }}
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <span class="inline-flex items-center gap-2 text-emerald-600 font-black text-xs uppercase tracking-wider bg-emerald-50 px-4 py-2 rounded-xl">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                    {{ $cita->estado }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="p-6 bg-slate-50/30 text-center border-t border-slate-50">
                <a href="#" class="text-verde-agua font-black text-xs uppercase tracking-[0.2em] hover:underline">Ver todos los registros de citas →</a>
            </div>
        </div>
    </div>
</x-app-layout>
