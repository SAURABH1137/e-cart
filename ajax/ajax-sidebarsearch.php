<?php
session_start();
$conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
if(!isset($_POST['caname']) || $_POST['caname']=="Category"){
    $sql = "SELECT * FROM product";
}else{
    $a = $_POST['caname'];
    $sql = "SELECT * FROM product  WHERE ptype ='".$a."' ";
}
$result = mysqli_query($conn,$sql) or die("SQL Query error...!");
$output="";
if(mysqli_num_rows($result)>0){
    $output = "<div class='row'>";
    $output .="
        <!-- image slider -->
        <div class='col-12'>
            <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
                <ol class='carousel-indicators'>
                    <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
                    <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
                    <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
                </ol>
                <div class='carousel-inner' >
                    <div class='carousel-item active' style='width:63rem;'>
                        <img class='d-block' style='width:150%' src='http://localhost:8080/e-cart/img/offerce/2.jpg' alt='First slide'>
                    </div>
                    <div class='carousel-item' style='width:63rem;'>
                        <img class='d-block' style='width:150%' src='http://localhost:8080/e-cart/img/offerce/4.png' alt='Second slide'>
                    </div>
                    <div class='carousel-item' style='width:63rem;'>
                        <img class='d-block' style='width:150%' src='http://localhost:8080/e-cart/img/offerce/3.jpg' alt='Third slide'>
                    </div>
                </div>
                <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Previous</span>
                </a>
                <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                    <span class='sr-only'>Next</span>
                </a>
            </div>
        </div>";
        while($row = mysqli_fetch_assoc($result)){
        $output .= "
        <div class='card shadow border-dark m-3' style='width: 305px;'>
                <img class='card-img-top' src='{$row['pimage']}'>
                <div class='card-body'>
                    <span>{$row['pname']}</span><br>
                    <span>&#8377;{$row['pprice']}/- </span>
                </div>
                <div class='col mb-3 text-center' id='list-cart'>
                    <button id='a' class='btn btn-success' value='{$row['uid']}' type='submit'><i class='fas fa-shopping-cart'>Add to Cart</i></button>
                </div>
            </div>";
        }
    $output .="</div>";
    mysqli_close($conn);
    echo $output;
}else{
    echo"<h2 class='text-center text-danger'>NO RECORD FOUND..!</h2>";
}
?>
<script>
    $(document).ready(function(){
        $('#list-cart button').click(function(){
        var a = $(this).val();
            $.ajax({
                url : "http://localhost:8080/e-cart/ajax/ajax-cart-pinfo.php",
                type : "POST",
                data : {cpname : a},
                success: function(data){
                    $("#search-data").html(data);
                }
            });
        });
    });
</script>