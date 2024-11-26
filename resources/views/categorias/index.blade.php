@extends('layouts.base')

@section('content')
<div class="flex items-start">
    <div class="py-8 mb-5 p-4">
        <a href="{{ url('categorias/create')}}"
            class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
            Categoria</a>
    </div>
</div>


<div class="flex flex-wrap gap-20 justify-center mt-10">
    @foreach($categorias as $entity)

        <center>

            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow p-4">
                <div class="flex flex-col items-center pb-10">
                    <h6 class="mb-1 text-xl font-medium text-gray-900">{{$entity->description}}</h6>

                    <a href="{{ url('categorias/' . $entity->id . '/edit') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-dark border-pink-500 bg-pink-300 p-2 rounded-lg border-2 ">Editar</a>
                    <form action="{{ url('categorias/' . $entity->id) }}" method="POST">
                        <br>
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Remover</button>
                    </form>
                </div>
            </div>

        </center>
    @endforeach
</div>
@endsection