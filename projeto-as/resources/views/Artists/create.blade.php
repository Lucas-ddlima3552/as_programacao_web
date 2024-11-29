@extends('layouts.base')

@section('content')
    <div class="container mt-0">
        <form class="mx-auto bg-white mt-2 px-5" action="{{ url('artists') }}" method="POST" enctype="multipart/form-data" style="border-radius:10px; width:800px; margin-left:350px;">
            @csrf
            <div class="mb-5 mx-auto">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Nome do artista:</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5 mx-auto">
                <label for="biography" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Biografia:</label>
                <input type="text" name="biography" id="biography" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5 mx-auto">
                <label for="birth_year" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Ano de Nascimento::</label>
                <input type="number" name="birth_year" id="birth_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <br>
            <button type="submit" class="color-blue bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Criar Artista</button>
        </form>
    </div>
@endsection