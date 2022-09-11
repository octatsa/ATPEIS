<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
    include "../includes/db_connect.php";
    include "../includes/script.php";
    if (isset($_POST['uname']) && isset($_POST['uname']) ){
      
      
         function validate($data){
            $data = trim($data);
            $data = stripslashes( $data);
            $data = htmlspecialchars( $data);
            return  $data;    
         }
         $uname = validate($_POST['uname']);
         $password = validate($_POST['password']);
         if(empty($password) && (empty($uname) )){
            header("Location: login_form.php?error= Username or Password is required");
        exit();
         }else if(empty($password)){
            header("Location: login_form.php?error=Password is required");
            exit();  
         }
         else if(empty($uname) ){
            header("Location: login_form.php?error= Username  is required");
            exit();
         }
         else{ 
          $sql ="SELECT * FROM log_in WHERE user_name='$uname' AND password='$password' ";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) == 1){
           $row = mysqli_fetch_assoc($result);
           if($row['user_name'] === $uname && $row['password'] === $password) 
           {
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['name'] = $row['name'];
         $_SESSION['id'] = $row['id'];
         
         
         $_SESSION['status'] = "LOGIN";
         $_SESSION['status_code'] = "success";
         
         header("Location: adduser.php");          
           }   
           else{
				header("Location: login_form.php?error=Incorrect User name or password");
		        exit();
			}
		}else{
			header("Location: login_form.php?error=Incorrect User name or password");
	        exit();
		} 
	 
         }  
    }
    else{
      
       header("Location: adduser.php");
        exit();
    }


   
    ?>
  
    <script src="../includes/script.php"></script>