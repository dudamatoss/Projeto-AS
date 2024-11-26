

@extends ('layouts.base ')

@section('content')
<center>
<form class=" max-w-sm mx-auto" action="{{ url('produtos/' . $produto->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-5">
        <label class="form-label fw-bold" for="descricao">Description</label>
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            type="text" name="descricao" value="{{ $produto->descricao }}" placeholder="descricao" required>
    </div>
    <div class="mb-5">
        <label class="form-label fw-bold" for="preco">Price</label>
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            type="text" name="preco" value="{{ $produto->preco }}" placeholder="descricao" required>
    </div>
    <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900">Coach</label>
            <select name="categoria_id" id="categoria_id" required>
                <option value="">Selecione a categoria</option>
                @foreach ($categorias as $categoria)
                    @if($categoria->id === $produto->categoria->id)
                        <option value="{{ $categoria->id }}" selected>{{ $categoria->description }}</option>
                    @else
                        <option value="{{ $categoria->id }}">{{ $categoria->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit" class="submit-btn">Update
        Produto</button>
</form>

</div>
</center>
@endsection