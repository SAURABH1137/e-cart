<?php
session_start();
include('../links.html');
include('../connection/index.php');
    if(isset($_SESSION['username'])){
        $u = $_SESSION['username'];
        $sql = "SELECT * FROM userlogin WHERE username = '".$u."'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($row = mysqli_fetch_assoc($res)){
?>
<html>
    <body>
        <div class="container-fluid row-col-2">
            <div class="row row-col-2 ml-2">
                <div class="col-3">
                    <div class="col-md-6 ml-5 mt-5 text-center">
                        <img src="<?php echo $row['photo'];?>" class="rounded img-fluid img-thumbnail" width="80%">
                    </div>
                    <dl class="row">
                        <dt class="col-sm-5 mt-3">USER NAME</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['username'];?></dd>

                        <dt class="col-sm-5 mt-3">PASSWORD</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['password'];?></dd>

                        <dt class="col-sm-5 mt-3">EMAIL ID</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['email'];?></dd>

                        <dt class="col-sm-5 mt-3">ADDRESS</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['address'];?></dd>

                        <dt class="col-sm-5 mt-3">PHONE NUMBER</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['phoneno'];?></dd>

                        <dt class="col-sm-5 mt-3">GENDER</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['gender'];?></dd>

                        <dt class="col-sm-5 mt-3">Date of Birth</dt>
                        <dd class="col-sm-7 mt-3"><?php echo $row['qualification'];?></dd>
                    </dl>
                    <div class="col-8 text-center">
                        <button type="submit" class="btn btn-warning mt-4 text-center mb-4" data-target="#exampleModal" data-toggle="modal">UPDATE PROFILE</button>                       
                    </div>
                </div>
                <div class="col mt-5">
                <div class="card-deck">
                    <div class="card text-white bg-primary mb-3" id="products">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="product_counter">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-store"></i> PRODUCTS </p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3"  id="add-cart">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="cart_counter">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-cart-plus"> CART </i></p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-3"  id="buy">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="buy_product">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-cash-register"></i> BUY </p>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card text-white bg-info mb-3"  id="to-pay">
                        <div class="card-body text-center">
                            <p class="display-1">₹<span id="to_pay">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="far fa-money-bill-alt"></i> TO PAY </p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mb-3"  id="payed">
                        <div class="card-body text-center">
                            <p class="display-1">₹<span id="buy_pay">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-shopping-bag"></i> PAYED </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
            <!-- UPDATE USER INFORMATION Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-info" id="exampleModalLabel">UPDATE</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col mt-2 text-center">
                        <img src="<?php echo $row['photo'];?>" class="rounded img-fluid" width="40%">
                        <input type="file" name="image" id="image" value="<?php echo $row['photo'];?>">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="username" id="p_username" class="form-control " value="<?php echo $row['username'];?>" disabled>
                    </div>
                    <div class="col mt-2">
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $row['email'];?>">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="add" id="add" class="form-control" value="<?php echo $row['address'];?>">
                    </div>
                    <div class="col mt-2">
                        <input type="tel" name="mnumber" id="mnumber" class="form-control" value="<?php echo $row['phoneno'];?>">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="qualification" id="quali" class="form-control" value="<?php echo $row['qualification'];?>">
                    </div>
                    <div class="col mt-2">
                        <input type="text" name="password" id="pass" class="form-control" value="<?php echo $row['password'];?>">
                    </div>
                    <div class="col mt-2">
                        Male <input type="radio" name="gender"  value ="Male" class="form-group" checked>
                        Female <input type="radio" name="gender"  value ="Female" class="form-group">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name = "submit" id="save-change"class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
            }
        }
    echo "</table></div>";
    }else{  
        echo "<script>alert('You need to login first..!');</script>";
         echo "<script> location.href='http://localhost:8080/e-cart/'</script>";
    }
?>
<script src="http://localhost:8080/e-cart/javascript/sweet.js"></script>
<?php
if(isset($_SESSION['username'])){
        if(isset($_FILES['image'])){
            $no = "http://localhost:8080/e-cart/img/profile_img/";
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $pno = $_POST['mnumber'];
            $quali = $_POST['qualification'];
            $add = $_POST['add'];
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"../img/profile_img/".$file_name);
            $sql="UPDATE userlogin SET photo='".$no.$file_name."',userlogin.password='".$pass."',email='".$email."',phoneno='".$pno."',qualification='".$quali."',userlogin.address='".$add."' WHERE username='".$u."'";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                echo "Some error occured";
            }else{
                echo  "<script>swal('Good job!', 'Updated information successfully..!', 'success');</script>";
                echo "<script> location.href='http://localhost:8080/e-cart/home/'</script>";
            }
        }
    }
?>
<script>
    $(document).ready(function(){
        $("#products").click(function(){
            location.href='http://localhost:8080/e-cart/';
        });
        $("#add-cart").click(function(){
            location.href= 'http://localhost:8080/e-cart/home/order.php';
        });
        $("#buy").click(function(){
            location.href= 'http://localhost:8080/e-cart/home/product.php';
        });
        $("#to-pay").click(function(){
            location.href= 'http://localhost:8080/e-cart/home/order.php';
        });
        $("#payed").click(function(){
            location.href= 'http://localhost:8080/e-cart/home/product.php';
        });
    });
</script>
<script>
    $(document).ready(function(){
      $.ajax({
            url : "http://localhost:8080/e-cart/ajax/ajax-add-homepage-counter.php",
            type: "POST",
            success: function(data){
            var count = data.split(":");
            $("#cart_counter").text(count[0]);
            $("#product_counter").text(count[1]);
            $("#buy_product").text(count[2]);
            $("#buy_pay").text(count[3]);
            $("#to_pay").text(count[4]);
            }
        });
      });
  </script>