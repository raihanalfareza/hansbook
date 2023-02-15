
@extends('layouts.main')

@section('title','Books')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Add Book</h1>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <label for="book_code" class="form-label">Book Code</label>
    <input type="text" name="book_code" id= "book_code" class="w-50 form-control" placeholder="Bookscode">
    class="form"-control" value={{'$Books_>title'}}">
    <label for="title" class="form-label">title</label>
    <input type="text" name="title" id= "title" class="w-50 form-control" placeholder="Title">
    <input type="file" name="image" id= "image" class="w-50 form-control" placeholder="image">
    <label for="categories">Category</label> 
    <select name='categories' id="categories" class="form-control" multiple="multiple">
        @foreach($categories as $item)
        <option value="{{$item->item}}">
            {{$item->name}}</option>
            @endforeach
</select>
    <button type="submit" class="mt-2 btn btn-primary">save</button>
</from>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script>$(document).ready(function() {
    $('.2').select2();
});</script>
@endsection






