<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

   class Home extends CI_Controller {

      public function __construct() { 
         parent::__construct(); 
		 
		$this->load->model('db_ops');
		
      }
	   
  
      public function index() {
		  
       $this->load->view("home");
      } 

      public function register() {
		  

         $this->load->helper(array('form', 'url'));

         $this->load->library('form_validation');
         
         if($_SERVER['REQUEST_METHOD'] === 'POST')
         {
         
         $this->form_validation->set_rules('name', 'Name', 'required|min_length[2]');
         $this->form_validation->set_rules('phone', 'Phone number', 'required|numeric|exact_length[10]');
         $this->form_validation->set_rules('address', 'Address', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
         $this->form_validation->set_rules('passwordc', 'Confirm Password', 'required|min_length[8]|matches[password]');
            
         if($this->form_validation->run() == FALSE)
         {
         
         $this->load->view("register");

         }
         else
         {
         print_r($_POST);
         $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);

         $data = $_POST;

         $data['password'] = $pass;
         unset($data['passwordc']);
        
         $this->db_ops->insert_record($data);

         if($_FILES['image']['name'])
           {	
            $dir = "images/";
            $this->load->library('upload');

            $config['upload_path']          = $dir;
			   $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
			   $config['file_name']			= $_FILES['image']['name'];

            $this->upload->initialize($config);
           
	         $this->upload->do_upload('image');

           }


         redirect('home');
         }
         }
         else
         {
         $this->load->view("register");
         }
        } 



      public function login() {

         if($_SERVER['REQUEST_METHOD'] === 'POST')
         {


            if($this->db_ops->fetch_login_data($_POST['email'],$_POST['password']) == TRUE)
            {
              redirect('home/dashboard');
            }
            else
            {
               $_SESSION['login_err'] = "Invalid credentials!";
               redirect('home/login');
            }

         

         }
         else
         {
            $this->load->view("login");
         }
         
      


      }


      public function logout() {

      unset($_SESSION['logged_in']);
      redirect('home');

      }

      public function dashboard(){

         if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE)
         {

            if($_SESSION['user_type'] == 'developer')
            {
   
               $this->load->view("dash_d");

            }
            else
            if($_SESSION['user_type'] == 'management')
            {
   
               $this->load->view("dash_m");

            }
      
         }
         else
         {
            redirect('home/login');
         }



      }


      public function check_email()
      {
         $email = $_GET['email'];
         if($this->db_ops->check_if_exists($email) == 1)
         echo 'yes';
         else
         echo 'no';

      }


	  
	  
   } 
?>