<h2>Edit Product</h2>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}">
    <input type="text" name="price" value="{{ $product->price }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <button type="submit">Update</button>
</form>
