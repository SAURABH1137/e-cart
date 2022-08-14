<?php
$conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $u=$_POST['username'];
    $p=$_POST['password'];
    if(!$conn){
        echo "<script>alert('Database Error..!');</script>";
    }else{
        $sql = "SELECT * FROM userlogin WHERE username='".$u."' AND password ='".$p."'";
        $result = mysqli_query($conn,$sql) or die("Query Unsuccessful...!");
        if($result){
            if(mysqli_num_rows($result)<=0){
                echo "<script>alert('Wrong Username or Password..!');</script>";
            }
        }
        $new = mysqli_num_rows($result);
        if($new==1){
            session_start();
            $_SESSION['username'] = $u;
            echo "<script> location.href='http://localhost:8080/e-cart'</script>";
        }
    }
?> 