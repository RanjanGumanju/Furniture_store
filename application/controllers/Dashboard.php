<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/13/2017
 * Time: 11:09 PM
 */
class Dashboard extends CI_Controller
{
    public function page()
    {
        $this->load->model("mydb");
        $data['product'] = $this->mydb->getProduct();


        $this->load->view('templates/header');
        $this->load->view('pages/viewproduct', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = null)
    {
        $data['product'] = $this->mydb->get_product($slug);

        if (empty($data['product'])) {
            show_404();
        }

        $this->load->view('templates/header');
        $this->load->view('pages/view', $data);
        $this->load->view('templates/footer');
    }

    public function anbc()
    {


    }
}