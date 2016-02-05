<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {
    
    public function index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');
        
        //print_r("form validation: ");
        //print_r($this->form_validation->run());
        if($this->form_validation->run() == false) {
            $this->load->view("login_view");
        }
        else {
            $data['postdata'] = $this->input->post();
            $this->load->view("login_confirm_view", $data);
        }
    }
}