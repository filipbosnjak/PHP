
<?php

    $msg = '';
	$msgClass = '';
    
    if(filter_has_var(INPUT_POST,'submit')){ //Checks if submit button is pressed
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        if(!empty($email) && !empty($name) && !empty($message)){
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    $msg = 'Please use a valid email';
                    $msgClass = 'alert-danger';
                } else {
                    $toEmail = 'support@someemail.com';
                    $subject = 'Contact Request From '.$name;
                    $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                    ';
    
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    
                    $headers .= "From: " .$name. "<".$email.">". "\r\n";
    
                    if(mail($toEmail, $subject, $body, $headers)){
                        $msg = 'Your email has been sent';
                        $msgClass = 'alert-success';
                    } else {
                        $msg = 'Your email was not sent';
                        $msgClass = 'alert-danger';
                    }
                }
            } else {
                $msg = 'Please fill in all fields';
                $msgClass = 'alert-danger';
            }
        }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/darkly/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>
        <?php require 'includes/navbar.php';?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>"> <!--Submit data to this file using post method-->
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" name="email" class="form-control" aria-describedby="nameHelp" placeholder="Enter your name...">
                    <small id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name ="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleTextarea">Message</label>
                    <textarea class="form-control" name = "message" id="exampleTextarea" rows="3"></textarea>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>