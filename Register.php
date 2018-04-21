<?php include('server.php') ?>
<html>
<title>Home</title>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css";>
    <link rel="stylesheet" type="text/css" href="css/external.css";>
    <link rel="stylesheet" type="text/css" href="css/register.css";>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        body{
            background: url(images/backlit-clouds-dusk-853168.jpg);
            background-size: cover;
            background-attachment: fixed;
            min-height: 500px; 
            background-position: center;
            background-repeat: none;
            
        }
        @import url('https://fonts.googleapis.com/css?family=Shadows+Into+Light');
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" id="head" href="#section1"><img src = "images/star2.PNG"></a>
      <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    <ul class="nav nav-pills nav-masthead mr-auto">
        <li class="nav-item">   
            <a class="nav-link active"  href="mianpage.html">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Categories</a>
        </li>
             <li class="nav-item active dropdown">
          <a href="#" class="nav-link && dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-danger"><i class="fa fa-google"></i> Google</a>
								</div>
                                or
								 <form class="form" role="form" method="post" action="mianpage.php" accept-charset="UTF-8" id="login-nav">
                                        <?php include('errors.php'); ?>     
										<div class="form-group">
											 <label class="sr-only" for="username">Username</label>
											 <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block" name="login_user">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="Registration/Register.php"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">Contact Us</a>
        </li>
    </ul>
</nav>   
<div class="container" >
     <header>
            <div id="new"> <centre><h1>&nbsp;</h1></centre></div>
            </header>
    <div class="row user-menu-container square">
       
        <div class="col-md-6 user-details">
            <div class="user-menu-content">
           
                  
            </div>
        </div> 
        <div class="col-md-6 user-details register_box bg-light">
            <div class="logo"> Register</div>
            
                <form method="post" action="register.php">
  	            <?php include('errors.php'); ?>
            <div class="row">
                <div class="col-md-1 user-details">
                <i class="fas fa-user fa-2x view"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="text" id="username" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required autofocus>
        <label for="username">Username</label>
      </div>
                </div>
                    </div>
                    
                     <div class="row">
                         <div class="col-md-1 user-details">
                <i class="fas fa-envelope fa-2x view"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="<?php echo $email; ?>" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

                </div>
                    </div>
                    
                     <div class="row">
                    <div class="col-md-1 user-details">
                <i class="fas fa-lock fa-2x view"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="password" id="password" name="password_1" class="form-control" placeholder="Password" required autofocus>
        <label for="password">Password</label>
      </div>
                </div>
                    </div>
                    
                     <div class="row">
                    <div class="col-md-1 user-details">
                <i class="fas fa-key fa-2x view"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="password" id="confirm_password" name="password_2" class="form-control" placeholder="Password" required autofocus>
        <label for="confirm_password">Confirm Password</label>
      </div>
                </div>
                    </div>
                    <div class="row">
                    <div class="col-md-1 user-details">
                <i class="far fa-calendar-alt fa-2x View"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="date" id="dob" class="form-control" placeholder="DD/MM/YYYY" required autofocus max="2000-01-02" min="1970-01-02" name="DOB">
        <label for="dob">Date of Birth</label>
      </div>
                </div>
                    </div>
                      <div class="row">
                    <div class="col-md-1 user-details">
                <i class="fas fa-male fa-2x gender"></i></div>
                <div class="col-md-11 user-deatils">
                    
                <div class="form-label-group">
                <select id="gender" class="form-control" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                </select>
                </div>
                </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-md-1 user-details">
                <i class="fas fa-graduation-cap fa-2x view"></i></div>
                <div class="col-md-11 user-deatils">
                <div class="form-label-group">
        <input type="text" id="year" class="form-control" placeholder="Class & Year" name="class&year" required autofocus>
        <label for="year">Class & Year</label>
      </div>
                </div>
                    </div>
                <button class="btn btn-lg btn-primary btn-block" name="reg_user" type="submit">Register</button>
                </form>
            </div>
                </div>		
</div>
    
</body>
</html>
