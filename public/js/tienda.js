// ─── POOL DE JUGADORES ───────────────────────────────────────────────────────
const JUGADORES_POOL = [
    { id: 1,  nombre: 'G. Ochoa',      numero: 13, posicion: 'POR', equipo: 'México',     bandera: '🇲🇽' },
    { id: 2,  nombre: 'H. Lozano',     numero: 22, posicion: 'DEL', equipo: 'México',     bandera: '🇲🇽' },
    { id: 3,  nombre: 'R. Jiménez',    numero: 9,  posicion: 'DEL', equipo: 'México',     bandera: '🇲🇽' },
    { id: 4,  nombre: 'L. Messi',      numero: 10, posicion: 'DEL', equipo: 'Argentina',  bandera: '🇦🇷' },
    { id: 5,  nombre: 'E. Martínez',   numero: 23, posicion: 'POR', equipo: 'Argentina',  bandera: '🇦🇷' },
    { id: 6,  nombre: 'Vinicius Jr.',  numero: 7,  posicion: 'DEL', equipo: 'Brasil',     bandera: '🇧🇷' },
    { id: 7,  nombre: 'Neymar Jr.',    numero: 10, posicion: 'DEL', equipo: 'Brasil',     bandera: '🇧🇷' },
    { id: 8,  nombre: 'K. Mbappé',     numero: 10, posicion: 'DEL', equipo: 'Francia',    bandera: '🇫🇷' },
    { id: 9,  nombre: 'A. Griezmann',  numero: 7,  posicion: 'MED', equipo: 'Francia',    bandera: '🇫🇷' },
    { id: 10, nombre: 'H. Kane',       numero: 9,  posicion: 'DEL', equipo: 'Inglaterra', bandera: '🏴󠁧󠁢󠁥󠁮󠁧󠁿' },
    { id: 11, nombre: 'C. Ronaldo',    numero: 7,  posicion: 'DEL', equipo: 'Portugal',   bandera: '🇵🇹' },
    { id: 12, nombre: 'B. Fernandes',  numero: 8,  posicion: 'MED', equipo: 'Portugal',   bandera: '🇵🇹' },
    { id: 13, nombre: 'L. Modric',     numero: 10, posicion: 'MED', equipo: 'Croacia',    bandera: '🇭🇷' },
    { id: 14, nombre: 'K. De Bruyne',  numero: 7,  posicion: 'MED', equipo: 'Bélgica',    bandera: '🇧🇪' },
    { id: 15, nombre: 'T. Müller',     numero: 25, posicion: 'MED', equipo: 'Alemania',   bandera: '🇩🇪' },
    { id: 16, nombre: 'R. Lewandowski',numero: 9,  posicion: 'DEL', equipo: 'Polonia',    bandera: '🇵🇱' },
    { id: 17, nombre: 'M. Salah',      numero: 11, posicion: 'DEL', equipo: 'Egipto',     bandera: '🇪🇬' },
    { id: 18, nombre: 'S. Mané',       numero: 10, posicion: 'DEL', equipo: 'Senegal',    bandera: '🇸🇳' },
    { id: 19, nombre: 'L. Suárez',     numero: 9,  posicion: 'DEL', equipo: 'Uruguay',    bandera: '🇺🇾' },
    { id: 20, nombre: 'J. Cuadrado',   numero: 11, posicion: 'DEL', equipo: 'Colombia',   bandera: '🇨🇴' },
];

let isBusy         = false;
let totalAbiertos  = 0;

// ─── SORTEO ───────────────────────────────────────────────────────────────────
function sortearEstampas() {
    const pool     = [...JUGADORES_POOL];
    const resultado = [];
    while (resultado.length < 5 && pool.length > 0) {
        const idx = Math.floor(Math.random() * pool.length);
        const jug = pool.splice(idx, 1)[0];
        resultado.push({ ...jug, nueva: Math.random() < 0.6 });
    }
    return resultado;
}

// ─── ABRIR SOBRE ─────────────────────────────────────────────────────────────
function abrirSobre() {
    if (isBusy) return;
    isBusy = true;

    const btnAbrir   = document.getElementById('btn-abrir');
    const sobre      = document.getElementById('sobre');
    const resultado  = document.getElementById('resultado');
    const cartasGrid = document.getElementById('cartas-grid');

    btnAbrir.disabled = true;
    sobre.classList.add('sobre-abriendo');
    setTimeout(() => sobre.classList.remove('sobre-abriendo'), 500);

    resultado.classList.add('hidden');
    cartasGrid.innerHTML = '';

    const estampas = sortearEstampas();

    // Crear cartas cerradas
    estampas.forEach((_, i) => {
        const card = document.createElement('div');
        card.className = 'card-flip h-40';
        card.innerHTML = `
            <div class="card-inner" id="card-inner-${i}">
                <div class="card-front bg-[#1a1a1a] border border-white/10 flex items-center justify-center">
                    <div class="text-center">
                        <p class="font-['Bebas_Neue'] text-xs tracking-widest text-gray-600">MUNDIAL</p>
                        <p class="font-['Bebas_Neue'] text-xl text-white">2026</p>
                    </div>
                </div>
                <div class="card-back bg-[#111111] border border-white/20 p-3 flex flex-col items-center justify-center gap-1" id="card-back-${i}">
                </div>
            </div>`;
        cartasGrid.appendChild(card);
    });

    resultado.classList.remove('hidden');

    // Revelar con delay escalonado
    estampas.forEach((jug, i) => {
        setTimeout(() => revelarCarta(i, jug), 300 + i * 350);
    });

    // Finalizar
    setTimeout(() => {
        totalAbiertos++;
        const contadorEl = document.getElementById('sobres-abiertos');
        if (contadorEl) contadorEl.textContent = totalAbiertos;
        const nuevas = estampas.filter(e => e.nueva).length;
        showToast(`${nuevas} estampa${nuevas !== 1 ? 's' : ''} nueva${nuevas !== 1 ? 's' : ''} obtenida${nuevas !== 1 ? 's' : ''}!`, 'success');
        isBusy = false;
        btnAbrir.disabled = false;
    }, 300 + estampas.length * 350 + 300);
}

// ─── REVELAR CARTA ────────────────────────────────────────────────────────────
function revelarCarta(index, jug) {
    const inner = document.getElementById('card-inner-' + index);
    const back  = document.getElementById('card-back-'  + index);
    if (!inner || !back) return;

    back.innerHTML = `
        <div class="text-2xl">${jug.bandera}</div>
        <p class="text-white text-xs font-semibold text-center leading-tight">${jug.nombre}</p>
        <p class="text-gray-500 text-xs">${jug.equipo}</p>
        <div class="flex items-center gap-1 mt-1">
            <span class="text-xs text-gray-600">#${jug.numero}</span>
            <span class="text-xs text-gray-600">·</span>
            <span class="text-xs text-gray-600">${jug.posicion}</span>
        </div>
        ${jug.nueva ? '<span class="text-xs bg-green-500/20 text-green-400 px-1.5 py-0.5 rounded font-bold">NUEVA</span>' : '<span class="text-xs bg-white/5 text-gray-500 px-1.5 py-0.5 rounded">repetida</span>'}`;

    inner.classList.add('flipped');
}

// ─── GUARDAR EN ÁLBUM ─────────────────────────────────────────────────────────
function guardarEstampas() {
    showToast('Estampas agregadas al álbum', 'success');
    document.getElementById('resultado').classList.add('hidden');
}
