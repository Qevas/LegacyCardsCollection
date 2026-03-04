<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Mi Perfil</title>
    <link href="../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include 'partials/nav.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <!-- CABECERA DE USUARIO -->
    <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 mb-8">
        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
            <div class="w-20 h-20 rounded-full bg-[#242424] border-2 border-white/20 flex items-center justify-center text-2xl font-bold flex-shrink-0">E</div>
            <div class="flex-1 text-center sm:text-left">
                <h1 class="font-['Bebas_Neue'] text-3xl text-white">ELIZABETH CUEVAS</h1>
                <p class="text-gray-400 text-sm">elizabeth.cuevas@uanl.edu.mx</p>
                <p class="text-gray-600 text-xs mt-1">Miembro desde enero 2026</p>
                <span class="inline-block mt-2 text-xs bg-white/10 text-gray-300 px-3 py-1 rounded-full uppercase tracking-wider">Coleccionista</span>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center">
                <div>
                    <p class="font-['Bebas_Neue'] text-2xl text-white">110</p>
                    <p class="text-xs text-gray-500">Estampas</p>
                </div>
                <div>
                    <p class="font-['Bebas_Neue'] text-2xl text-white">8</p>
                    <p class="text-xs text-gray-500">Equipos</p>
                </div>
                <div>
                    <p class="font-['Bebas_Neue'] text-2xl text-white">12</p>
                    <p class="text-xs text-gray-500">Cambios</p>
                </div>
                <div>
                    <p class="font-['Bebas_Neue'] text-2xl text-white">#24</p>
                    <p class="text-xs text-gray-500">Ranking</p>
                </div>
            </div>
        </div>
        <div class="mt-6">
            <div class="flex justify-between text-xs text-gray-500 mb-1.5">
                <span>Progreso del álbum</span>
                <span>8.8% (110 / 1,248)</span>
            </div>
            <div class="w-full bg-[#242424] rounded-full h-1.5">
                <div class="bg-white rounded-full h-1.5" style="width: 8.8%"></div>
            </div>
        </div>
    </div>

    <!-- TABS -->
    <div class="flex border-b border-white/10 mb-8 overflow-x-auto">
        <button id="tab-cuenta" onclick="switchPerfilTab('cuenta')"
            class="py-3 px-1 mr-8 text-sm font-medium whitespace-nowrap text-white border-b-2 border-white">
            Mi Cuenta
        </button>
        <button id="tab-inventario" onclick="switchPerfilTab('inventario')"
            class="py-3 px-1 mr-8 text-sm font-medium whitespace-nowrap text-gray-500 border-b-2 border-transparent">
            Inventario
        </button>
        <button id="tab-historial" onclick="switchPerfilTab('historial')"
            class="py-3 px-1 mr-8 text-sm font-medium whitespace-nowrap text-gray-500 border-b-2 border-transparent">
            Historial
        </button>
        <button id="tab-seguridad" onclick="switchPerfilTab('seguridad')"
            class="py-3 px-1 text-sm font-medium whitespace-nowrap text-gray-500 border-b-2 border-transparent">
            Seguridad
        </button>
    </div>

    <!-- PANEL: MI CUENTA -->
    <div id="panel-cuenta">
        <div class="max-w-lg">
            <div class="mb-5">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Nombre Completo</label>
                <input type="text" value="Elizabeth Cuevas"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
            </div>
            <div class="mb-5">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Correo Electrónico</label>
                <input type="email" value="elizabeth.cuevas@uanl.edu.mx"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
            </div>
            <div class="mb-8">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Matrícula</label>
                <input type="text" value="2143042" disabled
                    class="w-full bg-[#111111] border border-white/[5%] rounded-lg text-gray-600 py-3 px-4 text-sm cursor-not-allowed">
                <p class="text-gray-600 text-xs mt-1">La matrícula no puede modificarse.</p>
            </div>
            <div class="flex gap-3">
                <button onclick="showToast('Cambios guardados', 'success')"
                    class="bg-white text-[#080808] font-semibold py-2.5 px-6 rounded-lg text-sm">
                    Guardar
                </button>
                <button class="border border-white/20 text-white font-medium py-2.5 px-6 rounded-lg text-sm">
                    Cancelar
                </button>
            </div>
        </div>
    </div>

    <!-- PANEL: INVENTARIO -->
    <div id="panel-inventario" class="hidden">
        <p class="text-gray-400 text-sm mb-6">Estampas repetidas disponibles para intercambiar.</p>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            <div class="bg-[#111111] border border-white/10 rounded-xl p-4 text-center">
                <div class="w-12 h-12 rounded-full bg-[#242424] mx-auto mb-3 flex items-center justify-center text-lg">🇦🇷</div>
                <p class="text-white text-sm font-medium">L. Messi</p>
                <p class="text-gray-500 text-xs">Argentina</p>
                <span class="text-xs bg-white/10 text-white px-2 py-0.5 rounded mt-2 inline-block">x3</span>
                <button onclick="openModal('modal-intercambio-inv')"
                    class="w-full mt-3 border border-white/20 text-white text-xs font-medium py-1.5 rounded-lg">
                    Intercambiar
                </button>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-4 text-center">
                <div class="w-12 h-12 rounded-full bg-[#242424] mx-auto mb-3 flex items-center justify-center text-lg">🇲🇽</div>
                <p class="text-white text-sm font-medium">H. Lozano</p>
                <p class="text-gray-500 text-xs">México</p>
                <span class="text-xs bg-white/10 text-white px-2 py-0.5 rounded mt-2 inline-block">x2</span>
                <button onclick="openModal('modal-intercambio-inv')"
                    class="w-full mt-3 border border-white/20 text-white text-xs font-medium py-1.5 rounded-lg">
                    Intercambiar
                </button>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-4 text-center">
                <div class="w-12 h-12 rounded-full bg-[#242424] mx-auto mb-3 flex items-center justify-center text-lg">🇫🇷</div>
                <p class="text-white text-sm font-medium">K. Mbappé</p>
                <p class="text-gray-500 text-xs">Francia</p>
                <span class="text-xs bg-white/10 text-white px-2 py-0.5 rounded mt-2 inline-block">x2</span>
                <button onclick="openModal('modal-intercambio-inv')"
                    class="w-full mt-3 border border-white/20 text-white text-xs font-medium py-1.5 rounded-lg">
                    Intercambiar
                </button>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl p-4 text-center">
                <div class="w-12 h-12 rounded-full bg-[#242424] mx-auto mb-3 flex items-center justify-center text-lg">🇧🇷</div>
                <p class="text-white text-sm font-medium">Vinicius Jr.</p>
                <p class="text-gray-500 text-xs">Brasil</p>
                <span class="text-xs bg-white/10 text-white px-2 py-0.5 rounded mt-2 inline-block">x2</span>
                <button onclick="openModal('modal-intercambio-inv')"
                    class="w-full mt-3 border border-white/20 text-white text-xs font-medium py-1.5 rounded-lg">
                    Intercambiar
                </button>
            </div>
        </div>
    </div>

    <!-- PANEL: HISTORIAL -->
    <div id="panel-historial" class="hidden">
        <div class="max-w-lg space-y-3">
            <div class="bg-[#111111] border border-white/10 rounded-xl px-5 py-4 flex items-start gap-4">
                <div class="w-8 h-8 rounded-full bg-[#242424] flex items-center justify-center text-xs flex-shrink-0">⇄</div>
                <div>
                    <p class="text-sm text-white">Canjeaste a <span class="text-white font-medium">Lozano</span> por <span class="text-white font-medium">Mbappé</span> con Carlos M.</p>
                    <p class="text-xs text-gray-500 mt-0.5">hace 3 días</p>
                </div>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl px-5 py-4 flex items-start gap-4">
                <div class="w-8 h-8 rounded-full bg-[#242424] flex items-center justify-center text-xs flex-shrink-0">📦</div>
                <div>
                    <p class="text-sm text-white">Abriste un sobre · <span class="text-green-400">3 estampas nuevas</span>, 2 repetidas</p>
                    <p class="text-xs text-gray-500 mt-0.5">hace 4 días</p>
                </div>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl px-5 py-4 flex items-start gap-4">
                <div class="w-8 h-8 rounded-full bg-[#242424] flex items-center justify-center text-xs flex-shrink-0">📦</div>
                <div>
                    <p class="text-sm text-white">Abriste un sobre · <span class="text-green-400">5 estampas nuevas</span></p>
                    <p class="text-xs text-gray-500 mt-0.5">hace 1 semana</p>
                </div>
            </div>
            <div class="bg-[#111111] border border-white/10 rounded-xl px-5 py-4 flex items-start gap-4">
                <div class="w-8 h-8 rounded-full bg-[#242424] flex items-center justify-center text-xs flex-shrink-0">⇄</div>
                <div>
                    <p class="text-sm text-white">Canjeaste a <span class="text-white font-medium">Ochoa</span> por <span class="text-white font-medium">Salah</span> con Sofía R.</p>
                    <p class="text-xs text-gray-500 mt-0.5">hace 2 semanas</p>
                </div>
            </div>
        </div>
    </div>

    <!-- PANEL: SEGURIDAD -->
    <div id="panel-seguridad" class="hidden">
        <div class="max-w-lg">
            <h3 class="text-white font-semibold mb-6">Cambiar contraseña</h3>
            <div class="mb-5">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Contraseña actual</label>
                <div class="relative">
                    <input id="pass-actual" type="password" placeholder="••••••••"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 pr-10 text-sm focus:outline-none">
                    <button type="button" onclick="togglePassword('pass-actual')"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mb-5">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Nueva contraseña</label>
                <input id="pass-nueva" type="password" placeholder="Mínimo 8 caracteres"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
            </div>
            <div class="mb-8">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Confirmar nueva contraseña</label>
                <input id="pass-confirmar" type="password" placeholder="Repite la nueva contraseña"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
            </div>
            <button onclick="showToast('Contraseña actualizada', 'success')"
                class="bg-white text-[#080808] font-semibold py-2.5 px-6 rounded-lg text-sm">
                Actualizar contraseña
            </button>

            <!-- ZONA PELIGROSA -->
            <div class="mt-12 pt-8 border-t border-white/10">
                <p class="text-xs uppercase tracking-widest text-red-500/70 mb-4">Zona peligrosa</p>
                <div class="bg-red-500/[5%] border border-red-500/20 rounded-xl p-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <p class="text-white text-sm font-medium">Eliminar cuenta</p>
                        <p class="text-gray-500 text-xs mt-0.5">Esta acción es irreversible. Se eliminarán todos tus datos.</p>
                    </div>
                    <button onclick="openModal('modal-eliminar')"
                        class="bg-red-500/10 text-red-400 border border-red-500/30 font-medium py-2 px-5 rounded-lg text-sm flex-shrink-0">
                        Eliminar cuenta
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- MODAL: Confirmar Intercambio desde Inventario -->
<div id="modal-intercambio-inv" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-intercambio-inv')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 w-full max-w-sm text-center">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-2">PUBLICAR EN MERCADO</h3>
            <p class="text-gray-400 text-sm mb-6">Esta estampa se publicará en el Mercado de Intercambios.</p>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-intercambio-inv')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('Oferta publicada en mercado', 'success'); closeModal('modal-intercambio-inv')"
                    class="flex-1 bg-white text-[#080808] font-semibold py-2.5 rounded-lg text-sm">
                    Publicar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Eliminar cuenta -->
<div id="modal-eliminar" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-eliminar')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-red-500/20 rounded-2xl p-8 w-full max-w-sm text-center">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-2">¿ELIMINAR CUENTA?</h3>
            <p class="text-gray-400 text-sm mb-6">Perderás todas tus estampas, intercambios y progreso. Esta acción no se puede deshacer.</p>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-eliminar')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('Función no disponible', 'info'); closeModal('modal-eliminar')"
                    class="flex-1 bg-red-500/20 text-red-400 border border-red-500/30 font-semibold py-2.5 rounded-lg text-sm">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
</div>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../public/js/main.js"></script>
<script>
    function switchPerfilTab(tab) {
        const tabs = ['cuenta','inventario','historial','seguridad'];
        tabs.forEach(t => {
            const active = t === tab;
            document.getElementById('panel-' + t).classList.toggle('hidden', !active);
            document.getElementById('tab-' + t).className = 'py-3 px-1 mr-8 text-sm font-medium whitespace-nowrap border-b-2 ' +
                (active ? 'text-white border-white' : 'text-gray-500 border-transparent');
        });
    }
</script>
</body>
</html>
