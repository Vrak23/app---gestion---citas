<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (Request $request) {
    $stats = [
        'pacientes' => \App\Models\Paciente::count(),
        'medicos' => \App\Models\Medico::count(),
        'citas' => \App\Models\Cita::count(),
        'diagnosticos' => \App\Models\Diagnostico::count(),
        'tratamientos' => \App\Models\Tratamiento::count(),
        'medicamentos' => \App\Models\Medicamento::count(),
    ];
    $citas = \App\Models\Cita::with(['paciente', 'medico'])->orderByDesc('fecha_cita')->take(10)->get();
    return view('dashboard', compact('citas', 'stats'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('pacientes', PacienteController::class);
    Route::resource('medicos', MedicoController::class);
    Route::resource('citas', CitaController::class);
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('social.google.redirect');

Route::get('/auth/google/callback', function (Request $request) {
    return handleSocialLogin('google', $request);
});

Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
})->name('social.github.redirect');

Route::get('/auth/github/callback', function (Request $request) {
    return handleSocialLogin('github', $request);
});

Route::get('/export-citas', function() {
    $citas = \App\Models\Cita::with(['paciente', 'medico'])->get();
    $csvExporter = new \App\Services\CsvExporter();
    return $csvExporter->export($citas, 'citas_sanar_plus.csv');
})->name('citas.export');

function handleSocialLogin($provider, $request) {
    try {
        $socialUser = Socialite::driver($provider)->stateless()->user();
        $user = User::updateOrCreate(['email' => $socialUser->getEmail()], [
            'name' => $socialUser->getName() ?? $socialUser->getNickname(),
            'password' => bcrypt(Str::random(16)),
            'email_verified_at' => now(),
            'provider_id' => $socialUser->getId(),
            'provider_name' => $provider,
        ]);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    } catch (\Exception $e) {
        return redirect('/login')->with('error', 'Error con ' . $provider . ': ' . $e->getMessage());
    }
}

require __DIR__.'/auth.php';