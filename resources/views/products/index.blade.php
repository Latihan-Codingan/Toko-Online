<h1>List Products</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>Rp. {{ $product->price }}</td>
        </tr>
        @empty
            <tr>
                <td colspan="3">Belum Ada Data</td>
            </tr>
        @endforelse
    </tbody>
</table>
