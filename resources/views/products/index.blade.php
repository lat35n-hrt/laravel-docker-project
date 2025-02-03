<h1>Products</h1>

<a href="{{ route('products.create') }}">Create New Product</a> @if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
@endif

<table>

    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><a href="/products/{{$product->id}}">Show</a></td>
            <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
            <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
            </td>
        </tr>
    @endforeach

</table>