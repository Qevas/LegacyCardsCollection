<nav class="bg-[#080808] border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-16">
        <a href="../index.php" class="font-['Bebas_Neue'] text-2xl tracking-widest text-white">
            LEGACY CARDS
        </a>
        <div class="hidden md:flex items-center gap-4">
            <a href="login.php" class="text-sm text-gray-400">
                Iniciar Sesión
            </a>
            <a href="login.php#registro" class="text-sm font-semibold bg-white text-[#080808] py-2 px-5 rounded">
                Registrarse
            </a>
        </div>
        <button id="mobile-menu-btn" class="md:hidden text-white p-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="md:hidden hidden bg-[#111111] border-t border-white/10 px-6 py-4">
        <div class="flex flex-col gap-3 text-sm">
            <a href="login.php" class="text-gray-300">Iniciar Sesión</a>
            <a href="login.php#registro" class="text-gray-300">Registrarse</a>
        </div>
    </div>
</nav>
