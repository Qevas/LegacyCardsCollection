<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Mi Álbum</title>
    <link href="../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include 'partials/nav.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <!-- HEADER CON STATS -->
    <div class="mb-10">
        <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Colección</p>
        <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white mb-8">MI ÁLBUM</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Obtenidas</p>
                <p class="font-['Bebas_Neue'] text-3xl text-white" id="total-obtenidas">110</p>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Total Álbum</p>
                <p class="font-['Bebas_Neue'] text-3xl text-white">1,248</p>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Selecciones</p>
                <p class="font-['Bebas_Neue'] text-3xl text-white" id="total-equipos">8</p>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Progreso</p>
                <p class="font-['Bebas_Neue'] text-3xl text-white" id="progreso-pct">8.8%</p>
            </div>
        </div>

        <!-- BARRA DE PROGRESO -->
        <div class="w-full bg-[#242424] rounded-full h-1.5">
            <div id="progreso-bar" class="bg-white rounded-full h-1.5" style="width: 8.8%"></div>
        </div>
    </div>

    <!-- FILTROS + BÚSQUEDA -->
    <div class="flex flex-col sm:flex-row gap-4 mb-8">
        <div class="flex gap-2 flex-wrap">
            <button onclick="setFiltro('todos')" id="filtro-todos"
                class="filtro-btn text-sm font-medium px-4 py-2 rounded-lg bg-white text-[#080808]">
                Todos
            </button>
            <button onclick="setFiltro('iniciados')" id="filtro-iniciados"
                class="filtro-btn text-sm font-medium px-4 py-2 rounded-lg bg-[#1a1a1a] border border-white/10 text-gray-400">
                Con estampas
            </button>
            <button onclick="setFiltro('completos')" id="filtro-completos"
                class="filtro-btn text-sm font-medium px-4 py-2 rounded-lg bg-[#1a1a1a] border border-white/10 text-gray-400">
                Completos
            </button>
            <button onclick="setFiltro('vacios')" id="filtro-vacios"
                class="filtro-btn text-sm font-medium px-4 py-2 rounded-lg bg-[#1a1a1a] border border-white/10 text-gray-400">
                Sin estampas
            </button>
        </div>
        <input id="busqueda" type="text" placeholder="Buscar selección..."
            oninput="renderEquipos()"
            class="sm:ml-auto bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-2 px-4 text-sm focus:outline-none w-full sm:w-56">
    </div>

    <!-- GRID DE EQUIPOS -->
    <div id="equipos-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mb-8"></div>

    <!-- DETALLE DE EQUIPO -->
    <div id="detalle-equipo" class="hidden">
        <div class="flex items-center justify-between mb-6">
            <div id="detalle-header" class="flex items-center gap-4"></div>
            <button onclick="cerrarDetalle()"
                class="text-gray-400 text-sm border border-white/10 px-4 py-2 rounded-lg">
                Cerrar
            </button>
        </div>
        <div id="jugadores-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3"></div>
    </div>

</main>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../public/js/main.js"></script>
<script src="../public/js/album.js"></script>
</body>
</html>
