<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Mercado</title>
    <link href="../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include 'partials/nav.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-10">
        <div>
            <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Intercambios</p>
            <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white">MERCADO</h1>
        </div>
        <button onclick="openModal('modal-publicar')"
            class="bg-white text-[#080808] font-semibold py-2.5 px-6 rounded-lg text-sm self-start sm:self-auto">
            + Publicar Oferta
        </button>
    </div>

    <!-- TABS -->
    <div class="flex border-b border-white/10 mb-8">
        <button id="tab-muro" onclick="switchMercadoTab('muro')"
            class="py-3 px-1 mr-8 text-sm font-medium text-white border-b-2 border-white">
            Muro de Ofertas
        </button>
        <button id="tab-mis" onclick="switchMercadoTab('mis')"
            class="py-3 px-1 mr-8 text-sm font-medium text-gray-500 border-b-2 border-transparent">
            Mis Ofertas
        </button>
    </div>

    <!-- FILTROS -->
    <div class="flex flex-col sm:flex-row gap-4 mb-8">
        <input id="filtro-jugador" type="text" placeholder="Buscar jugador o equipo..."
            class="bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-2 px-4 text-sm focus:outline-none w-full sm:w-64">
        <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer">
            <input type="checkbox" id="solo-disponibles" class="accent-white w-4 h-4">
            Solo las que puedo pagar
        </label>
    </div>

    <!-- MURO DE OFERTAS -->
    <div id="panel-muro">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

            <!-- Oferta card -->
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-6 h-6 rounded-full bg-[#242424] flex items-center justify-center text-xs font-bold">C</div>
                    <span class="text-xs text-gray-500">Carlos M. ofrece:</span>
                </div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇦🇷</div>
                        <p class="text-white text-xs font-medium">L. Messi</p>
                        <p class="text-gray-500 text-xs">Argentina</p>
                        <span class="text-xs bg-white/10 text-white px-1.5 py-0.5 rounded mt-1 inline-block">x2</span>
                    </div>
                    <div class="text-gray-500 text-xs font-bold">⇄</div>
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇲🇽</div>
                        <p class="text-white text-xs font-medium">H. Lozano</p>
                        <p class="text-gray-500 text-xs">México</p>
                    </div>
                </div>
                <button onclick="openModal('modal-intercambio')"
                    class="w-full border border-white/20 text-white font-medium py-2 rounded-lg text-sm">
                    Intercambiar
                </button>
            </div>

            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-6 h-6 rounded-full bg-[#242424] flex items-center justify-center text-xs font-bold">S</div>
                    <span class="text-xs text-gray-500">Sofía R. ofrece:</span>
                </div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇫🇷</div>
                        <p class="text-white text-xs font-medium">K. Mbappé</p>
                        <p class="text-gray-500 text-xs">Francia</p>
                        <span class="text-xs bg-white/10 text-white px-1.5 py-0.5 rounded mt-1 inline-block">x3</span>
                    </div>
                    <div class="text-gray-500 text-xs font-bold">⇄</div>
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇧🇷</div>
                        <p class="text-white text-xs font-medium">Vinicius Jr.</p>
                        <p class="text-gray-500 text-xs">Brasil</p>
                    </div>
                </div>
                <button onclick="openModal('modal-intercambio')"
                    class="w-full border border-white/20 text-white font-medium py-2 rounded-lg text-sm">
                    Intercambiar
                </button>
            </div>

            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-6 h-6 rounded-full bg-[#242424] flex items-center justify-center text-xs font-bold">M</div>
                    <span class="text-xs text-gray-500">Miguel A. ofrece:</span>
                </div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🏴󠁧󠁢󠁥󠁮󠁧󠁿</div>
                        <p class="text-white text-xs font-medium">H. Kane</p>
                        <p class="text-gray-500 text-xs">Inglaterra</p>
                        <span class="text-xs bg-white/10 text-white px-1.5 py-0.5 rounded mt-1 inline-block">x2</span>
                    </div>
                    <div class="text-gray-500 text-xs font-bold">⇄</div>
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇵🇹</div>
                        <p class="text-white text-xs font-medium">C. Ronaldo</p>
                        <p class="text-gray-500 text-xs">Portugal</p>
                    </div>
                </div>
                <button onclick="openModal('modal-intercambio')"
                    class="w-full border border-white/20 text-white font-medium py-2 rounded-lg text-sm">
                    Intercambiar
                </button>
            </div>

            <!-- Oferta abierta -->
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-6 h-6 rounded-full bg-[#242424] flex items-center justify-center text-xs font-bold">L</div>
                    <span class="text-xs text-gray-500">Lucía P. ofrece:</span>
                </div>
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇩🇪</div>
                        <p class="text-white text-xs font-medium">T. Müller</p>
                        <p class="text-gray-500 text-xs">Alemania</p>
                        <span class="text-xs bg-white/10 text-white px-1.5 py-0.5 rounded mt-1 inline-block">x2</span>
                    </div>
                    <div class="text-gray-500 text-xs font-bold">⇄</div>
                    <div class="flex-1 bg-[#1a1a1a] border border-dashed border-white/20 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-gray-500 text-xs">?</div>
                        <p class="text-gray-500 text-xs">Oferta abierta</p>
                        <p class="text-gray-600 text-xs">Cualquier estampa</p>
                    </div>
                </div>
                <button onclick="openModal('modal-intercambio')"
                    class="w-full border border-white/20 text-white font-medium py-2 rounded-lg text-sm">
                    Intercambiar
                </button>
            </div>

        </div>
    </div>

    <!-- MIS OFERTAS -->
    <div id="panel-mis" class="hidden">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-[#111111] border border-white/10 rounded-xl p-5">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs bg-yellow-500/10 text-yellow-400 px-2 py-0.5 rounded uppercase tracking-wide font-medium">Activa</span>
                    <button onclick="showToast('Oferta cancelada', 'info')"
                        class="text-xs text-red-400">Cancelar</button>
                </div>
                <div class="flex items-center gap-4">
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇲🇽</div>
                        <p class="text-white text-xs font-medium">G. Ochoa</p>
                        <p class="text-gray-500 text-xs">México · x2</p>
                    </div>
                    <div class="text-gray-500 text-xs font-bold">⇄</div>
                    <div class="flex-1 bg-[#1a1a1a] border border-white/10 rounded-lg p-3 text-center">
                        <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-xs">🇺🇾</div>
                        <p class="text-white text-xs font-medium">L. Suárez</p>
                        <p class="text-gray-500 text-xs">Uruguay</p>
                    </div>
                </div>
            </div>
            <!-- Mensaje si no hay más -->
            <div class="bg-[#111111] border border-dashed border-white/10 rounded-xl p-8 flex flex-col items-center justify-center text-center gap-3">
                <p class="text-gray-600 text-sm">¿Tienes estampas repetidas?</p>
                <button onclick="openModal('modal-publicar')"
                    class="text-sm text-white border border-white/20 px-4 py-2 rounded-lg">
                    Publicar oferta
                </button>
            </div>
        </div>
    </div>

</main>

<!-- MODAL: Publicar Oferta -->
<div id="modal-publicar" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-publicar')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 w-full max-w-md">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-6">PUBLICAR OFERTA</h3>
            <div class="mb-5">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Estampa que ofreces (repetida)</label>
                <select class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
                    <option value="">Selecciona una estampa repetida</option>
                    <option>G. Ochoa – México (x2)</option>
                    <option>H. Lozano – México (x2)</option>
                    <option>L. Messi – Argentina (x3)</option>
                </select>
            </div>
            <div class="mb-6">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Estampa que pides (opcional)</label>
                <input type="text" placeholder="Deja vacío para oferta abierta"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
                <p class="text-gray-600 text-xs mt-1">Si lo dejas vacío, cualquier usuario puede ofrecerte una estampa.</p>
            </div>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-publicar')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('Oferta publicada', 'success'); closeModal('modal-publicar')"
                    class="flex-1 bg-white text-[#080808] font-semibold py-2.5 rounded-lg text-sm">
                    Publicar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL: Confirmar Intercambio -->
<div id="modal-intercambio" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-intercambio')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 w-full max-w-sm text-center">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-2">CONFIRMAR INTERCAMBIO</h3>
            <p class="text-gray-400 text-sm mb-6">¿Estás seguro de que deseas realizar este intercambio? Esta acción no se puede deshacer.</p>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-intercambio')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('¡Intercambio realizado!', 'success'); closeModal('modal-intercambio')"
                    class="flex-1 bg-white text-[#080808] font-semibold py-2.5 rounded-lg text-sm">
                    Confirmar
                </button>
            </div>
        </div>
    </div>
</div>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../public/js/main.js"></script>
<script>
    function switchMercadoTab(tab) {
        const isMuro = tab === 'muro';
        document.getElementById('panel-muro').classList.toggle('hidden', !isMuro);
        document.getElementById('panel-mis').classList.toggle('hidden', isMuro);
        document.getElementById('tab-muro').className = 'py-3 px-1 mr-8 text-sm font-medium border-b-2 ' +
            (isMuro ? 'text-white border-white' : 'text-gray-500 border-transparent');
        document.getElementById('tab-mis').className = 'py-3 px-1 mr-8 text-sm font-medium border-b-2 ' +
            (!isMuro ? 'text-white border-white' : 'text-gray-500 border-transparent');
    }
</script>
</body>
</html>
