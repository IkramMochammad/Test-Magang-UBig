<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class VerifyLogin extends CI_Controller {

   function __construct()
   {
     parent::__construct();
     define('ASSETS',base_url().'assets');
     $this->load->model('user','',TRUE);
   }

   function index()
   {
    /*echo $this->input->post("username");
    echo $this->input->post("password");*/
     //This method will have the credentials validation
     $this->load->library('form_validation');


     $this->form_validation->set_rules('username', 'Username', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

     if($this->form_validation->run() == FALSE)
     {
       //Field validation failed.  User redirected to login page
       redirect('login');
     }
     else
     {
       //Go to private area
       redirect('http://localhost/test/');

     }
   }

   function check_database($password)
   {
     //Field validation succeeded.  Validate against database
     $username = $this->input->post('username');

     //query the database
     $result = $this->user->login($username, $password);

     if($result)
     {
       $sess_array = array();
       foreach($result as $row)
       {
         $sess_array = array(
           'id_admin' => $row->id_admin,
           'username' => $row->username
         );
         $this->session->set_userdata('logged_in', $sess_array);
       }
       return TRUE;
     }
     else
     {
       $this->form_validation->set_message('check_database', 'Invalid username or password');
       $this->session->set_flashdata('pesan', 'Invalid username or password');
       return false;
     }
   }
  }
?>