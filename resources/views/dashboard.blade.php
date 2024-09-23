<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('img/adim.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Administrador</h5>
                                <p class="card-text">Planifica, organiza y dirige recursos para
                                    alcanzar objetivos, controla el progreso, gestiona el personal, toma decisiones
                                    informadas, facilita la comunicación y fomenta la innovación dentro de la
                                    organización.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</x-app-layout>
