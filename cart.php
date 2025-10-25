<?php
require 'db.php';
$cart = $_SESSION['cart'] ?? [];
$items = [];
$total = 0;

if($cart){
    $ids = implode(',', array_map('intval', array_keys($cart)));
    $res = mysqli_query($conn, "SELECT * FROM products WHERE id IN ($ids)");
    while($row = mysqli_fetch_assoc($res)){
        $row['qty'] = $cart[$row['id']];
        $row['subtotal'] = $row['qty'] * $row['price'];
        $total += $row['subtotal'];
        $items[] = $row;
    }
}

include 'header.php';
?>

<div class="container my-5">
  <div class="bg-white p-4 rounded-4 shadow-sm">
    <h2 class="text-center text-primary fw-bold mb-4">Your Shopping Cart</h2>

    <?php if(empty($items)): ?>
      <div class="alert alert-info text-center">
        Your cart is empty. <a href="index.php" class="alert-link">Shop now</a>
      </div>
    <?php else: ?>
      <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
          <thead class="table-primary">
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($items as $it): ?>
            <tr>
              <td><?= htmlspecialchars($it['name']) ?></td>
              <td><?= intval($it['qty']) ?></td>
              <td>₹ <?= number_format($it['price'], 2) ?></td>
              <td class="fw-semibold text-success">₹ <?= number_format($it['subtotal'], 2) ?></td>
            </tr>
          <?php endforeach; ?>
          <tr class="table-light fw-bold">
            <td colspan="3" class="text-end">Total:</td>
            <td class="text-success">₹ <?= number_format($total, 2) ?></td>
          </tr>
          </tbody>
        </table>
      </div>

      <div class="text-end mt-4">
        <form action="place_order.php" method="post">
          <button class="btn btn-primary btn-lg px-4" type="submit">Place Order</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php include 'footer.php'; ?>
