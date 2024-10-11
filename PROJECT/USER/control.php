<?php

require 'model.php';
class Control extends Model
{

    function __construct()
    {
        session_start();
        Model::__construct();

        $url = ($_SERVER['PATH_INFO']);



        $arr_category = $this->show_category('category');

        // FOR CART BUTTON SHOW
        if (isset($_SESSION['userid'])) {
            $user = $_SESSION['userid'];
            $arr_cart = $this->show_cart('cart', 'product', $user);
        }
        // END HERE

        switch ($url) {

            case "/index":

                if (isset($_POST['submit'])) {
                    $email = $_POST['uname'];
                    $pass = $_POST['upass'];

                    if (isset($_POST['cookiemail'])) {

                        setcookie('username', $email, time() + 5);
                        setcookie('password', $pass, time() + 5);

                    }

                    $where = array('r_email' => $email, 'r_password' => $pass);

                    $run = $this->show('user', $where);


                    $fetch = $run->fetch_object();


                    if (!empty($fetch)) {
                        echo "<script>
                                        alert('welcome........!');
                                        window.location.href=('hexashop');
                            </script>";
                        $dbemail = $fetch->r_email;
                        $dbpass = $fetch->r_password;
                        $dbId = $fetch->user_id;
                        $dbName = $fetch->r_name;

                        $_SESSION['uemail'] = $dbemail;
                        $_SESSION['userid'] = $dbId;
                        $_SESSION['user_name'] = $dbName;




                    } else {
                        echo "<script>
                                    alert('invalid username and password...!');
                                    
                                </script>";
                        echo "invalid username";

                    }



                }
                if (isset($_POST['forgot'])) {
                    header('location:forgot');
                }
                include "index.php";
                break;

            case "/forgot":
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $sql = "select * from user where r_email = '$email'";
                    $run = $this->conn->query($sql);
                    $fetch = $run->fetch_object();
                    // echo $fetch->r_email;exit();

                    if (!empty($fetch)) {
                        $random = rand(111111, 999999);
                        $_SESSION['code'] = $random;
                        $time = time();
                        $sql1 = "insert into forgot_p(email,otp,dateTime) values('$email','$random',$time)";
                        $run1 = $this->conn->query($sql1);

                        // echo "hi"; exit();
                        $_SESSION['email'] = $email;

                        $to = $_SESSION['email'];
                        $subject = "my subject";
                        $mailMessage = "This is your otp for change password: " . $random;
                        // $headers = "from: xyz@gmail.com" . "\r\n" .
                        //     "CC: $to";

                        if (mail($to, $subject, $mailMessage, $headers)) {
                            header('location: sendOTP');
                        } else {
                            echo "<script>alert('Connect to Internet');</script>";
                        }
                    }

                    // echo "<script>
                    //     window.location.href = 'sendOTP';
                    // </script>";
                    else {
                        echo "<script>
                            alert('Email is not Valid.');
                        </script>";
                    }
                }
                include 'forgot.php';
                break;

            case "/sendOTP":

                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $otp = $_POST['otp'];

                    if ($email == $_SESSION['email'] && $otp == $_SESSION['code']) {
                        $_SESSION['token'] = "true";
                        echo "<script>alert('Correct OTP');
                                        window.location.href = 'passReset'</script>";
                    } else {
                        echo "<script>alert('Wrong OTP');</script>";
                    }
                }
                include 'sendOTP.php';
                break;

            case "/passReset":



                if (isset($_POST['submit'])) {
                    $pass1 = $_POST['pass1'];
                    $pass2 = $_POST['pass2'];

                    $email = $_SESSION['email'];
                    if ($pass1 == $pass2) {
                        $sql = "update user set r_password = '$pass1' where r_email = '$email'";
                        $run = $this->conn->query($sql);
                        if ($run) {
                            unset($_SESSION['code']);
                            echo "<script>
                                            alert('Successfully Changed');
                                            window.location.href = 'index';
                                  </script>";
                        }
                    } else {
                        echo "<script>alert('Wrong Confirm Password');</script>";
                    }
                }



                include 'passReset.php';
                break;

            case "/logout":

                unset($_SESSION['uemail']);
                unset($_SESSION['userid']);
                unset($_SESSION['user_name']);

                // include 'hexashop.php'; 
                header('location: index');
                break;

            case "/hexashop":
                include "hexashop.php";
                break;

            case "/products":

                if (isset($_GET['cid'])) {
                    $cid = $_GET['cid'];


                    $arr = $this->show_product('product', $cid);
                }

                include "products.php";
                break;

            case "/single-product":

                $id = $_GET['pid'];
                $arr = $this->show_single_product('product', $id);

