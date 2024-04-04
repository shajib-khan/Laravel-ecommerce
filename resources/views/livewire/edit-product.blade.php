<div>
    <form wire:submit="editProduct">
        <label>Product Name</label>
        <input type="text" class="form-control"wire:model="ProductName" placeholder="Product Name">
        <label>Product Description</label>
        <textarea class="form-control" wire:model="ProductDescription" rows="3"></textarea>
        <label>Product image</label>
        <input class="form-control" type="file" wire:model="ProductImage">
        <p>Select Categories</p>
        <select >
          <option value=""></option>

          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endforeach
          </select><br>
        <button type="submit" class="btn btn-primary mt-3">Upload</button>
        </form>
</div>
