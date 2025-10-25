<?php
require 'db.php';
$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);

    if ($email == '' || $pass == '') {
        $msg = 'Please enter both email and password.';
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass' LIMIT 1";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) == 1) {
            $_SESSION['user'] = mysqli_fetch_assoc($res);
            header('Location: index.php');
            exit;
        } else {
            $msg = 'Invalid email or password.';
        }
    }
}

include 'header.php';
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-sm p-4 rounded-4">
        <h3 class="text-center text-primary fw-bold mb-4">Login</h3>

        <?php if($msg != ''): ?>
          <div class="alert alert-danger"><?= $msg ?></div>
        <?php endif; ?>

        <form method="post">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Login</button>
          </div>
        </form>

        <p class="text-center mt-3">
          Don't have an account? <a href="register.php">Register now</a>.
        </p>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
