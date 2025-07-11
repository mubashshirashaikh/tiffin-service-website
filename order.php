<?php
$meal_name = $_GET['meal_name'] ?? '';
$price = $_GET['price'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Order Summary</title></head>
<body>
<h1>Order Summary</h1>
<p>Meal: <?php echo htmlspecialchars($meal_name); ?></p>
<p>Price: Rs. <?php echo htmlspecialchars($price); ?></p>
<form method="post" action="checkout.php">
  <input type="hidden" name="meal_name" value="<?php echo htmlspecialchars($meal_name); ?>">
  <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
  <button type="submit">Proceed to Checkout</button>
</form>
</body>
</html>