<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LC</title>
        <link href="../public/output.css" rel="stylesheet">
    </head>
    <body class="bg-black font-['Inter'] text-white">

    <?php include 'partials/nav-public.php'; ?>

    <section class="min-h-screen flex flex-col items-center justify-center text-center px-6 relative overflow-hidden">
        <div class="absolute"></div>
        <h1 class="font-['Inter'] text-yellow-500 text-[clamp(3rem,10vw,8rem)] mt-10 mb-20">
            ÁLBUM DIGITAL<br>MUNDIAL<br>2026
        </h1>
        <p class="text-gray-500 text-lg md:text-xl max-w-xl mb-10">
            ¡Colecciona estampas digitales de los jugadores!<br><br>
            1. Abre sobres<br>2. Completa tu álbum<br>3. Intercambia con otros coleccionistas.
        </p>
        <div class="flex flex-col sm:flex-row gap-10 mt-20">
            <a href="login.php#registro" class="bg-white text-black font-semibold py-3 px-8 rounded">
                Crear cuenta
            </a>
            <a href="login.php" class="border border-white/20 text-white font-semibold py-3 px-8 rounded">
                Iniciar Sesión
            </a>
        </div>
    </section>

    <section class="py-40 px-10">

        <div class="max-w-6xl mx-auto">
            <h2 class="font-['Bebas_Neue'] text-4xl md:text-5xl text-center text-white mt-10 mb-25">CÓMO FUNCIONA</h2>
            <div class="grid grid-cols-3 md:grid-cols-1 gap-10">

                <div class="bg-[#7A0F11]/80 rounded-xl p-8">
                    <div class="flex items-center justify-center mb-6">
                        <h3 class="font-['Bebas_Neue'] text-xl text-white">01 REGÍSTRATE</h3>
                    </div>
                    <p class="text-sm text-center">Crea tu cuenta gratis y accede a tu álbum personal del Mundial 2026.</p>
                </div>

                <div class="bg-[#131370]/80 rounded-xl p-8">
                    <div class="flex items-center justify-center mb-6">
                        <span class="font-['Bebas_Neue'] text-xl text-white">02 ABRE SOBRES</span>
                    </div>
                    <p class="text-sm text-center">Cada sobre contiene 5 estampas aleatorias de los jugadores participantes.</p>
                </div>
                
                <div class="bg-[#1C7435]/80 rounded-xl p-8">
                    <div class="flex items-center justify-center mb-6">
                        <span class="font-['Bebas_Neue'] text-xl text-white">03 INTERCAMBIA</span>
                    </div>
                    <p class="text-sm text-center">Ofrece tus estampas repetidas y completa tu colección con otros usuarios.</p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="py-50 px-6 text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="font-['Bebas_Neue']-simple text-2xl md:text-3xl text-center text-white mb-15">Registrate y completa tu colección.</h2>
            <a href="login.php#registro" class="bg-white text-black font-semibold py-3 px-10 rounded inline-block">
                Crear cuenta
            </a>
        </div>
    </section>

    <script src="../public/js/main.js"></script>

    </body>
</html>
