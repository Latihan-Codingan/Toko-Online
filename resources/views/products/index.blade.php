<h1>List Products</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>Rp. {{ $product->price }}</td>
            <td>
                <a href="{{ route('products.edit',$product->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
            <tr>
                <td colspan="3">No Data</td>
            </tr>
        @endforelse
    </tbody>
    <a href="{{ route('products.create') }}">Add Product</a>
</table>
