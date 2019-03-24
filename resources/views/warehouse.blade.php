@extends('partials.master')
@section('main')
<form action="/warehouses/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$warehouse->id}}" >
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$warehouse->name}}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" value="{{$warehouse->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
