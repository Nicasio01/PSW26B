@extends('layout.app')

@section('contenido')
<div class="max-w-screen-xl mx-auto p-4 mt-20">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Panel de Postulaciones</h2>
        <a href="{{ route('postulaciones.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Nueva Postulación</a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">Folio</th>
                    <th scope="col" class="px-6 py-3">Candidato</th>
                    <th scope="col" class="px-6 py-3">Oferta Aplicada</th>
                    <th scope="col" class="px-6 py-3">Fecha</th>
                    <th scope="col" class="px-6 py-3">Estado</th>
                    <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4 font-medium text-gray-900">POST-001</td>
                    <td class="px-6 py-4">Usuario 1</td>
                    <td class="px-6 py-4">IT Support</td>
                    <td class="px-6 py-4">2026-09-06</td>
                    <td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded border border-yellow-400">En Revisión</span></td>
                    <td class="px-6 py-4 text-center space-x-2">
                        <a href="#" class="font-medium text-green-600 hover:underline">Consultar</a>
                        <a href="#" class="font-medium text-blue-600 hover:underline">Editar</a>
                        <a href="#" class="font-medium text-red-600 hover:underline">Eliminar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection