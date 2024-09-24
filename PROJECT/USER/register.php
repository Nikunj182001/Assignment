<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form</title> 
   
      <script src="assets\js\jquery-cdn.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  background: #4070f4;
}
.hello{
  display: flex;
  justify-content: center;
}

.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
header{
    padding-top: 20px;
    height:120px;
    background-color: white;
    margin-bottom: 20px;
}
nav{
   display: flex;
}
.nav{
    display:flex;
    gap: 20px;
    padding-left:150px;
    padding-top:20px;
    
}
.text{
    text-decoration: none;
    color: black;
    font-weight: 10hv;
    
}
.r1{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
  padding-top: 10px;
  padding-bottom:10px;
  margin-bottom:15px;
}

    </style>
   </head>
<body>


    <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="hexashop.php" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <p class="nav">
                            <a href="hexashop" class="text">Home</a>
                            <a href="about" class="text">About Us</a>
                            <a href="products" class="text">Products</a>
                            <a href="single-product" class="text">Single Product</a>
                            <a href="contact" class="text">Contact Us</a>
                            <a href="index" class="text">Login</a>
                            <a href="register" class="text">Register</a>
                            <a href="#explore" class="text">Explore</a>
                          </p>        
                       
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
      
  <div class="hello">
  <div class="wrapper">
    <h2>Registration</h2>
        <form method="post" enctype="multipart/form-data" >
                <div class="input-box">
                  <input type="text" placeholder="Enter your name" name="name" id="name"><!-- pattern="[a-zA-Z]{3,5}" -->
                  <b id="bname"></b>
                </div>

                <div class="input-box">
                  <input type="text" placeholder="Enter your email" name="email" id="email">
                  <b id="bemail"></b>
                </div>

                <div class="input-box">
                  <input type="password" placeholder="Create password" name="password" id="p1" >
                  <b id="bpass"></b>
                </div>

                <div class="input-box">
                  <input type="password" placeholder="Confirm password" name="password2" id="p2" >
                  <b id="b4"></b>
                </div>

                <div class="input-box">
                  <input type="mobile" placeholder="Enter Phone Number" name="mobile" id="mobile">
                  <b id="bmobile"></b>
                </div>

                <div class="input-box">
                  <input type="textarea" placeholder="Enter Address" name="address" id="address">
                  <b id="baddress"></b>
                </div>

                <div class="r1">
                  GENDER: 
                  <input type="radio" name="radio" value="male" id="r1">MALE
                  <input type="radio" name="radio" value="female" id="r2">FEMALE
                  <b id="b2"></b>
                </div>

                <div class="r1">
                  LANGUAGE: 
                  <input type="checkbox" name="chk[]" value="GUJRATI" id="c1">GUJRATI
                  <input type="checkbox" name="chk[]" value="HINDI" id="c2">HINDI
                  <input type="checkbox" name="chk[]" value="ENGLISH" id="c3">ENGLISH
                  <b id="b3"></b>
                </div>

                <div class="r1">
                  CHOOSE IMAGE:   
                  <input type="file" name="file" id="file">
                  <b id="bfile"></b>
                </div>

                
                <div class="policy">
                  <input type="checkbox" >
                  <h3>I accept all terms & condition</h3>
                </div>

                <div class="input-box button">
                  <input type="submit" value="Register Now" name="submit" id="submit">
                </div>

                <div class="text">
                  <h3>Already have an account? <a href="index">Login now</a></h3>
                </div>

        </form>
  </div>
  </div>

 <script>
    r1 = $('#r1');
    r2 = $('#r2');
    b1 = $('#submit');
    b2 = $('#b2');
    b3 = $('#b3');
    b4 = $('#b4');
    p1 = $('#p1');
    bpass = $('#bpass');
    p2 = $('#p2');
    name1 = $('#name');
    bname = $('#bname');

    email1 = $('#email');
    bemail = $('#bemail');

    mobile1 = $('#mobile');
    bmobile = $('#bmobile');

    address1 = $('#address');
    baddress = $('#baddress');


    file= $('#file');
    bfile = $('#bfile');


    console.log(file.attr('src',''));


    b1.click(function(){

      if(name1.prop('value') == "")
      {
        bname.html("Enter Name.....");
        bname.css('color','red');
        return false;
      }
      else
      {
        bname.html("");
      }

      if(email1.prop('value') == "")
      {
        bemail.html("Enter Email.....");
        bemail.css('color','red');
        return false;
      }
      else
      {
        bemail.html("");
      }

      if(p1.prop('value') == "")
      {
        bpass.html("Enter Password.....");
        bpass.css('color','red');
        return false;
      }
      else
      {
        bpass.html("");
      }

      if(p2.prop('value') == "")
      {
        b4.html("Enter Password.....");
        b4.css('color','red');
        return false;
      }
      else
      {
        b4.html("");
      }

      if(p2.prop('value') == p1.prop('value'))
      {
            b4.html("");
      }
      else
      {
            b4.html("Enter Correct Comfirm Password");
            b4.css('color','red');
            return false;
        }


      if(mobile1.prop('value') == "")
      {
        bmobile.html("Enter Mobile Number.....");
        bmobile.css('color','red');
        return false;
      }
      else
      {
        bmobile.html("");
      }

      if(address1.prop('value') == "")
      {
        baddress.html("Enter Address.....");
        baddress.css('color','red');
        return false;
      }
      else
      {
        baddress.html("");
      }




      if(r1.prop('checked') == false && r2.prop('checked') == false)
                {
                    b2.html("select radio");
                    b2.css('color','red');
                    return false;
                }
                else
                {
                    b2.html("");
                }

      if($('#c1').prop('checked') != false || $('#c2').prop('checked') != false || $('#c3').prop('checked') != false)
                {
                    b3.html("");
                }
                else
                {
                    b3.css('color','red');
                    b3.html("select checkbox");
                    return false;
                }

      if(file.prop('value') == "")
      {
        bfile.html("select image.....");
        bfile.css('color','red');
        return false;
      }
      else
      {
        bfile.html("");
      }

    })

 </script>
  


  
</body>
</html>