<!DOCTYPE html>
<html lang="en">
<head>
  <title>Developer Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
  <h1>Home</h1>
  <br>

  <div class="card" style="width:400px">
    <div class="card-body">

      <a href="<?php echo base_url(); ?>/home/register" class="btn btn-primary">register</a>
      <br><br>
      <a href="<?php echo base_url(); ?>/home/login" class="btn btn-primary">login</a>
    </div>
  </div>
  <br>


</body>
</html>
