<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    Name : <input type="text" name="name">
    <br>
    Description : <input type="text" name="description">
    <br>
    Price : <input type="number" name="price">
    <br>
    Image URL : <input type="text" name="image_url">
    <button type="submit">Save</button>
</form>
