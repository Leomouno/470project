<?php
 Class Home extends Controller{

   function index(){

     $data['page_title']="Home";
     $this->view("music/index",$data);
   }

 }


 ?>
