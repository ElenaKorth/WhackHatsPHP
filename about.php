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

    
    <div id="navone">
      <nav class="fixed-top nav-bg">
        <img src="https://drive.google.com/uc?export=view&id=1J9w89WRqfzLlnS8A2qI3LDbfU7UYAoBm" height="125px" width="210px"></img>
          <ul>
            <li>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
            </li>
              <li><a href="index.php">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" 
                  href="shop.html" 
                  role="button" 
                  data-bs-toggle="dropdown" 
                  aria-expanded="false">
                  Shop
                </a>
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
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="hsla(288, 55%, 55%, 1)" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,154.7C384,139,480,149,576,176C672,203,768,245,864,266.7C960,288,1056,288,1152,272C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> 
   
  <br><br><br><br><br><br><br>


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
        <div class="col-xs-6" style="margin-top: 7%;">
          <div class="letter-image">
            <div class="animated-mail">
              <div class="back-fold"></div>
                <div class="letter">
                  <div class="letter-context">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  <img src="https://drive.google.com/uc?export=view&id=15suXFAqZaSJPKEVTcgXQz1ixGPb9Bm-L" height="100%" width="100%"></button>
                  
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                          <img src="https://drive.google.com/uc?export=view&id=15suXFAqZaSJPKEVTcgXQz1ixGPb9Bm-L" height="100%" width="100%"> 
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                          </div>
                        </div>
                      </div>
                    </div>
            
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

  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(255, 125, 105)" fill-opacity="1" d="M0,96L40,133.3C80,171,160,245,240,256C320,267,400,213,480,192C560,171,640,181,720,192C800,203,880,213,960,224C1040,235,1120,245,1200,234.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(255, 125, 105)" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,154.7C384,139,480,149,576,176C672,203,768,245,864,266.7C960,288,1056,288,1152,272C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  
</body>
</html>