<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/9/2017
 * Time: 8:55 PM
 */
class Page extends CI_Controller
{
    public function index($page='dashboard')
    {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')){
            show_404();
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
    }

}