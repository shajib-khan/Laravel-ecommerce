@extends('layouts.app')
@section('content')
<div class="container">
    @if (session()->has('product'))
        <div class="mt-3">
            <div class="alert alert-success">
                {{ session()->get('product') }}
            </div>
        </div>
    @endif
    @if (session()->has('edit'))
        <div class="mt-3">
            <div class="alert alert-success">
                {{ session()->get('edit') }}
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="mt-5">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <form wire:submit="uploadProduct">
        <label>Product Name</label>
        <input type="text" class="form-control" wire:model="ProductName" placeholder="Product Name">

        <label>Product Description</label>
        <textarea class="form-control" wire:model="ProductDescription" rows="3"></textarea>

        <label>Product image</label>
        <input class="form-control" type="file" wire:model="ProductImage">

        <label>Product Price</label>
        <input class="form-control" type="number" wire:model="product_price">

        <label>Select Categories</label>
        <select wire:model="category_id">
            <option value="Select Category"</option>
                @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit" class="btn btn-primary mt-3">Upload</button>
    </form>
    @if (session()->has('delete'))
        <div class="alert alert-success mt-3">
            {{ session()->get('delete') }}
        </div>
    @endif
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Price</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->ProductName }}</td>
                    <td>{{ $product->ProductDescription }}</td>
                    <td> <img style="width:50px;" src="{{ Storage::url($product->ProductImage) }}" /></td>
                    <td>{{ $product->product_price }}</td>
                    <td><a class="btn btn-danger" wire:click="deleteProduct({{ $product['id'] }})">Delete</a></td>
                    <td><a class="btn btn-primary" wire:navigate ="editProduct"
                            href="{{ route('edit.product', ['id' => $product->id]) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
