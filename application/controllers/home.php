<?php

class Home extends CI_Controller {

	public function index() 
	{          
            $this->load->helper('array');
            
            //load Carousel Model
            $this->load->model('carousel_model');
            $data['carousel'] = $this->carousel_model->carousel_items();
            
           
            //Homepage Array
            $homepage = array('title' => 'New Services @ Tulane Library');
            
            
            //loads header
            $this->load->view('common/header', $homepage);
            
            //loads main navigation
            $this->load->view('common/main_menu');
            
            //loads views/home/home_view.php
            $this->load->view('home/home_view', $data);  
            
            //loads footer
            $this->load->view('common/footer');     
         
            //delete this before going live
            //$this->output->enable_profiler(TRUE); 
	}

        
}