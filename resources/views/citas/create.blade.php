<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-white leading-tight tracking-tight uppercase">
            Nueva Cita Médica
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto">
        <div class="bg-white rounded-[3rem] shadow-2xl overflow-hidden border border-slate-100">
            <div class="p-10 border-b border-slate-50 bg-slate-50/50">
                <h3 class="text-2xl font-black text-slate-800">Formulario de Agendamiento</h3>
                <p class="text-slate-500 font-bold">Completa los datos para registrar la nueva atención.</p>
            </div>

            <form method="POST" action="{{ route('citas.store') }}" class="p-10 space-y-8">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Paciente -->
                    <div>
                        <label for="paciente_id" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Paciente</label>
                        <select id="paciente_id" name="paciente_id" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold appearance-none">
                            <option value="">Selecciona un paciente</option>
                            @foreach($pacientes as $paciente)
                                <option value="{{ $paciente->id }}">{{ $paciente->nombre }} ({{ $paciente->dni }})</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('paciente_id')" class="mt-2" />
                    </div>

                    <!-- Médico -->
                    <div>
                        <label for="medico_id" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Médico Especialista</label>
                        <select id="medico_id" name="medico_id" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold appearance-none">
                            <option value="">Selecciona un especialista</option>
                            @foreach($medicos as $medico)
                                <option value="{{ $medico->id }}">{{ $medico->nombre }} - {{ $medico->especialidad }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('medico_id')" class="mt-2" />
                    </div>

                    <!-- Fecha y Hora -->
                    <div>
                        <label for="fecha_hora" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Fecha y Hora</label>
                        <input type="datetime-local" id="fecha_hora" name="fecha_hora" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold" />
                        <x-input-error :messages="$errors->get('fecha_hora')" class="mt-2" />
                    </div>

                    <!-- Tipo de Sala -->
                    <div>
                        <label for="sala_tipo" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Modalidad</label>
                        <select id="sala_tipo" name="sala_tipo" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold appearance-none">
                            <option value="Fisica">Presencial (Sala Física)</option>
                            <option value="Virtual">Telemedicina (Virtual)</option>
                        </select>
                    </div>

                    <!-- Nombre de Sala / Link -->
                    <div class="md:col-span-2">
                        <label for="sala_nombre" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Ubicación / Link de Reunión</label>
                        <input type="text" id="sala_nombre" name="sala_nombre" placeholder="Ej: Consultorio 204 o Link de Zoom" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold" />
                    </div>

                    <!-- Motivo -->
                    <div class="md:col-span-2">
                        <label for="motivo" class="block text-sm font-black text-slate-700 mb-3 uppercase tracking-wider">Motivo de Consulta</label>
                        <textarea id="motivo" name="motivo" rows="3" class="w-full bg-slate-50 border border-slate-200 rounded-2xl px-6 py-4 text-slate-800 focus:outline-none focus:ring-4 focus:ring-verde-agua/10 focus:border-verde-agua transition-all font-bold" placeholder="Describe brevemente el síntoma o motivo..."></textarea>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-50">
                    <a href="{{ route('dashboard') }}" class="px-8 py-4 bg-slate-100 text-slate-600 font-black rounded-2xl hover:bg-slate-200 transition-all">
                        Cancelar
                    </a>
                    <button type="submit" class="px-10 py-4 bg-verde-agua text-white font-black rounded-2xl shadow-xl shadow-verde-agua/30 hover:bg-[#3d9a91] transition-all transform hover:-translate-y-1 active:scale-95">
                        Agendar Cita ✨
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
