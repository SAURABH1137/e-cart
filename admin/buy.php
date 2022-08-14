<?php
include("../links.html");
include("../connection/index.php");
?>
<?php
    $sql = "SELECT * FROM product,buy WHERE buy.puid_b=product.uid";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>User Name</th>
            <th scope='col'>Product Name</th>
            <th scope='col'>Total Price</th>
            <th scope='col'>Buy Time</th>
            <th scope='col'>Delivery Time</th>
            <th scope='col'>Product IMAGE</th>
        </tr>
    </thead>";
    while($row = mysqli_fetch_assoc($res)){
       echo "<tr >
                    <td >{$row['ID']}</td>
                    <td>{$row['username']}</td>
                    <td id='uid'>{$row['pname']}</td>
                    <td id='uid'>{$row['price']}</td>
                    <td id='sprice'class='text-center'>{$row['buy_time']}</td>
                    <td class='text-truncate' style='max-width: 150px;'>{$row['delivered_time']}</td>
                    <td class='text-center'><div class=''><img src='{$row['pimage']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>
                </tr>";
      }