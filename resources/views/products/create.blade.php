<h2>Add Product</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="price" placeholder="Price">
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>
