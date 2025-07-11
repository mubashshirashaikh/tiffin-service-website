<?php
$meal_name = $_POST['meal_name'] ?? '';
$price = $_POST['price'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Checkout</title></head>
<body>
<h1>Checkout</h1>
<p>Meal: <?php echo htmlspecialchars($meal_name); ?></p>
<p>Price: Rs. <?php echo htmlspecialchars($price); ?></p>
<form method="post" action="payment.php">
  <input type="hidden" name="meal_name" value="<?php echo htmlspecialchars($meal_name); ?>">
  <input type="hidden" name="price" value="<?php echo htmlspecialchars($price); ?>">
  <label for="name">Name:</label><input name="name" required><br>
  <label for="address">Address:</label><input name="address" required><br>
  <label for="payment_method">Payment Method:</label>
  <select name="payment_method" required>
    <option value="COD">Cash on Delivery</option>
  </select><br>
  <button type="submit">Pay</button>
</form>
</body>
</html>