<?php
session_start();
if(isset($_SESSION['username'])){
    $u = $_SESSION['username'];
    $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $cpname = $_POST['cpname'];
    $sql = "SELECT * FROM product WHERE product.uid='".$cpname."'";
    $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
    $output="";
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
        $output .= "
            <html>
                <div class='container-fluid mt-2 text-left'>
                    <div class='row row-col-2'>
                        <!-- first col -->
                        <div class='col-4'>
                            <div class='card text-center shadow-lg rounded'>
                                <div class='card-body'>
                                    <img class='card-img-top rounded' src='{$row['pimage']}' style='height:18rem;'>
                                </div>
                            </div>
                        </div>
                        <!-- second col -->
                        <div class='col-8'>
                            <div class='card shadow-lg'>
                            <div class='card-body'>
                                <h5 class='card-title text-uppercase h4'>{$row['pname']}</h5>
                                <p class='font-weight-bold h4'>&#8377;<span id='cart_price'>{$row['pprice']}</span>/- </p>
                                <span class='font-weight-light'>{$row['pseller']}</span><br>
                                <div class='col-3 form-group row mt-2'>
                                        <label>Quantity</label>
                                    <div class='col-sm'>
                                        <select name='pnocount' id='pnocount'>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class='col mb-3' id='add-cart'>
                                        <button value='$cpname' class='btn btn-success mb-2'><i class='fas fa-shopping-cart'>Add to Cart</i></button>
                                    </div>
                                <p class='font-weight-bold'>Offers</p>
                                <p>{$row['pofferce']}</p>
                            </div>
                            </div>
                        </div>
                        <div class='ml-1 mr-1 mt-2 row row-col-2 text-justify'>
                        <!-- first col -->
                        <div class='col-9'>
                            <div class='card'>
                                <div class='card-body'>
                                    <p class='font-weight-bold'>Description</p>
                                    <p>{$row['pdescription']}</p><hr>
                                    <p class='font-weight-bold'>Features & Details</p>
                                    <p>{$row['pinfo']}</p><hr>
                                    <p class='font-weight-bold'>Disclaimer</p>
                                    <p>Despite our attempts to provide you with the most accurate information possible, the actual packaging, ingredients and colour of the product may sometimes vary. Please read the label, directions and warnings carefully before use.</p>
                                </div>
                            </div>
                        </div>
                        <!-- second col -->
                        <div class='col'>
                            <div class='card'>
                                <div class='card-body'>
                                    <p class='font-weight-bold'>Reviews</p>
                                    <textarea name='reviews' id='' cols='1' rows='2' class='form-control'></textarea>
                                    <div class='col'>
                                        <span id='username'>saurabh</span><br>
                                        <span class='font-weight-light' id='addreviews'>Despite our attempts to provide you with the most</span><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </html>";
        }
            mysqli_close($conn);
            echo $output;
    }
}else{
    echo "<script>alert('You need to login first..!')</script>";
    echo "<script>window.location.href = 'http://localhost:8080/e-cart/';</script>";
}
?>
<script>
    $(document).ready(function(){
        $('#add-cart button').click(function(){
        var puid = $(this).val();
        var cart_price = $("#cart_price").html();
        var pnocount = $("#pnocount").val();
            $.ajax({
                url : "http://localhost:8080/e-cart/ajax/ajax-add-cart.php",  
                type : "POST",
                data : {c_puid : puid, c_pnocount : pnocount,cart_price:cart_price},
                success: function(data){
                    alert('Added Successfully...!');
                } 
            });
        });
    });
</script>
<script>
  $(document).ready(function(){
    $('#add-cart button').click(function(){
    $.ajax({
          url : "http://localhost:8080/e-cart/ajax/ajax-cart-count.php",
          type: "POST",
          success: function(data){
            $("#cart_count").html(data);
          }
      });
    });
  });
  </script>
