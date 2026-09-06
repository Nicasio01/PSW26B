@extends('layout.app') 

@section('contenido')
<div class="max-w-screen-md mx-auto p-4 mt-20">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Crear Rol de Sistema</h2>

    <form action="#" method="POST">
        <div class="mb-6">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre del Rol</label>
            <input type="text" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ej. Administrador" required>
        </div>

        <div class="mb-6">
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900">Descripción</label>
            <textarea id="descripcion" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Define los permisos y alcances del rol..."></textarea>
        </div>

        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Guardar Rol</button>
        <a href="{{ route('roles.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection