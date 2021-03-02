<h1>Create Product</h1>

<form action="{{ route('products.update',$product->id) }}" method="post">
    @csrf
    @method('put')
    Name : <input type="text" name="name" value="{{ $product->name }}">
    <br>
    Description : <input type="text" name="description" value="{{ $product->description }}">
    <br>
    Price : <input type="number" name="price" value="{{ $product->price }}">
    <br>
    <button type="submit">Save</button>
</form>
