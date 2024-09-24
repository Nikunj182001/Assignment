<?php 

class Model 
{
    public $conn="";
    function __construct(){

        $this->conn = new mysqli('localhost','root','','project'); 
        

    }
    function insert($tbl,$data) 
    {
        $arr_key = array_keys($data);
        $key = implode(',',$arr_key);

        $arr_val = array_values($data);
        $val = implode("','",$arr_val);

        $sql ="insert into $tbl($key) values('$val')";

        // echo $sql; exit();
        $run = $this->conn->query($sql);

        if(!empty($run))
        {
            return $run;
        }
    }
    function show($tbl,$where)
    {
        $arr_key = array_keys($where);
        $arr_val = array_values($where); 

        $count = count($where);
       

        $sql = "select * from $tbl where ";

        $j = 0; 
        while($j<$count)
        {
                $sql.= "$arr_key[$j] = '$arr_val[$j]' and ";
                $j++;
        }
        $sql = substr($sql,0,-4);

        // echo $sql;exit(); 
        $run = $this->conn->query($sql);

        if(!empty($run))
        {
            return $run;
        }
    }
    function show_category($tbl)
    {
        $sql = "select * from $tbl";
        $run = $this->conn->query($sql);
        
        while($fetch = $run->fetch_object()) 
        {
            $arr[] = $fetch;
        }
        
        return $arr;
    }


    function show_product($tbl,$cid)
    {

        $sql = "select * from $tbl where cate_name = '$cid'"; 
        // echo $sql; exit();
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
    
    function show_single_product($tbl,$id)
    {
        $sql = "select * from $tbl where id=$id";

        $run = $this->conn->query($sql);

        if(!empty($run))
        {
            return $run;
        }
    }
    function show_cart($tbl1,$tbl2,$user)
    {
        $sql = "select * from $tbl1 join $tbl2 on $tbl1.product_id = $tbl2.id where user_id = $user";

        $run = $this->conn->query($sql);

        return $run;

    }

}



   

    