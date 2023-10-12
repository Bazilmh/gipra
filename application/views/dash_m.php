<!DOCTYPE html>
<html lang="en">
<head>
  <title>Management Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<div class="container">
  <h1>Management Dashboard</h1>
  <br>

  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo base_url(); ?>images/<?php echo $_SESSION['details']->image; ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $_SESSION['details']->name; ?></h4>
      <p class="card-text"><?php echo $_SESSION['details']->email; ?></p>
      <p class="card-text"><?php echo $_SESSION['details']->phone; ?></p>
      <p class="card-text"><?php echo $_SESSION['details']->address; ?></p>

      <a href="<?php echo base_url(); ?>/home/logout" class="btn btn-primary">logout</a>
    </div>
  </div>
  <br>


</body>
</html>
