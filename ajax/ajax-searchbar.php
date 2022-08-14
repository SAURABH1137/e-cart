
<?php
session_start();
$conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
if(isset($_POST["search"])){
    $search_value = $_POST["search"];
    $sql = "SELECT * FROM product WHERE pname LIKE '%{$search_value}%'";
}
$result = mysqli_query($conn,$sql) or die("SQL Query error...!");
$output="";
if(mysqli_num_rows($result)>0){
    $output = "<div class='row'>";
        while($row = mysqli_fetch_assoc($result)){
        $output .= "
        <div class='card shadow border-dark' style='width: 16rem;'>
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