@extends('layouts.app')
@section('content')
<div class="container mt-3">
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
    <form wire:submit="UpdateCategory">
    <label for="exampleFormControlInput1" class="form-label">Categories</label>
    <input type="text" class="form-control"wire:model="category_name" id="exampleFormControlInput1" placeholder="Category">
    <button class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
