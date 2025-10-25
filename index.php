<?php
include 'header.php';
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

    <!-- Product 1 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&auto=format" 
               alt="iPhone 14" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">iPhone 14</h5>
          <p class="card-text text-muted small">Latest Apple smartphone</p>
          <h6 class="fw-bold text-success mb-3">₹ 79,999</h6>
          <a href="product.php?id=1" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&auto=format" 
               alt="MacBook Pro" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">MacBook Pro</h5>
          <p class="card-text text-muted small">Powerful laptop for work & gaming</p>
          <h6 class="fw-bold text-success mb-3">₹ 1,24,999</h6>
          <a href="product.php?id=2" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://cdn.shopify.com/s/files/1/0057/8938/4802/files/lifestyle__1.png?v=1742364005t" 
               alt="Smart Watch" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Smart Watch</h5>
          <p class="card-text text-muted small">Track your fitness & notifications</p>
          <h6 class="fw-bold text-success mb-3">₹ 12,999</h6>
          <a href="product.php?id=3" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 4 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIHJN65lzbQV6kYvNejOmmws8kJTzvC5FKOA&s" 
               alt="Headphones" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Headphones</h5>
          <p class="card-text text-muted small">Noise-cancelling headphones</p>
          <h6 class="fw-bold text-success mb-3">₹ 5,999</h6>
          <a href="product.php?id=4" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 5 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2FNCOcvvXhGvLBiQoDDADJXYeL8Osdnjs6A&s" 
               alt="DSLR Camera" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">DSLR Camera</h5>
          <p class="card-text text-muted small">High quality DSLR camera</p>
          <h6 class="fw-bold text-success mb-3">₹ 45,999</h6>
          <a href="product.php?id=5" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 6 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg7uuJuRdLXVRuKuEkIKnt9-A2XBnoe8DXtA&st" 
               alt="Leather Shoes" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Leather Shoes</h5>
          <p class="card-text text-muted small">Comfortable stylish shoes</p>
          <h6 class="fw-bold text-success mb-3">₹ 4,999</h6>
          <a href="product.php?id=6" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 7 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://cdn.thewirecutter.com/wp-content/media/2022/09/backpacks-2048px.jpg?auto=webp&quality=75&width=1024" 
               alt="Backpack" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Backpack</h5>
          <p class="card-text text-muted small">Stylish travel backpack</p>
          <h6 class="fw-bold text-success mb-3">₹ 2,999</h6>
          <a href="product.php?id=7" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 8 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=600&auto=format" 
               alt="Sunglasses" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Sunglasses</h5>
          <p class="card-text text-muted small">Trendy sunglasses</p>
          <h6 class="fw-bold text-success mb-3">₹ 1,499</h6>
          <a href="product.php?id=8" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 9 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0sc4GjBo4HUbSXYlLuo-pA-p6E6kWcjDm5w&s" 
               alt="Bluetooth Speaker" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Bluetooth Speaker</h5>
          <p class="card-text text-muted small">Portable speaker for music</p>
          <h6 class="fw-bold text-success mb-3">₹ 1,999</h6>
          <a href="product.php?id=9" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

    <!-- Product 10 -->
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="card h-100 border-0 shadow-sm">
        <div class="ratio ratio-4x3 bg-light">
          <img src="https://m.media-amazon.com/images/I/51lYbJhOmbL._AC_UF1000,1000_QL80_.jpg" 
               alt="Smart TV" class="card-img-top" style="height:200px; object-fit:cover;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title fw-semibold">Smart TV</h5>
          <p class="card-text text-muted small">55 inch 4K TV</p>
          <h6 class="fw-bold text-success mb-3">₹ 69,999</h6>
          <a href="product.php?id=10" class="btn btn-primary btn-sm w-100">View / Add to Cart</a>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
include 'footer.php';
?>
