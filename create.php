<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $password = $pnumber= $email = "";
$name_err = $address_err = $password_err = $pnumber_err = $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }


    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Please enter an email.";     
    } else{
        $email = $input_email;
    }

    // Validate number
    $input_pnumber = trim($_POST["pnumber"]);
    if(empty($input_pnumber)){
        $pnumber_err = "Please enter your Phone number.";     
    } else{
        $pnumber = $input_pnumber;
    }


   // Validate password
    $input_password = trim($_POST["password"]);
    if(empty($input_pnumber)){
        $password_err = "Please enter password.";     
    } else{
        $password = $input_password;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($password_err) && empty($email_err)&&empty($pnumber_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (name, address, password,email,pnumber) VALUES (?, ?, ?,? ,?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_name, $param_address, $param_password, $param_email,$param_pnumber);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_password = $password;
            $param_email = $email;
            $param_pnumber = $pnumber;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="create.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="rectangle"></div>

    <div class="welcome"></div>
    <img src="traffi.png" class="img">
    <div class="secondbox"></div>

    <h1 class="echa">E-Challan</h1>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add Traffic record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $address; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err;?></span>
                        </div>

                         <div class="form-group">
                            <label>Number</label>
                            <input type="Number" name="pnumber" class="form-control <?php echo (!empty($pnumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pnumber; ?>">
                            <span class="invalid-feedback"><?php echo $pnumber_err;?></span>
                        </div>

                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>




                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>