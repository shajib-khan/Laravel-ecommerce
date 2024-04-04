
<div class="mt-3">
    @if (session()->has('categoryUpdate'))
    <div class="alert alert-success">
        {{ session('categoryUpdate') }}
    </div>
@endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <form wire:submit="newCategory">
    <label for="exampleFormControlInput1" class="form-label">Categories</label>
    <input type="text" class="form-control"wire:model="category_name" id="exampleFormControlInput1" placeholder="Category">
    <button class="btn btn-primary mt-3">Submit</button>
    </form>
    @if(session()->has('msg'))
    <div class="alert alert-success mt-3">
        {{ session()->get('msg') }}
    </div>
@endif
    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">Category Name</th>
            <th scope="col">Erase</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category )
            <tr>
                <td>
                    {{ $category->category_name }}
                </td>
                <td><a class="btn btn-danger" wire:click="DeleteCategories({{ $category['id'] }})">Delete</a></td>
                <td><a class="btn btn-primary" wire:navigate ="EditPost"  href="{{ route('edit.category', ['id'=>$category->id]) }})">Edit</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      {{ $categories->links() }}
</div>
