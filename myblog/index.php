<?php
session_start();
include("db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google font-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">

    <title>My Blog</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark mynav">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="blog.jpg" width="100px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--Content here -->
   <div class="container">
     <div class="row">
        <div class="col-12 col-lg-8">
          <?php 
            $sql="SELECT * FROM posts";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0 ){
               while($row=mysqli_fetch_assoc($result)){
                echo "<br>";
                  echo "<div class='post'>";
                  echo "<h4 class='title'>".$row["title"]."</h4><hr>
                  <p class='content'>".$row["content"]."</p>";
                  echo "</div>";
                }
            }
          ?>
        </div>
        <div class="col-4" id="moveaside">
          <?php 
            $sql="SELECT * FROM posts";
            $result=mysqli_query($conn, $sql);
            echo "<br>";
            echo "<div class='post'>";
            if(mysqli_num_rows($result)>0 ){
               while($row=mysqli_fetch_assoc($result)){
                  echo "<h4 class='title'>".$row["title"]."</h4><hr>";
                }
            }
            echo "</div>";
          ?>
        </div>
    </div>
  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>