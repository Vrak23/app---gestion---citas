<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-extrabold text-3xl text-white leading-tight tracking-tight">
                HISTORIAL DE CITAS
            </h2>
            <a href="{{ route('dashboard') }}" class="text-white/80 hover:text-white flex items-center gap-2 text-sm font-bold bg-white/10 px-4 py-2 rounded-xl backdrop-blur-sm border border-white/10 transition-all">
                ← Volver al Dashboard
            </a>
        </div>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-white overflow-hidden">
            <div class="p-8 border-b border-slate-50 flex items-center justify-between bg-slate-50/50">
                <div>
                    <h3 class="text-2xl font-black text-slate-800">Registros Totales</h3>
                    <p class="text-slate-500 font-bold text-sm">Listado completo de atenciones programadas</p>
                </div>
                <a href="{{ route('citas.create') }}" class="bg-verde-agua text-white font-black px-8 py-4 rounded-2xl hover:bg-[#3d9a91] transition-all shadow-lg shadow-verde-agua/20 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Nueva Cita
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-slate-400 uppercase text-[10px] font-black tracking-[0.2em] bg-slate-50/30">
                            <th class="px-8 py-5">ID</th>
                            <th class="px-8 py-5">Paciente</th>
                            <th class="px-8 py-5">Médico / Especialidad</th>
                            <th class="px-8 py-5">Fecha y Hora</th>
                            <th class="px-8 py-5">Estado</th>
                            <th class="px-8 py-5 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @foreach($citas as $cita)
                        <tr class="hover:bg-slate-50/80 transition-colors group">
                            <td class="px-8 py-6 font-bold text-slate-400">#{{ $cita->id }}</td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <span class="font-black text-slate-800 text-base">{{ $cita->paciente->nombre }}</span>
                                    <span class="text-[10px] text-slate-400 font-black tracking-widest uppercase">DNI: {{ $cita->paciente->dni }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <span class="font-bold text-slate-700">{{ $cita->medico->nombre }}</span>
                                    <span class="text-[10px] text-verde-agua font-black uppercase tracking-widest">{{ $cita->medico->especialidad }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 whitespace-nowrap">
                                <div class="flex flex-col">
                                    <span class="font-bold text-slate-800">{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d/m/Y') }}</span>
                                    <span class="text-[10px] text-slate-400 font-black uppercase tracking-tighter">{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('H:i A') }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-flex items-center gap-2 text-emerald-600 font-black text-xs uppercase tracking-wider bg-emerald-50 px-4 py-2 rounded-xl">
                                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                                    {{ $cita->estado }}
                                </span>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button class="p-2 text-slate-400 hover:text-blue-600 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
                                    <form action="{{ route('citas.destroy', $cita) }}" method="POST" onsubmit="return confirm('¿Estás seguro de cancelar esta cita?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-slate-400 hover:text-rose-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-8 bg-slate-50/50">
                {{ $citas->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
