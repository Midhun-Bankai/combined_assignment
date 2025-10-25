<?php
require 'db.php';
include 'header.php';

// Fetch all products
$products = mysqli_query($conn, "SELECT * FROM products");
?>

<!-- Hero Banner -->
<div class="bg-white py-5 shadow-sm mb-4 text-center">
  <div class="container">
    <h1 class="fw-bold text-primary mb-2">Welcome to Shopcart Demo</h1>
    <p class="text-muted fs-5">Explore our latest products and place your order easily!</p>
  </div>
</div>

<!-- Products Section -->
<div class="container mb-5">
  <h3 class="fw-semibold mb-4 text-center text-primary">Available Products</h3>
  <div class="row g-4 justify-content-center">
    <?php if(mysqli_num_rows($products) > 0): ?>
      <?php while($p = mysqli_fetch_assoc($products)): ?>
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="card product-card h-100 border-0 shadow-sm">
            <img src="<?= $p['image'] ? htmlspecialchars($p['image']) : 'https://via.placeholder.com/300x200?text=No+Image' ?>" 
                 class="card-img-top" alt="<?= htmlspecialchars($p['name']) ?>">
            <div class="card-body text-center">
              <h5 class="card-title fw-semibold"><?= htmlspecialchars($p['name']) ?></h5>
              <p class="card-text text-muted small"><?= htmlspecialchars($p['description']) ?></p>
              <h6 class="fw-bold text-success mb-3">₹ <?= number_format($p['price'], 2) ?></h6>
              <a href="product.php?id=<?= $p['id'] ?>" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p class="text-center text-muted">No products found.</p>
    <?php endif; ?>
  </div>
</div>

<?php include 'footer.php'; ?>
