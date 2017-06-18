<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/13/2017
 * Time: 5:46 PM
 */
class Product extends CI_Controller
{
    public function index(){
        $data['title']='Latest product';
        $data['product']=$this->mydb->get_product();
        $this->load->view('templates/header');
        $this->load->view('pages/index',$data);
        $this->load->view('templates/footer');


    }
    public function view($product=null) {
        $data['product']=$this->mydb->get_product($product);
       if(empty($data['product'])){
           show_404();
       }
        $data['title'] =$data['product']['title'];

        print_r($data['product']);

        $this->load->view('templates/header');
        $this->load->view('pages/view_product',$data);
        $this->load->view('templates/footer');
    }
        public function create(){
            $data['title']='Add product';
            $this->mydb->insert_product();

            $this->load->view('templates/header');
            $this->load->view('pages/addproduct',$data);
            $this->load->view('templates/footer');


        }
public function delete($id){
    echo $id;
    $this->mydb->delete_product($id);

}

}