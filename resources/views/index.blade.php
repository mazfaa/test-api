<x-master>
  <x-slot name="content">
    <table class="table" id="product-table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">stok</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($records as $record)
          <tr>
            <th scope="row">{{ $record->id }}</th>
            <td>{{ $record->product_name }}</td>
            <td>@currency($record->price)</td>
            <td>{{ $record->stock }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </x-slot>
</x-master>