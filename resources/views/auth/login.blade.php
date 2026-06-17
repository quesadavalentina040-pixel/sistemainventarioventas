<x-guest-layout>
    <!-- Logo/Brand on top of form -->
    <div class="mb-6">
        <h1 class="heading-font text-2xl font-bold text-slate-900 dark:text-white">Bienvenido de nuevo</h1>
        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Ingresa tus credenciales para acceder a AgroStock</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div class="space-y-1.5">
            <x-input-label for="email" :value="__('Correo Electrónico')" class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                    </svg>
                </div>
                <x-text-input id="email" class="block w-full pl-10 pr-4 py-3 border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50 focus:border-emerald-500 focus:ring-emerald-500 rounded-xl text-sm transition-all placeholder-slate-400" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="correo@ejemplo.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs text-red-500" />
        </div>

        <!-- Password -->
        <div class="space-y-1.5">
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Contraseña')" class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400" />
                @if (Route::has('password.request'))
                    <a class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 hover:underline transition-all" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <x-text-input id="password" class="block w-full pl-10 pr-4 py-3 border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50 focus:border-emerald-500 focus:ring-emerald-500 rounded-xl text-sm transition-all placeholder-slate-400"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs text-red-500" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-300 dark:border-slate-800 text-emerald-600 focus:ring-emerald-500 bg-slate-50 dark:bg-slate-900" name="remember">
                <span class="ms-2 text-xs text-slate-600 dark:text-slate-400 select-none">Recordar sesión</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-xl font-bold text-sm text-white bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all shadow-lg shadow-emerald-500/15 active:scale-[0.98]">
                Iniciar Sesión
            </button>
        </div>

        <!-- Create Account Prompt -->
        <div class="text-center pt-4 border-t border-slate-100 dark:border-slate-800/80">
            <p class="text-xs text-slate-500 dark:text-slate-400">
                ¿No tienes cuenta? 
                <a href="{{ route('register') }}" class="font-bold text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 transition-all">
                    Registrar agronegocio
                </a>
            </p>
        </div>

    </form>
</x-guest-layout>
