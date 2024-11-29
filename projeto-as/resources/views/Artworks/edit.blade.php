@extends('layouts.base')

@section('content')

<div class="container">
        <form class="max-w-sm mx-auto"  action="{{ url(path: 'artworks/' . $artwork->id) }}"method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5 mx-auto">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900" style="margin-top: 80px; padding-top:10px;">Nome do Pokémon:</label>
                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5">
                <label for="creation_year" class="block mb-2 text-sm font-medium text-white">ano de criação:</label>
                <input type="number" name="creation_year" id="creation_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5">
                <label for="category" class="block mb-2 text-sm font-medium text-white">categoria:</label>
                <input type="text" name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-white">Imagem:</label>
                <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-5">
                <label for="artist_id" class="block mb-2 text-sm font-medium text-white">Artista:</label>
                <select name="artist_id" id="artist_id">
                    <option value="">Selecione um artista:</option>
                    @foreach ($artists as $artist)
                        <option value="{{$artist->id}}">{{$artist->nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Editar Pokémon</button>
        </form>
    </div>

@endsection