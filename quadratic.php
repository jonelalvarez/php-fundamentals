<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Discriminant of Quadratic Equation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	
	<div class="card text-center border-primary col-md-6 mx-auto mt-5 ">
		<div class="card-header">
		Fill in the input fields below
		</div>
		<div class="card-body">
			<h5 class="card-title">Discriminant of a Quadratic Equation</h5>

			<form action="" method="POST">
				<div class="col-md-4 mx-auto mt-3">
					<input type="number" class="form-control" name="A" placeholder="Value of A here">
				</div>
				<div class="col-md-4 mx-auto mt-3">
					<input type="number" class="form-control" name="B" placeholder="Value of B here">
				</div>
				<div class="col-md-4 mx-auto mt-3">
					<input type="number" class="form-control" name="C" placeholder="Value of C here">
				</div>
				<div class="col-md-4 mx-auto mt-3">
					<input type="submit" class="btn btn-primary" name="submitBtn" placeholder="Submit">
				</div>
			</form>
			

		</div>
	</div>

	<?php
		if (isset($_POST['submitBtn'])) {
			$a = $_POST['A'];
			$b = $_POST['B'];
			$c = $_POST['C'];

			$discriminant = ($b * $b) - (4 * $a * $c);

			echo "<h3>The discriminant of the quadratic equation is: " . $discriminant . "</h3>";
		}
	?>



</body>
</html>
