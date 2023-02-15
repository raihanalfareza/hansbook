@extends('layouts.main')

@section('title','Dashboard')

@section('content')
<h3> welcome,{{Auth::user()->username}}!</h3>
<div class="row mt-4"> 
    <div class="col-4 books card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-book"></i>
            </div>
            <div class="col-6 d-flex flex-column justify content-center align-items-end">
                <div class="desc">
                Book
                </div>
                <div class="count">
                {{$book_count}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="category card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-bookmarks"></i>
            </div>
            <div class="col-6 d-flex flex-column justify content-center align-items-end">
                <div class="desc">
                Category
                </div>
                <div class="count">
                {{$category_count}}
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-4">
        <div class="user card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-person"></i>
            </div>
            <div class="col-6 d-flex flex-column justify content-center align-items-end">
                <div class="desc">
                User
                </div>
                <div class="count">
                {{$user_count}}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <th>no</th>
                <th>Username</th>
                <th>Book title</th>
                <th>HansDate</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
            <td colspan="7" class="text-center"-> No Data </td>
        </thead>
    </table>
</div>

@endsection

