<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HansBook | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">  
</head>
<style>
    .main{
        height: 100vh;

    }
    .sidebar{
        background-color:green;
    }
    .sidebar a{
        text-decoration: none;
        padding: 10px 20px;
        color:white;
        display:block;
    }
    .sidebar a:hover{
        background-color:orange;
    }
    .sidebar a.active{
        background-color: orange;
        border-right:solid 2px orange;
    }
    .books{
        background-color: green;
    }
    .category{
        background-color: green;
    }
    .user{
        background-color: green;
    }

    .card-data{
        border-radius: 5px;
        padding: 15px 40px;
        border:solid 1px;
        color:#fff;
    }
    .card-data i{
         font-size: 50px;
    }
    .desc{
        font-size: 30px;
    }
    .count{
        font-size: 25px;
    }


    

</style>
  <body>
  <div class="main d flex flex-column justify-content-between">

      <nav class="navbar navbar-expand-lg bg-warning">
          <div class="container">
              <a class="navbar-brand" href="#">HansBook</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
            <div class='body-main h-100'>
                <div class="row g-0 h-100">
                    <div class="col-lg-2 p-3 collapse d-lg-block sidebar" id="navbarSupportedContent">
                        @if(Auth::user()->roles_id == 1)

                        <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class= 'active' @endif>Dashboard </a>
                        <a href="/users" @if(request()->route()->uri == 'users') class= 'active' @endif>Users</a>
                        <a href="/category" @if(request()->route()->uri == 'category') class= 'active' @endif>Category</a>
                        <a href="/books" @if(request()->route()->uri == 'books') class= 'active' @endif>Books</a>
                        <a href="/hanslog" @if(request()->route()->uri == 'hanslog') class= 'active' @endif>Hanslogs</a>
                        <a href="/logout" class="position-absolute bottom-0 start-0">Logout</a>
                        @else
                        <a href="/profile">profile</a>
                        <a href="/logout" class="position-absolute bottom-0 start-0">Logout</a>
                        @endif
                        </div>
                        <div class="col-lg-10 p-3 content">
                            @yield('content')                      
                            </div>
                        </div>
                    </div>
                </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>