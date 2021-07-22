<!DOCTYPE html>
<html>
  <head>
    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
    	.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

    </style>
  </head>
  <body>
  <?php
      require 'parameters.php';
      require 'connexion/connexion.php';
      if (isset($_GET['id']) && isset($_GET['fill']) && isset($_GET['ball'])) {
          $id = $_GET['id'];
          $tableName = $_GET['ball'];
          $whereColone = $_GET['fill'];
          $sqlPrice = "SELECT price FROM price LIMIT 1 ";
          $priceResult = $conn->query($sqlPrice);
          $price = $priceResult->fetch_assoc();

  ?>

    <section>
      <div class="product">
        <img
          src="https://i.imgur.com/EHyR2nP.png"
          alt="The cover of Stubborn Attachments"
        />
        <div class="description">
          <h3>Stubborn Attachments</h3>
          <h5>$ <?= $price['price']??62 ?></h5>
        </div>
      </div>
      <form action="create-checkout-session.php" method="POST">
          <input type="hidden" name="id" value="<?= $id ?>">
          <input type="hidden" name="colonne" value="<?= $whereColone ?>">
          <input type="hidden" name="table" value="<?= $tableName ?>">
        <center><button style="margin-bottom: 5px;padding-bottom: 1px" class="btn btn-primary" type="submit">Checkout</button></center>
      </form>
    </section>

  <?php
      }
  ?>
  </body>
</html>