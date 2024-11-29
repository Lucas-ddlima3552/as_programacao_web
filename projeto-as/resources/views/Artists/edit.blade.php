@extends('layouts.base')

@section('content')

<div class="container">
        <form class="max-w-sm mx-auto"  action="{{ url(path: 'artists/' . $artist->id) }}"method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5 mx-auto">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Nome do artista:</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5 mx-auto">
                <label for="biography" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Biografia::</label>
                <input type="text" name="biography" id="biography" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5 mx-auto">
                <label for="birth_year" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Ano de nascimento:</label>
                <input type="number" name="birth_year" id="birth_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
            <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editar Pokémon</button>
        </form>
    </div>

@endsection
