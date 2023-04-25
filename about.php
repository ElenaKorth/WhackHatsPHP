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
<body id="gradient">

<!-- Navbar -->
    
<div id="navone">
  <nav class="fixed-top nav-bg">
    <img src="https://drive.google.com/uc?export=view&id=1J9w89WRqfzLlnS8A2qI3LDbfU7UYAoBm" height="125px" width="210px"></img>
      <ul>
        <li><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.."></li>
        <li><a href="index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="everyday.php">Everyday Hats</a></li>
            <li><a class="dropdown-item" href="fashion.php">Fashion Hats</a></li>
            <li><a class="dropdown-item" href="costume.php">Costume Hats</a></li>
          </ul>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="#popup1"><i class="fa fa-shopping-cart" style="font-size:48px;color:white"></i></a></li>
      </ul>
  </nav>
</div>

<!-- icon banner -->

<br><br><br><br><br><br><br>

<div class="container-fluid" style="margin: 7.5%;">
  <i class="fa-solid fa-hat-wizard hat-icon"></i>
  <i class="fa-solid fa-hat-cowboy hat-icon"></i>
  <i class="fa-brands fa-redhat hat-icon"></i>
  <i class="fa-solid fa-graduation-cap hat-icon"></i>
</div>
   
<br><br>


<!-- Info -->

<div class="container-fluid" style="margin-left: 20%; margin-right:10%;">
  <div class="row">
    <div class="col-xs-12">
      <h1 style="color: white; font-size: 100px; ">About Whack Hats!</h1>
    </div>
  </div>
</div>
 

<div class="container-fluid"> 
  <div class="row">

    <div class="col-xs-6" style="margin-top: 50px;">
      <p>
        <h2 style=" margin-left:50%; margin-right:10%; color:white; text-indent:2ch;">
          Our company, Whack Hats, started in 1860 with our first order being Abraham Lincoln’s commission for the top hat he wore during his first inauguration. He wrote a letter to thank us. We have become inspired by Lincoln ever since, and we have started development for our new bulletproof hats! Check out our new releases <a href="everyday.html">here</a>!
        </h2>
        <h2 style=" margin-left:50%; margin-right:10%; color:white; text-indent:2ch;">
          Whack Hats has been flourishing ever since, and now we feature an array of hats. You can buy not only fashion hats, but also casual and costume hats.
        </h2>
      </p>
    </div>


    <!-- Letter -->

    <div class="col-xs-6" style="margin-top: 7%; height: 100px;">
      <div class="letter-image">

        <div class="animated-mail">
          <div class="back-fold"></div>

          <div class="letter">
            <div class="letter-context">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <img src="https://drive.google.com/uc?export=view&id=15suXFAqZaSJPKEVTcgXQz1ixGPb9Bm-L" height="100%" width="100%"></button>
            </div>
          </div>

          <div class="top-fold"></div>
          <div class="body"></div>
          <div class="left-fold"></div>
        </div>

        <div class="shadow"></div>
        <div class="arrow"></div>

      </div>
    </div>
  </div>
</div>


  

<div class="containerfluid">
  <img src="https://drive.google.com/uc?export=view&id=16akZdbEL9XufHJYnalRUQW0R9pZsAijI" width="900px" style="margin-left: 30%;">
</div>



    <!-- Footer -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#F97E1A" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,224C384,213,480,171,576,170.7C672,171,768,213,864,224C960,235,1056,213,1152,192C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
    <footer style="width: 100%; background-color: #F97E1A;">
      <div class="containerfluid mx-auto d-block" >
        <p style="text-align: center;">
          <a href="https://www.instagram.com/markiplier/?hl=en"><i class="fa-brands fa-instagram"  style="color: #ffffff; font-size: 40px;"></i></a>
          <a href="https://twitter.com/Beyonce"><i class="fa-brands fa-twitter"  style="color: #ffffff; font-size: 40px;"></i></a>
          <a href="https://www.youtube.com/channel/UCX6OQ3DkcsbYNE6H8uQQuVA"><i class="fa-brands fa-youtube" style="color: #ffffff; font-size: 40px;"></i></a>
          <a href="https://en.wikipedia.org/wiki/Hat"><i class="fa-brands fa-wikipedia-w" style="color: #ffffff; font-size: 38px;"></i></a></p>
        <p style="text-align: center; color: white;">definetly real copyright© to VeggieTales</p>
      </div>
    </footer>

<!-- End -->

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Cart</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			All items that have been "Added to Cart" would appear here with hatName, hatImg, and hatPrice all diplayed. There would also be a remove item button here. <br><br>
      There would be a "Check Out" button that would bring you to a page to fill out your info, which would be entered into the database's Customer and Order Tables.
		</div>
	</div>
</div>

<div id="parent1">
    <div id="parent2">
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">           
            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="fa-regular fa-circle-xmark"></i></button>
            <div class="modal-body">
              <img src="https://drive.google.com/uc?export=view&id=15suXFAqZaSJPKEVTcgXQz1ixGPb9Bm-L" height="100%" width="100%"> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <script src="https://kit.fontawesome.com/ecc25c0a3f.js" crossorigin="anonymous"></script>
  <script src="/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>