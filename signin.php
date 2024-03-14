<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>day4Form</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Cairo:wght@300;400;500&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
    * {
      font-family: "Poppins", sans-serif;
    }
</style>
<body>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <h1 class="bg-dark py-3 m-0 text-white text-center text-uppercase">Login</h1>
        <?php
        if($_GET){
            if($_GET["login"]=="false"){
                echo"<div class='bg-danger text-light text-center'><p>The email or password is incorrect</p></div>";
            }
        }
        ?>
        <div class="container mt-5 d-flex align-items-center flex-column">
            <div class="row my-4 w-50 d-flex justify-content-center gap-4">
                <div>
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter your email">
                </div>
                <div>
                    <label class="form-label">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Enter your password">
                </div>
            </div>
            <div class="w-100 d-flex justify-content-center">
                <input type="submit" value="Login" class="btn btn-dark px-3 py-2 mt-4" style="width: 150px;">
            </div>
            <small class="mt-2" style="font-size:12px;">if u have an account already u can <a href="form.php">register here</a></small>
        </div>
    </form>
</body>
</html>