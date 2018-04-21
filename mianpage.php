<?php include('server.php') ?>
<html>
<title>Home</title>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css";>
    <link rel="stylesheet" type="text/css" href="css/external.css";>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="0">
<div>
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
								New here ? <a href="Register.php"><b>Join Us</b></a>
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
  <div id="section1" class="container-fluid" style="padding: 0;">
    <video id="myVideo" autoplay muted loop width="100%">
        <source src="Videos/bg.mp4" type="video/mp4">
    </video>
      </div>
 
<div class="container-md">
    <div class="title-head">
    
        <p id="title">S T A R&nbsp;&nbsp;&nbsp;M E&nbsp;&nbsp;&nbsp;U P</p>
        <h2>The More You Know </h2>
        <div class="buttons" style="margin-top: 2em">
        <button type="button" class="btn btn-info">Learn More</button>
        </div>
      
      </div>
</div>   
      
   

<div class="bg" style="margin-top: 12%">
<div id="section2" class="container-fluid bg-light" style="padding-top:20px;padding-bottom:30px">
  <h1>Categories</h1>

    <div class="container-fluid">
  <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <a  href="profile.html"><img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
          </a>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
        </div>
       <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
        </div>
        <div class ="Rest_of_categories">
             
     <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
        </div>
     <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
        </div> 
     <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      </div> 
    </div>
             
  </div>
         <button class="clearfix btn btn-sm view-button btn-info">View More</button>
  </div>
    
</div>
<div id="section3" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
  <h1>Top Trending <span><img src ="images/3012_-_Trending_Up-512.png" width="50px"height="50px"></span></h1>

    <div class="container-fluid">
  <div class="row each-line">
    <div class="col-md-2.4 category wrap">
      <a  href="profile.html"><img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
          </a>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
      <div class="col-md-2.4 category wrap">
      <img class="rounded-circle name" src="images/hacker.jpg" height="165" width="213">
        <div class="middle">
        <div class="text "><b>Hello</b></div>
        </div>
      </div>
        </div>
    </div>
    </div>
 <div id="section 4" class="container-fluid bg-light" style="padding-top:20px;padding-bottom:30px">
  <h1>Most Popular <i class="fas fa-fire"></i></h1>

    <div class="container-fluid">
               <div class = "row each-line">
                  <div class="col-md-3">  
                <div class="card" style="width:200px">
                    <div class="image">
                  <img class="card-img-top" src="images/bean.jpg" alt="Card image">
                     <div class="overlay">
                         <div class="b-part">
                        <div class="rating-text text-center">Overall Rating<br>4.7/5.0</div>
                    </div>
                        </div>
                  <div class="card-body hh">
                    <h4 class="card-title">Mr. Bean</h4>
                    <p class="card-text">Best Comedian</p>
                    <a href="#" class="btn btn-profile">See Profile</a>
                  </div>
                </div>
                   </div>
                      </div>
             <div class="col-md-3">  
                <div class="card" style="width:200px">
                    <div class="image">
                  <img class="card-img-top" src="images/dan_profile.png" alt="Card image">
                     <div class="overlay">
                         <div class="b-part">
                        <div class="rating-text text-center">Overall Rating<br>4.5/5.0</div>
                    </div>
                        </div>
                  <div class="card-body hh">
                    <h4 class="card-title">Dan</h4>
                    <p class="card-text">Howdy</p>
                    <a href="#" class="btn btn-profile">See Profile</a>
                  </div>
                </div>
                      </div>
                 </div>
             <div class="col-md-3">  
                <div class="card" style="width:200px">
                    <div class="image">
                  <img class="card-img-top" src="images/chenli.png" alt="Card image">
                     <div class="overlay">
                         <div class="b-part">
                        <div class="rating-text text-center">Overall Rating<br>4.2/5.0</div>
                    </div>
                        </div>
                  <div class="card-body hh">
                    <h4 class="card-title">Mr. ChenLi</h4>
                    <p class="card-text">Chineese Guy</p>
                    <a href="#" class="btn btn-profile">See Profile</a>
                  </div>
                    </div>
                </div>
                 </div>
             <div class="col-md-3">  
                 <div class="card" style="width:200px">
                    <div class="image">
                  <img class="card-img-top" src="images/happy.JPG" alt="Card image">
                     <div class="overlay">
                         <div class="b-part">
                        <div class="rating-text text-center">Overall Rating<br>4.4/5.0</div>
                    </div>
                        </div>
                  <div class="card-body hh">
                    <h5 class="card-title">Happy Nagariya</h5>
                    <p> PlayBoy</p>
                    <a href="#" class="btn btn-profile">See Profile</a>
                  </div>
                </div>
                </div>
                </div>
            </div>     
        </div> 
     </div>
    
    <footer>
        <a href="">Terms of Use</a> | 
        <a href="">Privacy Policy</a> |
        <a href="">Feedback</a> |
        <a href="">Report On Issue</a>|
        <a href="">Partners</a>|
        <a href=""> FAQ</a>
         
       <a href="https://www.facebook.com"> <i class="fab fa-facebook-square fa-3x" style="float:right; margin-right:20%; color:#3b5998" ></i>
        </a>
        <a href="https://twitter.com/login?lang=en"><i class="fab fa-twitter fa-3x" style="float:right; margin-right:1%;color:#00aced" ></i>
        </a>
        <br/>
        Copyright &copy; RateMyBuddy.com All rights reserved
    </footer>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>















































</html>