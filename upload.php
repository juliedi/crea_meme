<?php

$description = $_POST["description"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (basename($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]) . " has been uploaded.";

        $withoutext = explode(".", basename($_FILES["fileToUpload"]["name"]));
        
        $nom = $target_dir . $withoutext[0] . " - " . date('d-m-Y à H\hi\ms\s') . "." . $imageFileType;
        echo "<hr>";
        $resultat = move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$nom);
        if ($resultat){
            echo "Transfert réussi" ;
            include("connexion.php"); ?>
            <form action="text_on_meme.php" method="post">
            <input type="hidden" name="cheminimage" value="<?=$nom?>">
            <input type="text" name="toptext">
            <input type="text" name="bottomtext">
            <input type="submit" value="Voir le résultat">
            </form>
            <?php
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>