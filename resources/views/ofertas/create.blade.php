@extends('layout.app') 

@section('contenido')
<div class="max-w-screen-md mx-auto p-4 mt-20">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Publicar Oferta de Empleo</h2>

    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <!-- Cajas de texto estándar -->
            <div>
                <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900">Título de la Vacante</label>
                <input type="text" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ej. Desarrollador PHP" required>
            </div>

            <div>
                <label for="empresa" class="block mb-2 text-sm font-medium text-gray-900">Empresa</label>
                <input type="text" id="empresa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ej. Sermex Consultores" required>
            </div>

            <!-- Campo numérico -->
            <div>
                <label for="salario" class="block mb-2 text-sm font-medium text-gray-900">Salario Mensual</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <span class="text-gray-500">$</span>
                    </div>
                    <input type="number" id="salario" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-8 p-2.5" placeholder="15000.00" required>
                </div>
            </div>

            <!-- Selector de fecha -->
            <div>
                <label for="fecha_publicacion" class="block mb-2 text-sm font-medium text-gray-900">Fecha de Publicación</label>
                <input type="date" id="fecha_publicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            <!-- Listas desplegables -->
            <div>
                <label for="id_categoria" class="block mb-2 text-sm font-medium text-gray-900">Categoría</label>
                <select id="id_categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Selecciona una categoría...</option>
                    <option value="1">Tecnología y Software</option>
                    <option value="2">Administración</option>
                </select>
            </div>
            
            <div>
                <label for="tipo_empleo" class="block mb-2 text-sm font-medium text-gray-900">Tipo de Empleo</label>
                <select id="tipo_empleo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="Tiempo Completo">Tiempo Completo</option>
                    <option value="Medio Tiempo">Medio Tiempo</option>
                    <option value="Remoto">Remoto</option>
                </select>
            </div>
        </div>

        <div>
            <label for="ubicacion" class="block mb-2 text-sm font-medium text-gray-900">Ubicación</label>
            <input type="text" id="ubicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-6" placeholder="Ej. El Salto, Jalisco" required>
        </div>

        <!-- Área de texto -->
        <div class="mb-6">
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900">Descripción Detallada</label>
            <textarea id="descripcion" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Escribe los requisitos, responsabilidades y beneficios de la vacante..."></textarea>
        </div>

        <!-- Casilla de verificación -->
        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input id="destacada" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
            </div>
            <label for="destacada" class="ml-2 text-sm font-medium text-gray-900">Marcar como oferta destacada</label>
        </div>

        <!-- Botones de opción (Radio Buttons) para Estado -->
        <div class="mb-6">
            <span class="block mb-2 text-sm font-medium text-gray-900">Estado de la Vacante</span>
            <div class="flex items-center space-x-4">
                <div class="flex items-center">
                    <input id="estado_activa" type="radio" value="Activa" name="estado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" checked>
                    <label for="estado_activa" class="ml-2 text-sm font-medium text-gray-900">Activa</label>
                </div>
                <div class="flex items-center">
                    <input id="estado_inactiva" type="radio" value="Inactiva" name="estado" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                    <label for="estado_inactiva" class="ml-2 text-sm font-medium text-gray-900">Inactiva</label>
                </div>
            </div>
        </div>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Publicar Oferta</button>
        <a href="{{ route('ofertas.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection