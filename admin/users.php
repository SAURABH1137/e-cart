<?php
include("../links.html");
include("../connection/index.php");
?>
<?php
    $sql = "select * from userlogin";
    $res = mysqli_query($conn,$sql);
    echo "
    <table class='table table-bordered table-hovermt-2 mt-3'>
    <thead class='text-center'>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Name</th>
            <th scope='col'>Password</th>
            <th scope='col'>email</th>
            <th scope='col'>Address</th>
            <th scope='col'>Phone No</th>
            <th scope='col'>Gender</th>
            <th scope='col'>Date Of Birth</th>
            <th scope='col'>IMAGE</th>
        </tr>
    </thead>";
    while($row = mysqli_fetch_assoc($res)){
       echo "<tr >
                    <td >{$row['ID']}</td>
                    <td>{$row['username']}</td>
                    <td id='uid'>{$row['password']}</td>
                    <td id='uid'>{$row['email']}</td>
                    <td id='sprice'class='text-center'>{$row['address']}</td>
                    <td class='text-truncate' style='max-width: 150px;'>{$row['phoneno']}</td>
                    <td >{$row['gender']}</td>
                    <td class='text-center'>{$row['qualification']}</td>
                    <td class='text-center'><div class=''><img src='{$row['photo']}' style='width: 5rem;'class='my-lg-0 my-sm-0 img-fluid'></div></td>
                </tr>";
      }