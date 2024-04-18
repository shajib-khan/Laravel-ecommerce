<div class="mt-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <form wire:submit="editProduct">
        <label>Product Name</label>
            <input type="text" class="form-control"wire:model="ProductName" placeholder="Product Name">
                 <label>Product Description</label>
                    <textarea class="form-control" wire:model="ProductDescription" rows="3"></textarea>
                <label>Product image</label>
            <input class="form-control" type="file" wire:model="ProductImage">

            <img src="{{ Storage::url($productImage) }}" alt="">
        <button type="submit" class="btn btn-primary mt-3">Upload</button>
 </form>
</div>
