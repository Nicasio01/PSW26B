@extends('layout.app') 

@section('contenido')
<div class="max-w-screen-md mx-auto p-4 mt-20">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Registrar Nuevo Usuario</h2>
    
    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre</label>
                <input type="text" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ej. Usuario" required>
            </div>
            <div>
                <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900">Apellido</label>
                <input type="text" id="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ej. Uno" required>
            </div>
            <div>
                <label for="correo" class="block mb-2 text-sm font-medium text-gray-900">Correo Electrónico</label>
                <input type="email" id="correo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="usuario@ejemplo.com" required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Contraseña</label>
                <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div>
                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">Teléfono</label>
                <input type="tel" id="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="33 1234 5678" required>
            </div>
            <div>
                <label for="id_rol" class="block mb-2 text-sm font-medium text-gray-900">Rol del Sistema</label>
                <select id="id_rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Selecciona un rol...</option>
                    <option value="1">Administrador</option>
                    <option value="2">Candidato</option>
                    <option value="3">Reclutador</option>
                </select>
            </div>
        </div>

        <div class="mb-6">
            <span class="block mb-2 text-sm font-medium text-gray-900">Estado de la cuenta</span>
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <input id="estado_activo" type="radio" value="1" name="estado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" checked>
                    <label for="estado_activo" class="ml-2 text-sm font-medium text-gray-900">Activo</label>
                </div>
                <div class="flex items-center">
                    <input id="estado_inactivo" type="radio" value="0" name="estado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                    <label for="estado_inactivo" class="ml-2 text-sm font-medium text-gray-900">Inactivo</label>
                </div>
            </div>
        </div>

        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar Usuario</button>
        <a href="{{ route('usuarios.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection