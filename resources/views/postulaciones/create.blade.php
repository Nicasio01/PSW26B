@extends('layout.app') 

@section('contenido')
<div class="max-w-screen-md mx-auto p-4 mt-20">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Registrar Postulación Manual</h2>

    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="id_usuario" class="block mb-2 text-sm font-medium text-gray-900">Candidato</label>
                <select id="id_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Seleccione el usuario...</option>
                    <option value="1">Candidato de Prueba 1</option>
                </select>
            </div>
            
            <div>
                <label for="id_oferta" class="block mb-2 text-sm font-medium text-gray-900">Oferta de Empleo</label>
                <select id="id_oferta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected>Seleccione la vacante...</option>
                    <option value="1">Desarrollador Laravel</option>
                </select>
            </div>

            <div>
                <label for="fecha_postulacion" class="block mb-2 text-sm font-medium text-gray-900">Fecha de Postulación</label>
                <input type="date" id="fecha_postulacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>

            <div>
                <label for="estado" class="block mb-2 text-sm font-medium text-gray-900">Estado Inicial</label>
                <select id="estado" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="Pendiente" selected>Pendiente</option>
                    <option value="En Revisión">En Revisión</option>
                    <option value="Aceptado">Aceptado</option>
                    <option value="Rechazado">Rechazado</option>
                </select>
            </div>
        </div>

        <div class="mb-6">
            <label for="comentario" class="block mb-2 text-sm font-medium text-gray-900">Comentarios Adicionales</label>
            <textarea id="comentario" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Notas del reclutador o mensaje del candidato..."></textarea>
        </div>

        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Registrar Postulación</button>
        <a href="{{ route('postulaciones.index') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
    </form>
</div>
@endsection