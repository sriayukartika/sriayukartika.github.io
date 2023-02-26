<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="container">
    <!--Jumbotron -->
    <div class="p-5 mb-4 rounded-3" style="background-color:pink;">
    <div class="container-fluid py-5">
    <h2 align="center">Yongsan International School of Seoul<h2>
    <h2 align="center">서울용산국제학교<h2>
    </div>
    </div>
    <!--akhir jumbotron-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">집</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form-daftar.php">새목록</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-siswa.php">등록자</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">로그인</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="sc.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
</br>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    <br>
        <div class="card-group">
  <div class="card">
    <img src="assets/eskul.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Yongsan International School of Seoul</h5>
      <p class="card-text">Here are some extracurriculars at  Yongsan International School of Seoul.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/visi.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Yongsan International School of Seoul</h5>
      <p class="card-text">Please read  Yongsan International School of Seoul vision and mission.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="assets/jurusan.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> Yongsan International School of Seoul</h5>
      <p class="card-text">Various kinds of study programs Yongsan International School of Seoul</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</br>    
      
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
        <?php endif; ?>

        

    </body>
</html>