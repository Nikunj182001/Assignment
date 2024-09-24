<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop - Product Listing Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
<style>
    .badge:after{
        content:attr(value);
        font-size:15px;
        color:black;
        background: ;
        border-radius:50%;
        padding:3px;
        position:relative;
        left:-8px;
        top:-10px;
        opacity:0.9;
}
      *{
        margin: 0;padding: 0;
      -webkit-font-smoothing: antialiased;
      -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
      text-shadow: rgba(0,0,0,.01) 0 0 1px
      }
      body{
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #E0E0E0;
        color: #000000;
        
        }
        ul{
          list-style: none;
          margin-bottom: 0px
          }
          .button{
            display: inline-block;background: #0e8ce4;border-radius: 5px;height: 48px;-webkit-transition: all 200ms ease;-moz-transition: all 200ms ease;-ms-transition: all 200ms ease;-o-transition: all 200ms ease;transition: all 200ms ease}.button a{display: block;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px}.button:hover{opacity: 0.8}.cart_section{width: 100%;padding-top: 50px;padding-bottom: 111px}.cart_title{font-size: 30px;font-weight: 500}.cart_items{margin-top: 8px}.cart_list{border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);background-color: #fff}.cart_item{width: 100%;padding: 15px;padding-right: 46px}.cart_item_image{width: 133px;height: 133px;float: left}.cart_item_image img{max-width: 100%}.cart_item_info{width: calc(100% - 133px);float: left;padding-top: 18px}.cart_item_name{margin-left: 7.53%}.cart_item_title{font-size: 14px;font-weight: 400;color: rgba(0,0,0,0.5)}.cart_item_text{font-size: 18px;margin-top: 35px}.cart_item_text span{display: inline-block;width: 20px;height: 20px;border-radius: 50%;margin-right: 11px;-webkit-transform: translateY(4px);-moz-transform: translateY(4px);-ms-transform: translateY(4px);-o-transform: translateY(4px);transform: translateY(4px)}.cart_item_price{text-align: right}.cart_item_total{text-align: right}.order_total{width: 100%;height: 60px;margin-top: 30px;border: solid 1px #e8e8e8;box-shadow: 0px 1px 5px rgba(0,0,0,0.1);padding-right: 46px;padding-left: 15px;background-color: #fff}.order_total_title{display: inline-block;font-size: 14px;color: rgba(0,0,0,0.5);line-height: 60px}.order_total_amount{display: inline-block;font-size: 18px;font-weight: 500;margin-left: 26px;line-height: 60px}.cart_buttons{margin-top: 60px;text-align: right}.cart_button_clear{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 48px;color: rgba(0,0,0,0.5);background: #FFFFFF;border: solid 1px #b2b2b2;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;margin-right: 26px}.cart_button_clear:hover{border-color: #0e8ce4;color: #0e8ce4}.cart_button_checkout{display: inline-block;border: none;font-size: 18px;font-weight: 400;line-height: 48px;color: #FFFFFF;padding-left: 35px;padding-right: 35px;outline: none;cursor: pointer;vertical-align: top}
</style>

    </head>
    
    <body>
    

    <?php include('header.php');?>

    <?php  if(isset($_SESSION['userid'])){ ?>

        <form action="" method="post">

      <div class="cart_section">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-10 offset-lg-1">
                 <div class="cart_container">

                     <?php if(!empty($arr_cart)){ $row2 = mysqli_num_rows($arr_cart);   ?>
                     <div class="cart_title">Shopping Cart<small> (<?php echo $row2 ?> item in your cart) </small></div>
                     <?php } ?>
                     <div class="cart_items">

                     <?php $total = 0;  while($row_cart = $arr_cart->fetch_object()){ ?>

                        <?php if($row_cart->quantity == 0)
                        {
                            $this->conn->query("delete from cart where cart_id = $row_cart->cart_id");
                            continue;
                            
                        } ?>

                        <ul class="cart_list">
                              <li class="cart_item clearfix">
                                 <div class="cart_item_image"><img src="assets/images/<?php echo $row_cart->image; ?>" alt=""></div>
                                 <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                     <div class="cart_item_name cart_info_col">
                                         <div class="cart_item_title">Name</div>
                                         <div class="cart_item_text"><?php echo $row_cart->name; ?></div>
                                     </div>
                                     <!-- <div class="cart_item_color cart_info_col">
                                         <div class="cart_item_title">Color</div>
                                         <div class="cart_item_text"><span style="background-color:#999999;"></span>Silver</div>
                                     </div> -->
                                     <div class="cart_item_quantity cart_info_col">
                                         <div class="cart_item_title">Quantity</div>

                                         <a href="quantity-minus?c_id=<?php echo $row_cart->cart_id; ?>"><i class = "fa fa-minus"></i></a>

                                         <input class="cart_item_text" value="<?php echo $row_cart->quantity; ?>" style="width:50px">

                                         <a href="quantity-plus?c_id=<?php echo $row_cart->cart_id; ?>"><i class = "fa fa-plus"></i></a>

                                     </div>
                                     <div class="cart_item_price cart_info_col">
                                         <div class="cart_item_title">Price</div>
                                         <div class="cart_item_text">$<?php echo $row_cart->price; ?></div>
                                     </div>
                                     <div class="cart_item_total cart_info_col">
                                         <div class="cart_item_title">Total</div>
                                         <div class="cart_item_text">$<?php echo $tot = $row_cart->quantity * $prce = $row_cart->price;?></div>
                                     </div>
                                     <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title"> </div>
                                        <div class="cart_item_text"><a href="delete-product-cart?cart_id=<?php echo $row_cart->cart_id; ?>" style="color:red;"><i class="fa fa-trash"> </i></a></div>
                                      </div>
                                 </div>
                             </li>
                         </ul>
                         <br><br>

                         
                         <?php
                         

                            $total = $total + $tot; } 
                         ?>

                         <?php if($row2 > 0){ ?>

                            <div class="order_total" >
                                <div class="order_total_content text-md-right ">
                                    <div class="order_total_title" style="font-size:20px">Remove All</div>
                                    <div class="order_total_amount"style="display:inline">
                                        <a href="delete-all-cart?user_id=<?php echo $_SESSION['userid']; ?>" style="color:red;"><i class="fa fa-trash"style="font-size:20px"> </i></a></div>    
                                </div>                            
                            </div>
                         </div>



                    </div>
                       
                    <div class="order_total">
                         <div class="order_total_content text-md-right ">
                             <div class="order_total_title">Order Total:</div>
                             <div class="order_total_amount">$<?php echo $total; ?></div>
                         </div>
                     </div>
                     <div class="cart_buttons"> <a href="hexashop" class="button cart_button_clear">Continue Shopping</a> <a href="checkout" class="button cart_button_checkout">CHECK OUT</a> </div>
                 </div>

                 <?php } ?>
             </div>
         </div>
     </div>
 </div>
 </form>
<?php }

      else
      {
            echo "<script>
                  alert('Login First');
                  window.location.href = 'index';
            </script>";
      }
?>


    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
