<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Registro de alumnos') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-7">
                <!-- Table -->
                <div>
                    <div class="overflow-x-auto">
                        <table class="min-w-max w-full table-auto">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID.
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Cedula
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>

                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($alumnos as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm justify-center">{{ $item->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm justify-center">{{ $item->cedula }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm justify-center">{{ $item->nombre }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm justify-center">
                                        <x-jet-secondary-button>
                                            <a href="{{ route('alumnos.edicion', $item->id) }}">
                                                {{ _('Editar') }}
                                            </a>
                                            <div class="w-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>
                                        </x-jet-secondary-button>
                                        <x-jet-secondary-button wire:click="eliminarAlumno({{ $item->id }})">
                                            {{ _('Eliminar') }}
                                            <div class="w-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                  </svg>
                                            </div>
                                        </x-jet-secondary-button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center py-5">

                            <a type="button" href="{{ route('alumnos.registro') }}" class="w-full  bg-gray-500 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-blue-600 transition duration-200 each-in-out">Registrar alumno</a>
                
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>