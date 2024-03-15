<?php

$fileName = $_FILES["pic"]["name"];
$fileSize = $_FILES["pic"]["size"];
$fileType = $_FILES["pic"]["type"];
$fileTmpName = $_FILES["pic"]["tmp_name"];

$data = implode(" ", $_POST);

if(($_POST["name"]=="" or strlen($_POST["name"])<3)){
    header("Location:form.php?nameCheck=false");
}
else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL )){
    header("Location:form.php?emailCheck=false");
}
else if(!($_POST["password"]==$_POST["repassword"])){
    header("Location:form.php?passCheck=false");
}
else if(!($fileType=="image/jpeg" or $fileType=="image/png")){
    header("Location:form.php?pictureCheck=false");
}
else if(!preg_match("/^[a-z0-9_]{8}$/", $_POST["password"])){
    header("Location:form.php?passExp=false");}
else {
    $submited_email = $_POST['email'];
    $file = file("users.txt");
    foreach ($file as $line) {
        $line = trim($line);
        $parts = explode(" ", $line);
        if (in_array($submited_email, $parts)) {
            header("Location:form.php?same=true");
            break;
        }
        else{
            move_uploaded_file($fileTmpName, "assets/".$fileName);
            file_put_contents("users.txt", $data." assets/".$fileName."\n", FILE_APPEND);
            header("Location:form.php?done=true");
        }
    }
}


