<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/8/2017
 * Time: 9:51 AM
 */
class Mydb extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insertCustomer()
{
    $data=array(
    'first_name'=>$this->input->post("fname"),
    'last_name'=>$this->input->post("lname"),
    'email'=>$this->input->post("email"),
    'password'=>$this->input->post("psw"),
    'address'=>$this->input->post("address"),
    'phone_number'=>$this->input->post("phone"));
    $this->db->insert("customer",$data);
}

    public function checkLogin($email,$psw){
        return $this->db->get_where("customer",array("email"=>$email, "password"=>$psw));

    }
    public function get_product($product = false)
    {
          if ($product == false) {
            $query = $this->db->get('product');
            return $query->result_array();
        }
        $query = $this->db->get_where('product',array('product_name'=> $product));
        return $query->row_array();

      }

public function insert_product(){
    $data=array
        ('product_name'=>$this->input->post('pname'),
        'price'=>$this->input->post('price'),
        'category_id'=>$this->input->post('category_id'));
    return $this->db->insert("product",$data);
}
public function delete_product($id){
    $this->db->where('product_id',$id);
    $this->db->delete('product');
    return true;
}
    public function getCategory()
    {
        $this->db->order_by('category_name');
        $query= $this->db->get("category");
        return $query->result_array();
    }

}

