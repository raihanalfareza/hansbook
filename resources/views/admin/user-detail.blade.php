@extends('layouts.main')

@section('title','userdetail')
@section('content')
<h1>User Detail</h1>

<div class="mt-4 d-flex justify-content-end">
    @if ($user->status == 'inactive')
    <a href="/user-approve/{{$user->slug}}" class="btn btn-primary me-2">Approve User</a>
    <a href="/user-registered" class="btn btn-secondary me-2">Back</a>
    @else
    <a href="/users" class="btn btn-secondary me-2">Back</a>
    @endif
</div>
<div class="mt-4">
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
    <div class="mb-3">
        <infut class="from-control">
            <label for="" class="form-label">username</label>
            <input type="text" class="form-control" readonly value="{{$user->username}}">
    </div>
    <div class="mb-3">
        <infut class="from-control">
            <label for="" class="form-label">phone</label>
            <input type="text" class="form-control" readonly value="{{$user->phone}}">
    </div>
    <div class="mb-3">
        <infut class="from-control">
            <label for="" class="form-label">address</label>
            <input type="text" class="form-control" readonly value="{{$user->address}}">
    </div>
    <div class="mb-3">
        <infut class="from-control">
            <label for="" class="form-label">status</label>
            <input type="text" class="form-control" readonly value="{{$user->status}}">
    </div>
</div>
@endsection