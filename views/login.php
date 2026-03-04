<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LC : Iniciar Sesion</title>
    <link href="../public/output.css" rel="stylesheet">
</head>

<body class="bg-black min-h-screen flex items-center text-white font-['Inter'] justify-center px-4">

<div class="w-full max-w-md">
    <div class="text-center mb-8">
        <a href="../index.php" class="font-['Bebas_Neue'] text-3xl tracking-widest text-yellow-500">
            LEGACY CARDS
        </a>

    <div class="mt-10">
        <div class="flex border-b border-white/10">
            <button id="tab-login" onclick="switchTab('login')"
                class="flex-1 py-4 text-sm font-medium text-white border-b-2 border-white">
                Iniciar Sesión
            </button>
            <button id="tab-registro" onclick="switchTab('registro')"
                class="flex-1 py-4 text-sm font-medium text-gray-500 border-b-2 border-transparent">
                Registrarse
            </button>
        </div>

        <!-- FORM: LOGIN -->
        <div id="form-login" class="p-8">
            <form id="login-form" onsubmit="handleLogin(event)" novalidate>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Correo Electrónico</label>
                    <input id="login-email" type="email" placeholder="tu@correo.com"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none focus:border-white/30">
                    <p id="login-email-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-2">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Contraseña</label>
                    <div class="relative">
                        <input id="login-password" type="password" placeholder="••••••••"
                            class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 pr-10 text-sm focus:outline-none focus:border-white/30">
                        <button type="button" onclick="togglePassword('login-password')"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    <p id="login-password-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="flex justify-end mb-6">
                    <button type="button" onclick="openModal('modal-recuperar')"
                        class="text-xs text-gray-500">
                        ¿Olvidaste tu contraseña?
                    </button>
                </div>
                <button type="submit"
                    class="w-full bg-white text-[#080808] font-semibold py-3 rounded-lg">
                    Entrar
                </button>
            </form>
            <p class="text-center text-sm text-gray-500 mt-6">
                ¿No tienes cuenta?
                <button onclick="switchTab('registro')" class="text-white ml-1">Regístrate</button>
            </p>
        </div>

        <!-- FORM: REGISTRO -->
        <div id="form-registro" class="p-8 hidden">
            <form id="registro-form" onsubmit="handleRegistro(event)" novalidate>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Nombre Completo</label>
                    <input id="reg-nombre" type="text" placeholder="Tu nombre completo"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none focus:border-white/30">
                    <p id="reg-nombre-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Correo Electrónico</label>
                    <input id="reg-email" type="email" placeholder="tu@correo.com"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none focus:border-white/30">
                    <p id="reg-email-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-5">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Contraseña</label>
                    <div class="relative">
                        <input id="reg-password" type="password" placeholder="Mínimo 8 caracteres"
                            oninput="updateStrength(this.value)"
                            class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 pr-10 text-sm focus:outline-none focus:border-white/30">
                        <button type="button" onclick="togglePassword('reg-password')"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    <!-- Barra de fortaleza -->
                    <div class="flex gap-1 mt-2">
                        <div id="str-1" class="flex-1 h-1 rounded-full bg-[#242424]"></div>
                        <div id="str-2" class="flex-1 h-1 rounded-full bg-[#242424]"></div>
                        <div id="str-3" class="flex-1 h-1 rounded-full bg-[#242424]"></div>
                        <div id="str-4" class="flex-1 h-1 rounded-full bg-[#242424]"></div>
                    </div>
                    <p id="str-label" class="text-xs text-gray-600 mt-1"></p>
                    <p id="reg-password-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <div class="mb-6">
                    <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Confirmar Contraseña</label>
                    <input id="reg-confirm" type="password" placeholder="Repite tu contraseña"
                        class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none focus:border-white/30">
                    <p id="reg-confirm-err" class="text-red-400 text-xs mt-1 hidden"></p>
                </div>
                <button type="submit"
                    class="w-full bg-white text-[#080808] font-semibold py-3 rounded-lg">
                    Crear cuenta
                </button>
            </form>
            <p class="text-center text-sm text-gray-500 mt-6">
                ¿Ya tienes cuenta?
                <button onclick="switchTab('login')" class="text-white ml-1">Inicia Sesión</button>
            </p>
        </div>
</div>

<!-- MODAL: Recuperar contraseña -->
<div id="modal-recuperar" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeModal('modal-recuperar')"></div>
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4">
        <div class="bg-[#111111] border border-white/10 rounded-2xl p-8 w-full max-w-sm">
            <h3 class="font-['Bebas_Neue'] text-2xl text-white mb-2">RECUPERAR CONTRASEÑA</h3>
            <p class="text-gray-400 text-sm mb-6">Ingresa tu correo y te enviaremos un enlace para restablecer tu contraseña.</p>
            <div class="mb-6">
                <label class="block text-xs uppercase tracking-widest text-gray-500 mb-2">Correo Electrónico</label>
                <input type="email" placeholder="tu@correo.com"
                    class="w-full bg-[#1a1a1a] border border-white/10 rounded-lg text-white placeholder-gray-600 py-3 px-4 text-sm focus:outline-none focus:border-white/30">
            </div>
            <div class="flex gap-3">
                <button onclick="closeModal('modal-recuperar')"
                    class="flex-1 border border-white/20 text-white font-medium py-2.5 rounded-lg text-sm">
                    Cancelar
                </button>
                <button onclick="showToast('Correo enviado (simulado)', 'success'); closeModal('modal-recuperar')"
                    class="flex-1 bg-white text-[#080808] font-semibold py-2.5 rounded-lg text-sm">
                    Enviar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- TOAST CONTAINER -->
<div id="toast-container" class="fixed bottom-6 right-6 z-[100] flex flex-col gap-2"></div>

<script src="../public/js/main.js"></script>
<script>
    // Activar tab por hash en URL
    if (window.location.hash === '#registro') switchTab('registro');

    function switchTab(tab) {
        const isLogin = tab === 'login';
        document.getElementById('form-login').classList.toggle('hidden', !isLogin);
        document.getElementById('form-registro').classList.toggle('hidden', isLogin);
        document.getElementById('tab-login').classList.toggle('text-white', isLogin);
        document.getElementById('tab-login').classList.toggle('border-white', isLogin);
        document.getElementById('tab-login').classList.toggle('text-gray-500', !isLogin);
        document.getElementById('tab-login').classList.toggle('border-transparent', !isLogin);
        document.getElementById('tab-registro').classList.toggle('text-white', !isLogin);
        document.getElementById('tab-registro').classList.toggle('border-white', !isLogin);
        document.getElementById('tab-registro').classList.toggle('text-gray-500', isLogin);
        document.getElementById('tab-registro').classList.toggle('border-transparent', isLogin);
    }

    function handleLogin(e) {
        e.preventDefault();
        window.location.href = 'dashboard.php';
    }

    function handleRegistro(e) {
        e.preventDefault();
        window.location.href = 'login.php';
    }

    // function updateStrength(val) { /* validación desactivada */ }
</script>
</body>
</html>
