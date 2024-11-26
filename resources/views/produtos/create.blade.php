
@extends('layouts.base')

@section('content')

<center>
    <form class=" max-w-sm mx-auto" action="{{ url('produtos') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="descricao" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <input type="text" name="descricao" id="descricao"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <div class="mb-5">
            <label for="preco" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
            <input type="text" name="preco" id="preco"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>
        <label for="categoria_id">Categoria</label>
            <br>
            <select id="categoria_id" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Escolha uma Categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id}}">{{ $categoria->description }}</option>
                @endforeach
            </select>

        <div class="p-5">
            <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit">Create Produto</button>
        </div>
    </form>
</center>
@endsection