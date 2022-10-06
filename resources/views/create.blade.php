<x-master>
  <x-slot name="content">
    <form action="{{ route('product') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="product">Nama Produk</label>
        <input type="text" name="product_name" class="form-control" id="product" aria-describedby="emailHelp" placeholder="Nama Produk">
      </div>
      <div class="form-group">
        <label for="price">Harga Produk</label>
        <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Harga Produk">
      </div>
      <div class="form-group mb-4">
        <label for="stock">Stok</label>
        <input type="number" name="stock" class="form-control" id="stock" aria-describedby="emailHelp" placeholder="Stok Produk">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </x-slot>
</x-master>