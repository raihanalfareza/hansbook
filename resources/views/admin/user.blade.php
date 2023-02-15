@extends('layouts.main')

@section('title','Users')

@section('content')
<h1>List User</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/user-baned" class="btn btn-primary me-2">View User Delete</a>
    <a href="/user-registered" class="btn btn-success me-2">View New Registered</a>
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
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>
                    <a href="/user-detail/{{$value->slug}}" class="btn btn-primary me-2">Detail</a>
                    <a href="/user-ban/{{$value->slug}}" class="btn btn-danger me-2">Ban User</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