                if (isset($_POST['cart'])) {

                    if (isset($_SESSION['userid'])) {
                        $user_id = $_SESSION['userid'];
                        $pr_id = $_POST['id'];
                        $qty = $_POST['quantity'];
                        $cate_id = $_POST['cate_id'];
                        $cate_name = $_POST['cate_name'];

                        $data = array('quantity' => $qty, 'product_id' => $pr_id, 'cate_id' => $cate_id, 'cate_name' => $cate_name, 'user_id' => $user_id);

                        $where = array('product_id' => $pr_id, 'cate_name' => $cate_name, 'user_id' => $user_id);

                        $arr = $this->show('cart', $where);
                        $fetch = $arr->fetch_object();

                        if (!empty($fetch)) {
                            echo "<script>
                            alert('Item Alredy Added To Cart');
                            window.location.href = 'single-product?pid=$pr_id';
                        </script>";

                        } else {
                            $run = $this->insert('cart', $data);

                            if (!empty($run)) {
                                echo "<script>
                                    alert('Item Added To Cart');
                                    window.location.href = 'single-product?pid=$pr_id';
                                </script>";
                            }

                        }
                    } else {
                        echo "<script>
                                    alert('Login First');
                                    window.location.href = 'index';
                              </script>";

                    }
                }




                include "single-product.php";
                break;

            case "/cart":

                // $user = $_SESSION['userid'];

                // $arr = $this->show_cart('cart',$user);

                include "cart.php";
                break;

            case "/quantity-minus":
                $c_id = $_GET['c_id'];
                $this->conn->query("update cart set quantity = quantity - 1 where cart_id = $c_id");

                if ($this->conn) {

                    header('location:cart');

                }
                break;

            case "/quantity-plus":
                $c_id = $_GET['c_id'];
                $this->conn->query("update cart set quantity = quantity + 1 where cart_id = $c_id");
                if ($this->conn) {
                    header('location: cart');
                }
                break;

            case "/delete-product-cart":

                $cart_id = $_GET['cart_id'];

                $run = $this->conn->query("delete from cart where cart_id = $cart_id");
                if ($run) {
                    header('location: cart');
                }
                break;

            case "/delete-all-cart":
                $user_id = $_GET['user_id'];
                $run = $this->conn->query("DELETE FROM cart where user_id = $user_id");
                if ($run) {
                    header('location: cart');
                }
                break;


            case "/checkout":
                include "checkout.php";
                break;

            case "/payment":
                if (isset($_POST['name']) && isset($_POST['amount']) && isset($_POST['pay_id'])) {
                    $pay_id = $_POST['pay_id'];
                    $name = $_POST['name'];
                    $amount = $_POST['amount'];

                    $data = array('name' => $name, 'amount' => $amount, 'pay_id' => $pay_id, 'pay_status' => 'success');
                    $run = $this->insert('payment', $data);
                }
                break;

            case "/success":
                $id = $_SESSION['userid'];
                $run = $this->conn->query("delete from cart where user_id = $id");
                if ($run) {
                    header('location: cart');
                }
                break;

            case "/register":

                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $radio = $_POST['radio'];
                    $lang = $_POST['chk'];
                    foreach ($lang as $l) {
                        $l = implode(',', $lang);
                    }
                    $file = $_FILES['file']['name'];
                    $dup = $_FILES['file']['tmp_name'];
                    $path = ("assets/user_image/");
                    move_uploaded_file($dup, $path . $file);

                    // FOR NAME

                    $where = array('r_name' => $name);
                    $run = $this->show('user', $where);

                    $fetch = $run->fetch_object();
                    if (!empty($fetch)) {
                        echo "<script>alert('name already available.......!');</script>";
                    }

                    //FOR EMAIL


                    $where1 = array('r_email' => $email);
                    $run1 = $this->show('user', $where1);

                    $fetch1 = $run1->fetch_object();
                    if (!empty($fetch1)) {
                        echo "<script>alert('email already available.......!');</script>";
                    }


                    //FOR PASSWORD


                    $where2 = array('r_password' => $pass);
                    $run2 = $this->show('user', $where2);

                    $fetch2 = $run2->fetch_object();
                    if (!empty($fetch2)) {
                        echo "<script>alert('password already available.......!');</script>";
                    } else {
                        $data = array('r_name' => $name, 'r_email' => $email, 'r_password' => $pass, 'r_phone' => $mobile, 'r_address' => $address, 'r_gender' => $radio, 'r_language' => $l, 'image' => $file);

                        $this->insert('user', $data);

                    }


                    /* for all */

                    // $where =array('r_name'=>$name,'r_email'=>$email,'r_password'=>$pass,'r_phone'=>$mobile);


                    // $run = $this->show('user',$where);
                    // $fetch = $run->fetch_object();
                    // if(!empty($fetch))
                    // {
                    //     echo "<script>alert('records already available.......!');</script>";
                    // }
                    // else
                    //     {
                    //         $data =array('r_name'=>$name,'r_email'=>$email,'r_password'=>$pass,'r_phone'=>$mobile,'r_address'=>$address,'r_gender'=>$radio,'r_language'=>$l,'image'=>$file);

                    //         $this->insert('user',$data);

                    //     }

                }

                include "register.php";
                break;

            case "/about":
                include "about.php";
                break;

            case "/contact":
                include "contact.php";
                break;

            case "/404":
                include "404.php";
                break;

        }

    }
}

$obj = new Control;
