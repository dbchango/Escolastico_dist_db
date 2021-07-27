<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar materias') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-7">
                <x-jet-form-section submit="registrarNota">
                    <x-slot name="title">
                        {{ __('Registrar materias') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Registrar notas.') }}
                    </x-slot>
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="nota1" value="{{ __('Nota 1') }}" />
                            <x-jet-input id="nota1" type="number" step="0.01" max="20.00" min="0.0" class="mt-1 block w-full" wire:model.defer="nota1" autofocus />
                            <x-jet-input-error for="nota1" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="nota2" value="{{ __('Nota 2') }}" />
                            <x-jet-input id="nota2" type="number" step="0.01" max="20.00" min="0.0" class="mt-1 block w-full" wire:model.defer="nota2" autofocus />
                            <x-jet-input-error for="nota2" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="nota3" value="{{ __('Nota 3') }}" />
                            <x-jet-input id="nota3" type="number" step="0.01" max="20.00" min="0.0" class="mt-1 block w-full" wire:model.defer="nota3" autofocus />
                            <x-jet-input-error for="nota3" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="alumno_id" class="block text-sm font-medium text-gray-700"></label>
                            <select wire:model.defer="alumno_id" id="alumno_id" name="alumno_id" autocomplete="alumno_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($alumnos as $item)
                                    <option value="{{ $item->id }}">{{ _($item->nombre) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="materia_id" class="block text-sm font-medium text-gray-700"></label>
                            <select wire:model.defer="materia_id" id="materia_id" name="materia_id" autocomplete="materia_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($materias as $item)
                                    <option value="{{ $item->id }}">{{ _($item->nombre) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </x-slot>

                    <x-slot name="actions">
                        <x-jet-button class="ml-2">

                            {{ __('Registrar') }}
                        </x-jet-button>

                    </x-slot>

                </x-jet-form-section>
            </div>
        </div>
    </div>
</div>