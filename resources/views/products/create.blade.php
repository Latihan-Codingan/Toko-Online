<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="post">
    @csrf
    Name : <input type="text" name="name">
    <br>
    Description : <input type="text" name="description">
    <br>
    Price : <input type="number" name="price">
    <br>
    <button type="submit">Save</button>
</form>
