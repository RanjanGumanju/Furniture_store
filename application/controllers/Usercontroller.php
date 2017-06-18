<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/8/2017
 * Time: 7:40 AM
 */

class Usercontroller extends CI_Controller
{
public function register(){
    $this->load->model("mydb");
    $this->mydb->insertCustomer();
}

    public function checkLogin()
    {
        $email = $this->input->post("email");
        $psw = $this->input->post("psw");

        $this->load->model("mydb");
        $datas = $this->mydb->checkLogin($email, $psw);
        if ($datas->num_rows() > 0) {
            $this->session->set_userdata("email", $email);
        header("location:../dashboardcontroller/page");

        } else {
            echo "Invalid";
            //$data['msg']="Invalid Login";
            // $this->load->view("message",$data);
        }
    }

    public function index(){

    }







}
