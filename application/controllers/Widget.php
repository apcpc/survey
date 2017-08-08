<?php
class Widget extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('admin/Widget_model');
    }
    public function index(){
        $data['list']=$this->Widget_model->widgetList();
        $this->load->view('head');
        $this->load->view('admin/widget/index',$data);
        $this->load->view('footer');
    }
    public function add(){
        $this->load->view('head');
        $this->load->view('admin/widget/add');
        $this->load->view('footer');
    }
    public function save(){
        if(empty($this->input->post())){
            $output['status']=400;
            $output['content']='操作失败';
        }
        $data['title']=$this->input->post('title');
        $data['content']=$this->input->post('content');
        $data['type']=$this->input->post('type');
        $result=$this->Widget_model->widgetAdd($data);
        if($result){
            $output['status']=200;
            $output['content']='操作成功';
        }
        echo json_encode($output);
    }
    public function delete(){
        $id=$this->input->get('id');
        $result=$this->Widget_model->widgetDelete($id);
        if($result){
            $this->index();
        }else{
            echo '操作失败';
        }
    }
}