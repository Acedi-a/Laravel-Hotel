<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LastHotel - Tu destino de lujo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body class="flex flex-col min-h-full">
<header class="bg-white shadow-md">
    <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
        <a href="inicio" class="text-2xl font-bold text-gray-800">LastHotel</a>
        <div class="hidden md:flex space-x-4">
            <?php
            if (isset($_SESSION['usuario'])){
                if ($_SESSION['usuario']['tipo_usuario'] == 'Admin'){
                    echo <<<ADMIN
                        <a href="dashboard" class="text-gray-800 hover:text-gray-600">Dashboard</a>
                        <a href="clientes" class="text-gray-800 hover:text-gray-600">Clientes</a>
                        <a href="habitaciones" class="text-gray-800 hover:text-gray-600">Habitaciones</a>
                        <a href="inicio" class="text-gray-800 hover:text-gray-600">ADMIn</a>
                        <a href="inicio" class="text-gray-800 hover:text-gray-600">ADMIn</a>
                    
                ADMIN;
                }
                else{
                    echo <<<USER
                        <a href="inicio" class="text-gray-800 hover:text-gray-600">Inicio</a>
                        <a href="#" class="text-gray-800 hover:text-gray-600">Habitaciones</a>
                        <a href="#" class="text-gray-800 hover:text-gray-600">Contacto</a>
                    USER;
                }
            }
            else{
                echo <<<USER
                        <a href="inicio" class="text-gray-800 hover:text-gray-600">Inicio</a>
                        <a href="#" class="text-gray-800 hover:text-gray-600">Habitaciones</a>
                        <a href="#" class="text-gray-800 hover:text-gray-600">Contacto</a>
                    USER;
            }


            ?>

        </div>
        <?php
        if (isset($_SESSION['usuario'])) {
            /*
             * ARREGLAR RUTAS DE VER PERFIL O ARREGLAR CONTROLADOR
             */
            $cliente = $_SESSION['usuario']['nombre'];
            $salir = "logout";
            $perfil = "perfil";
            if ($_SESSION['usuario']['tipo_usuario'] == 'Admin') $salir = "..\logout";
            if ($_SESSION['usuario']['tipo_usuario'] == 'Admin') $perfil = "..\perfil";
            echo <<<USER
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        $cliente 
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="$perfil">Ver perfil</a></li>
                        <li><a class="dropdown-item" href="$salir">Salir</a></li>
                    </ul>
                </div>
            USER;

        } else {
            echo "<a href='login' class='bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-500 transition duration-300'><button>Entrar</button></a>";
        }
        ?>
    </nav>
</header>

<main class="flex-grow overflow-auto">
    <?php echo $contenido; ?>
</main>

<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-semibold mb-2">LastHotel</h3>
                <p class="text-gray-400">Tu destino de lujo para una experiencia inolvidable.</p>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Enlaces rápidos</h4>
                <ul class="text-gray-400">
                    <li><a href="#" class="hover:text-white">Inicio</a></li>
                    <li><a href="#" class="hover:text-white">Habitaciones</a></li>
                    <li><a href="#" class="hover:text-white">Servicios</a></li>
                    <li><a href="#" class="hover:text-white">Contacto</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-2">Contacto</h4>
                <p class="text-gray-400">123 Calle Principal, Ciudad</p>
                <p class="text-gray-400">Teléfono: (123) 456-7890</p>
                <p class="text-gray-400">Email: info@lasthotel.com</p>
            </div>
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold mb-2">Síguenos</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-sm text-center text-gray-400">
            © 2024 LastHotel. Todos los derechos reservados.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>