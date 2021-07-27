<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar alumnos') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-7">
                <x-jet-form-section submit="registrAlumno">
                    <x-slot name="title">
                        {{ __('Editar alumno') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('Registrar alumno.') }}
                    </x-slot>
                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="nombre" value="{{ __('Nombre') }}" />
                            <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="nombre" autofocus />
                            <x-jet-input-error for="nombre" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-jet-label for="cedula" value="{{ __('Cedula') }}" />
                            <x-jet-input id="cedula" type="text" class="mt-1 block w-full" wire:model.defer="cedula" autofocus />
                            <x-jet-input-error for="cedula" class="mt-2" />
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