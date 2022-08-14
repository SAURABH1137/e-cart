<?php
session_start();
include('../connection/index.php');
    $u = $_SESSION['username'];
    $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $sql = "SELECT * FROM product,buy WHERE product.uid=buy.puid_b AND buy.username='$u'";
    $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
    if(mysqli_num_rows($result)>0){
        echo "
        <table class='table table-bordered table-hovermt-2 mt-3'>
            <thead class='text-center'>
                <tr>
                    <th scope='col'>NAME</th> 
                    <th scope='col'>PRODUCT ID</th>
                    <th scope='col'>Buy Time</th>
                    <th scope='col'>Delivery time</th>
                    <th scope='col'>Progress</th>
                    <th scope='col'>IMAGE</th>
                    <th scope='col'>STATUS</th>
                </tr>
            </thead>";
            while($row = mysqli_fetch_assoc($result)){
                echo "
                    <tbody>
                        <tr id='new'>
                            <input type='hidden' id='delivered_time1' value='{$row['delivered_time']}'>
                            <td>{$row['pname']}</td>
                            <td class='text-center' id='pid'>{$row['uid']}</td>
                            <td class='text-center' id='btime'>{$row['buy_time']}</td>
                            <td class='text-center' id='dtime'>
                                <span id='delivered_time2'>{$row['delivered_time']}</span>
                            </td>
                            <td style='width:220px;'>
                                <div class='progress'>
                                    <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='100' aria-valuemin='0' 'aria-valuemax='100' style='width: 100%'></div>
                                </div>
                            </td>
                            <td class='text-center'>
                                <div>
                                    <img src='{$row['pimage']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'>
                                </div>
                            </td>
                            <td class='text-center'><span id='status'>NOT Delivered</span></td>
                        </tr>
                    </tbody>";                   
                }
        echo"</table>";
        mysqli_close($conn);  
    }else{
        echo"<h2 class='text-center text-danger'>NO RECORD FOUND..!</h2>";
    }
    ?>

<script>
    var pay = $('tbody #new #delivered_time1').val(); 
    console.log(pay);
</script>
<script>
 if(pay){
    var progressNumber= 100;
     $('td #status').text('Delivered');
 
 }else{
     var progressNumber= 50;
     $('#new').addClass('text-dark'); 
 }
 var progressBar = $('.progress-bar');
 setInterval(function(){
     progressBar.css('width',progressNumber + '%');
     progressBar.attr('aria-valuenow',progressNumber);
 },100);
</script>