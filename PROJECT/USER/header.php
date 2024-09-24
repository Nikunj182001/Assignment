    <!-- ***** Header Area Start ***** -->
  
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row"> 
                <div class="col-12"> 
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="hexashop" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                           

                        <ul class="nav">
                            <li class="scroll-to-section"><a href="hexashop" class="active">Home</a></li>
                                <!-- <li class="scroll-to-section"><a href="#men">Men's</a></li>
                                <li class="scroll-to-section"><a href="#women">Women's</a></li>
                                <li class="scroll-to-section"><a href="#kids">Kid's</a></li> -->
                                
                                <li><a href="about">About Us</a></li>
                                <li><a href="products">Products</a></li>
                                <!-- <li><a href="single-product">Single Product</a></li> -->
                                <li><a href="contact">Contact Us</a></li>
                                </li>
                            
                            <?php   
                                if(!empty($_SESSION['uemail']))
                                {?>
                                    
                                    <li class="scroll-to-section"><a href="logout" name="logout">Logout</a></li>

                                    <?php if(!empty($arr_cart)){ $row1 = mysqli_num_rows($arr_cart);   ?>



                                        <a href="cart"><i class="fa badge fa-shopping-cart px-3" style="font-size:20px" value="<?php echo $row1; ?>"> </i></a>



                                   

                                   <?php } ?>
                                   

                                <?php }  
                                 else { ?>
                                    <li class="scroll-to-section"><a href="index">Login</a></li>
                                    <li class="scroll-to-section"><a href="register">Register</a></li>
                                    
                                <?php } ?>

                                

                        </ul>   
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                   
                </div>
            </div>
        </div>
    </header>
    
    <!-- ***** Header Area End ***** -->
    <section class="section py-3" id="social">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading pt--5 pb-3" >
                        <h4 style="font-weight:bold">CATEGORIES:</h4>
                    </div>
                    <?php if(!empty($arr_category)){
                            foreach($arr_category as $ac){ ?>
                    <button style="background:darkcyan;border-color:darkcyan;"> <a href="products?cid=<?php echo $ac->cate_name;?>" style="color:black"> <?php echo $ac->cate_name;?> </a>

                    </button>
                        <?php } } ?>
                </div>
                

            </div>
        </div>
    </section>    



