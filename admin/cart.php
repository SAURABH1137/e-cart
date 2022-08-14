<?php
include("../links.html");
include("../connection/index.php");
    $sql = "SELECT * FROM product, cart WHERE product.uid=cart.c_puid";
    $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
    if(mysqli_num_rows($result)>0){
        $output = "
        <table class='table table-bordered table-hovermt-2 mt-3'>
            <thead class='text-center'>
                <tr>
                    <th scope='col'>User NAME</th>
                    <th scope='col'>Product NAME</th>
                    <th scope='col'>PRODUCT ID</th>
                    <th scope='col'>PRODUCT's</th>
                    <th scope='col'>PRICE</th>
                    <th scope='col'>IMAGE</th>
                </tr>
            </thead>";
            while($row = mysqli_fetch_assoc($result)){
            $output .=   "<tr >
                                <td class='text-center'>{$row['username']}</td>
                                <td class='text-center'>{$row['pname']}</td>
                                <td id='uid' class='text-center'>{$row['uid']}</td>
                                <td id='count' class='text-center'>{$row['c_pnocount']}</td>
                                <td id='sprice'class='text-center'>{$row['p_price']}</td>
                                <td class='text-center'><div class=''><img src='{$row['pimage']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>
                                </tr>";
            }
        $output .="</table>";
        mysqli_close($conn);
        echo $output;
    }else{
        echo"<h2 class='text-center text-danger'>NO RECORD FOUND..!</h2>";
    }
?>