<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
        $sql = "insert into `login` (name, username, password,usertype) values('$name','$email','$password','$usertype')";
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Addmin Page</title>
  </head>
    <body>
    <form method="post">
        <div class="container my-5">
        <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" placeholder="Your Name" name="name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Your Email" name="username" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control"  placeholder="Password" name="password" autocomplete="off">
        </div>
        <div class="form-group">
            <label>UserType</label>
            <input type="text" class="form-control"  placeholder="Your Type" name="usertype" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
    </form>
    </body>
</html>