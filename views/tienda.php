<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Tienda</title>
    <link href="../public/output.css" rel="stylesheet">
    <style>
        .card-flip { perspective: 1000px; }
        .card-inner { position: relative; width: 100%; height: 100%; transform-style: preserve-3d; }
        .card-inner.flipped { transform: rotateY(180deg); }
        .card-front, .card-back { position: absolute; inset: 0; backface-visibility: hidden; border-radius: 0.75rem; }
        .card-back { transform: rotateY(180deg); }
    </style>
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include 'partials/nav.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <div class="mb-10">
        <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Colección</p>
        <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white">TIENDA DE SOBRES</h1>
    </div>

    <!-- STATS -->
    <div class="grid grid-cols-3 gap-4 mb-12">
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5 text-center">
            <p class="font-['Bebas_Neue'] text-3xl text-white" id="sobres-abiertos">0</p>
            <p class="text-xs uppercase tracking-widest text-gray-500 mt-1">Sobres abiertos</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5 text-center">
            <p class="font-['Bebas_Neue'] text-3xl text-white">5</p>
            <p class="text-xs uppercase tracking-widest text-gray-500 mt-1">Estampas / sobre</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5 text-center">
            <p class="font-['Bebas_Neue'] text-3xl text-white">48</p>
            <p class="text-xs uppercase tracking-widest text-gray-500 mt-1">Selecciones</p>
        </div>
    </div>

    <!-- SOBRE + BOTÓN -->
    <div class="flex flex-col items-center gap-8 mb-12">
        <!-- Sobre visual -->
        <div id="sobre" onclick="abrirSobre()"
            class="w-44 h-64 bg-[#1a1a1a] border-2 border-white/20 rounded-2xl flex flex-col items-center justify-center gap-3 cursor-pointer select-none">
            <p class="font-['Bebas_Neue'] text-lg tracking-widest text-gray-400">MUNDIAL 2026</p>
            <div class="w-12 h-12 rounded-full bg-white/5 border border-white/20 flex items-center justify-center">
                <span class="font-['Bebas_Neue'] text-2xl text-white">5</span>
            </div>
            <p class="text-xs text-gray-600 tracking-widest uppercase">Legacy Cards</p>
        </div>
        <button id="btn-abrir" onclick="abrirSobre()"
            class="bg-white text-[#080808] font-semibold py-3 px-10 rounded-lg disabled:opacity-40 disabled:cursor-not-allowed">
            Abrir Sobre
        </button>
    </div>

    <!-- RESULTADO: CARTAS -->
    <div id="resultado" class="hidden mb-16">
        <p class="text-xs uppercase tracking-widest text-gray-500 text-center mb-6">¡Estas son tus estampas!</p>
        <div id="cartas-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 mb-8"></div>
        <div class="text-center">
            <button onclick="guardarEstampas()"
                class="bg-white text-[#080808] font-semibold py-3 px-8 rounded-lg">
                Agregar al Álbum
            </button>
        </div>
    </div>

    <!-- PROPUESTA DE APIs -->
    <div class="bg-[#111111] border border-white/10 rounded-2xl p-8">
        <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Propuesta técnica</p>
        <h2 class="font-['Bebas_Neue'] text-2xl text-white mb-6">APIS PROPUESTAS</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-white/10 text-gray-500 uppercase text-xs tracking-wider">
                        <th class="text-left pb-3 font-medium">Método</th>
                        <th class="text-left pb-3 font-medium">Ruta</th>
                        <th class="text-left pb-3 font-medium hidden md:table-cell">Descripción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/[5%]">
                    <tr><td class="py-3"><span class="bg-green-500/10 text-green-400 text-xs font-bold px-2 py-0.5 rounded">POST</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/sobres/abrir</td><td class="py-3 text-gray-500 hidden md:table-cell">Genera 5 estampas aleatorias</td></tr>
                    <tr><td class="py-3"><span class="bg-blue-500/10 text-blue-400 text-xs font-bold px-2 py-0.5 rounded">GET</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/coleccion/{id}</td><td class="py-3 text-gray-500 hidden md:table-cell">Estampas del usuario</td></tr>
                    <tr><td class="py-3"><span class="bg-blue-500/10 text-blue-400 text-xs font-bold px-2 py-0.5 rounded">GET</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/equipos</td><td class="py-3 text-gray-500 hidden md:table-cell">Lista de selecciones con progreso</td></tr>
                    <tr><td class="py-3"><span class="bg-blue-500/10 text-blue-400 text-xs font-bold px-2 py-0.5 rounded">GET</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/jugadores/{equipo_id}</td><td class="py-3 text-gray-500 hidden md:table-cell">Jugadores obtenidos/faltantes</td></tr>
                    <tr><td class="py-3"><span class="bg-green-500/10 text-green-400 text-xs font-bold px-2 py-0.5 rounded">POST</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/mercado/oferta</td><td class="py-3 text-gray-500 hidden md:table-cell">Publica oferta de intercambio</td></tr>
                    <tr><td class="py-3"><span class="bg-green-500/10 text-green-400 text-xs font-bold px-2 py-0.5 rounded">POST</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/mercado/intercambio</td><td class="py-3 text-gray-500 hidden md:table-cell">Ejecuta transacción de intercambio</td></tr>
                    <tr><td class="py-3"><span class="bg-green-500/10 text-green-400 text-xs font-bold px-2 py-0.5 rounded">POST</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/auth/login</td><td class="py-3 text-gray-500 hidden md:table-cell">Autenticación con hash</td></tr>
                    <tr><td class="py-3"><span class="bg-green-500/10 text-green-400 text-xs font-bold px-2 py-0.5 rounded">POST</span></td><td class="py-3 text-gray-300 font-mono text-xs">/api/auth/register</td><td class="py-3 text-gray-500 hidden md:table-cell">Registro con contraseña hasheada</td></tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../public/js/main.js"></script>
<script src="../public/js/tienda.js"></script>
</body>
</html>
