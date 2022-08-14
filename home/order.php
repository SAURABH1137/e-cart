<?php
session_start();
include('../links.html');
if(isset($_SESSION['username'])){
?>
<div class='container-fluid'>
    <div class='col' id='cart_info'>
    </div>
</div>
<script>
    $(document).ready(function(){
        function reload(){
            $.ajax({
                url : 'http://localhost:8080/e-cart/ajax/ajax-cart-buy-info.php',
                type: 'POST',
                success: function(data){
                    $('#cart_info').html(data);
                }
            });
        }
        reload();
      });
  </script>
<?php
}else{  
    echo "<script>alert('You need to login first..!');</script>";
     echo "<script> location.href='http://localhost:8080/e-cart/'</script>";
}
?>