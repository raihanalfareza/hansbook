@extends('layouts.main')

@section('title','userregistered')
@section('content')
<h1>List User Registered</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users" class="btn btn-success me-2">Approve User List</a>
</div>
<div class="mt-4">
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <td>UserName</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($userRegistered as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->phone}}</td>
                <td>
                    <a href="/user-detail/{{$item->slug}}" class="btn btn-primary me-2">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection