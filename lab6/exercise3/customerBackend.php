<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  
  <style>
    <?php include './style.css'; ?>
  </style>

  <body>
    <div class="container" style="font: 1.5rem Arial">
      <h1>Receipt</h1>
      <?php
          $email = $_POST['email'];
          $password = $_POST['pass'];
          $item1 = $_POST['item-1'];
          $item2 = $_POST['item-2'];
          $item3 = $_POST['item-3'];
          $shipping = $_POST['shipping-choice'];

          if ($shipping == "Free 7-day") { 
            $shippingCost = "$0.00";
          } else if ($shipping == "$50.00 overnight") {
            $shippingCost = "$50.00";
          } else if ($shipping == "$5.00 3-day") {
            $shippingCost = "$5.00";
          }

          $item1total = $item1 * 50;
          $item2total = $item2 * 20;
          $item3total = $item3 * 75;

          $total = $item1total + $item2total + $item3total;

          echo "<h3>Welcome $email!</h3>";
          echo "<h3>Your password is $password</h3>";

          echo "<br>";
          echo "<br>";

          echo "<table border=1px solid>";
          echo "<tr>";
          echo "<td>&nbsp;</td>";
          echo "<td>Quantity</td>";
          echo "<td>Cost per Item</td>";
          echo "<td>Subtotal</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td>Desk</td>";
          echo "<td>$item1</td>";
          echo "<td>$50.00</td>";
          echo "<td>$item1total</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td>Chair</td>";
          echo "<td>$item2</td>";
          echo "<td>$20.00</td>";
          echo "<td>$$item2total.00</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td>Bookshelf</td>";
          echo "<td>$item3</td>";
          echo "<td>$75.00</td>";
          echo "<td>$$item3total.00</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td>Shipping</td>";
          echo "<td colspan='2'>$shipping</td>";
          echo "<td>$$shippingCost.00</td>";
          echo "</tr>";

          echo "<tr>";
          echo "<td colspan='3'>Total Cost</td>";
          echo "<td colspan='2'>$$total.00</td>";
          echo "</tr>";

          echo "</table";
      ?>
    </div>    
  </body>
</html>