
<div class="mt-3">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    </div>
@endif
    <form wire:submit="save">
    <label for="exampleFormControlInput1" class="form-label">Categories</label>
    <input type="text" class="form-control"wire:model="category_name" id="exampleFormControlInput1" placeholder="Category">
    <button class="btn btn-primary mt-3">Submit</button>
    </form>
</div>