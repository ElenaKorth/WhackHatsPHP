<?php
  include_once 'dbh.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
  </head>
<body>

<!-- Navbar -->
    
<div id="navone">
  <nav class="fixed-top nav-bg">
    <img src="https://drive.google.com/uc?export=view&id=1J9w89WRqfzLlnS8A2qI3LDbfU7UYAoBm" height="125px" width="210px"></img>
      <ul>
        <li><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.."></li>
        <li><a href="index.html">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="everyday.html">Everyday Hats</a></li>
            <li><a class="dropdown-item" href="fashion.html">Fashion Hats</a></li>
            <li><a class="dropdown-item" href="costume.html">Costume Hats</a></li>
          </ul>
        </li>
        <li><a href="about.html">About</a></li>
        <li><a href="#"><i class="fa fa-shopping-cart" style="font-size:48px;color:white"></i></a></li>
      </ul>
  </nav>
</div>
 
<!-- Banner -->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <iframe src="https://drive.google.com/uc?export=view&id=152i9TyRjBdfdVeuBrCD8C9Pcl93Fb5Rm" class="d-block w-100" alt="..." width="100%" height ="20%"></iframe>
    </div>
  </div>
</div>
<div class="container-fluid banner">

  <div class="container-fluid">
    <div class="row plscenter">
      <div class="col">
        <img style="padding-left:50px;" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" height="350px">
      </div>
      <div class="col">
        <br>
        <h1 style="color: white;" id="b-h1">Hats</h1>
        <h1 style="color: white;" id="b-h1">Hats...</h1>
      </div>
    </div>
  </div>
   
  <div class="container-fluid">
    <div class="row">
      <div class="col">    
        <ul> 
          <br>    
          <h4 style="color: white;" id="and-more">And More</h4>
        </ul>
        <ul>     
          <h1 style="color: white;" id="b-h1">Hats!</h1>
        </ul>
      </div>
      <div class="col">
        <img src="https://drive.google.com/uc?export=view&id=1CU2s1FunSbmDRDXc2GdTf_7UalWIyP4Q" height="375px">
      </div>
    </div>
  </div>

</div>

<!-- Waves -->
        
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF99CF" fill-opacity="1" d="M0,0L40,48C80,96,160,192,240,197.3C320,203,400,117,480,90.7C560,64,640,96,720,138.7C800,181,880,235,960,218.7C1040,203,1120,117,1200,106.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FF99CF" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,133.3C320,96,400,64,480,80C560,96,640,160,720,202.7C800,245,880,267,960,240C1040,213,1120,139,1200,128C1280,117,1360,171,1400,197.3L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<br><br>

<!-- New Arrival Cards -->

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1 style="color:white; font-size:150px;">New Arrivals</h1>
    </div>
  </div>
</div>

<div class="containerfluid mx-auto d-block">

  <div class="row">
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1VlbimLQcZfiGf7Rg11BNNm-HEHppDdDL" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1f_nOnWRgEUz1DPVURVKlr9J8NWOBHJrI" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=123flg3e4p2tXPaRGU3CuLK4cVmFF3Ais" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
  </div>
        
</div>

        

<div class="containerfluid mx-auto d-block" style="margin-top: 30px;">

  <div class="row">
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1pzoSq1mLtQnhe6viOuQP_YtuHgOw8L4N" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article></div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1Tok_cZxwtgAhKAhVfb8TR693L2aU4Kfd" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1iX-b_fTI_hBDQmsxpbXA6go_poVjIgfG" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
  </div>
</div>

<!-- Waves -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff4b7c" fill-opacity="1" d="M0,128L40,154.7C80,181,160,235,240,213.3C320,192,400,96,480,58.7C560,21,640,43,720,74.7C800,107,880,149,960,181.3C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff4b7c" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,133.3C320,96,400,64,480,80C560,96,640,160,720,202.7C800,245,880,267,960,240C1040,213,1120,139,1200,128C1280,117,1360,171,1400,197.3L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
 

  <!-- <img src="https://drive.google.com/uc?export=view&id=1NldvbdfRcjn8Ekf4XZHJOQzUbJ3wrD9W" height="500px"> -->

