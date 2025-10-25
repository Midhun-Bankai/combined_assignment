<?php
require 'db.php';

// Check if user is logged in
if(!isset($_SESSION['user'])){
    header('Location: login.php'); 
    exit;
}

// Check if cart has items
$cart = $_SESSION['cart'] ?? [];
if(empty($cart)){
    header('Location: cart.php'); 
    exit;
}

// Fetch products in cart
$ids = implode(',', array_map('intval', array_keys($cart)));
$res = mysqli_query($conn, "SELECT * FROM products WHERE id IN ($ids)");
if(!$res){
    die("Error fetching products: " . mysqli_error($conn));
}

$total = 0;
$products = [];
while($r = mysqli_fetch_assoc($res)){
    $r['qty'] = $cart[$r['id']];
    $r['subtotal'] = $r['qty'] * $r['price'];
    $total += $r['subtotal'];
    $products[] = $r;
}

// Insert order
$user_id = intval($_SESSION['user']['id']);
$order_sql = "INSERT INTO orders (user_id, total) VALUES ($user_id, $total)";
if(!mysqli_query($conn, $order_sql)){
    die("Error placing order: " . mysqli_error($conn));
}
$order_id = mysqli_insert_id($conn);

// Insert order items
foreach($products as $p){
    $pid = intval($p['id']); 
    $qty = intval($p['qty']); 
    $price = floatval($p['price']);
    mysqli_query($conn, "INSERT INTO order_items (order_id, product_id, qty, price) 
                         VALUES ($order_id, $pid, $qty, $price)");
}

// Clear cart
unset($_SESSION['cart']);

// Redirect to orders page
header('Location: orders.php'); 
exit;
