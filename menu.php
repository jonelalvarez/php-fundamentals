<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php session_start(); ?>

	<div class="card text-center border-primary col-md-6 mx-auto mt-5 ">
		<div class="card-header">
		Food Eatery
		</div>
		<div class="card-body">
			<h5 class="card-title" name="header">MENU</h5>

			<form action="" method="POST">
				<div class="card col-md-4 mx-auto mt-3">
                <table class="simpletable-bordered table-bordered">
                        <thead>
                            <tr>                    
                            <th>Item</th>
                            <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                    
                            <td>Burger</td>
                            <td>50</td>
                            </tr>
                            <tr>                           	
                            <td>Fries</td>
                            <td>75</td>
                            </tr>
                            <tr>                        
                            <td>Steak</td>
                            <td>150</td>
                            </tr>
                        </tbody>
                        </table>
				</div>
        
				<div class="col-md-4 mx-auto mt-3">
                    <select class="form-select" aria-label="Default select example" name="item">
                        <option selected>Select order</option>
                        <option value="burger">Burger - ₱50</option>
                        <option value="fries">Fries - ₱75</option>
                        <option value="steak">Steak - ₱150</option>
                    </select>
				</div>
                
                <div class="col-md-4 mx-auto mt-3">                
                    <input type="number" class="form-control" name="quantity" placeholder="Quantity" required>
				</div>

                <div class="col-md-4 mx-auto mt-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">₱</span>
                        <input type="text" class="form-control" name="payment" placeholder="Enter payment" required>
                    </div>
				</div>

				<div class="col-md-4 mx-auto mt-3">
					<input type="submit" class="btn btn-primary" name="submitBtn" value="Submit">
				</div>
			</form>

            <!-- Receipt Section -->
            <div class="col-md-4 mx-auto mt-3" id="receipt">
                <?php
                    if (isset($_POST['submitBtn'])) {
                        $prices = [
                            'burger' => 50,
                            'fries'  => 75,
                            'steak'  => 150
                        ];

                        $item = $_POST['item'];
                        $quantity = (int)$_POST['quantity'];
                        $payment = (float)$_POST['payment'];
                        
                        $totalPrice = $prices[$item] * $quantity;
                        
                        $change = $payment - $totalPrice;

                        $currentDateTime = date('Y-m-d H:i:s');

                        echo "<h5>Receipt</h5>";
                        echo "Item: " . ucfirst($item) . "<br>";
                        echo "Quantity: " . $quantity . "<br>";
                        echo "Total Price: ₱" . number_format($totalPrice, 2) . "<br>";
                        echo "Payment: ₱" . number_format($payment, 2) . "<br>";
                        
                        if ($change > 0) {
                            echo "Change: ₱" . number_format($change, 2) . "<br>";
                            echo "Date & Time: " . $currentDateTime . "<br>";
                        } else {
                            echo "<h5 style='color: red;'>Sorry, balance is not enough.<h5/>";

                        }
                    }
                ?>
            </div>
		</div>
	</div>
</body>
</html>
