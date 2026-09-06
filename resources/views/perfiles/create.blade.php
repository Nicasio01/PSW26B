@extends('layout.app') 

@section('contenido')
<div class="max-w-screen-md mx-auto p-4 mt-20">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Crear Perfil Profesional</h2>

    <form action="#" method="POST">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="id_usuario" class="block mb-2 text-sm font-medium text-gray-900">Usuario Asignado</label>
                <select id="id_usuario" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5">
                    <option selected>Selecciona el usuario...</option>
                    <option value="1">Usuario 1</option>
                </select>
            </div>
            
            <div>
                <label for="profesion" class="block mb-2 text-sm font-medium text-gray-900">Profesión u Oficio</label>
                <input type="text" id="profesion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5" placeholder="Ej. Ingeniero de Software" required>
            </div>

            <div>
                <label for="experiencia" class="block mb-2 text-sm font-medium text-gray-900">Años de Experiencia</label>
                <input type="number" id="experiencia" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5" placeholder="Ej. 3" required>
            </div>

            <div>
                <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900">Ciudad</label>
                <input type="text" id="ciudad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 block w-full p-2.5" placeholder="Ej. Guadalajara" required>
            </div>
        </div>

        <div class="mb-6">
            <label for="habilidades" class="block mb-2 text-sm font-medium text-gray-900">Habilidades (Separadas por coma)</label>
            <textarea id="habilidades" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500" placeholder="PHP, Laravel, Tailwind..."></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="cv">Subir CV (PDF)</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="cv" type="file">
        </div>

        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Guardar Perfil</button>
    </form>
</div>
@endsection