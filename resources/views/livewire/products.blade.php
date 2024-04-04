
<div class="mt-3">
    <form wire:submit="UploadProduct">
        <label>Product Name</label>
        <input type="text" class="form-control"wire:model="ProductName" placeholder="Product Name">
        <label>Product Description</label>
        <textarea class="form-control" wire:model="ProductDescription" rows="3"></textarea>
        <label>Product image</label>
        <input class="form-control" type="file" wire:model="ProductImage">
        <p>Select Categories</p>

        <button type="submit" class="btn btn-primary mt-3">Upload</button>
        </form>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product )
                <tr>
                    <td>{{ $product->ProductName }}</td>
                    <td>{{ $product->ProductDescription }}</td>
                    <td> <img src="{{ url('/photos'. $product->ProductImage) }}" /> </td>
                    </td>
                    <td><a class="btn btn-danger" wire:click="deleteProduct({{ $product['id'] }})">Delete</a></td>
                    <td><a class="btn btn-primary" wire:navigate ="editProduct"  href="{{ route('edit.product', ['id'=>$product->id]) }})">Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
</div>











    {{--
        <form wire:submit="UploadProduct">
        <input type="text" wire:model="ProductName">
        <input type="text" wire:model="ProductDescription">
        <input type="file" wire:model="ProductImage">
        <button type="submit">Save photo</button>
    </form> --}}

