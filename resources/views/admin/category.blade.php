@extends('layouts.main')

@section('title','Category')

@section('content')
<h1>category list</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/category-add" class="btn btn-info"> Add Category</a>
</div>
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>name</th>
                <th>action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($category as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="/category-edit/{{$item->slug}}" class="btn btn-primary"> Edit</a>
                    <a href="/category-delete/{{$item->slug}}" class="btn btn-danger"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
