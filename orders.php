<?php
require 'db.php';
if(!isset($_SESSION['user'])) { 
    header('Location: login.php'); 
    exit; 
}
$uid = intval($_SESSION['user']['id']);
$ords = mysqli_query($conn, "SELECT * FROM orders WHERE user_id=$uid ORDER BY created_at DESC");

include 'header.php';
?>

<!-- Orders Section -->
<div class="container my-5">
  <h2 class="text-center text-primary fw-bold mb-4">My Orders</h2>

  <?php if(mysqli_num_rows($ords) > 0): ?>
    <?php while($o = mysqli_fetch_assoc($ords)): ?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white fw-semibold">
          Order #<?= $o['id'] ?> — Placed on <?= htmlspecialchars($o['created_at']) ?>
        </div>
        <div class="card-body">
          <p><strong>Total:</strong> ₹ <?= number_format($o['total'], 2) ?></p>
          <p><strong>Items:</strong></p>
          <ul class="list-group list-group-flush">
          <?php
          $its = mysqli_query($conn, "
            SELECT oi.qty, oi.price, p.name 
            FROM order_items oi 
            LEFT JOIN products p ON p.id = oi.product_id 
            WHERE oi.order_id = " . intval($o['id'])
          );
          while($it = mysqli_fetch_assoc($its)): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span><?= htmlspecialchars($it['name']) ?> × <?= intval($it['qty']) ?></span>
              <span class="fw-semibold text-success">₹<?= number_format($it['price'], 2) ?></span>
            </li>
          <?php endwhile; ?>
          </ul>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <div class="alert alert-info text-center">
      You have not placed any orders yet.
    </div>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
