<?php
include 'includes/header.php';

if (isset($_POST['submit'])) {
  # code...
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, md5($_POST['password']));
  $ip_address = mysqli_real_escape_string($conn, $_POST['ip_address']);
  $updated = date('Y.m.d');


  # code.........

  $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

  if (mysqli_num_rows($select) > 0) {
    # code...
    $row = mysqli_fetch_assoc($select);
    $_SESSION['uid'] = $row['uid'];
    header('location: my-account.php');
  } else {
    # code.....
    $message[] = 'Incorrect email or password';
  }
}
?>

<div class="mx-auto col-md-10 mt-5 mb-4 shadow rounded p-4">

  <div class="mx-auto col-md-12 rounded p-2 mb-2">
    <p class="h4">
      Welcome back, Please Login to continue with your Account
      <?php // $_SESSION['first_name'] 
      ?>
    </p>
  </div>

  <div class="mx-auto col-md-12 row border rounded text-center mb-5">
    <div class="col-md-6">
      <button class="btn"><i class="bi-google bi"></i></button>
    </div>
    <div class="col-md-6 bg-black">
      <button class="btn text-white"><i class="bi-github bi"></i></button>
    </div>
  </div>

  <?php

  if (isset($message)) {
    // code...
    foreach ($message as $message) {
      // code...
      $messages = '
      <div class="mx-auto col-md-11 border rounded alert alert-danger p-2 text-center mb-2">
        <p class="text-center align-items-md-center">
          <i class="bi-exclamation-circle bi float-end"></i>
          ' . $message . ' 
        </p>
      </div>
      ';
      echo "$messages";

    }
  }
  ?>

  <form action="" method="post">
    <!-- PHONE, EMAIL & PASSWORD -->
    <div class="col-md-12">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4">
    </div>
    <div class="col-md-12">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="inputPassword4">
    </div>

    <!-- HIDDEN INPUT -->
    <input type="hidden" class="form-control" value="<?php echo "$ip_address"; ?>" name="ip_address" id="inputZip">


    <!-- BUTTON FOR SUBMIT -->
    <div class="col-12 mt-2">
      <button type="submit" class="btn btn-primary mx-auto p-2 col-12" name="submit">Sign in</button>
    </div>
  </form>
  <!-- DON'T HAVE AN ACCOUNT -->
  <div class="mt-2 text-center">
    <p>Don't Have an Account
      <a href="signup" class="btn-primary text-primary">
        SignUp
      </a>
    </p>
  </div>

  </form>
</div>