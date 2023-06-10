<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-min mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex min-h-0 items-center justify-center bg-gray-100 dark:bg-gray-900">
                    <div class="mx-auto max-w-6xl px-2">
                        <div class="flex [&:hover>div]:w-16 [&>div:hover]:w-[50rem]">
                            <div
                                class="group relative h-96 w-[30rem] cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="h-full object-cover transition-all group-hover:rotate-0 group-hover:scale-110"
                                    src="{{ asset('images/jpg/Inscripciones-IUD-banner.jpg') }}" alt="" />
                                <div
                                    class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                                    <div class="absolute inset-x-5 bottom-6">
                                        <div class="flex gap-3 text-white">
                                            <div>
                                                <p class="font-sembold text-xl text-gray-100">Inscripciones!!</p>
                                                <p class="text-gray-300">Estudia con nosotros</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="h-full object-cover transition-all group-hover:rotate-0 group-hover:scale-110"
                                    src="{{ asset('images/jpg/Egresado_Consejo_Directivo.jpg') }}" alt="" />
                                <div
                                    class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                                    <div class="absolute inset-x-5 bottom-6">
                                        <div class="flex gap-3 text-white">
                                            <div>
                                                <p class="font-sembold text-xl text-gray-100">Beneficios Consejo
                                                    Directivo</p>
                                                <p class="text-gray-300">Informate de los beneficios</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="h-full object-cover transition-all group-hover:rotate-0 group-hover:scale-110"
                                    src="{{ asset('images/jpg/Egresado_Consejo_Academico.jpg') }}" alt="" />
                                <div
                                    class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                                    <div class="absolute inset-x-5 bottom-6">
                                        <div class="flex gap-3 text-white">
                                            <div>
                                                <p class="font-sembold text-xl text-gray-100">Beneficios Consejo
                                                    Academico</p>
                                                <p class="text-gray-300">Informate de los beneficios</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="group relative h-96 w-16 cursor-pointer overflow-hidden shadow-lg shadow-black/30 transition-all duration-200">
                                <img class="h-full object-cover transition-all group-hover:rotate-0 group-hover:scale-110"
                                    src="{{ asset('images/jpg/Banner_Deportes.jpg') }}" alt="" />
                                <div
                                    class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
                                    <div class="absolute inset-x-5 bottom-6">
                                        <div class="flex gap-3 text-white">
                                            <div>
                                                <p class="font-sembold text-xl text-gray-100">Se Deportista IUD</p>
                                                <p class="text-gray-300">Inscribite</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fixed bottom-10 right-10">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mr-5">
                <div class="card-dasboards shadow-lg rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title">Categorias</h5>
                        <p class="card-text">Crea Categorias para tus mejores publicaciones!.</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-primary">Ir a Categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-dasboards shadow-lg rounded-lg">
                    <div class="card-body">
                        <h5 class="card-title">Publicaciones</h5>
                        <p class="card-text">Crea y edita publicaciones personalizadas!.</p>
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">Ir a Publicaciones</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
