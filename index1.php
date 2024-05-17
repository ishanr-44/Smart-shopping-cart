<?php include 'connect.php';
if(isset($_POST['add_product'])){
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];

    $insert_query=mysqli_query($conn,"insert into `products` (name,price) values('$product_name','$product_price')") or die("Insert query failed");
    if($insert_query)
    {   
    $display_messsage="Product inserted successfully";
    }else{
        $display_messsage= "There is some error in inserting product";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart.Store</title>

    <!-- Css File -->
    <link rel="Stylesheet" type="" href="style6.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
    <!-- Css File -->
    <link rel="Stylesheet" type="" href="style6.css">
    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Header -->
    <?php include('header.php') ?>
    <?php include('connect.php') ?>

    <div class="container">
        
        <!-- Message display -->      
        <?php
            if(isset($display_messsage))   
            {
            echo "<div class='display_message'>
            <span>$display_messsage</span>
            <i class='fas fa-times' onclick='this.parentElement.style.display=`none`';></i>
            </div>";
            }
            ?>

            <center><h3 class="heading">ADD PRODUCTS</h3></center>
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="heading4"> <center>Add your products to View</center> </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                            <a href="https://scanapp.org/"><button class="btnf">Scan the Barcode</button></a>
                            <br><br>
                                <form action="" method="GET" class="add_pro">
                                    <div class="input-group">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter the barcode number">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="table-head">
                                <tr>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Price</th>
                                    <th>Discription</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","id22011422_dqmart","DQmart123$","id22011422_shop");
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM users WHERE CONCAT(barcode,price,dis) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['barcode']; ?></td>
                                                    <td><?= $items['price']; ?></td>
                                                    <td><?= $items['dis']; ?></td>
                                                  
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
        <br><br>
            <form action="" class="add_product" method="post" enctype="multipart/form-data">
            <p style="font-size: 18px;">Fill this <span style="font-weight: bold;">confirmation details </span>of the product you wish to purchase.</p> 
                <input type="text" name="product_name" placeholder="Enter Product Name" class="input_fields" required>
                <input type="number" name="product_price" min="0" placeholder="Enter Product Price" class="input_fields" required>
                <input type="submit" name="add_product" class="submit_btn" value="Add Product" >
            </form>
        </div> 

           <!-- Js File -->    
    <script src="Js/script.js"></script> 
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>