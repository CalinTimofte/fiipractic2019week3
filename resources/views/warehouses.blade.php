@extends('partials.master')
@section('main')

<h1>Warehouses <a href="/warehouses/add"><button type="button" class="btn btn-primary float-right">Add</button></a></h1>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Product Types</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($warehouses as $warehouse)
            <tr>
                <th scope="row">{{$warehouse->id}}</th>
                <td>{{$warehouse->name}}</td>
                <td>{{$warehouse->address}}</td>
                <td>{{count($warehouse->products)}}</td>
                <td>{{$warehouse->created_at}}</td>
            <td>
            <a href="/warehouses/{{$warehouse->id}}"><button class="btn btn-success">Edit</button></a>
                <form action="/warehouses/delete/{{$warehouse->id}}" method="post">@csrf<button type="submit" class="btn btn-danger">Delete</button></form></td>
            </tr>
        @endforeach

    </tbody>
</table>

@endsection
