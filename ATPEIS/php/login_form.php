<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>   
        <link rel="stylesheet" type="text/css" href="../css/style.css">    
    </head>
<body>
<form action="login.php" method="post">   
    <img src="../img/logo.png">  
    <h1>ATPIES</h1>
    <p class="orange"> <span>A</span>ssignment <span>T</span>raking And <span>P</span>erformance<br>
                    <span>E</span>valuation And <span>E</span>nformation <span>S</span>ytem
    </p>
    <hr class="line">
    <?php if (isset($_GET['error'])){ ?>
           <p class="error"><?php echo $_GET['error']; ?></p>
    
    <?php }
   

    ?>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="User Name"><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="Submit">Login</button>
</form>
</body>
</html>
