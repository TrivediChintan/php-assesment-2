<?php
include("model.php");


class controller extends model
{

    function __construct()
    {
        model::__construct();
        $removeExtention = $_SERVER['PATH_INFO'];
        switch ($removeExtention) {
            case '/index':
                include "index.php";
                break;


            case '/add-emplo':
                if (isset($_POST['submit'])) {
                    $fname = $_POST['fname'];
                    // echo $fname;exit();
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $gender = $_POST['gender'];
                    $password = $_POST['password'];

                    $data = array('employee_fname' => $fname, 'employee_lname' => $lname, 'employee_email' => $email, 'employee_mobile' => $mobile, 'employee_address' => $address, 'employee_gender' => $gender, 'employee_password' => $password);

                    // echo $data; exit();
                    $this->insert('employee', $data);
                }
                include "add-emplo.php";
                break;

            case '/view-emplo':
                $sel = $this->select("employee");

                include "view-emplo.php";
                break;
            case '/single-emplo':
                $singleid = $_GET['singleid'];
                $where = array('employee_id' => $singleid);
                $run = $this->select_where("employee", $where);
                $fetch_where = $run->fetch_object();
             
                include "single-emplo.php";
                break;
            case '/edit-emplo':
                $editid = $_GET['editid'];
                $where = array('employee_id' => $editid);
                $run = $this->select_where("employee", $where);
                $fetch_where = $run->fetch_object();

                if (isset($_POST['Update'])) {
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $address = $_POST['address'];
                    $gender = $_POST['gender'];
                    $password = $_POST['password'];
                    // echo $password;exit();
                    $data = array('employee_fname' => $fname, 'employee_lname' => $lname, 'employee_email' => $email, 'employee_mobile' => $mobile, 'employee_address' => $address, 'employee_gender' => $gender, 'employee_password' => $password);

                    // echo $data;exit();
                    $update_data =  $this->update("employee", $data, $where);
                    if ($update_data) {
                        header("location:view-emplo");
                    }
                }

                include "edit-emplo.php";
                break;

            case "/delete-emplo":
                $delid = $_GET['delid'];
                $where = array('employee_id' => $delid);
                $delete = $this->delete_where('employee', $where);


                if ($delete) {
                    header("location:view-emplo");
                }
                break;
        }
    }
}

$obj = new controller();
