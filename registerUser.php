<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Online  Examination System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author"  content="Keith Oloya">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>
  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {"families":["Lato:300,400,700,900"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  	.fa{
  		margin-right: 8px;
  	}
  	.box{
  		border: 1px solid grey;
  		margin-left: 25px;
  		border-width: 4px;
  		border-radius: 10px;
  	}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="jumbotron text-center">
  <h1>Online Examination  System</h1> 
</div>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">OES</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">LOGIN</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Test Your Skills</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Login</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (authenticate Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Sign Up</h2>
  </div>
  <div class="row slideanim">
    <div class="col-sm-3">     
    </div>

    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Register</h1>
        </div>
        <div class="panel-body">
          <form method="POST" action="register.php">
          	<div class="form-group">
          		<input type="text" name="name" id="name" placeholder="Name..." class="form-control">
          	</div>
          	<div class="form-group">
          		<input type="text" name="reg" id="reg" placeholder="Registration Number..." class="form-control">
          	</div>
          	<div class="form-group">
          		<input type="email" name="email1" id="email1" placeholder="Email..." class="form-control">
          	</div>
          	<div class="form-group">
          		<input type="text" name="course" id="course" placeholder="Course (e.g., GCS, GIT, GUA, GUM, etc)" class="form-control">
          	</div>
          	<div class="form-group">
          		<input type="phone" name="contact" id="contact" placeholder="Contact..." class="form-control">
          	</div>
            <div class="form-group">
              <input type="password" name="password1" id="password1" placeholder="Password..." class="form-control">
            </div>
          
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg" id="signups" name="signup">Sign Up</button>
          <p>Already Registered <a href="index.php">Login</a></p>
        </div>
        </form>
        <span id = "statereg"></span>
      </div>      
    </div> 
    <div class="col-sm-3">     
    </div>   
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="fas fa-map-marker"></span> Gulu University, UG</p>
      <p><span class="fas fa-mobile"></span> 0770786064</p>
      <p><span class="fas fa-envelope"></span> keithtumusiime6@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map >
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%" -->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="fas fa-chevron-up"></span>
  </a>
  <!--p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p -->
</footer>

<script src="js/script.js"></script>
<script src="js/main.js"></script>

</body>
</html>
