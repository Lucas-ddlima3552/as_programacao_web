@extends('layouts.base')

@section('content')

<div class="flex flex-wrap justify-center mt-10">
    @foreach($artists as $artist)
    

    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full bg-teal-900 p-8 flex-col">
            <div class="flex flex-col items-center pb-10">
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{$artist->name}}</h5>
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{$artist->biography}}</h5>
                <h5 class="mb-1 text-xl font-medium text-gray-900">{{$artist->birth_year}}</h5>
                <div class="flex mt-4 md:mt-6">
                    <a href="{{ url('artists/'.$artist->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Editar</a>
                    <form action="{{ url('artists/'.$artist->id) }}" name="image" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
