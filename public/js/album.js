// ─── DATOS MOCK ──────────────────────────────────────────────────────────────
const EQUIPOS = [
    { id: 1,  pais: 'México',     grupo: 'A', bandera: '🇲🇽', obtenidas: 14, total: 26 },
    { id: 2,  pais: 'Argentina',  grupo: 'B', bandera: '🇦🇷', obtenidas: 20, total: 26 },
    { id: 3,  pais: 'Brasil',     grupo: 'C', bandera: '🇧🇷', obtenidas:  8, total: 26 },
    { id: 4,  pais: 'España',     grupo: 'D', bandera: '🇪🇸', obtenidas: 26, total: 26 },
    { id: 5,  pais: 'Francia',    grupo: 'E', bandera: '🇫🇷', obtenidas: 12, total: 26 },
    { id: 6,  pais: 'Alemania',   grupo: 'F', bandera: '🇩🇪', obtenidas:  5, total: 26 },
    { id: 7,  pais: 'Portugal',   grupo: 'G', bandera: '🇵🇹', obtenidas: 18, total: 26 },
    { id: 8,  pais: 'Uruguay',    grupo: 'H', bandera: '🇺🇾', obtenidas:  7, total: 26 },
    { id: 9,  pais: 'Colombia',   grupo: 'A', bandera: '🇨🇴', obtenidas:  0, total: 26 },
    { id: 10, pais: 'EE.UU.',     grupo: 'B', bandera: '🇺🇸', obtenidas:  0, total: 26 },
    { id: 11, pais: 'Canadá',     grupo: 'C', bandera: '🇨🇦', obtenidas:  0, total: 26 },
    { id: 12, pais: 'Inglaterra', grupo: 'D', bandera: '🏴󠁧󠁢󠁥󠁮󠁧󠁿', obtenidas:  0, total: 26 },
];

const POSICIONES = ['POR', 'DEF', 'DEF', 'DEF', 'DEF', 'MED', 'MED', 'MED', 'MED', 'DEL', 'DEL', 'DEL'];
const NOMBRES_MOCK = [
    'G. Ochoa','H. Lozano','A. Guardado','R. Jiménez','E. Álvarez',
    'J. Corona','C. Salcedo','N. Araújo','O. Pineda','S. Giménez',
    'U. Antuna','C. Rodríguez','J. Vázquez','A. Moreno','F. Orrantia',
    'J. Gallardo','L. Reyes','D. Juárez','I. Rodríguez','K. Álvarez',
    'J. Macías','R. Alvarado','E. Aguirre','A. Govea','J. Malagón','B. Romo'
];

let filtroActivo  = 'todos';
let equipoActivo  = null;

// ─── ESTADO: FILTRO ───────────────────────────────────────────────────────────
function setFiltro(filtro) {
    filtroActivo = filtro;
    document.querySelectorAll('.filtro-btn').forEach(btn => {
        const esActivo = btn.id === 'filtro-' + filtro;
        btn.className = 'filtro-btn text-sm font-medium px-4 py-2 rounded-lg transition-all ' +
            (esActivo
                ? 'bg-white text-[#080808]'
                : 'bg-[#1a1a1a] border border-white/10 text-gray-400 hover:text-white hover:border-white/20');
    });
    renderEquipos();
}

// ─── RENDER: GRID DE EQUIPOS ─────────────────────────────────────────────────
function renderEquipos() {
    const busqueda = (document.getElementById('busqueda')?.value || '').toLowerCase();
    const grid     = document.getElementById('equipos-grid');
    if (!grid) return;

    const equiposFiltrados = EQUIPOS.filter(eq => {
        const matchBusqueda = eq.pais.toLowerCase().includes(busqueda);
        if (!matchBusqueda) return false;
        if (filtroActivo === 'iniciados') return eq.obtenidas > 0 && eq.obtenidas < eq.total;
        if (filtroActivo === 'completos') return eq.obtenidas === eq.total;
        if (filtroActivo === 'vacios')    return eq.obtenidas === 0;
        return true;
    });

    if (equiposFiltrados.length === 0) {
        grid.innerHTML = `<div class="col-span-full py-16 text-center text-gray-600">
            <p class="text-sm">No hay selecciones que coincidan con el filtro.</p></div>`;
        return;
    }

    grid.innerHTML = equiposFiltrados.map(eq => {
        const pct = Math.round((eq.obtenidas / eq.total) * 100);
        return `
        <div class="bg-[#111111] border border-white/10 rounded-xl p-5 hover:border-white/20 hover:-translate-y-1 transition-all cursor-pointer"
            onclick="verEquipo(${eq.id})">
            <div class="text-3xl mb-3">${eq.bandera}</div>
            <p class="text-white font-medium text-sm mb-0.5">${eq.pais}</p>
            <p class="text-gray-600 text-xs mb-3">Grupo ${eq.grupo}</p>
            <div class="w-full bg-[#242424] rounded-full h-1 mb-2">
                <div class="bg-white rounded-full h-1 transition-all" style="width:${pct}%"></div>
            </div>
            <p class="text-xs text-gray-500">${eq.obtenidas} / ${eq.total}</p>
        </div>`;
    }).join('');
}

