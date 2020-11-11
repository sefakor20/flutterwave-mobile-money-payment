<?php

function refId() {
  $prefix = 'ref_';
  $code = uniqid($prefix, true);
  return $code;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Flutterwave Payment Integration</title>
</head>
<body>
<div class="text-center mt-5">
  <h4 class="page-heading">Make Payment with Flutterwave</h4>
</div>
  <div class="row">
    <div class="col-md-6 mt-5 offset-3">
      <div class="card card-default">
        <div class="card-body">
          <form action="submits/process-payment.php" method="post" id="paymentForm">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
              </div>
            </div>
            <div>
              <input type="hidden" name="payment_options" value="mobilemoneyghana">
              <input type="hidden" name="logo" value="http://localhost/codes/tut/flutterwave-payment/logo.png">
              <input type="hidden" name="title" value="Raf IT Solution">
              <input type="hidden" name="country" value="GH">
              <input type="hidden" name="currency" value="GHS">
              <input type="hidden" name="ref" value="<?php echo refId(); ?>">
              <input type="hidden" name="phonenumber" id="phonenumber" value="0548828183">
              <input type="hidden" name="pay_button_text" value="Complete Payment" /> 
              <input type="hidden" name="successurl" value="http://localhost/codes/tut/flutterwave-payment/sucess.php?status=success">
              <input type="hidden" name="failureurl" value="http://localhost/codes/tut/flutterwave-payment/failed.php?status=failed">
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="amount">Amount to Pay</label>
              <input type="number" class="form-control" id="amount" name="amount">
            </div>
            <div class="form-group">
              <label for="description">Payment For</label>
              <select name="description" class="form-control" id="description" required>
                <option value="" class="selected">Select payment option</option>
                <option value="1">Donation</option>
                <option value="2">School Fees</option>
              </select>
            </div>
            <div class="form-group text-center">
              <button type="submit" id="btn-of-destiny" class="btn btn-primary">Pay Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap Js Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>