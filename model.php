<?php
class model
{
    public $con="";

    function __construct()
    {
        $run = $this->con = new mysqli('localhost','root','','assesment');
            // echo "kaam kare chhe";exit();
        // if($run)
        // {
        //     echo "connected";
        // }
        // else
        // {
        //     echo "not connected";
        // }
    }

    function insert($tbl,$data)
    {
        $col_arr = array_keys($data);
        $col = implode(',',$col_arr);

        $val_arr = array_values($data);
        $val = implode("','",$val_arr);

        $ins = "insert into $tbl ($col) values ('$val')";
        // echo $ins;exit();
        $run = $this->con->query($ins);
        if($run)
            {
                echo "<script>
                alert('Employee Register Successful......!')
                window.location.href= 'index.php';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Something Wents Wrong......!')
                window.location.href= 'add-emplo.php';
                </script>";
            }
        return $run;

    }

    function select($tbl)
    {
        $sel = "select * from $tbl";
       
        $run = $this->con->query($sel);
        
        while ($fetch = $run->fetch_object()) {
            $arr[] = $fetch;
        }
       
      
        return $arr;
    }

    function select_where($tbl,$where)
    {
        $wcol_arr = array_keys($where);
        $wval_arr = array_values($where);

        $sel = "select * from $tbl where 1=1";


        $i=0;
        foreach($where as $w)
        {
            $sel .= " and $wcol_arr[$i] = '$wval_arr[$i]'";
            $i++;
        }
        $run = $this->con->query($sel);  
        return $run;
    }


    function update($tbl,$data,$where)
    {
        $col_arr = array_keys($data);
        $val_arr = array_values($data);

        $update = "update $tbl set ";

        $count = count($data);
        
        $j=0;
        foreach($data as $d)
        {
            if($count == $j+1)
            {
                $update.= "$col_arr[$j] = '$val_arr[$j]'";
            }
            else
            {
                $update.= "$col_arr[$j] = '$val_arr[$j]', ";
                $j++;
            }
        }

        $wcol_arr = array_keys($where);
        $wval_arr = array_values($where);

        $update.= " where 1=1";

        $i=0;
        foreach($where as $w)
        {
            $update.= " and $wcol_arr[$i] = '$wval_arr[$i]'";
            $i++;
        }
        
        $update_data = $this->con->query($update);

        return $update_data;
    }


    function delete_where($tbl,$where)
    {
        $wcol_arr = array_keys($where);
        $wval_arr = array_values($where);

        $del= "delete from $tbl where 1=1";

        $k=0;
        foreach($where as $w)
        {
            $del.= " and $wcol_arr[$k] = '$wval_arr[$k]'";
            $k++;
        }
        $run = $this->con->query($del);
        
        return $run;

    }
}



?>