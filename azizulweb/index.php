<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- java script file -->
<link rel="stylesheet" href="./nav.js">
<!-- font css link -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

    <!-- custome css file -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- bootstrap file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>
<?php include './menu.php' ?>
<!-- ====================start carousel area=================== -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img-web-azizul/chicago.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="./img-web-azizul/ny.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="./img-web-azizul/la.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- ====================end carousel area===================== -->

<!-- ===============start about area=============== -->

<section class="my-5">
<div class="text-center py-5">
<h2>About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
<img src="./img-web-azizul/song1.jpg" alt="song1" style="height: 400px; width:100%" class="img-fluid">
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<h2 class="text-uppercase display-4">i am azizul haque</h2>
<p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis facere non eum rerum! Placeat voluptas consequatur vel veritatis! Ratione numquam doloribus minus possimus! Sint repellendus asperiores deleniti voluptatem fuga minima.</p>
<a href="./about.php" class="btn btn-success">About Me</a>
</div>
</div>
</div>
</section>

<!-- ===============end about area=============== -->

<!-- =============start servicess area================ -->
<section class="my-5">
  <div class="py-5">
   <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="./img-web-azizul/song22.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="./img-web-azizul/song22.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card" style="width:400px">
  <img class="card-img-top" src="./img-web-azizul/song22.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
      </div>
    </div>
  </div>
</section>
<!-- =============end servicess area=================== -->

<!-- ================start gallery area===================== -->

<section class="my-5">
  <div class="py-5">
   <h2 class="text-center">Gallary</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  </div>
  <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
  <img src="./img-web-azizul/song23.jpg" class="img-fluid pb-3" style="width: 100%; height:400px">
  </div>
  </div>
  </div>

</section>

<!-- ================end gallery area===================== -->

<!-- =================start contact area================ -->

<section class="contact-area my-5">
<div class="py-5">
<h2 class="text-center">Contact Us</h2>
</div>
<div class="form-area w-50 m-auto">
<form action="./user.php" method="POST">
<div class="form-group">
<label for="user">UserName</label>
<input type="text" name="user" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label for="email">Email Id</label>
<input type="text" name="email" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label for="mobile">UserName</label>
<input type="tel" name="mobile" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<label for="comment">Comment</label>
<textarea name="comment" id="" cols="30" rows="5" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-success">submit</button>
</form>
</div>
</section>

<!-- =================end contact area================ -->

<!-- ============start footer area============ -->

<footer>
  <p class="p-3 bg-dark text-white text-center">@azizulhaque</p>
</footer>

<!-- ============start footer area============ -->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="./nav.js"></script>
</body>
</html>