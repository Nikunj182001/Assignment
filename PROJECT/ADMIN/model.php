<?php 

class Model 
{

    public $conn="";
   
    function __construct() 
    {
        $this->conn = new mysqli('localhost','root','','project');
        
        // echo "dflgj";exit(); 
    }
    function insert($tbl,$data)
    {
        $key_array = array_keys($data); 
        $key = implode(',',$key_array);

        $val_array = array_values($data);
        $val = implode("','",$val_array);

        $sql = "insert into $tbl($key) values('$val')";

        
        $this->conn->query($sql);

    }
    function showing($tbl)
    {
            $sql = "select * from $tbl";
            $run = $this->conn->query($sql);
            

            while($fetch = $run->fetch_object())
            {
                $arr[] = $fetch;
            }
            if(!empty($arr))
            {
                return $arr;
            }
    }
    function update_show($tbl,$id)
    {
        $sql = "select * from $tbl where user_id=$id"; 
        $run = $this->conn->query($sql);
        
        while($fetch = $run->fetch_object())
        {
            $arr[] = $fetch;
        }
        
        return $arr;
    }
    function update_edit($tbl,$data,$id)
    {
        $key_array = array_keys($data);

        $val_array = array_values($data);

        $sql = "update $tbl set ";
        $count = count($data);

        $j=0;
        foreach($data as $d)
        {
            if($count<=$j+1)
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
            }
            else
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
                $j++;
            }
        }
        $sql = substr($sql,0,-2);

        $sql.= " where user_id = $id ";
 
        // echo $sql;exit();

        $this->conn->query($sql);

        if($this->conn)
                    {
                        header('location: manage-user');
                    }

       
    }
    function delete($tbl,$id)
    {
        $sql = "delete from $tbl where user_id = $id"; 

        $this->conn->query($sql);
    }
    function admin_show($tbl,$user,$pass)
    {
        $sql = "select * from $tbl where username = '$user' and password = '$pass'";

        // echo $sql; exit();

        $run = $this->conn->query($sql);

        if(!empty($run))
        {
            return $run;
        }
    }
    function product_FK_show($tbl,$cateId)
    {
        $sql = "select cate_id from $tbl where cate_name = '$cateId'";

        $run = $this->conn->query($sql);

        return $run;
    }
    function delete_cate($tbl,$id)
    {
        $sql = "delete from $tbl where cate_id = $id"; 


        $this->conn->query($sql);

        if($this->conn)
        {
            header('location: manage-category');

        }
    }
    function delete_product_category($tbl,$id)
    {
        $sql = "delete from $tbl where cate_id = $id";

        $this->conn->query($sql);
    }

    function show_category_update($tbl,$id)
    {
        $sql = "select * from $tbl where cate_id=$id"; 
        $run = $this->conn->query($sql);
        
        while($fetch = $run->fetch_object())
        {
            $arr[] = $fetch;
        }
        
        return $arr;
    }
    function update_category($tbl,$data,$id)
    {
        $key_array = array_keys($data);

        $val_array = array_values($data);

        $sql = "update $tbl set ";
        $count = count($data);

        $j=0;
        foreach($data as $d)
        {
            if($count<=$j+1)
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
            }
            else
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
                $j++;
            }
        }
        $sql = substr($sql,0,-2);

        $sql.= " where cate_id = $id ";
 
        // echo $sql;exit();

        $run = $this->conn->query($sql);
        
        if($run)
                    {
                        header('location: manage-category');
                    }

    }
    function show_product_update($tbl,$id)
    {
        $sql = "select * from $tbl where id=$id"; 
        $run = $this->conn->query($sql);
        
        while($fetch = $run->fetch_object())
        {
            $arr[] = $fetch;
        }
        
        return $arr;
    }
    function update_product($tbl,$data,$id_product)
    {
        $key_array = array_keys($data);

        $val_array = array_values($data);

        $sql = "update $tbl set ";
        $count = count($data);

        $j=0;
        foreach($data as $d)
        {
            if($count<=$j+1)
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
            }
            else
            {
                $sql.= " $key_array[$j] = '$val_array[$j]', ";
                $j++;
            }
        }
        $sql = substr($sql,0,-2);

        $sql.= " where id = $id_product ";
 
        // echo $sql;exit();

        $this->conn->query($sql);
        

    }
    function delete_product($tbl,$id)
    {
        $sql = "delete from $tbl where id = $id";

        $this->conn->query($sql);
    }



}
