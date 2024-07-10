<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mis Visitas') }}
        </h2>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Fecha</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Razón</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Diagnóstico</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Tratamiento</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Nombre de la Mascota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visits as $visit)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->date }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->reason }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->diagnosis }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->treatment }}</td>
                                {{-- <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ $visit->pet->name }}</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
