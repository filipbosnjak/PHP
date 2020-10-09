<?php 
    //$_GET[] - An associative array of variables passed to the current script via the URL parameters (aka. query string)
    //echo $_GET['name'];//Notice: Undefined index: name in C:\xampp\htdocs\phpsandbox\PHP\post_get\post_get.php on line 3 -> We need to check if that exists
    
    if(isset($_GET['name'])){
        echo $_GET['name']."<br>";
        //echo htmlentities($_GET['email'])."<br>"; //Output: <script>alert('hello')</script>
        //echo $_GET['pass'];
        //If we left it like this, out page is vulnerable to xss attacks. We can wrap $_GET[] in htmlentities(). This way any html is converted so its not read as html tag
        $name = $_GET['name'];
        //Post is much safer. Data is not displayed in the url
    }
    /*
    if(isset($_POST['name'])){
        echo $_POST['name']."<br>";
        $name = $_POST['name'];
        echo htmlentities($_POST['email'])."<br>"; //Output: <script>alert('hello')</script>
        echo $_POST['pass']."<br>";
        //If we left it like this, out page is vulnerable to xss attacks. We can wrap $_GET[] in htmlentities(). This way any html is converted so its not read as html tag

        //Post is much safer. Data is not displayed in the url

        //We can use request and it would get no matter what method we used, post or get
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostGet</title>
</head>
<body>
    <form  method="GET" action="post_get.php">
        <div>
        <label>Name: </label>
        <input type="text" name="name">
        </div>
        <div>
            <label>Email: </label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="pass">
        </div>
        <input type="submit" value="Submit">

        <a href="post_get.php?name=Filip">Filip</a><!-- Like this we send query strings un the url itself-->
        <a href="post_get.php?name=John">John</a>
        <h1><?php echo "$name's Profile";?></h1>

    </form>
</body>
</html>