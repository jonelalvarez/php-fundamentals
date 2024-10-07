<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Discriminant of Quadratic Equation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php session_start(); ?>

	<div class="card text-center border-primary col-md-6 mx-auto mt-5 ">
		<div class="card-header">
		Fill in the input fields below
		</div>
		<div class="card-body">
			<h5 class="card-title" name="header">Welcome!</h5>

			<form action="" method="POST">
				<div class="col-md-4 mx-auto mt-3">
					<input type="text" class="form-control" name="userName" placeholder="Enter your username here">
				</div>
				<div class="col-md-4 mx-auto mt-3">
					<input type="password" class="form-control" name="passWord" placeholder="Enter your password">
				</div>
				<div class="col-md-4 mx-auto mt-3">
					<input type="submit" class="btn btn-primary" name="submitBtn" placeholder="Submit">
                    <button type="submit" class="btn btn-danger" name="logoutBtn">Logout</button> 
				</div>

                <div class="col-md-4 mx-auto mt-3" id="info">
                    
				</div>
			</form>

		</div>
	</div>

	<?php 
    
    if (isset($_SESSION['userName'])) {
         echo "<h5>User \"" . $_SESSION['userName'] . "\" is currently logged in. Wait for the user to log out first.</h3>";
    
         if (isset($_POST['logoutBtn'])) {
            session_start();
            session_unset(); 
            header('Location: login.php'); 
         }
    } else {
        if (isset($_POST['submitBtn'])) {
            $userName = $_POST['userName'];
            $passWord = md5($_POST['passWord']);
  
  
            $_SESSION['userName'] = $userName;
            $_SESSION['passWord'] = $passWord;
  
            echo "<h5>Hello there!</h3>";
            echo "Username: " . $userName . "<br>";
            echo "Password: " . $passWord . "<br>";
       }
  }

?>



</body>
</html>
