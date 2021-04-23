<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email= $username = $phonenumber= $password = $confirm_password  = "";
$email_err = $username_err =$phonenumber_err = $password_err = $confirm_password_err = "";



 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "! Please enter email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email= trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "! You have account with this email.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "! Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    if(empty(trim($_POST["username"]))){
        $username_err = "! Please enter your name.";     
    }  else{
        $username = trim($_POST["username"]);
    }
    
    

    if(empty(trim($_POST["phonenumber"]))) {
        $phonenumber_err = "! Please enter your phone number";
      } 
      

       else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE phonenumber = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phonenumber);
            
            // Set parameters
            $param_phonenumber= trim($_POST["phonenumber"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $phonenumber_err = "! You have account with this phone number.";
                } else{
                    $phonenumber = trim($_POST["phonenumber"]);
                }
            } else{
                echo "! Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
      
      
     
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "! Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "! Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "! Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "! Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($username_err) && empty($phonenumber_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, email, phonenumber) VALUES (?,?,?,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_password, $param_email, $param_phonenumber );
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_phonenumber = $phonenumber;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loginstyle.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{   }
    </style>
</head>
<body>
    
    
    <div class="sideform">
        
        <img src = "LOGO.jpeg">
    
        
        <h3>Create account</h3>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Your name</label>
                <input type="text" name="username" placeholder = "Enter Name"class="resize  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback" ><?php echo $username_err; ?></span>
            </div>    
               
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" placeholder = "Enter Email" class="resize  <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phonenumber" placeholder = "Enter Phone Number" class="resize <?php echo (!empty($phonenumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phonenumber; ?>">
                <span class="invalid-feedback"><?php echo $phonenumber_err; ?></span></div>
                
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"  placeholder="no less than 6 characters" class="resize  <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="resize  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btnsubmit" value="Submit">
                
            </div>
            <div class="form-group">
                <p> By creating an account, you agree to CY+ <a href = "" >   Terms and Conditions</a>   and <a href = "">Privacy Notice.</a> </p>
                <p>Already have an account? <a href="login.php">Login here</a>.</p>
            <p>Vendor account owners? <a href = ""> Create a business account.</a></p>
            </div>
            
             
            
            
        </form>
        
    </div>    
</body>
</html>