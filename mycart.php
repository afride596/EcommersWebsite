<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heart Beats | Music Company</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <link rel="stylesheet" href="./myCartPageCSS/cartStyle.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="landingpage.php">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div>
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
        }
        ?>

        <!-- <a href="mycart.php" class="btn btn-outline-success">MY CART(<?php echo $count; ?>)</a> -->
      </div>
    </div>
    </div>
  </nav>




  <div class="container">
    <div class="row">
      <div class="col-lg-12  text-center  border rounded bg-light my-5 ">
        <h1>MY CART</h1>
      </div>
      <div class="col-lg-9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Serial No. </th>
              <th scope="col">Item Name </th>
              <th scope="col">Item Price </th>
              <th scope="col">Quantity </th>
              <th scope="col">Total </th>
              <th scope="col"> </th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $sr = $key + 1;
                echo "
        <tr>
        <td>$sr</td>
        <td>$value[item_name]</td>
        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
        <td>
        <form action='manage_cart.php' method='post'>
        <input  class=' text-center iquantity' name='Mod_Quantity'  onchange='this.form.submit();' type='number'  value='$value[Quantity]' min='1' max='10'>
        <input type='hidden' name='item_name' value='$value[item_name]'>
        </form>
        </td>
        <td class='itotal'></td>
        <td>
        <form action='manage_cart.php' method='post'>
        <button name='Remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='item_name' value='$value[item_name]'>
        </form>
        </td>
        </tr>
        ";
              }
            } ?>

          </tbody>
        </table>
      </div>

      <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
          <h4> Grand Total :</h4>
          <h5 class='text-right' id='gtotal'></h5>
          <br>
          <?php if (
            isset($_SESSION['cart']) &&
            count($_SESSION['cart']) > 0
          ) { ?>
            <form action="purchase.php" method="post">
              <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label>Phone Number</label>
                <input type="tel" name="phone_no" class="form-control" required>
              </div>
              <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" id="address" required>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Cash On Delivery
                </label>
              </div>
              <button class="btn btn-primary btn-block" name="purchase1">Make Purchase</button>
              

              <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Pay Online
                </label>
              </div>
              <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
            </form>

          <?php } ?>
        </div>

      </div>
    </div>
  </div>
  <script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
        gt = gt + (iprice[i].value) * (iquantity[i].value);
      }
      gtotal.innerText = gt;
    }

    subTotal();
  </script>
</body>

</html>