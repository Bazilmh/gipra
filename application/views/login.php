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
  <h2>Login</h2>
  <hr><br>
  <form method="POST">
  <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="email">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
    </div>
    
    <label id='login_err' style='font-size:12px;'><?php if(isset($_SESSION['login_err'])) {echo $_SESSION['login_err'];} ?></label><br>
    <br>
    <button type="submit" class="btn btn-default" id='submit_'>Submit</button>
  </form>
  <br><br>
</div>

</body>
<script>

</script>
</html>
