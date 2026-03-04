<nav class="bg-[#080808] border-b border-white/10 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 flex items-center justify-between h-16">
        <a href="dashboard.php" class="font-['Bebas_Neue'] text-2xl tracking-widest text-white">
            LEGACY CARDS
        </a>
        <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-400">
            <li><a href="album.php">Álbum</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li><a href="mercado.php">Mercado</a></li>
        </ul>
        <div class="hidden md:flex items-center gap-3 relative" id="user-dropdown-container">
            <button id="user-dropdown-btn" class="flex items-center gap-2 text-sm text-gray-300">
                <div class="w-8 h-8 rounded-full bg-[#242424] border border-white/20 flex items-center justify-center text-xs font-bold">E</div>
                <span>Elizabeth</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div id="user-dropdown" class="hidden absolute right-0 top-full mt-2 w-48 bg-[#1a1a1a] border border-white/10 rounded-xl shadow-2xl overflow-hidden">
                <a href="perfil.php" class="block px-4 py-3 text-sm text-gray-300">Mi Perfil</a>
                <div class="border-t border-white/10"></div>
                <a href="login.php" class="block px-4 py-3 text-sm text-red-400">Cerrar Sesión</a>
            </div>
        </div>
        <button id="mobile-menu-btn" class="md:hidden text-white p-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="md:hidden hidden bg-[#111111] border-t border-white/10 px-6 py-4">
        <ul class="flex flex-col gap-3 text-sm text-gray-300">
            <li><a href="album.php">Álbum</a></li>
            <li><a href="tienda.php">Tienda</a></li>
            <li><a href="mercado.php">Mercado</a></li>
            <li><a href="perfil.php">Mi Perfil</a></li>
            <li class="border-t border-white/10 pt-2">
                <a href="login.php" class="text-red-400">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>
