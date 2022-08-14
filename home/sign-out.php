<?php
session_start();
  if(isset($_SESSION['username'])){
      session_destroy();
      echo "<script> alert('Sign out Successfully ...!')</script>";
      echo "<script> location.href='http://localhost:8080/e-cart'</script>";
}
?>