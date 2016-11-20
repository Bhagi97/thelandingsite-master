<?php
    ob_start();
    session_start();
    require_once('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Landing Page - Start Bootstrap Theme</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/pagination.js"></script>
        <script src="js/pagination.min.js"></script>
        </script>
    <link href="css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/amazing.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/loginnn.css">
     <link rel="stylesheet" href="css/profiless.css" media="screen" title="no title">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top topnav" >
        <div class="container topnav">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.php">Home</a>
                    </li> 
                  
                        <?php
                        if(isset($_SESSION['user_id'])){
                    echo "
                      
                    <li>
                        <a href='subject1.php'>Courses</a>
                    </li>
                    <li>
                        <a href='profile.php'>Profile</a>
                    </li>
                      <li>
                        <a href='forum.php'>Forum</a>
                    </li>
                    ";
                      }?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>

                        <form class="navbar-form" role="search" action="search.php" method="get">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search" name="q" size="70" id="search">
                            <div class="input-group-btn">
                              <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                        </form>

                    </li>
                    <li>
                        <?php
                        if(isset($_SESSION['user_id'])){
                                    echo "<form action='logout.php'>
                                         <button style='background-color:transparent;
                                        text-decoration: none;
                                         border:none; 
                                             color: #9d9d9d;
                                             padding-top: 10px;
                                        padding-bottom: 10px;
                                        line-height: 20px;
                                            position: relative;
                                            display: block;
                                            padding: 10px 15px;

                                         font: inherit;
                                         /*border is optional*/
                                        text-color:#337ab7;
                                         cursor: pointer;
                                         ''>Log out</button>
                                        </form>";
                        } else
                        {
                        echo "<a data-toggle='modal' data-target='#login-modal'>Login</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
            <div style="height:50px">
            </div>
               <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                                <div class="loginmodal-container">
                                    <h1>Login to Your Account</h1><br>
                                  <form method="post" action="login.php">
                                    <input type="text" name="user" placeholder="Username">
                                    <input type="password" name="pass" placeholder="Password">
                                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                                  </form>
                                    
                                  <div class="login-help">
                                    <a href="register.php" >Register</a>                                   </div>
                         </div>
                 </div>
          </div>
