<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>day4Form</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Cairo:wght@300;400;500&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
    * {
      font-family: "Poppins", sans-serif;
    }
</style>
<body>
    <form action="myData.php" method="post" enctype="multipart/form-data">
        <h1 class="bg-dark py-3 m-0 text-white text-center text-uppercase">Add User</h1>
        <?php
        error_reporting(E_ERROR | E_PARSE); // to ignore warrnings in this page
        if($_GET){
            if($_GET["same"]=="true"){
                echo"<div class='bg-danger text-light text-center'><p>email is already exists</p></div>";
            }else if($_GET["done"]=="true"){
                echo"<div class='bg-success text-light text-center'><p>Successfully added the new user</p></div>";
            }
        }
        ?>
        <div class="container mt-5">
            <div class="row my-4">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="name" type="text" placeholder="Enter your name">
                    <small class="text-danger ms-2">
                        <?php
                            if($_GET["nameCheck"]=="false"){
                                echo"You have to write a name";
                            }
                        ?>
                    </small>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter your email">
                    <small class="text-danger ms-2">
                        <?php
                            if($_GET["emailCheck"]=="false"){
                                echo"You have to write a valid email";
                            }
                        ?>
                    </small>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Enter your password">
                    <small class="text-danger ms-2">
                        <?php
                            if($_GET["passExp"]=="false"){
                                echo "<ul>";
                                echo "<li> only 8 characters"."<li> no uppercase character allowed"."<li> no special character but underscore";
                                echo "</ul>";
                            }
                        ?>
                    </small>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control" name="repassword" type="password" placeholder="Re-enter your password">
                    <small class="text-danger ms-2">
                        <?php
                            if( $_GET["passCheck"]=="false"){
                                echo"You have to match your password and its confirm";
                            }
                        ?>
                    </small>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-6">
                    <label class="form-label">Room No.</label>
                    <select class="form-select" name="roomno">
                        <option value="app1">Application1</option>
                        <option value="app2">Application2</option>
                        <option value="cloud">Cloud</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Profile Picture</label>
                    <input class="form-control" name="pic" type="file">
                    <small class="text-danger ms-2">
                        <?php
                            if($_GET["pictureCheck"]=="false"){
                                echo"You have to upload a picture";
                            }
                        ?>
                    </small>
                </div>
            </div>
            <div class="w-100 d-flex align-items-center flex-column gap-2">
                <div class="d-flex gap-3">
                    <input type="submit" value="Register" class="btn btn-dark px-3 py-2 mt-4" style="width: 150px;">
                    <a href="form.php" class="btn btn-secondary px-3 py-2 mt-4" style="width: 150px;">Reset</a>
                </div>
                <small style="font-size:12px;">if u have an account already u can <a href="signin.php">signin here</a></small>
            </div>
            
        </div>
    </form>
</body>
</html>