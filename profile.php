<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: mianpage.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: mianpage.php");
  }

  $connect = mysqli_connect("localhost", "root", "", "user");  
  $user_id = $_SESSION['user_id'];
  if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "UPDATE users_starme SET image = '$file' where user_id = '$user_id'";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
<html>
<title>Profile</title>
<head>
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css";>
    <link rel="stylesheet" type="text/css" href="css/external.css";>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="275679097231-c6kjl87hpgpd0u9snaatmp0tt4s955ml.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile.css";>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="RateYo/jquery.rateyo.min.css"/>
</head> 
<body data-spy="scroll" data-target=".navbar" data-offset="0">

    
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>

    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" id="head" href="#section1"><img src = "images/starmeh.PNG"></a>
      <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
    <ul class="nav nav-pills nav-masthead mr-auto">
        <li class="nav-item">   
            <a class="nav-link active"  href="mianpage.html">Home</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="categories.html">Categories</a>
        </li>
             <li class="nav-item active && dropdown">
                 <a class="nav-link" href="mianpage.php?logout='1'" style="color: red;">logout</a>
		  </li>
        
    </ul>
</nav>

    
    
<div class="container">
    <div class="row user-menu-container square">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        <?php  if (isset($_SESSION['username'])) : ?>
    	                   <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <?php endif ?>
                        <h4 class="white"><i class="far fa-check-circle"></i> New Delhi</h4>
                        <h4 class="white"><i class="far fa-meh "></i><?php  if (isset($_SESSION['username'])) : ?>
    	                <?php echo $_SESSION['username']; ?>   
                        <?php endif ?></h4>
                        <button type="button" class="btn btn-labeled btn-info" href="#">
                        <span class="btn-label"><i class="fas fa-pencil-alt"></i></span>Update</button>
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-image wrap">
                        <?php  
                            $query = "SELECT image FROM users_starme where user_id='$user_id' ";  
                            $result = mysqli_query($connect, $query);  
                            
                                $row = mysqli_fetch_array($result);
                            if($row['image'] == NULL){
                                
                                echo ' <img src = "images/noavatar.png" height="240" width ="350" class="img-thumnail">';
                            
                            }
                            else{
                                echo '  
                          
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="240" width ="350" class="img-thumnail" />  
                                    ';  
                            }   
                        ?>
                        <div class="middle">
                            <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModalCenter">
                                Update Profile Picture
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row overview">
                <div class="col-md-4 user-pad text-center">
                    <h3>Overall Rating</h3>
                    <h4>4.7/5.0</h4>
                   
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>Views</h3>
                    <h4>456</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>Person Rated</h3>
                    <h4>343</h4>
                </div>
            </div>
        </div>
        <div class="col-md-1 user-menu-btns">
            <div class="btn-group-vertical square" id="responsive">
                <a href="#" class="btn btn-block btn-default active">
                  <i class="far fa-bell fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="far fa-star fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fas fa-users fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="far fa-meh fa-3x"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4 user-menu user-pad">
            <div class="user-menu-content active">
                <h3>
                    Notifications
                </h3>
                <ul class="user-menu-list">
                    <li>
                        <h4><i class="far fa-user coral"></i> Aman Rated You.</h4>
                    </li>
                    <li>
                        <h4><i class="far fa-user coral"></i> Anshul Rated You.</h4>
                    </li>
                    <li>
                        <h4><i class="far fa-user coral"></i> Happy Rated You.</h4>
                    </li>
                    <li>
                        <button type="button" class="btn btn-labeled btn-success" href="#">
                            <span class="btn-label"><i class="far fa-star"></i></span>Ratings</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                    Your Ratings
                </h3>
                <ul class="user-menu-list">
                        <button type="button" class="btn btn-labeled btn-danger" href="#">
                            <span class="btn-label"><i class="fa fa-envelope-o"></i></span>Get Full Rating</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                    Trending
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>47LabsDesign</p>
                                <a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a>
                                <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="http://24.media.tumblr.com/273167b30c7af4437dcf14ed894b0768/tumblr_n5waxesawa1st5lhmo1_1280.jpg" class="img-responsive"  style = " max-height: 100">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">An Awesome Title</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Posted Today | 10:42 A.M.</small>
                        </div>
                        <div class="stats turqbg">
                            <span class="fa fa-heart-o"> <strong>47</strong></span>
                            <span class="fa fa-eye pull-right"> <strong>137</strong></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>47LabsDesign</p>
                                <a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a>
                                <a href="" rel="tooltip" title="View"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="http://24.media.tumblr.com/282fadab7d782edce9debf3872c00ef1/tumblr_n3tswomqPS1st5lhmo1_1280.jpg" class="img-responsive" style = " max-height: 100">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">An Awesome Title</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Posted Today | 10:42 A.M.</small>
                        </div>
                        <div class="stats turqbg">
                            <span class="fa fa-heart-o"> <strong>47</strong></span>
                            <span class="fa fa-eye pull-right"> <strong>137</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-menu-content">
                <h2 class="text-center">
                    ABOUT ME
                </h2>
                <center><i class="fa fa-cloud-upload fa-4x"></i></center>
                <div class="share-links">
                    <center><button type="button" class="btn btn-lg btn-labeled btn-success" href="#" style="margin-bottom: 15px;">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A FINISHED PROJECT
                    </button></center>
                    <center><button type="button" class="btn btn-lg btn-labeled btn-warning" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A WORK IN PROGRESS
                    </button></center>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container" >
    <div class="row user-menu-container square">
        <div class="col-md-7 user-details">
            <div class="user-menu-content">
                <h2 class="text-center p-2">Categories</h2>
                <table class="table-stripped">
                    <tr>
                        <td>1. Intelligence </td>
                     </tr>
                    <tr>
                        <td>2. Crazyness    </td>
                    </tr>
                    <tr>
                        <td>3. Body Building    </td>
                    </tr>
                    
                
                
                
                </table>
            </div>
        </div> 
        <div class="col-md-5" style="background-color: #0c5460">
        
          <h2 class="text-center p-2" style="color: whitesmoke">Stars</h2>
                <table class="">
                     <tr>
                        <td ><div class="Stars" id="rateYo"></div></td>
                     </tr>
                     <tr>
                        <td><div class="rateYo Stars"></div></td>
                     </tr>
                     <tr>
                        <td><div class="rateYo Stars" ></div></td>
                     </tr>
                     <tr>
                        <td><div class="rateYo Stars"></div></td>
                     </tr>
                     <tr>
                        <td><div class="rateYo Stars"></div></td>
                     </tr>
                
                
                
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container" >
    <div class="row user-menu-container square">
        <div class="col-12 user-details" style = "padding-bottom: 70px">
            <div class="user-menu-content">
                <h2 class="text-center p-4" style="font-family: Roboto">People You Would Also Like To Rate</h2>
                <div class = "row">
             <div class="col-3">  
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
             <div class="col-3">  
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
             <div class="col-3">  
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
             <div class="col-3">  
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
        </div> </div>
                     
    </div>
</div>
               
    
    
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Profile Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                         <img src="" id="profile-img-tag" width="200px" />
                  </div>
                  <div class="modal-footer">
                    <form method="post" enctype="multipart/form-data">  
                        <label for="image" class="btn btn-profile btn-outlined">Upload Image</label>
                        <input type="file" name="image" id="image" style="display:none" />   
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-profile" />  
                </form> 
                  </div>
                </div>
              </div>
            </div>
</div>





<script type="text/javascript" src="RateYo/jquery.min.js"></script>
<script type="text/javascript" src="RateYo/jquery.rateyo.js"></script>
<script src="script-profile.js"></script>
</body>
</html>
