<h1>Edit Book</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name/Title:</label><br>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required><br><br>

    <label for="description">Description:</label><br>
    <textarea name="description" id="description">{{ $product->description }}</textarea><br><br>

    <label for="price">Price:</label><br>
    <input type="number" name="price" id="price" value="{{ $product->price }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('products.index') }}">Back to Book List</a>