<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gipra Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration</h2>
  <hr><br>
  <form method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <label id='email_err' style='font-size:12px;'><?php echo "<br>".validation_errors(); ?></label><br>
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" oninput="check_email(this.id)" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
    </div>
    <div class="form-group">
      <label for="address">Date of Birth</label>
      <input type="date" class="form-control" id="dob" placeholder="Enter date of birth" name="dob" required>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" placeholder="Choose image" name="image" required>
    </div>
    <div class="form-group">
      <label for="">Gender</label>
      <select id="gender" name="gender" class='form-control'>
            <option value="male" >Male</option>
            <option value="female" >Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone no" name="phone" required>
    </div>
    <div class="form-group">
      <label for="">User Type</label>
      <select id="user_type" name="user_type" class='form-control'>
            <option value="management" >Management Staff</option>
            <option value="developer" >Developer</option>
      </select>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" oninput="check_password()" required>
    </div>
    <div class="form-group">
      <label for="passwordc">Confirm Password</label>
      <input type="password" class="form-control" id="passwordc" placeholder="Enter password" name="passwordc" oninput="check_password()" required>
    </div>
    <label id='pass_err' style='font-size:12px;'></label><br>
    <br>
    <button type="submit" class="btn btn-default" id='submit_'>Submit</button>
  </form>
  <br><br>
</div>

</body>
<script>


var flag1=0;
var flag2=0;

        function check_email(id)
        {
          var email = document.getElementById(id).value;
         
          $.ajax({url:"<?php echo base_url();?>home/check_email?email="+email,async:true, success: function(result){  
          if(result == 'yes')  
		  {
            $("#email_err").html('email already exists.'); 
            document.getElementById("submit_").style.display = 'none';
            document.getElementById("email_err").style.color = 'red';
            flag1 = 1;
            
        }
          else
          {
            $("#email_err").html('Email is available');
             flag1 = 0;
             if(flag1 == 0 && flag2 == 0)
             document.getElementById("submit_").style.display = 'block';
             document.getElementById("email_err").style.color = '#18cf2c';
            
            }
		  
    }});
    
       

        }

        function check_password()
        {
        
        
        var pass = document.getElementById("password").value;
        var passc = document.getElementById("passwordc").value;

        if(pass != passc)
        {
            $("#pass_err").html('Passwords dont match.'); 
            document.getElementById("submit_").style.display = 'none';
            document.getElementById("pass_err").style.color = 'red';
            flag2 = 1;
        }
        else
          {
            $("#pass_err").html('Passwords match');
             flag2 = 0;
             if(flag1 == 0 && flag2 == 0)
             document.getElementById("submit_").style.display = 'block';
             document.getElementById("pass_err").style.color = '#18cf2c';
             
            }


        


        }



</script>
</html>
