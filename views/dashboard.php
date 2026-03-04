<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Inicio</title>
    <link href="../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include 'partials/nav.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-12">

    <!-- BIENVENIDA -->
    <div class="mb-12">
        <p class="text-gray-500 text-sm uppercase tracking-widest mb-1">Bienvenida de vuelta</p>
        <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white">ELIZABETH CUEVAS</h1>
    </div>

    <!-- PROGRESO PRINCIPAL -->
    <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
            <div>
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Progreso del álbum</p>
                <p class="font-['Bebas_Neue'] text-6xl text-white">8.8%</p>
                <p class="text-gray-400 text-sm mt-1">110 de 1,248 estampas</p>
            </div>
            <div class="flex-1 max-w-sm">
                <div class="w-full bg-[#242424] rounded-full h-2 mb-3">
                    <div class="bg-white rounded-full h-2" style="width: 8.8%"></div>
                </div>
                <div class="flex justify-between text-xs text-gray-500">
                    <span>0</span>
                    <span>1,248 estampas</span>
                </div>
            </div>
        </div>
    </div>

    <!-- STATS GRID -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        <div class="bg-[#111111] border border-white/10 rounded-xl p-6">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-3">Estampas</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white" id="stat-estampas">110</p>
            <p class="text-xs text-gray-600 mt-1">Coleccionadas</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-6">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-3">Selecciones</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">8</p>
            <p class="text-xs text-gray-600 mt-1">Con estampas</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-6">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-3">Intercambios</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">12</p>
            <p class="text-xs text-gray-600 mt-1">Completados</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-6">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-3">Ranking</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">#24</p>
            <p class="text-xs text-gray-600 mt-1">Global</p>
        </div>
    </div>

    <!-- ACCESOS RÁPIDOS + NOTIFICACIONES -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- ACCESOS -->
        <div>
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">Accesos rápidos</p>
            <div class="flex flex-col gap-3">
                <a href="album.php" class="bg-[#111111] border border-white/10 rounded-xl p-5 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center font-['Bebas_Neue'] text-white">A</div>
                    <div>
                        <p class="text-white font-medium text-sm">Mi Álbum</p>
                        <p class="text-gray-500 text-xs">8 selecciones iniciadas · 110 estampas</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-600 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="tienda.php" class="bg-[#111111] border border-white/10 rounded-xl p-5 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center font-['Bebas_Neue'] text-white">T</div>
                    <div>
                        <p class="text-white font-medium text-sm">Tienda</p>
                        <p class="text-gray-500 text-xs">Abre sobres y consigue nuevas estampas</p>
                    </div>
                    <svg class="w-4 h-4 text-gray-600 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="mercado.php" class="bg-[#111111] border border-white/10 rounded-xl p-5 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-lg bg-white/5 flex items-center justify-center font-['Bebas_Neue'] text-white">M</div>
                    <div>
                        <p class="text-white font-medium text-sm">Mercado</p>
                        <p class="text-gray-500 text-xs">Intercambia repetidas con otros usuarios</p>
                    </div>
                    <div class="ml-auto flex items-center gap-2">
                        <span class="text-xs bg-white/10 text-white px-2 py-0.5 rounded-full">3 ofertas</span>
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>

        <!-- NOTIFICACIONES -->
        <div>
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-4">Actividad reciente</p>
            <div class="bg-[#111111] border border-white/10 rounded-xl overflow-hidden">
                <div class="divide-y divide-white/[5%]">
                    <div class="px-5 py-4 flex items-start gap-3">
                        <div class="w-2 h-2 rounded-full bg-green-400 mt-1.5 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-white">Recibiste una oferta de cambio</p>
                            <p class="text-xs text-gray-500 mt-0.5">Carlos M. quiere intercambiar a Messi · hace 2h</p>
                        </div>
                    </div>
                    <div class="px-5 py-4 flex items-start gap-3">
                        <div class="w-2 h-2 rounded-full bg-white/30 mt-1.5 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-white">Abriste un sobre</p>
                            <p class="text-xs text-gray-500 mt-0.5">Obtuviste 3 estampas nuevas · ayer</p>
                        </div>
                    </div>
                    <div class="px-5 py-4 flex items-start gap-3">
                        <div class="w-2 h-2 rounded-full bg-white/30 mt-1.5 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-white">Intercambio completado</p>
                            <p class="text-xs text-gray-500 mt-0.5">Canjeaste Lozano por Mbappé · hace 3 días</p>
                        </div>
                    </div>
                    <div class="px-5 py-4 flex items-start gap-3">
                        <div class="w-2 h-2 rounded-full bg-white/30 mt-1.5 flex-shrink-0"></div>
                        <div>
                            <p class="text-sm text-white">Abriste un sobre</p>
                            <p class="text-xs text-gray-500 mt-0.5">Obtuviste 2 estampas nuevas y 3 repetidas · hace 4 días</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../public/js/main.js"></script>
</body>
</html>
