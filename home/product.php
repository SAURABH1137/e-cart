<?php
session_start();
include('../links.html');
if(isset($_SESSION['username'])){
?>
<div class='container-fluid'>
    <div class='col' id='time'>

    </div>
</div>
<script>
    $(document).ready(function(){
            $.ajax({
                url : 'http://localhost:8080/e-cart/home/time.php',
                type: 'POST',
                success: function(data){
                    $('#time').html(data);
                }
            });
      });
  </script>
<?php
}else{  
    echo "<script>alert('You need to login first..!');</script>";
     echo "<script> location.href='http://localhost:8080/e-cart/'</script>";
}
?>
