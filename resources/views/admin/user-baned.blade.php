@extends('layouts.main')

@section('title','Usersbaned')

@section('content')
<h1>List User Baned</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users" class="btn btn-success me-2">Back</a>
</div>
<div class="mt-4">
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
            @foreach ($userbaned as $value)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->phone}}</td>
                <td>{{$value->address}}</td>
                <td>
                    <a href="/user-restore/{{$value->slug}}" class="btn btn-primary me-2">Restore</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