<!-- Carousel -->


    <div class="containerfluid potato" style="height: 725px;">
      <div class="row">
        <div class="col-md-3">
          <div class="carousel slide car-center" id="slides" data-bs-ride="carousel" style="width: 420px; margin-left: 350px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Fashion Hat"></button>
              <button type="button" data-bs-target="#slides" data-bs-slide-to="1" aria-label="Costume Hat"></button>
              <button type="button" data-bs-target="#slides" data-bs-slide-to="2" aria-label="Everyday Hat"></button>
              <button type="button" data-bs-target="#slides" data-bs-slide-to="3" aria-label="Fashion Hat"></button>
              <button type="button" data-bs-target="#slides" data-bs-slide-to="4" aria-label="Costume Hat"></button>
              <button type="button" data-bs-target="#slides" data-bs-slide-to="5" aria-label="Everyday Hat"></button>
            </div>
            
            <div class="carousel-inner container">
              <div class="carousel-item active">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1uWbK4nF6_HTJexAENE0mDajG9MVwW5nX" alt="Fashion Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" alt="Costume Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" alt="Everyday Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="" alt="Fashion Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" alt="Costume Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" alt="Everyday Hat">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img class="image" src="https://drive.google.com/uc?export=view&id=1w4Uxe8iT3RsQVTKgMfTGvssosZVC3tcy" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="middle">
                    <div class="text">John Doe</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
          <h1 style="font-size: 600%;">Try On Station</h1>
          <p></p>
        </div>
      </div>
    </div>
    <!-- Testimonials -->
    
<!-- reveal -->
    <div class="container" style="margin-top: 5%;">
      <div class="row"></div>
      <h1>Testimonials</h1>
      <div class="cards">
        <div class="text-card">
          <h3>Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="text-card">
          <h3>Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="text-card">
          <h3>Title</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      </div>
    </div>
 
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="hsla(9, 98%, 62%, 1)" fill-opacity="1" d="M0,0L40,48C80,96,160,192,240,197.3C320,203,400,117,480,90.7C560,64,640,96,720,138.7C800,181,880,235,960,218.7C1040,203,1120,117,1200,106.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="hsla(9, 98%, 62%, 1)" fill-opacity="1" d="M0,256L40,234.7C80,213,160,171,240,133.3C320,96,400,64,480,80C560,96,640,160,720,202.7C800,245,880,267,960,240C1040,213,1120,139,1200,128C1280,117,1360,171,1400,197.3L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
 

  <!-- Best Sellers -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 style="color:white; font-size:150px;">Best Sellers</h1>
      </div>
    </div>
  </div>

<div class="containerfluid mx-auto d-block">

  <div class="row">
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1VlbimLQcZfiGf7Rg11BNNm-HEHppDdDL" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    <div class="col-lg-4">
      <div class="container">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1f_nOnWRgEUz1DPVURVKlr9J8NWOBHJrI" class="card-img" height="200px" alt="Sample photo">
        <div class="overlay">
          <div class="textthree">Hello World</div>
        </div>
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    </div>
    <div class="col-lg-4">
      <div class="container">
      <article id="rcorners1">
          <img src="https://drive.google.com/uc?export=view&id=123flg3e4p2tXPaRGU3CuLK4cVmFF3Ais" class="card-img" height="200px" alt="Sample photo">
            <div class="overlay">
              <div class="textthree">Hello World</div>
            </div>
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    </div>
  </div>
</div>


<div class="containerfluid mx-auto d-block" style="margin-top: 30px;">

  <div class="row">
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1pzoSq1mLtQnhe6viOuQP_YtuHgOw8L4N" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article></div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1Tok_cZxwtgAhKAhVfb8TR693L2aU4Kfd" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
    <div class="col-lg-4">
      <article id="rcorners1">
        <img src="https://drive.google.com/uc?export=view&id=1iX-b_fTI_hBDQmsxpbXA6go_poVjIgfG" class="card-img" height="200px" alt="Sample photo">
        <div class="texttwo">
          <br>
          <button class="btn-center"><a href="" style="color: #fff">Shop Now</a></button>
        </div>
      </article>
    </div>
  </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="hsla(9, 98%, 62%, 1)" fill-opacity="1" d="M0,0L40,48C80,96,160,192,240,197.3C320,203,400,117,480,90.7C560,64,640,96,720,138.7C800,181,880,235,960,218.7C1040,203,1120,117,1200,106.7C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>

<!-- End -->

  <script src="/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>