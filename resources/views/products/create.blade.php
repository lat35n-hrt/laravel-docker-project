<h1>Create New Product</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf  <label for="name">Name:</label><br><input type="text" id="name" name="name" value="{{ old('name') }}" required><br><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description">{{ old('description') }}</textarea><br><br>

    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required><br><br>

    <button type="submit">Create</button>
</form>

<a href="{{ route('products.index') }}">Back to Products</a>