@extends('partials.master')
@section('main')

<h1>Products</h1>

@if(count($products))
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td><a href="">Edit</a> <a href="">Delete</a></td>
            </tr>
        @endforeach

    </tbody>
</table>
@else
No products in database.
@endif

@endsection
