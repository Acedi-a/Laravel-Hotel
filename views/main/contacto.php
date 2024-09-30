
    <div class="container mx-auto ">
        <h1 class="text-4xl font-bold text-center text-blue-900 mb-12">Contacta con LastHotel</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0 ">
                <form id="contactForm" class=" shadow-md rounded-lg p-8 bg-gray-300">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Nombre
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Tu nombre">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="tu@email.com">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="message">
                            Mensaje
                        </label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32" id="message" placeholder="Tu mensaje"></textarea>
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" type="button">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
            <div class="w-full md:w-1/2 px-4">
                <div id="contactInfo" class=" shadow-md rounded-lg p-8 h-full flex text-center flex-col justify-between bg-gray-300">
                    <div>
                        <h2 class="text-2xl font-bold text-blue-900 mb-4">Información de Contacto</h2>
                        <p class="text-gray-700 mb-4">Estamos aquí para hacer tu estancia inolvidable. No dudes en contactarnos para cualquier consulta o reserva.</p>
                        <ul class="text-gray-700">
                            <li class="mb-2"><strong>Dirección:</strong> Calle Principal 123, Ciudad</li>
                            <li class="mb-2"><strong>Teléfono:</strong> +34 123 456 789</li>
                            <li class="mb-2"><strong>Email:</strong> info@lasthotel.com</li>
                        </ul>
                    </div>
                    <div class="mt-8 text-center">
                        <img src="../../src/icono%20hotel%20bg.png" alt="LastHotel" class=" text-center bg-gray-800 rounded-lg shadow-md transform transition hover:scale-105 duration-300 ease-in-out">
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from("#contactForm", {
        x: -100,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#contactForm",
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse"
        }
    });

    gsap.from("#contactInfo", {
        x: 100,
        opacity: 0,
        duration: 1,
        scrollTrigger: {
            trigger: "#contactInfo",
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none reverse"
        }
    });
</script>
