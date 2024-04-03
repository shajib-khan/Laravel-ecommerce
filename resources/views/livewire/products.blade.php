<div class="container mt-5">
    @if(session()->has('product'))
    <div class="alert alert-success">
        {{ session()->get('product') }}
    </div>
@endif
    <form wire:submit="UploadProduct">
        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
<input type="text" class="form-control" id="exampleFormControlInput1"wire:model="product_name" placeholder="Product Name">
<label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
<textarea class="form-control" id="exampleFormControlTextarea1"wire:model="Product_description" rows="3"></textarea>
<p>Select Categories</p>
<select >
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
    @endforeach
    </select>

      <button type="button" class="btn btn-primary">Upload</button>
    </form>


</div>

