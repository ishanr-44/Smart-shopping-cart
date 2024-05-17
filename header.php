<!-- Header -->
<header class="header">
        <div class="header_body">
            <a href="index.php" class="logo"><img src="images/r4.jpg" class="img">  DQ MART</a>
            <nav class="navbar">
      <a href="index1.php">Add Products</a>
      <a href="view_products.php">View Product</a>
      <a href="shop_products.php">Shopping</a>
            </nav>
            <!-- Shopping Icon -->
            <?php
                $select_product=mysqli_query($conn, "Select * from `cart` ") or die ('query failed');
                $row_count=mysqli_num_rows($select_product);
            ?>
        <!-- Shopping Icon -->
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i><span><sup>
        <?php echo $row_count ?></sup></span></a>
        <!-- <div id="menu-btn" class="fas fa-bar"></div> -->
        </div> 
    </header>