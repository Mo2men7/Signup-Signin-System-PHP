<?php
// var_dump($_FILES);
$fileName = $_FILES["pic"]["name"];
$fileSize = $_FILES["pic"]["size"];
$fileType = $_FILES["pic"]["type"];
$fileTmpName = $_FILES["pic"]["tmp_name"];

if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )){
    header("Location:form.php?emailCheck=false");
}
if(!($fileType=="image/jpeg" or $fileType=="image/png")){
    header("Location:form.php?pictureCheck=false");
}
move_uploaded_file($fileTmpName, "assets/".$fileName);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>profile</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Cairo:wght@300;400;500&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
    * {
      font-family: "Poppins", sans-serif;
    }
    img{
        width: 150px;
    }
</style>
<body>
    <h1 class="bg-success py-3 text-white text-center text-uppercase">Profile</h1>
    <div class="img d-flex justify-content-center">
        <img src="<?php echo "assets/".$fileName?>" class="rounded-circle">
    </div>
    <div class="container">
        <div class="row"></div>
    </div>
</body>
</html>
