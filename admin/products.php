<?php
include("../links.html");
include("../connection/index.php");
?>

<html>
  <div class="col text-right">
    <button type="button" class=" mt-3 btn btn-primary" data-toggle="modal" data-target="#addproduct">Add product +</button>
  </div>
<!-- model form add product -->
<div class='modal fade' id='addproduct' tabindex='-1' role='dialog' aria-labelledby='addproductTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-col-2">
                            <div class="col-6">
                                <div class="col">
                                    <div class="col">
                                        <label>PRODUCT NAME</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="pname" id="pname" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>PRODUCT TYPE</label>
                                    </div>
                                    <div class="col">
                                        <select name="ptype" id="ptype" class="form-control">
                                            <option value="Bread/Bakery">Bread/Bakery</option>
                                            <option value="Dry/Baking Goods">Dry/Baking Goods</option>
                                            <option value="Frozen Foods">Frozen Foods</option>
                                            <option value="Produce">Produce</option>
                                            <option value="Cleaners">Cleaners</option>
                                            <option value="Paper Goods">Paper Goods</option>
                                            <option value="Other">Other</option>
                                       </select>
                                    </div>
                                    <div class="col">
                                        <label>PRODUCT INFO</label>
                                    </div>
                                    <div class="col">
                                    <textarea name="pinfo" id="pinfo" cols="40" rows="3"></textarea>
                                    </div>
                                    <div class="col">
                                        <label>PRODUCT OFFERCE</label>
                                    </div>
                                    <div class="col">
                                    <textarea name="pofferce" id="pofferce" cols="40" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col">
                                    <div class="col">
                                        <label>PRODUCT PRICE</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" name="pprice" id="pprice" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>PRODUCT SELLER</label>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="pseller" id="pseller" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label>PRODUCT DESCRIPTION</label>
                                    </div>
                                    <div class="col">
                                        <textarea name="pdescription" id="pdescription" cols="40" rows="3"></textarea>
                                    </div>
                                    <div class="col">
                                        <label>UPLOAD IMAGE</label>
                                    </div>
                                    <div class="col mt-2 text-center">
                                        <input type="file" name="img" id="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addproduct" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                </div>
            </div>
  </div>
</div>
</html>

<?php
    $sql = "select * from product";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>TYPE</th>
            <th scope='col'>Name</th>
            <th scope='col'>Unique ID</th>
            <th scope='col'>Price</th>
            <th scope='col'>Offence</th>
            <th scope='col'>Product Information</th>
            <th scope='col'>Brand Name</th>
            <th scope='col'>Product Description</th>
            <th scope='col'>IMAGE</th>
            <th scope='col'>Action</th>
        </tr>
    </thead>";
    while($row = mysqli_fetch_assoc($res)){
       echo "<tr >
                    <td >{$row['ID']}</td>
                    <td>{$row['ptype']}</td>
                    <td id='uid'>{$row['pname']}</td>
                    <td id='uid'>{$row['uid']}</td>
                    <td id='sprice'class='text-center'>{$row['pprice']}</td>
                    <td class='text-truncate' style='max-width: 150px;'>{$row['pofferce']}</td>
                    <td >{$row['pinfo']}</td>
                    <td class='text-center'>{$row['pseller']}</td>
                    <td class='text-truncate' style='max-width: 150px;'>{$row['pdescription']}</td>
                    <td class='text-center'><div class=''><img src='{$row['pimage']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>
                    <td class='text-center'>
                        <!-- edit product modal -->
                    <button value='{$row['ID']}' class='btn btn-success exampleModal' data-toggle='modal' data-target='#exampleModalCenter'><i class='fas fa-edit'></i></button>
                    </td>
                </tr>";
      }

if(isset($_POST['addproduct'])){
    if(isset($_FILES['img'])){
        $pname = $_POST['pname'];
        $uid = uniqid();
        $pprice = $_POST['pprice'];
        $pofferce = $_POST['pofferce'];
        $pinfo = $_POST['pinfo'];
        $pseller=$_POST['pseller'];
        $pdescription = $_POST['pdescription'];
        $ptype = $_POST['ptype'];
        $no = "http://localhost:8080/e-cart/img/product/";
        $file_name = $_FILES['img']['name'];
        $file_tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($file_tmp,"../img/product/".$file_name);
        $sql="INSERT into product values(DEFAULT,'".$uid."','Admin','".$pname."', '".$pprice."', '".$pofferce."', '".$pinfo."', '".$pseller."', '".$pdescription."', '".$no.$file_name."', '".$ptype."')";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo "<script>alert(Some error occured";
        }else{
            echo  "<script>alert('Inserted new record successfully..!')</script>";
        }
    }
}
?>

<script>
  $(document).ready(function(){
        $(".btn-success").click(function(){
         var c = $(this).val();
         $.ajax({
                url : "http://localhost:8080/e-cart/admin/product_sql.php",
                type : "POST",
                data : {p_id : c},
                success: function(data){
                    $("#product").html(data);
                }
            });
        });
    });
</script>
<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
    <div class="col" id="product">
      
    </div>
  </div>
</div>