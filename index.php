<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPS SICAM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(to right, #00467F, #A5CC82);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-900 text-white p-6 text-center">
        <h1 class="text-3xl font-bold">Bienvenido al VPS de SICAM</h1>
    </header>
    
    <div class="container mx-auto p-6">
        <!-- Accesos directos -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Accesos Directos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Sistema 1</a>
                <a href="#" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Sistema 2</a>
                <a href="#" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Sistema 3</a>
            </div>
        </section>
        
        <!-- Herramientas -->
        <section>
            <h2 class="text-xl font-semibold mb-4">Herramientas</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="#" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Probar API</a>
                <a href="#" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Validar Certificado</a>
                <button onclick="validarGPS()" class="p-4 bg-white rounded-lg shadow hover:bg-gray-200">Validar GPS</button>
            </div>
        </section>
    </div>
    
    <footer class="bg-blue-900 text-white text-center p-4 mt-6">
        <p>&copy; 2025 Cámara de Comercio de Santa Marta para el Magdalena. Todos los derechos reservados.</p>
    </footer>
    
    <script>
        function validarGPS() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        alert(`Ubicación obtenida: Lat ${position.coords.latitude}, Lng ${position.coords.longitude}`);
                    },
                    (error) => {
                        alert("Debes habilitar la ubicación para continuar.");
                    }
                );
            } else {
                alert("Tu navegador no soporta geolocalización.");
            }
        }
    </script>
</body>
</html>