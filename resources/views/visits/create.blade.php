<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nueva Visita') }}
        </h2>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-4">
                    <form action="{{ route('visits.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="date" class="block text-gray-700 dark:text-gray-200">Fecha:</label>
                            <input type="date" name="date" id="date" class="form-input w-full mt-1" required>
                        </div>

                        <div class="mb-4">
                            <label for="reason" class="block text-gray-700 dark:text-gray-200">Razón:</label>
                            <input type="text" name="reason" id="reason" class="form-input w-full mt-1" required>
                        </div>

                        <div class="mb-4">
                            <label for="diagnosis" class="block text-gray-700 dark:text-gray-200">Diagnóstico:</label>
                            <input type="text" name="diagnosis" id="diagnosis" class="form-input w-full mt-1" required>
                        </div>

                        <div class="mb-4">
                            <label for="treatment" class="block text-gray-700 dark:text-gray-200">Tratamiento:</label>
                            <input type="text" name="treatment" id="treatment" class="form-input w-full mt-1" required>
                        </div>

                        <div class="mb-4">
                            <label for="pet_id" class="block text-gray-700 dark:text-gray-200">Mascota:</label>
                            <select name="pet_id" id="pet_id" class="form-select w-full mt-1" required>
                                <option value="">Seleccione una mascota</option>
                                @foreach($pets as $pet)
                                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <a href="{{ route('visits.index') }}" class="bg-gray-500 dark:bg-gray-700 hover:bg-gray-600 dark:hover:bg-gray-800 text-white font-bold py-2 px-4 rounded mr-2">Cancelar</a>
                            <button type="submit" class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 dark:hover:bg-cyan-800 text-white font-bold py-2 px-4 rounded">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
