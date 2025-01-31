<h1>Products</h1>

<a href="{{ route('products.create') }}">Create New Product</a> @if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
@endif

<ul>
    @foreach ($products as $product)
        <li>
            <h2>{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <a href="/products/{{$product->id}}">Show</a>
        </li>
    @endforeach
</ul>