<?php
session_start();
include("../e-cart/links.html");
include("../e-cart/connection/index.php");
?>
<html>
    <body>
        <div class="container-fluid">
            <div class="row row-col-2">
                <div class="col mt-3">
                <div class="row">
                    <div class="col">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"role="tab">Category</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Bread/Bakery</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Dry/Baking Goods</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Frozen Foods</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Produce</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Cleaners</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Paper Goods</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" role="tab">Other</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="col mt-2 text-center" id="search-data">
                        <!-- search result data or sidebar result search-data or coll data -->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
  $(document).ready(function(){
    if($("#search").keyup(function(){})){
      $("#search").on("keyup",function(){
      var search_term = $(this).val();
        $.ajax({
          url: "http://localhost:8080/e-cart/ajax/ajax-searchbar.php",
          type:"POST",
          data: {search:search_term},
          success:function(data){
            $("#search-data").html(data);
          }
        });
      });
    }
    if($("#search").click(function(){})){ 
      $('#list-tab a').click(function(){
        var a = $(this).html();
            $.ajax({
                url : "http://localhost:8080/e-cart/ajax/ajax-sidebarsearch.php",
                type : "POST",
                data : {caname : a},
                success: function(data){
                    $("#search-data").html(data);
                }
            });
        });
    }
    if($("#search").click(function(){})){ 
        $.ajax({
            url : "http://localhost:8080/e-cart/ajax/ajax-sidebarsearch.php",
            type: "POST",
            success: function(data){
                $("#search-data").html(data);
            }
        });
    }
    });
</script>