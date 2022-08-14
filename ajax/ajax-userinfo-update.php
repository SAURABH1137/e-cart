<?php
if(isset($_SESSION['username'])){
    if(isset($_POST['submit'])){
        if(isset($_FILES['image'])){
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $pno = $_POST['mnumber'];
            $quali = $_POST['qualification'];
            $add = $_POST['add'];
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"../img/".$file_name);
            $sql="UPDATE userlogin SET photo='".$file_name."',userlogin.password='".$pass."',email='".$email."',phoneno='".$pno."',qualification='".$quali."',userlogin.address='".$add."' WHERE username='".$u."'";
            $result=mysqli_query($conn,$sql);
            if(!$result){
                echo "Some error occured";
            }else{
                echo  "<script>swal('Good job!', 'Updated information successfully..!', 'success');</script>";
            }
        }
    }
}
?>