// ─── VER DETALLE DE EQUIPO ────────────────────────────────────────────────────
function verEquipo(id) {
    const eq = EQUIPOS.find(e => e.id === id);
    if (!eq) return;

    equipoActivo = id;
    const detalle = document.getElementById('detalle-equipo');
    const header  = document.getElementById('detalle-header');

    header.innerHTML = `
        <span class="text-4xl">${eq.bandera}</span>
        <div>
            <h2 class="font-['Bebas_Neue'] text-2xl text-white">${eq.pais}</h2>
            <p class="text-gray-500 text-sm">Grupo ${eq.grupo} · ${eq.obtenidas} / ${eq.total} estampas</p>
        </div>`;

    const jugadores = generarJugadores(id, eq.total, eq.obtenidas);
    document.getElementById('jugadores-grid').innerHTML = jugadores.map(jug => renderStampCard(jug, eq)).join('');

    detalle.classList.remove('hidden');
    detalle.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function cerrarDetalle() {
    document.getElementById('detalle-equipo').classList.add('hidden');
    equipoActivo = null;
}

// ─── GENERAR JUGADORES MOCK ───────────────────────────────────────────────────
function generarJugadores(equipoId, total, obtenidas) {
    return Array.from({ length: total }, (_, i) => ({
        id:        equipoId * 100 + i,
        nombre:    NOMBRES_MOCK[i % NOMBRES_MOCK.length],
        numero:    i + 1,
        posicion:  POSICIONES[i % POSICIONES.length],
        obtenida:  i < obtenidas,
        repetida:  i < Math.floor(obtenidas * 0.2),
    }));
}

// ─── RENDER: CARTA DE ESTAMPA ─────────────────────────────────────────────────
function renderStampCard(jug, eq) {
    if (jug.obtenida) {
        return `
        <div class="bg-[#111111] border border-white/10 rounded-xl p-3 text-center relative hover:border-white/20 transition-all">
            ${jug.repetida ? '<span class="absolute top-2 right-2 text-xs bg-white/10 text-white px-1.5 py-0.5 rounded font-bold">x2</span>' : ''}
            <div class="w-10 h-10 rounded-full bg-[#242424] mx-auto mb-2 flex items-center justify-center text-sm">${eq.bandera}</div>
            <p class="text-white text-xs font-medium truncate">${jug.nombre}</p>
            <p class="text-gray-600 text-xs">#${jug.numero}</p>
            <span class="text-xs text-gray-500">${jug.posicion}</span>
        </div>`;
    }
    return `
    <div class="bg-[#111111] border border-white/[5%] rounded-xl p-3 text-center opacity-40">
        <div class="w-10 h-10 rounded-full bg-[#1a1a1a] mx-auto mb-2 flex items-center justify-center text-gray-600 text-sm">?</div>
        <p class="text-gray-600 text-xs">???</p>
        <p class="text-gray-700 text-xs">#${jug.numero}</p>
        <span class="text-xs text-gray-700">${jug.posicion}</span>
    </div>`;
}

// ─── INIT ─────────────────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    renderEquipos();

    // Animación de contadores
    const totalObtenidas = EQUIPOS.reduce((s, e) => s + e.obtenidas, 0);
    const totalEquipos   = EQUIPOS.filter(e => e.obtenidas > 0).length;
    const pct            = ((totalObtenidas / (EQUIPOS.length * 26)) * 100).toFixed(1);

    animateCount(document.getElementById('total-obtenidas'), totalObtenidas);
    animateCount(document.getElementById('total-equipos'),   totalEquipos);

    const pctEl = document.getElementById('progreso-pct');
    if (pctEl) pctEl.textContent = pct + '%';

    const barEl = document.getElementById('progreso-bar');
    if (barEl) barEl.style.width = pct + '%';
});
