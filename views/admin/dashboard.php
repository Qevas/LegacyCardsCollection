<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Panel Admin</title>
    <link href="../../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include '../partials/nav-admin.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <div class="mb-10">
        <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Administración</p>
        <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white">PANEL DE CONTROL</h1>
    </div>

    <!-- STATS -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Jugadores</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">0</p>
            <p class="text-xs text-gray-600 mt-1">Registrados</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Equipos</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">0</p>
            <p class="text-xs text-gray-600 mt-1">Selecciones</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Usuarios</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">0</p>
            <p class="text-xs text-gray-600 mt-1">Coleccionistas</p>
        </div>
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-2">Intercambios</p>
            <p class="font-['Bebas_Neue'] text-3xl text-white">0</p>
            <p class="text-xs text-gray-600 mt-1">Realizados</p>
        </div>
    </div>

    <!-- TABLA DE JUGADORES -->
    <div class="bg-[#111111] border border-white/10 rounded-2xl overflow-hidden">
        <div class="px-6 py-5 border-b border-white/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="font-['Bebas_Neue'] text-xl text-white">JUGADORES REGISTRADOS</h2>
                <p class="text-gray-500 text-xs mt-0.5">Gestiona los jugadores del álbum</p>
            </div>
            <div class="flex gap-3">
                <input type="text" placeholder="Buscar jugador..."
                    class="bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-2 px-4 text-sm focus:outline-none">
                <a href="alta.php"
                    class="bg-white text-[#080808] font-semibold py-2 px-4 rounded-lg text-sm whitespace-nowrap">
                    + Nuevo
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-white/10 text-gray-500 uppercase text-xs tracking-wider">
                        <th class="text-left px-6 py-4 font-medium">Jugador</th>
                        <th class="text-left px-6 py-4 font-medium hidden md:table-cell">Equipo</th>
                        <th class="text-left px-6 py-4 font-medium hidden sm:table-cell">Posición</th>
                        <th class="text-left px-6 py-4 font-medium hidden lg:table-cell">Número</th>
                        <th class="text-left px-6 py-4 font-medium">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fila de ejemplo -->
                    <tr class="border-b border-white/[5%]">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#242424] flex items-center justify-center text-xs">👤</div>
                                <span class="text-white font-medium">G. Ochoa</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-400 hidden md:table-cell">🇲🇽 México</td>
                        <td class="px-6 py-4 text-gray-400 hidden sm:table-cell">POR</td>
                        <td class="px-6 py-4 text-gray-400 hidden lg:table-cell">#13</td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <button onclick="showToast('Editar jugador', 'info')"
                                    class="text-xs border border-white/20 text-gray-300 px-3 py-1.5 rounded-lg">
                                    Editar
                                </button>
                                <button onclick="openModal('modal-eliminar-jugador')"
                                    class="text-xs border border-red-500/20 text-red-400 px-3 py-1.5 rounded-lg">
                                    Eliminar
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Mensaje de tabla vacía -->
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center text-gray-600">
                            <p class="text-sm">No hay jugadores registrados aún.</p>
                            <a href="alta.php" class="text-sm text-white mt-2 inline-block">Dar de alta jugadores →</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

<!-- MODAL: Confirmar eliminación -->
<div id="modal-eliminar-jugador" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-eliminar-jugador')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-red-500/20 rounded-2xl p-8 w-full max-w-sm text-center">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-2">¿ELIMINAR JUGADOR?</h3>
            <p class="text-gray-400 text-sm mb-6">Esta acción eliminará al jugador del álbum permanentemente.</p>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-eliminar-jugador')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('Jugador eliminado', 'info'); closeModal('modal-eliminar-jugador')"
                    class="flex-1 bg-red-500/20 text-red-400 border border-red-500/30 font-semibold py-2.5 rounded-lg text-sm">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
</div>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../../public/js/main.js"></script>
</body>
</html>
