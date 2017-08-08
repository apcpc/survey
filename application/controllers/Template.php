<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/8
 * Time: 17:46
 */
class Template extends CI_Controller{
      public function  __construct(){
          parent::__construct();
          $this->load->helper('url');
      }
      public function add(){
          $this->load->view('head');
          $this->load->view('admin/template/add');
          $this->load->view('footer');
      }
}