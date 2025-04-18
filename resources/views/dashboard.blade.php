@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="flex flex-wrap gap-4 justify-evenly">
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div style="background-image: url('https://cloudfront-us-east-1.images.arcpublishing.com/infobae/HH3DFUJPYQDPXVPQO5KVMXOMZM.jpg')" class="w-full h-40 bg-cover rounded-t-lg"></div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                    Jugadores
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">
                                Aquí podrás ver todos los jugadores, crearlos, editarlos y eliminarlos.
                            </p>
                            <a href="{{ route('jugadores.index') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Ir al CRUD
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div style="background-image: url('https://www.golfencolombia.com/images/portafolio/imagen_id_88.webp')" class="w-full h-40 bg-cover rounded-t-lg"></div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                    Campos
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">
                                Aquí podrás ver todos los campos, crearlos, editarlos y eliminarlos.
                            </p>
                            <a href="{{ route('campos.index') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Ir al CRUD
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                        <div style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/58/Golfcart.JPG')" class="w-full h-40 bg-cover bg-center rounded-t-lg"></div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                    Reservas
                                </h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">
                                Aquí podrás ver todos las reservas, crearlas, editarlas y eliminarlas.
                            </p>
                            <a href="{{ route('reservas.index') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Ir al CRUD
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
