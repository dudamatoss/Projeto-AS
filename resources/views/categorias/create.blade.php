@extends('layouts.base')

@section('content')

<center>
    <form class=" max-w-sm mx-auto" action="{{ url('categorias') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <input type="text" name="description" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required>
        </div>

        <div class="p-5">
            <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit">Create Categoria</button>
        </div>
    </form>
</center>
@endsection