<?php
include 'includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
 <style>
    body{
        background-image:url("donate.jpg");
        background-repeat:no-repeat;
        background-size:cover;
    }
    </style>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" href="css/style.css">
<title>Spark  Foundation Donation Camp</title>
</head>
<body background="donate.jpg">
    <br>
<?php
include 'includes/header.php';
?>
<div class="donate">
<div class="container">
<div class="row">
<div class="col col-sm-12 offset-md-3 col-md-6 about">
<form>
<h1 class="text-center"><i>DONATE</i></h1>
<div class="form-group">
<label for="name" class="taggs">Name:</label>
<input type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<div class="form-group">
<label for="email" class="taggs">Email:</label>
<input type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<div class="form-group">
<label for="contact" class="taggs">Contact:</label>
<input type="numbers" class="form-control" name="contact" maxlength="10" size="10" placeholder="contact" required>
</div><br>
<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_HChyYHfK9iFCmH/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>
</form>
</div></div>
</div>
</div>
<?php
include 'includes/footer.php';
?>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>