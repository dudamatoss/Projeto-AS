@extends ('layouts.base ')

@section('content')
<center>
<form class=" max-w-sm mx-auto" action="{{ url('categorias/' . $categoria->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-5">
        <label class="form-label fw-bold" for="description">Description</label>
        <input
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            type="text" name="description" value="{{ $categoria->description }}" placeholder="description" required>
    </div>
    
    <button class="border-pink-500 bg-pink-300 p-2 rounded-lg border-2" type="submit" class="submit-btn">Update
        Categoria</button>
</form>

</div>
</center>
@endsection