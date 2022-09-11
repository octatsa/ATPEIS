<?php
//session_start();
//if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Addusers</title>
        <link rel="stylesheet" href="../css/adduser.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    </head>
    <body>
   
        <!--wrapper start-->
        <div class="wrapper">
            <!--header menu start-->
            <div class="header">
                <div class="header-menu">
                    <div class="title"> <span>APTEIS</span></div>
                    <div class="sidebar-btn">
                        <i class="fas fa-bars"></i>                       
                    </div>                  
                    <ul> 
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>                                      				  
                    </ul>                 
                </div>
            </div>
            <!--header menu end-->
            <!--sidebar start-->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="../img/logo.png" alt="">
                        <p><span>A</span>ssignment <span>T</span>raking And <span>P</span>erformance<br>
                    <span>E</span>valuation And <span>E</span>nformation <span>S</span>ytem
                    </p>
                    </center>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-desktop"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="item" id="profile">
                        <a href="#profile" class="menu-btn">
                            <i class="fas fa-file"></i><span>All Document <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-file-download"></i><span>Incoming Documents</span></a>
                            <a href="#"><i class="fas fa-file-upload"></i><span>Outgoing Documents</span></a>
                            <a href="#"><i class="fas fa-address-card"></i><span>Process Outgoing Documents</span></a>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-file"></i><span>Manage Documents</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-file-search"></i><span>Track Document</span>
                        </a>
                    </li>
                    <li class="item" id="messages">
                        <a href="#messages" class="menu-btn">
                            <i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                            <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                            <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                        </div>
                    </li>
                    <li class="item" id="settings">
                        <a href="#settings" class="menu-btn">
                            <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
                        </a>
                        <div class="sub-menu">
                            <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                            <a href="#"><i class="fas fa-language"></i><span>Language</span></a>
                        </div>
                    </li>
                    <li class="item">
                        <a href="#" class="menu-btn">
                            <i class="fas fa-info-circle"></i><span>User</span>
                        </a>
                    </li>
                </div>
            </div>
            <!--sidebar end-->
            <!--main container start-->
            <div class="main-container">              
				<div class="content">              
               <h1> <i class="fas fa-info-circle">Adduser</i>   </h1>   
                <div class="right">
                <?php
                 echo date("l F d, Y") ;
                 ?>
                 </div>
				</div>
              
                <div class="read">
                <img src="https://cdn2.iconfinder.com/data/icons/weather-2-4/100/Weather_Set-07-512.png" />
                   </div>
                 <div class="text">First line second line</div>		
        </div>
            <!--main container end-->
        </div>
        <!--wrapper end-->

        <script type="text/javascript">
        $(document).ready(function(){
            $(".sidebar-btn").click(function(){
                $(".wrapper").toggleClass("collapse");
            });
        });
        </script>
  

    </body>
</html>
 
    