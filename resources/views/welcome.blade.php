<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AgroStock - Sistema de Inventario y Ventas de Insumos</title>
        
        <!-- Google Fonts: Outfit & Inter -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
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
    <body class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased min-h-screen flex flex-col transition-colors duration-300">
        
        <!-- Navbar -->
        <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 dark:bg-slate-950/80 border-b border-slate-200/80 dark:border-slate-800/85 transition-all">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
                
                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-500 flex items-center justify-center text-white shadow-lg shadow-emerald-500/20">
                        <!-- Custom SVG Leaf/Box Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="heading-font text-2xl font-bold tracking-tight bg-gradient-to-r from-emerald-700 via-emerald-600 to-teal-500 dark:from-emerald-400 dark:to-teal-400 bg-clip-text text-transparent">AgroStock</span>
                        <span class="hidden sm:inline-block text-[10px] uppercase font-bold tracking-widest text-emerald-600 dark:text-emerald-400 block -mt-1">Insumos</span>
                    </div>
                </div>

                <!-- Navigation Links (Desktop) -->
                <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600 dark:text-slate-300">
                    <a href="#caracteristicas" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Características</a>
                    <a href="#inventario" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Insumos</a>
                    <a href="#analisis" class="hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">Ventas y Reportes</a>
                </nav>

                <!-- Auth Navigation -->
                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-sm font-bold bg-slate-900 text-white dark:bg-white dark:text-slate-950 hover:bg-emerald-600 dark:hover:bg-emerald-400 dark:hover:text-slate-950 hover:text-white transition-all shadow-md shadow-slate-950/10">
                                Ir al Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-bold text-slate-700 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors px-3 py-2">
                                Ingresar
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-sm font-bold text-white bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 transition-all shadow-lg shadow-emerald-500/20 active:scale-[0.98]">
                                    Crear Cuenta
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            
            <!-- Hero Section -->
            <section class="relative py-12 lg:py-24 overflow-hidden">
                <!-- Decorative Blurred Blobs -->
                <div class="absolute -left-20 top-20 w-80 h-80 rounded-full bg-emerald-300/20 dark:bg-emerald-950/20 blur-3xl -z-10"></div>
                <div class="absolute right-10 top-40 w-96 h-96 rounded-full bg-teal-300/20 dark:bg-teal-950/20 blur-3xl -z-10"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-12 items-center">
                        
                        <!-- Left Column (Text & Value Proposition) -->
                        <div class="lg:col-span-7 space-y-8 text-left">
                            
                            <span class="inline-flex items-center gap-2 rounded-full bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200/50 dark:border-emerald-800/50 text-xs font-bold text-emerald-800 dark:text-emerald-300 px-4 py-2 shadow-sm">
                                <span class="flex h-2 w-2 relative">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                                </span>
                                Gestión Inteligente de Agroinsumos v2.0
                            </span>

                            <h1 class="heading-font text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-[1.15] text-slate-900 dark:text-white">
                                Control absoluto de tu <span class="bg-gradient-to-r from-emerald-600 to-teal-500 bg-clip-text text-transparent">inventario agrícola</span> y ventas
                            </h1>

                            <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 leading-relaxed max-w-2xl">
                                Administra semillas, fertilizantes, agroquímicos y herramientas desde una sola plataforma. Optimiza tu punto de venta (POS), monitorea stock crítico y acelera tus ventas con total claridad.
                            </p>

                            <div class="flex flex-wrap items-center gap-4">
                                <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-bold text-white bg-gradient-to-r from-emerald-600 to-teal-500 hover:from-emerald-500 hover:to-teal-400 transition-all shadow-xl shadow-emerald-500/20 active:scale-[0.98] group">
                                    Comenzar Gratis
                                    <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                                </a>
                                <a href="#caracteristicas" class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-bold text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800/80 transition-all shadow-sm">
                                    Conocer Más
                                </a>
                            </div>

                            <!-- Trust Badging -->
                            <div class="pt-6 border-t border-slate-200 dark:border-slate-800/80 space-y-3">
                                <div class="flex items-center gap-2">
                                    <div class="flex -space-x-3">
                                        <div class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-950 bg-emerald-500 flex items-center justify-center text-white text-xs font-bold font-mono">U</div>
                                        <div class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-950 bg-teal-500 flex items-center justify-center text-white text-xs font-bold font-mono">M</div>
                                        <div class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-950 bg-amber-500 flex items-center justify-center text-white text-xs font-bold font-mono">S</div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400">
                                        Con la confianza de <span class="font-bold text-slate-800 dark:text-slate-200">+500 agro-distribuidores</span> e ingenieros agrónomos.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- Right Column (Stunning Mock Dashboard UI) -->
                        <div class="lg:col-span-5 relative">
                            
                            <!-- Main Decorative Shadow -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-emerald-500/10 to-teal-500/10 dark:from-emerald-500/20 dark:to-teal-500/20 rounded-3xl filter blur-2xl -z-10 transform scale-95"></div>
                            
                            <!-- Dashboard Card -->
                            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl shadow-2xl overflow-hidden transition-all">
                                
                                <!-- Card Header -->
                                <div class="bg-gradient-to-r from-slate-900 via-slate-850 to-emerald-950 p-6 text-white border-b border-slate-800">
                                    <div class="flex items-center justify-between mb-4">
                                        <div>
                                            <p class="text-[10px] uppercase tracking-widest text-emerald-400 font-bold">Resumen de Operaciones</p>
                                            <h3 class="text-xl font-bold heading-font mt-0.5">Control de Insumos</h3>
                                        </div>
                                        <span class="px-2.5 py-1 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-400 text-xs font-semibold flex items-center gap-1.5 animate-pulse">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> En Vivo
                                        </span>
                                    </div>
                                    
                                    <!-- Big Stat -->
                                    <div class="grid grid-cols-2 gap-4 pt-2">
                                        <div>
                                            <span class="text-xs text-slate-400 block">Ventas Hoy</span>
                                            <span class="text-2xl font-bold heading-font text-white">$4,850.50</span>
                                        </div>
                                        <div>
                                            <span class="text-xs text-slate-400 block">Registros del Mes</span>
                                            <span class="text-2xl font-bold heading-font text-teal-400">+24.8%</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="p-6 space-y-6">
                                    
                                    <!-- Stock Alerts Grid -->
                                    <div>
                                        <div class="flex justify-between items-center mb-3">
                                            <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500">Alertas de Stock Crítico</h4>
                                            <span class="text-[11px] text-red-500 font-semibold px-2 py-0.5 rounded bg-red-500/10 border border-red-500/20">3 insumos</span>
                                        </div>
                                        <div class="space-y-2.5">
                                            <!-- Alert 1 -->
                                            <div class="flex items-center justify-between p-3 rounded-xl bg-red-50/50 dark:bg-red-950/20 border border-red-100 dark:border-red-900/30">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-red-500/10 flex items-center justify-center text-red-500">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Fertilizante Urea Granulada</p>
                                                        <p class="text-[10px] text-red-500">Quedan: 5 sacos (Mín: 30)</p>
                                                    </div>
                                                </div>
                                                <span class="text-xs font-bold text-red-600 bg-red-100 dark:bg-red-900/40 px-2 py-0.5 rounded">Bajo</span>
                                            </div>
                                            <!-- Alert 2 -->
                                            <div class="flex items-center justify-between p-3 rounded-xl bg-amber-50/50 dark:bg-amber-950/10 border border-amber-100 dark:border-amber-900/20">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-lg bg-amber-500/10 flex items-center justify-center text-amber-500">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Insecticida Glifosato 48%</p>
                                                        <p class="text-[10px] text-amber-600 dark:text-amber-400">Quedan: 12 cajas (Mín: 15)</p>
                                                    </div>
                                                </div>
                                                <span class="text-xs font-bold text-amber-700 bg-amber-100 dark:bg-amber-900/30 px-2 py-0.5 rounded">Límite</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Recent Sales & Activities -->
                                    <div>
                                        <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500 mb-3">Últimas Transacciones</h4>
                                        <div class="divide-y divide-slate-100 dark:divide-slate-800">
                                            <!-- Transaction 1 -->
                                            <div class="py-3 flex items-center justify-between text-sm">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-950/40 text-emerald-600 flex items-center justify-center">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Semilla de Maíz Híbrido (x20 bol.)</p>
                                                        <p class="text-[10px] text-slate-400">Cliente: Cooperativa Agraria</p>
                                                    </div>
                                                </div>
                                                <span class="text-xs font-bold text-emerald-600 dark:text-emerald-400">+$1,450.00</span>
                                            </div>
                                            <!-- Transaction 2 -->
                                            <div class="py-3 flex items-center justify-between text-sm">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-full bg-red-100 dark:bg-red-950/40 text-red-600 flex items-center justify-center">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Compra de Fungicida Oxicloruro</p>
                                                        <p class="text-[10px] text-slate-400">Prov: AgroQuímicos del Centro</p>
                                                    </div>
                                                </div>
                                                <span class="text-xs font-bold text-red-500">-$620.00</span>
                                            </div>
                                            <!-- Transaction 3 -->
                                            <div class="py-3 flex items-center justify-between text-sm">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-8 h-8 rounded-full bg-emerald-100 dark:bg-emerald-950/40 text-emerald-600 flex items-center justify-center">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
                                                    </div>
                                                    <div>
                                                        <p class="text-xs font-bold text-slate-800 dark:text-slate-200">Fertilizante NPK Triple 15 (x15 sacos)</p>
                                                        <p class="text-[10px] text-slate-400">Cliente: Don Fructuoso S.A.</p>
                                                    </div>
                                                </div>
                                                <span class="text-xs font-bold text-emerald-600 dark:text-emerald-400">+$825.00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Features Grid Section -->
            <section id="caracteristicas" class="py-20 bg-slate-100/50 dark:bg-slate-900/40 border-t border-b border-slate-200/50 dark:border-slate-800/80 transition-colors">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span class="text-xs font-bold uppercase tracking-widest text-emerald-600 dark:text-emerald-400 block mb-2">Todo en un Solo Lugar</span>
                        <h2 class="heading-font text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Diseñado exclusivamente para el control de insumos agrícolas</h2>
                        <p class="mt-4 text-slate-600 dark:text-slate-400">Olvídate de las hojas de cálculo confusas. AgroStock te ofrece flujos especializados y sencillos de manejar para tu agronegocio.</p>
                    </div>

                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        
                        <!-- Feature 1 -->
                        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:border-emerald-500/30 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                            </div>
                            <h3 class="heading-font text-lg font-bold text-slate-900 dark:text-white mb-2">Control de Lotes y Fechas</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Rastrea la caducidad de tus agroquímicos y clasifica tus insumos por lotes específicos para garantizar la calidad y efectividad en el campo.</p>
                        </div>

                        <!-- Feature 2 -->
                        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:border-emerald-500/30 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <h3 class="heading-font text-lg font-bold text-slate-900 dark:text-white mb-2">Ventas y Facturación POS</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Genera tickets rápidos de venta de insumos, maneja descuentos para agricultores recurrentes y administra cuentas por cobrar desde un punto de venta ágil.</p>
                        </div>

                        <!-- Feature 3 -->
                        <div class="bg-white dark:bg-slate-900 p-8 rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm hover:shadow-md hover:border-emerald-500/30 transition-all group">
                            <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                            </div>
                            <h3 class="heading-font text-lg font-bold text-slate-900 dark:text-white mb-2">Alertas de Stock Inteligentes</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Establece límites mínimos para cada tipo de abono, herbicida o semilla. El sistema te avisará automáticamente cuándo sea el momento de reabastecer.</p>
                        </div>

                    </div>

                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-slate-950 border-t border-slate-200 dark:border-slate-900 py-12 transition-colors">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-sm text-slate-500 dark:text-slate-400">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-lg bg-emerald-600 flex items-center justify-center text-white font-bold text-xs shadow-md shadow-emerald-500/10">AS</div>
                    <span class="heading-font font-bold text-slate-800 dark:text-slate-200 text-base">AgroStock</span>
                </div>
                <p>&copy; {{ date('Y') }} AgroStock. Todos los derechos reservados.</p>
            </div>
        </footer>

    </body>
</html>
