// ─── MOBILE MENU ────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    const btn  = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) {
        btn.addEventListener('click', () => menu.classList.toggle('hidden'));
        document.addEventListener('click', e => {
            if (!btn.contains(e.target) && !menu.contains(e.target))
                menu.classList.add('hidden');
        });
    }

    // User dropdown
    const dropBtn       = document.getElementById('user-dropdown-btn');
    const drop          = document.getElementById('user-dropdown');
    const dropContainer = document.getElementById('user-dropdown-container');
    if (dropBtn && drop) {
        dropBtn.addEventListener('click', e => {
            e.stopPropagation();
            drop.classList.toggle('hidden');
        });
        document.addEventListener('click', e => {
            if (dropContainer && !dropContainer.contains(e.target))
                drop.classList.add('hidden');
        });
    }
});

// ─── TOASTS ─────────────────────────────────────────────────────────────────
function showToast(msg, type = 'info', duration = 3000) {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const colors = {
        success: 'bg-green-500/10 border-green-500/30 text-green-400',
        error:   'bg-red-500/10 border-red-500/30 text-red-400',
        info:    'bg-white/5 border-white/20 text-white',
    };

    const toast = document.createElement('div');
    toast.className = `border rounded-lg px-4 py-3 text-sm font-medium backdrop-blur-sm
        shadow-xl transition-all duration-300 translate-y-2 opacity-0 ${colors[type] || colors.info}`;
    toast.textContent = msg;
    container.appendChild(toast);

    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            toast.classList.remove('translate-y-2', 'opacity-0');
        });
    });

    setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-y-2');
        setTimeout(() => toast.remove(), 300);
    }, duration);
}

// ─── MODALES ─────────────────────────────────────────────────────────────────
function openModal(id) {
    const el = document.getElementById(id);
    if (el) el.classList.remove('hidden');
}
function closeModal(id) {
    const el = document.getElementById(id);
    if (el) el.classList.add('hidden');
}

// ─── VALIDACIÓN ──────────────────────────────────────────────────────────────
function showFieldError(errId, msg) {
    const el = document.getElementById(errId);
    if (!el) return;
    el.textContent = msg;
    el.classList.remove('hidden');
}
function clearFieldError(errId) {
    const el = document.getElementById(errId);
    if (!el) return;
    el.textContent = '';
    el.classList.add('hidden');
}

// ─── PASSWORD TOGGLE ─────────────────────────────────────────────────────────
function togglePassword(inputId) {
    const input = document.getElementById(inputId);
    if (!input) return;
    input.type = input.type === 'password' ? 'text' : 'password';
}

// ─── ANIMACIÓN DE CONTADOR ──────────────────────────────────────────────────
function animateCount(el, target, duration = 800) {
    if (!el) return;
    const start = performance.now();
    function update(now) {
        const progress = Math.min((now - start) / duration, 1);
        const ease     = 1 - Math.pow(1 - progress, 3);
        el.textContent = Math.floor(ease * target);
        if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
}
