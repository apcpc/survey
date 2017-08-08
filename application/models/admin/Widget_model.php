<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/8
 * Time: 14:44
 */
class Widget_model extends  CI_Model {
     public function __construct() {
        parent::__construct();
        $this->load->database();
     }
     public function widgetList(){
         $sql="select id,title,create_time from widget order by id asc";
         $query=$this->db->query($sql);
         $result=$query->result_array();
         if($result){
             return $result;
         }else{
             return false;
         }
     }
     public function widgetAdd($data){
         $data['create_time']=date("Y-m-d H:i:s",time());
         $res=$this->db->insert('widget',$data);
         if($res){
             return $res;
         }else{
             return false;
         }
     }
     public function widgetDelete($id){
         $result=$this->db->delete('widget',array('id'=>$id));
         if($result){
             return $result;
         }else{
             return false;
         }
     }
}