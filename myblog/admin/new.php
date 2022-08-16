<?php
session_start();
include("../db.php");
if(isset($_SESSION["admin"]) && $_SESSION["admin"]=="Gopi"){
if(isset($_GET["success"])){
  echo "new post recorded";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="adminstyle.css">
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
          <a class="nav-link active" aria-current="page" href="post.php">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="new.php">New</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  	<div class="container">
      <form>
  		 <div class="mb-3">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" name="title">
       </div>
       <div class="mb-3">
          <label  class="form-label">Content</label>
          <textarea class="form-control"  rows="3" name="content"></textarea>
       </div>
       <input type="submit" class="btn btn-primary" name="submit" value="Publish">
     </form>
  	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  if(isset($_GET["submit"])){
    $tit= $_GET["title"]; 
    $cont=$_GET["content"];
    if($tit =="" && $cont==""){
      echo "You didn't write anything";
    }else{
      $sql="INSERT INTO posts (title, content) VALUES('".$tit."', '".$cont."')";
    if(!mysqli_query($conn, $sql)){
      echo "Something went wrong";
    }else{
      header("Location: new.php?success");
    }
  }
    }
  }else{
    header("Location: index.php");
  }
?>