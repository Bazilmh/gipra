<?php 
   Class Db_ops extends CI_Model {
	
      Public function __construct() { 
         parent::__construct(); 
		 
		 $this->load->database();
		
      } 
	  
	  //function to insert a record into the database.
	  
	  public function insert_record($data){
		    
        $this->db->insert('users',$data);


	    }
		
		//To check whether the email entered already exists or not.
		
		public function check_if_exists($email)
		{
		  
		   $line = "SELECT email FROM users WHERE email = '$email'";
		   
		   $query = $this->db->query($line);
		   if($query->num_rows() > 0)
		   return 1;
		   else
		   return 0;
		  
		}
	  
	  //fetch the login data from the database.
	  
	  public function fetch_login_data($email,$password)
	  {
		$flag=FALSE; 
		
		$line = "SELECT * FROM users WHERE email = '$email' ";
		$query = $this->db->query($line);
		
		if($query->num_rows() > 0)
		{
		
         $row = $query->row();
		 
		 if(password_verify($password,$row->password))
		 {
		  
	         
			$_SESSION['logged_in'] = TRUE;           
            $_SESSION['id'] = $row->id;
            $_SESSION['email']	= $row->email;
			$_SESSION['user_type'] = $row->user_type;	
			$_SESSION['details'] = $row;	
			
            $flag = TRUE;			
			 
		  }	  
		
		
		}		 
        		
	  
	  	return $flag;
	  
	  
	  }
	  
	   	  
		
   } 
?>