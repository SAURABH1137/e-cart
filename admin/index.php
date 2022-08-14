<?php
include('../links.html');
?>
<html>
    <body>
        <div class="container-fluid row-col-2">
            <div class="row row-col-2 ml-2">
                <div class="col-3">
                    <div class="col-md-6 ml-5 mt-5 text-center">
                        <img src="http://localhost:8080/e-cart/img/admin.png" class="rounded img-fluid img-thumbnail" width="80%">
                    </div>
                    <dl class="row">
                        <dt class="col-sm-5 mt-3">USER NAME</dt>
                        <dd class="col-sm-7 mt-3">ADMIN</dd>

                        <dt class="col-sm-5 mt-3">EMAIL ID</dt>
                        <dd class="col-sm-7 mt-3">dr.saurabh@gmail.com</dd>

                        <dt class="col-sm-5 mt-3">ADDRESS</dt>
                        <dd class="col-sm-7 mt-3">pune,maharastra,india</dd>

                        <dt class="col-sm-5 mt-3">MOBILE NO</dt>
                        <dd class="col-sm-7 mt-3">+91 9762663592</dd>

                        <dt class="col-sm-5 mt-3">GENDER</dt>
                        <dd class="col-sm-7 mt-3">MALE</dd>
                    </dl>
                </div>
                <div class="col mt-5">
                <div class="card-deck">
                    <div class="card text-white bg-info mb-3"  id="to-pay">
                        <div class="card-body text-center">
                            <p class="display-1">₹<span id="buy_pay">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="far fa-money-bill-alt"></i> TOTAL EARN </p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mb-3"  id="payed">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="users">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-shopping-bag"></i> TOTAL USERS </p>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card text-white bg-primary mb-3" id="products">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="product_counter">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-store"></i> TOTAL PRODUCTS </p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3"  id="add-cart">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="cart_counter">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-cart-plus"></i> TOTAL CART </p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-3"  id="buy">
                        <div class="card-body text-center">
                            <p class="display-1"><span id="buy_product">0</span><sup>+</sup></p>
                            <p class="card-text mt-5"><i class="fas fa-cash-register"></i> TOTAL BUY </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="http://localhost:8080/e-cart/javascript/sweet.js"></script>
<script>
    $(document).ready(function(){
        $("#products").click(function(){
            location.href='http://localhost:8080/e-cart/admin/products.php';
        });
        $("#buy").click(function(){
            location.href='http://localhost:8080/e-cart/admin/buy.php';
        });
        $("#to-pay").click(function(){
            alert('Go to cart and Pay Bils..!');
        });
        $("#add-cart").click(function(){
            location.href='http://localhost:8080/e-cart/admin/cart.php';
        });
        $("#payed").click(function(){
            location.href='http://localhost:8080/e-cart/admin/users.php';
        });
    });
</script>
<script>
    $(document).ready(function(){
      $.ajax({
            url : "http://localhost:8080/e-cart/ajax/ajax-admin-counter.php",
            type: "POST",
            success: function(data){
            var count = data.split(":");
            $("#cart_counter").text(count[0]);
            $("#product_counter").text(count[1]);
            $("#buy_product").text(count[2]);
            $("#buy_pay").text(count[3]);
            $("#users").text(count[4]);
            }
        });
      });
  </script>