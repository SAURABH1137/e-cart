<?php
    session_start();
    $u = $_SESSION['username'];
    $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $sql = "SELECT * FROM product, cart WHERE product.uid=cart.c_puid AND cart.username='$u'";
    $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
    if(mysqli_num_rows($result)>0){
        $output = "
        <table class='table table-bordered table-hovermt-2 mt-3'>
            <thead class='text-center'>
                <tr>
                    <th scope='col'>NAME</th>
                    <th scope='col'>PRODUCT ID</th>
                    <th scope='col'>PRODUCT's</th>
                    <th scope='col'>PRICE</th>
                    <th scope='col'>SELLER</th>
                    <th scope='col'>IMAGE</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>";
            while($row = mysqli_fetch_assoc($result)){
            $output .=   "<tr >
                                <td>{$row['pname']}</td>
                                <td id='uid'>{$row['uid']}</td>
                                <td id='count'class='text-center'>{$row['c_pnocount']}</td>
                                <td id='sprice'class='text-center'>{$row['p_price']}</td>
                                <td class='text-center'>{$row['pseller']}</td>
                                <td class='text-center'><div class=''><img src='{$row['pimage']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>
                                <td class='text-center'>
                                    <!-- Buy CART modal -->
                                    <button id='pay' value='{$row['ID']}' class='btn btn-success' data-toggle='modal' data-target='#buy_prodcut'><i class='fab fa-cc-visa'></i></button>
                                    <!-- DELETE CART modal -->
                                    <button id='del' value='{$row['ID']}' class='btn btn-danger' data-toggle='modal' data-target='#delete_prodcut'><i class='fas fa-trash-alt'></i></button>
                                </td>
                                </tr>";
            }
        $output .="</table>
            <!-- buy CART Modal -->
        <div class='modal fade' id='buy_prodcut' tabindex='-1' role='dialog' aria-labelledby='buy_prodcutLabel' aria-hidden='true'>
            <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <div class='spinner-border spinner-border-sm' role='status'>
                        <span class='sr-only'>Loading...</span>
                    </div>
                    <h5 class='modal-title ml-2' id='buy_prodcutLabel'>Buy</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    Thanks for Purchasing :)
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                    <button type='button' id='pay_now'class='btn btn-primary'>PAY NOW</button>
                </div>
                </div>
            </div>

        </div>
        <!-- delect cart Modal -->
        <div class='modal fade' id='delete_prodcut' tabindex='-1' role='dialog' aria-labelledby='delete_prodcutLabel' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
            <div class='modal-header'>
            <div class='spinner-border spinner-border-sm' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
                <h5 class='modal-title ml-2' id='delete_prodcutLabel'>Delet Cart</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                    Are you sure you want to remove product from cart?
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                <button type='button' id='delete_now' class='btn btn-danger'>DELETE</button>
            </div>
            </div>
        </div>
        </div>";
        mysqli_close($conn);
        echo $output;
    }else{
        echo"<h2 class='text-center text-danger'>NO RECORD FOUND..!</h2>";
    }
?>
<script>
    $(document).ready(function(){
        $("#pay_now").click(function(){
           var pay = $("#pay").val();
           var buid= $("#uid").html();
           var price= $("#sprice").html();
           $.ajax({
                url : "http://localhost:8080/e-cart/ajax/ajax-cart-buy.php",
                type : "POST",
                data : {pay: pay,buid: buid,price: price},
                success: function(data){
                    alert("Product Deliver in 2h...!");
                    location.href= 'http://localhost:8080/e-cart/home/order.php';
                }
            });

        });
        //delete function
        $("#delete_now").click(function(){
            var del = $("#del").val();
            $.ajax({
                url : "http://localhost:8080/e-cart/ajax/ajax-delete-cart.php",
                type : "POST",
                data : {delete: del},
                success: function(data){
                    location.href= 'http://localhost:8080/e-cart/home/order.php';
                }
            });
        });
      });
  </script>