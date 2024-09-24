
<?php
require 'model.php';


class Control extends Model
{
    
    function __construct()
    {  
        session_start();
        Model::__construct();
        $removeExtention = $_SERVER['PATH_INFO'];
        switch ($removeExtention) 
        {

            case "/header":
                include "header.php";
                break;

            case "/index":

                if(isset($_POST['submit']))
                {
                    $user = $_POST['uname'];
                    $pass = $_POST['upass'];

                    if(isset($_POST['cookiemail']))
                    {
                        setcookie('username',$user,time()+5);
                        setcookie('password',$pass,time()+5);
                    }

                    $run = $this->admin_show('admin',$user,$pass);

                    $fetch = $run->fetch_object();

                    // echo $fetch;

                    if(!empty($fetch))
                    {
                        echo "<script>
                                    alert('Welcome......!');
                                    window.location.href = 'dashboard';
                                    
                              </script>";

                            $dbemail = $fetch->username;

                            $_SESSION['username'] = $dbemail;

                        //    if(!empty($_SESSION['username']))
                        //    {
                        //         header('location: dashboard');
                        //    }
                            
                        }

                    else
                    {
                        echo "<script>
                                    alert('Wrong Details......!');
                              </script>";
                            //   header('location: index');   
                    }
                }
                include 'index.php';
                break;

            case "/logout":
                unset($_SESSION['username']);
                header('location: index');

                
                break;

            case "/dashboard":
                include "dashboard.php";
                break;

                // FOR USER DETAILS
                // 
                // 
            case "/add-user":
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $radio = $_POST['gender'];
                    $lang = $_POST['chk'];
                        foreach($lang as $l)
                        {
                            $l = implode(',',$lang);
                        }
                    $file = $_FILES['file']['name'];
                    $dup = $_FILES['file']['tmp_name'];
                    $path = ("../user/assets/user_image/");
                    move_uploaded_file($dup,$path.$file);

                    
                    $data =array('r_name'=>$name,'r_email'=>$email,'r_password'=>$pass,'r_phone'=>$mobile,'r_address'=>$address,'r_gender'=>$radio,'r_language'=>$l,'image'=>$file);

                    $this->insert('user',$data);
    
                }    

                include "add-user.php";
                break;


            case "/manage-user":
                    $arr1 = $this->showing('user');
    
                    include "manage-user.php";
                    break;
    

            case ("/edit-user"):
                $id = $_GET['$eid'];
                $arr = $this->update_show('user',$id); 

                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $radio = $_POST['gender'];
                    $lang = $_POST['chk'];
                        foreach($lang as $l)
                        {
                            $k = implode(',',$lang); 
                        }
                    $file = $_FILES['file']['name'];
                    $dup = $_FILES['file']['tmp_name'];
                    $path = ("../user/assets/user_image/");
                    move_uploaded_file($dup,$path.$file);

                    
                    $data =array('r_name'=>$name,'r_email'=>$email,'r_password'=>$pass,'r_phone'=>$mobile,'r_address'=>$address,'r_gender'=>$radio,'r_language'=>$k,'image'=>$file);
                    $this->update_edit('user',$data,$id);
                    
                }
                include "edit-user.php";
                break;
                   
                case "/delete-user":
                    $id = $_GET['$fid'];
                    $this->delete('user',$id);

                    if($this->conn)
                    {
                        header('location: manage-user');
                    }
    
                    include "delete-user.php";
                    break;


                    // FOR CATEGORY DETAILS
                    // 
                    // 

                case "/add-category":

                        if(isset($_POST['submit']))
                        {
                            $name = $_POST['name'];
        
                            $data = array('cate_name'=>$name);
        
                            $this->insert('category',$data);
                        }
                        include "add-category.php";
                        break;
    
                case "/manage-category":

                            $arr1 = $this->showing('category');
            
                            include "manage-category.php";
                            break;
            

            case "/edit-category":

                $id = $_GET['eid'];
                $arr = $this->show_category_update('category',$id);

                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];

                    $data = array('cate_name'=>$name);

                    $this->update_category('category',$data,$id);

                }

                include "edit-category.php";
                break;


            case "/delete-category":

                    $id = $_GET['eid'];
                    $this->delete_product_category('product',$id);

                    $this->delete_cate('category',$id);
                break;



                // FOR PRODUCT DETAILS
                // 
                // 

            case "/add-product":

                $arr1 = $this->showing('category');
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $file = $_FILES['file']['name'];  
                    $dup = $_FILES['file']['tmp_name']; 
                    $path = ("../user/assets/images/");
                    move_uploaded_file($dup,$path.$file);
                    $price = $_POST['price'];
                    $cateId = $_POST['category'];

                    $run = $this->product_FK_show('category',$cateId);
                    $fetch = $run->fetch_object();

                    $id = $fetch->cate_id;

                    if($id)
                    {
                    $data =array('name'=>$name,'image'=>$file,'price'=>$price,'cate_id'=>$id,'cate_name'=>$cateId);

                    $this->insert('product',$data);

                    }

    
                }    

                include "add-product.php";
                break;
            case "/manage-product":
                $arr1 = $this->showing('product');
                include "manage-product.php";
                break;

            case "/edit-product":
                $id_product = $_GET['$eid'];
                $arr = $this->show_product_update('product',$id_product);
                $arr1 = $this->showing('category');
                if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $file = $_FILES['file']['name'];  
                    $dup = $_FILES['file']['tmp_name']; 
                    $path = ("../user/assets/images/");
                    move_uploaded_file($dup,$path.$file);
                    $price = $_POST['price'];
                    $cateId = $_POST['category'];

                    $run = $this->product_FK_show('category',$cateId);
                    $fetch = $run->fetch_object();

                    $id = $fetch->cate_id;

                    if($id)
                    {
                        $data =array('name'=>$name,'image'=>$file,'price'=>$price,'cate_id'=>$id,'cate_name'=>$cateId);

                        $this->update_product('product',$data,$id_product);

                        header('location: manage-product');
                    }

                }
                include "edit-product.php";
                break;

                case "/delete-product":
                    $id = $_GET['$eid'];
                    $this->delete_product('product',$id);

                    header('location: manage-product');
                    break;

                case "/show-cart":
                    $run = $this->conn->query("select * from cart join product on cart.product_id = product.id");
                    include "show-cart.php";
                    break;

        }
    }
}

$obj = new Control();
