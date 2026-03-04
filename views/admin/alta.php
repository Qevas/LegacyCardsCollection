<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legacy Cards – Dar de Alta</title>
    <link href="../../public/output.css" rel="stylesheet">
</head>
<body class="bg-[#080808] text-white font-['Inter'] min-h-screen">

<?php include '../partials/nav-admin.php'; ?>

<main class="max-w-6xl mx-auto px-6 py-10">

    <div class="mb-10">
        <p class="text-xs uppercase tracking-widest text-gray-500 mb-1">Administración</p>
        <h1 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-white">DAR DE ALTA</h1>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

        <!-- FORMULARIO: NUEVO EQUIPO -->
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8">
            <h2 class="font-['Bebas_Neue'] text-2xl text-white mb-6">NUEVO EQUIPO</h2>
            <form id="form-equipo" onsubmit="handleEquipo(event)" novalidate>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Nombre del País</label>
                    <input id="eq-nombre" type="text" placeholder="Ej: México"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
                    <p id="eq-nombre-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Grupo</label>
                    <select id="eq-grupo"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
                        <option value="">Selecciona el grupo</option>
                        <option value="A">Grupo A</option>
                        <option value="B">Grupo B</option>
                        <option value="C">Grupo C</option>
                        <option value="D">Grupo D</option>
                        <option value="E">Grupo E</option>
                        <option value="F">Grupo F</option>
                        <option value="G">Grupo G</option>
                        <option value="H">Grupo H</option>
                    </select>
                    <p id="eq-grupo-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-6">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Escudo / Bandera</label>
                    <div id="drop-equipo"
                        class="border-2 border-dashed border-white/10 rounded-lg p-8 text-center cursor-pointer"
                        onclick="document.getElementById('input-equipo').click()">
                        <p class="text-gray-500 text-sm">Haz clic o arrastra una imagen</p>
                        <p class="text-gray-600 text-xs mt-1">PNG, JPG · máx. 2MB</p>
                        <p id="nombre-archivo-equipo" class="text-white text-xs mt-2 hidden"></p>
                    </div>
                    <input id="input-equipo" type="file" accept="image/*" class="hidden"
                        onchange="mostrarArchivo(this, 'nombre-archivo-equipo', 'drop-equipo')">
                    <p id="eq-foto-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <button type="submit"
                    class="w-full bg-white text-[#080808] font-semibold py-3 rounded-lg">
                    Registrar Equipo
                </button>
            </form>
        </div>

        <!-- FORMULARIO: NUEVO JUGADOR -->
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8">
            <h2 class="font-['Bebas_Neue'] text-2xl text-white mb-6">NUEVO JUGADOR</h2>
            <form id="form-jugador" onsubmit="handleJugador(event)" novalidate>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Nombre del Jugador</label>
                    <input id="jug-nombre" type="text" placeholder="Ej: Guillermo Ochoa"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
                    <p id="jug-nombre-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-5">
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Número</label>
                        <input id="jug-numero" type="number" min="1" max="99" placeholder="Ej: 13"
                            class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none">
                        <p id="jug-numero-err" class="text-red-400 text-xs mt-1 hidden"></p>
                    </div>
                    <div>
                        <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Posición</label>
                        <select id="jug-posicion"
                            class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
                            <option value="">Posición</option>
                            <option value="POR">Portero</option>
                            <option value="DEF">Defensa</option>
                            <option value="MED">Mediocampo</option>
                            <option value="DEL">Delantero</option>
                        </select>
                        <p id="jug-posicion-err" class="text-red-400 text-xs mt-1 hidden"></p>
                    </div>
                </div>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Equipo (Selección)</label>
                    <select id="jug-equipo"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white py-3 px-4 text-sm focus:outline-none">
                        <option value="">Selecciona un equipo</option>
                        <option value="1">México</option>
                        <option value="2">Argentina</option>
                        <option value="3">Brasil</option>
                        <option value="4">España</option>
                        <option value="5">Francia</option>
                    </select>
                    <p id="jug-equipo-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-6">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Fotografía del Jugador</label>
                    <div id="drop-jugador"
                        class="border-2 border-dashed border-white/10 rounded-lg p-8 text-center cursor-pointer"
                        onclick="document.getElementById('input-jugador').click()">
                        <p class="text-gray-500 text-sm">Haz clic o arrastra una imagen</p>
                        <p class="text-gray-600 text-xs mt-1">PNG, JPG · máx. 2MB</p>
                        <p id="nombre-archivo-jugador" class="text-white text-xs mt-2 hidden"></p>
                    </div>
                    <input id="input-jugador" type="file" accept="image/*" class="hidden"
                        onchange="mostrarArchivo(this, 'nombre-archivo-jugador', 'drop-jugador')">
                    <p id="jug-foto-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <button type="submit"
                    class="w-full bg-white text-[#080808] font-semibold py-3 rounded-lg">
                    Registrar Jugador
                </button>
            </form>
        </div>

    </div>
</main>

<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>
<script src="../../public/js/main.js"></script>
<script>
    function mostrarArchivo(input, labelId, dropId) {
        const file = input.files[0];
        if (!file) return;
        if (!file.type.startsWith('image/')) {
            showToast('El archivo debe ser una imagen', 'error');
            input.value = '';
            return;
        }
        document.getElementById(labelId).textContent = '✓ ' + file.name;
        document.getElementById(labelId).classList.remove('hidden');
        document.getElementById(dropId).classList.add('border-white/30');
    }

    function handleEquipo(e) {
        e.preventDefault();
        showToast('Equipo registrado con éxito', 'success');
    }

    function handleJugador(e) {
        e.preventDefault();
        showToast('Jugador registrado con éxito', 'success');
    }
</script>
</body>
</html>
