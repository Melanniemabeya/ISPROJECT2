  <!--connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
include("includes/header.php");
session_start();
?>

<style>
  .navbar-custom {
            background-color: #9DC183;
        }
        .navbar-custom1{
        background-color: #D0F0C0;

      }
</style>


   <div id="content" >
    <div class="container">
        <div class="col-md-9" id="cart" >

          <div class="box" >
        <form action="" method="post" enctype="multipart-form-data">

          
        <h1> Shopping Cart </h1>
        <?php

        $get_ip_add = getIPAddress();
        $select_cart = "select * from cart_details where ip_address='$get_ip_add'";
        $result = mysqli_query($con,$select_cart);
        $count = mysqli_num_rows($result);

        ?>
        <p class="text-muted" > You currently have <?php echo $count; ?> item(s) in your cart. </p>

        <table class="table" >
            <thead>

            <tr>

            <th colspan="2" >Product</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th colspan="1">Delete</th>
            <th colspan="2"> Sub Total </th>

            </tr>

            </thead>

            <tbody>
          
            <!-- php code to display dynamic data-->
            <?php
            
             $get_ip_add = getIPAddress();
             $total_price=0;  
             $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
             $result=mysqli_query($con, $cart_query);
             while ($row=mysqli_fetch_array($result)) {
              $product_id=$row['product_id'];
              $select_products="Select * from `products` where product_id='$product_id'";
              $result_products=mysqli_query($con, $select_products);
               while($row_product_price=mysqli_fetch_array($result_products)) {
               $product_price=array($row_product_price['product_price']);
               $price_table=$row_product_price['product_price'];
               $product_title=$row_product_price['product_title'];
               $product_image1=$row_product_price['product_image1'];
               $product_values=array_sum($product_price);
               $total_price+=$product_values;
                     
               ?>
           
            <tr>

           <td>
              <img src="./admin/product_images/<?php echo $product_image1?>" alt="" class="cart_img"></td>
              <td><?php echo $product_title?></td>
              <td><input type="text" name="quantity" class="form-control" autocomplete="off"></td>
            
              <td><?php echo $price_table?>/-</td>
              <td><input type="checkbox" name="remove[]" value="<?php echo $product_id; ?>"></td>

              <td><?php echo $product_values ?>/-</td>
            
            </tr>

          <?php }} ?>
          </tbody>

          <tfoot>
            <tr>
              <th colspan="5"> Total </th>

           <th colspan="2"><?php echo $total_price; ?>/-</th>
            </tr>
          </tfoot>
        </table>
        <div class="box-footer">

        <div class="pull-left">

        <a href="index.php" class="btn btn-default">
        <i class="fa fa-chevron-left"></i> Continue Shopping
        </a>

        </div>
          <div class="pull-right">
          <!--<button class="btn btn-info" type="submit" name="update" value="Update Cart">
          <i class="fa fa-refresh"></i> Update Cart </button>-->

          <button class="btn btn-info" type="submit" name="update" value="Update Cart">Update Cart</button>

          <a href="./users/checkout.php" class="btn btn-success">
          Proceed to Checkout <i class="fa fa-chevron-right"></i>
          </a>

          </div>
          </div>
          </form>
        </div>

          <!--remove function-->
         <?php

function update_cart(){

global $con;

if(isset($_POST['update'])){

foreach($_POST['remove'] as $remove_id){


$delete_product = "delete from cart_details where product_id='$remove_id'";

$run_delete = mysqli_query($con,$delete_product);

if($run_delete){
echo "<script>window.open('cart.php','_self')</script>";
}

}

}
}

echo $up_cart = update_cart();

?>
         


</div><!-- col-md-9 Ends -->

<div class="col-md-3">
<div class="box" id="order-summary">

<div class="box-header">

<h3>Order Summary</h3>

</div>

<p class="text-muted">
Delivery cost and additional costs are calculated based on the values you have entered.
</p>

<div class="table-responsive">
<table class="table">

<tbody>
<tr>

<td> Order Subtotal </td>

<th> <?php echo $total_price; ?>/- </th>
</tr>

<tr>
<td> Shipping and handling </td>
<th>0.00</th>

</tr>
<tr>
  <td>Tax</td>

<th>0.00</th>

</tr>

<tr class="total">

<td>Total</td>
<th><?php echo $total_price; ?></th>

</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
        
      
 


    <!--last child-->
     <div class="navbar-custom p-3 text-center" id="footer">
      <p> All rights reserved Ⓒ-Designed by Melannie-2022</p>
    </div>

  </div> 

  <!--bootstrap Js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>