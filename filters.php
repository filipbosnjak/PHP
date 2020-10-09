<?php
/*
if(filter_has_var(INPUT_POST,'data')){
    echo 'Data';
}else{
    echo 'No Data';
}
*/
//We can check if email is valid i.e. if it is typed in correct format. Using FILTER_VALIDATE_EMAIL

if(filter_has_var(INPUT_POST,'data')){
    if(!filter_input(INPUT_POST,'data',FILTER_VALIDATE_EMAIL)){
        echo 'Email invalid';
    }else{
        echo 'Success';
    }
}

//FILTER_VALIDATE_DOMAIN - integer - 277 - const -  Validates whether the domain name label lengths are valid.
//FILTER_VALIDATE_URL Validates value as URL
//FILTER_VALIDATE_IP Validates value as IP address
//FILTER_VALIDATE_MAC Validates value as MAC address.

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>"> <!--Action atribute specifies where the data should be sent. Using safer POST method-->
        <input type="text" name="data" placeholder = "Enter your email...">
        <input type="submit" value="Submit">
    </form>
</body>
</html>


