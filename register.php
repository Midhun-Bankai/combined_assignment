<?php
require 'db.php';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // simple validation
    if ($name == '' || $email == '' || $pass == '') {
        $msg = 'All fields are required!';
    } else {
        // check if email already exists
        $check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
        if (mysqli_num_rows($check) > 0) {
            $msg = 'Email already registered. Try another one.';
        } else {
            // insert new user
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
            if (mysqli_query($conn, $sql)) {
                $msg = 'Registration successful! <a href="login.php">Login now</a>.';
            } else {
                $msg = 'Error: ' . mysqli_error($conn);
            }
        }
    }
}

include 'header.php';
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-sm p-4 rounded-4">
        <h3 class="text-center text-primary fw-bold mb-4">Register</h3>

        <?php if($msg != ''): ?>
          <div class="alert alert-info"><?= $msg ?></div>
        <?php endif; ?>

        <form method="post">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
          </div>
        </form>

        <p class="text-center mt-3">
          Already have an account? <a href="login.php">Login here</a>.
        </p>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
