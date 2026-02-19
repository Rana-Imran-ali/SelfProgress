<h2>Products List</h2>
<a href="{{ route('products.create') }}">Add Product</a>

@foreach($products as $product)
    <p>
        {{ $product->name }} - ${{ $product->price }} <br>
        {{ $product->description }}

        <a href="{{ route('products.edit', $product->id) }}">Edit</a>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach
