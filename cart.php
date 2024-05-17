<?php include 'connect.php'; 
// Update Query
if (isset($_POST['update_product_quantity'])) {
    $update_value=$_POST['update_quantity'];
    //echo $update_value;
    $update_id=$_POST['update_quantity_id'];
    //echo $update_id;
    //Query
    $update_quantity_query=mysqli_query($conn, "update `cart` set 
    quantity=$update_value where id=$update_id");
    if($update_quantity_query){
        header('location:cart.php');
    }
}

if (isset($_GET['remove'])) {
    $remove_id=$_GET['remove'];
    //echo $remove_id;
   mysqli_query($conn,"Delete from `cart` where id=$remove_id");
header('location:cart.php');


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    
    <!-- Css File -->
    <link rel="Stylesheet" type="" href="style6.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- Css File -->
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container">

        <section class="shopping_cart">
            <h1 class="heading">My Cart</h1>
            <table class="final-table">
                <?php
                    $select_cart_products=mysqli_query($conn, "Select * from `cart`");
                    $num=1;
                    $grand_total=0;
                    if(mysqli_num_rows($select_cart_products)>0){
                        echo"
                        <thead>
                        <td>S1</td>
                        <td>Product Name</td>
                        <td>Product Price</td>
                        <td>Product Quantity</td>
                        <td>Totle Price</td>
                        <td>Action</td>
                    </thead>" ;

                    while($fetch_cart_products=mysqli_fetch_assoc($select_cart_products)){
                ?>
                    <tr>
                        <td><?php echo $num?></td>
                        <td><?php echo $fetch_cart_products['name']?></td>
                        <td>Rs.<?php echo $fetch_cart_products['price']?></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $fetch_cart_products['id']?>" name="update_quantity_id">
                            <div class="quantity_box">
                                <input type="number" min="1" value="<?php echo 
                                $fetch_cart_products['quantity']?>" Name="update_quantity">
                                <input type="submit" value="Update" class="update_quantity" name="update_product_quantity">
                            </div>
                            </form>
                        </td>
                        <td>Rs.<?php echo $subtotal=number_format($fetch_cart_products['price']
                        *$fetch_cart_products['quantity'])?> /-</td>
                        <td>
                            <a href="cart.php?remove=<?php echo $fetch_cart_products ['id'] ?>"
                            onclick="return confirm('Are you sure you want to delete this item')">
                                <i class="fas fa-trash"></i>Remove
                            </a>
                        </td>
                    </tr>
                <?php
                $grand_total+=($fetch_cart_products['price']*$fetch_cart_products['quantity']);
                $num++;
                    }
                    }else{
                        echo "<div class='empty_text'> Cart is Empty <div>";
                    }
                ?>
             
                <tbody>

                </tbody>
            </table>
            

            <div class="table_bottom">
                <a href="#" class="bottom_btn">Weight</a>
                <a href="#" class="bottom_btn">Number of Items</a>
                <a href="#" class="bottom_btn">Temperature</a>
            </div>
            
            <!-- Bottom area -->
            <div class="table_bottom">
                <a href="index1.php" class="bottom_btn">Contiune Shopping</a>
                <h3 class="bottom_btn">Grand Totle : <span>Rs.<?php echo $grand_total ?> /=</span></h3>
                <a href="checkout.php"class="bottom_btn">Proceed to checkout </a>
            </div>
            <a href="" class="delete_all_btn">
                <i class="fas fa-trash"> </i>Delete All 
            </a>
        </section>
    </div>
</body>
</html>