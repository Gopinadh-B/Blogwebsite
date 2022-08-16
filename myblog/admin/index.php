<?php
session_start();
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
  	<div class="container">
  		<div class="admin-login">
  		<form method="post">
           <div class="mb-3">
             <label class="form-label">Admin name</label>
             <input type="text" class="form-control" name="adminName">
           </div>
           <div class="mb-3">
             <label  class="form-label">Password</label>
             <input type="password" class="form-control" name="adminPassword">
           </div>
           <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>
  	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if(isset($_POST["login"])){
	$name=$_POST["adminName"];
	$psd=$_POST["adminPassword"];
	if($name=="Gopi" && $psd==123){
		$_SESSION['admin'] = "Gopi";
		header("Location: post.php");
	}else{
		echo "Wrong credentials";
	}
}
?>