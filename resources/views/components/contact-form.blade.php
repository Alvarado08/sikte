<main class="flex items-center justify-center p-8">
    <section>
        <div class="py-8 lg:py-16 px-4 mx-auto">
            <h2 class="mb-8 text-4xl md:text-6xl tracking-tight font-primary font-light uppercase text-center text-white">¿cómo podemos ayudarte?</h2>
            <form action="#" class="space-y-8">
                <div>
                    <label for="email" class="block mb-2 text-lg font-secondary text-secondary">Email</label>
                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="email@ejemplo.com" required>
                </div>
                <div>
                    <label for="subject" class="block mb-2 text-lg font-secondary text-secondary">Asunto</label>
                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="¿Algo en específico?" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-lg font-secondary text-secondary">Mensaje</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deja tu mensaje..."></textarea>
                </div>
                {{-- <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Send message</button> --}}
                <button class="btn bg-secondary outline-none border-transparent duration-300 text-black">Enviar</button>
            </form>
        </div>
      </section>
</main>