<?php
require 'db.php';
$id = intval($_GET['id'] ?? 0);
$res = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
if(!$res || mysqli_num_rows($res)==0) die('Product not found');
$p = mysqli_fetch_assoc($res);

// Add to cart
if($_SERVER['REQUEST_METHOD']==='POST'){
    $qty = max(1,intval($_POST['qty'] ?? 1));
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
    if(isset($_SESSION['cart'][$id])) $_SESSION['cart'][$id] += $qty;
    else $_SESSION['cart'][$id] = $qty;
    header('Location: cart.php'); 
    exit;
}

include 'header.php';
?>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm rounded-4">
        <img src="<?= $p['image'] ? htmlspecialchars($p['image']) : 'https://via.placeholder.com/400x300?text=No+Image' ?>" 
             class="card-img-top" alt="<?= htmlspecialchars($p['name']) ?>">
        <div class="card-body">
          <h3 class="card-title fw-bold"><?= htmlspecialchars($p['name']) ?></h3>
          <p class="card-text text-muted"><?= htmlspecialchars($p['description']) ?></p>
          <h4 class="text-success fw-bold mb-3">₹ <?= number_format($p['price'],2) ?></h4>

          <form method="post" class="d-flex align-items-center gap-2">
            <input type="number" name="qty" value="1" min="1" class="form-control w-25">
            <button type="submit" class="btn btn-primary flex-grow-1">Add to Cart</button>
          </form>

          <div class="mt-3">
            <a href="index.php" class="btn btn-outline-secondary btn-sm">Back to Shop</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
