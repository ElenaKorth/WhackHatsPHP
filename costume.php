<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>

<div id="navone" class="">
  <nav class="fixed-top nav-bg">
    <img src="https://drive.google.com/uc?export=view&id=1J9w89WRqfzLlnS8A2qI3LDbfU7UYAoBm" height="125px" width="210px"></img>
      <ul>
        <li><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.."></li>
        <li><a href="index.html">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="shop.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
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