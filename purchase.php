<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "teach");

if (mysqli_connect_error()) {
  echo "<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script>";
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['purchase1'])) {
    $query1 = "INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    if (mysqli_query($con, $query1)) {
      $order_id = mysqli_insert_id($con);
      $query2 = "INSERT INTO `user_orders`(`order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
      $stmt = mysqli_prepare($con, $query2);
      if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'isii', $order_id, $Item_Name, $Price, $Quantity);
        foreach ($_SESSION['cart'] as $key => $values) {
          $Item_Name = $values['item_name'];
          $Price = $values['  price'];
          $Quantity = $values['Quantity'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo "<script>
      alert('Order Placed');
      window.location.href='landingpage.php';
      </script>";
      } else {
        echo "<script>
        alert('SQL Query prepare error');
        window.location.href='mycart.php';
        </script>";
      }
    } else {
      echo "<script>
    alert('SQL error');
    window.location.href='mycart.php';
    </script>";
    }
  }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['purchase'])) {
    $query1 = "INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    if (mysqli_query($con, $query1)) {
      $order_id = mysqli_insert_id($con);
      $query2 = "INSERT INTO `user_orders`(`order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
      $stmt = mysqli_prepare($con, $query2);
      if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'isii', $order_id, $Item_Name, $Price, $Quantity);
        foreach ($_SESSION['cart'] as $key => $values) {
          $Item_Name = $values['item_name'];
          $Price = $values['  price'];
          $Quantity = $values['Quantity'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo "<script>
      window.location.href='phonepe.php';
      </script>";
      } else {
        echo "<script>
        alert('SQL Query prepare error');
        window.location.href='mycart.php';
        </script>";
      }
    } else {
      echo "<script>
    alert('SQL error');
    window.location.href='mycart.php';
    </script>";
    }
  }
}
?>