<?php
class Widget extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function add(){
        $this->load->view('head');
        $this->load->view('admin/widget/add');
        $this->load->view('footer');
    }
}