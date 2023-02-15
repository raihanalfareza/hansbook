<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Kadalll</title>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">HansBook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kategori
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Fiksi</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="content">
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://img.freepik.com/free-vector/gradient-winter-solstice-illustration_23-2149184801.jpg?size=626&ext=jpgZ" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.fajarpendidikan.co.id/wp-content/uploads/2021/12/fakta-unik-singa.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6PGMYb0Dk6FPEyO2TODIxiLXehEqxtfI_2e0vao_r7CkI5iWtOAQfvE-HsEN46txI4JU&usqp=CAU" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="container">
    <h4>HELLO-BOOK</h4>
    <div class="row">
        <div class="col-lg-4">
            <h4></h4>
            <button type="button" class="w-50 btn btn-outline-primary">Primary</button>
        </div>
        <div class="col-lg-8">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat ab libero rem voluptatibus illum autem voluptate dolorem nesciunt, iusto recusandae eveniet sapiente pariatur laboriosam itaque incidunt quos et quidem. Et.
            </p>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row text-center">
            <h2>buku terpopuler</h2>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
  <img src="https://www.gramedia.com/blog/content/images/2019/02/dilan-1990.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dillan</h5>
    <p class="card-text">Dia adalah Dilanku Tahun 1990 edisi 1 berwarna biru muda dengan tokoh Dilan dan sepeda motornya yang dijadikan covernya. </p>
    <a href="#" class="btn btn-primary">Klik di sini</a>
  </div>
</div>

            </div>
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
  <img src="https://upload.wikimedia.org/wikipedia/id/5/56/Harry_potter_deathly_hallows_US.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Harry potter</h5>
    <p class="card-text">Harry Potter adalah seri tujuh novel fantasi yang dikarang oleh penulis Inggris </p>
    <a href="#" class="btn btn-primary">Klik di sini</a>
  </div>
</div>

        </div>
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
  <img src="https://cdn.gramedia.com/uploads/items/9786020654959_badai_pasti_berlalu_cov.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Badai pasti berlalu</h5>
    <p class="card-text">Badai Pasti Berlalu adalah sebuah novel berbahasa Indonesia karya Marga T yang diterbitkan pada tahun 1974. </p>
    <a href="#" class="btn btn-primary">Klik di sini</a>
  </div>
</div>
<div class="container">
    <div class="row text-center">
        <h2>kontak admin</h2>
    </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">message</label>
            <textarea class="form-control" id="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
         </form>
      </div>
</div>
        </div>    
        </div>
    </div>
<footer class="py-2 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Create By <a href="" class="text-white-fw-bold" style="text-decoration:none" target="_blank">Raihan</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>