<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>AgroStock - Acceso al Sistema</title>

        <!-- Google Fonts: Outfit & Plus Jakarta Sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            body {
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
            .heading-font {
                font-family: 'Outfit', sans-serif;
            }
        </style>
    </head>
    <body class="h-full bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased transition-colors duration-300">
        <div class="min-h-screen grid lg:grid-cols-12">
            
            <!-- Left Panel: Graphic & Features (Hidden on mobile) -->
            <div class="hidden lg:flex lg:col-span-5 relative flex-col justify-between p-12 bg-gradient-to-tr from-slate-950 via-slate-900 to-emerald-950 text-white overflow-hidden border-r border-slate-800">
                <!-- Background decorative elements -->
                <div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-emerald-500/10 blur-3xl"></div>
                <div class="absolute -left-20 -bottom-20 w-80 h-80 rounded-full bg-teal-500/10 blur-3xl"></div>

                <!-- Brand / Logo -->
                <div class="relative flex items-center gap-3">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-500 flex items-center justify-center text-white shadow-lg shadow-emerald-500/20 group-hover:scale-105 transition-transform">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="heading-font text-xl font-bold tracking-tight bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">AgroStock</span>
                            <span class="block text-[8px] uppercase tracking-widest text-emerald-400 font-bold -mt-1">Insumos y Ventas</span>
                        </div>
                    </a>
                </div>

                <!-- Feature Display / Branding Content -->
                <div class="relative space-y-8 my-auto max-w-md">
                    <h2 class="heading-font text-4xl font-extrabold tracking-tight leading-tight">
                        La forma más fácil de controlar tu <span class="bg-gradient-to-r from-emerald-400 to-teal-400 bg-clip-text text-transparent">inventario de insumos</span>.
                    </h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Inicia sesión para registrar ventas, gestionar proveedores, auditar lotes de semillas, agroquímicos y monitorear tus reportes diarios de caja.
                    </p>

                    <!-- Bullet points -->
                    <div class="space-y-4 pt-4">
                        <div class="flex items-start gap-3.5">
                            <div class="w-5 h-5 rounded-full bg-emerald-500/25 border border-emerald-500/30 flex items-center justify-center text-emerald-400 shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-200">Alertas de Stock Crítico automáticas</h4>
                                <p class="text-[11px] text-slate-400">Recibe notificaciones inmediatas antes de quedarte sin stock.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <div class="w-5 h-5 rounded-full bg-emerald-500/25 border border-emerald-500/30 flex items-center justify-center text-emerald-400 shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-200">Punto de Venta (POS) Integrado</h4>
                                <p class="text-[11px] text-slate-400">Atiende a tus clientes y genera comprobantes en segundos.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5">
                            <div class="w-5 h-5 rounded-full bg-emerald-500/25 border border-emerald-500/30 flex items-center justify-center text-emerald-400 shrink-0 mt-0.5">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-200">Seguridad y Respaldo en la Nube</h4>
                                <p class="text-[11px] text-slate-400">Tus datos comerciales protegidos y siempre accesibles.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer info -->
                <div class="relative text-xs text-slate-500 dark:text-slate-400">
                    &copy; {{ date('Y') }} AgroStock. Gestión de insumos y punto de venta.
                </div>
            </div>

            <!-- Right Panel: Form area -->
            <div class="lg:col-span-7 flex flex-col justify-center items-center p-6 sm:p-12 md:p-16 bg-slate-50 dark:bg-slate-950">
                <div class="w-full max-w-[420px] space-y-8">
                    
                    <!-- Mobile logo display -->
                    <div class="flex flex-col items-center text-center lg:hidden">
                        <a href="/" class="inline-flex flex-col items-center gap-2">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-500 flex items-center justify-center text-white shadow-lg shadow-emerald-500/20">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                            </div>
                            <span class="heading-font text-2xl font-bold tracking-tight bg-gradient-to-r from-emerald-600 to-teal-500 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">AgroStock</span>
                        </a>
                    </div>

                    <!-- Inner Form Container (White Card with Soft Shadow) -->
                    <div class="bg-white dark:bg-slate-900 border border-slate-200/60 dark:border-slate-800/80 p-8 sm:p-10 rounded-3xl shadow-xl shadow-slate-100 dark:shadow-none">
                        {{ $slot }}
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
