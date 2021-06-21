<?php
session_start();

if ($_SESSION['username']) {

    if ($_POST) {

        if (
            isset($_POST['project_title']) && !empty($_POST['project_title']) &&
            /* isset($_POST["project_picture"]) && !empty($_POST["project_picture"]) && */
            isset($_POST['project_begin']) && !empty($_POST['project_begin']) &&
            isset($_POST['project_end']) && !empty($_POST['project_end']) &&
            isset($_POST['project_context']) && !empty($_POST['project_context']) &&
            isset($_POST['project_specs']) && !empty($_POST['project_specs'])
            //isset($_POST['project_image']) && !empty($_POST['project_image'])//
        ) {
            require_once("db-connect.php");
            $title = strip_tags($_POST['project_title']);
            /* $picture = strip_tags($_POST["project_picture"]); */
            $begin = strip_tags($_POST['project_begin']);
            $end = strip_tags($_POST['project_end']);
            $context = strip_tags($_POST['project_context']);
            $specs = strip_tags($_POST['project_specs']);

            if (isset($_FILES['project_picture']) && !empty($_FILES['project_picture'])) {

                if ($_FILES['project_picture']['error']) {     
                    switch ($_FILES['project_picture']['error']){     
                            case 1: // UPLOAD_ERR_INI_SIZE     
                            echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                            break;     
                            case 2: // UPLOAD_ERR_FORM_SIZE     
                            echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                            break;     
                            case 3: // UPLOAD_ERR_PARTIAL     
                            echo "L'envoi du fichier a été interrompu pendant le transfert !";     
                            break;     
                            case 4: // UPLOAD_ERR_NO_FILE     
                            echo "Le fichier que vous avez envoyé a une taille nulle !"; 
                            break;     
                    }     
                }  else {     

                    $target_dir = "../assets/images/";
                    $target_file = $target_dir . basename($_FILES["project_picture"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["project_picture"]["tmp_name"]);
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
                    if ($_FILES["project_picture"]["size"] > 500000) {
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
                    if (move_uploaded_file($_FILES["project_picture"]["tmp_name"], $target_file)) {
                        echo "The file ". htmlspecialchars( basename( $_FILES["project_picture"]["name"])). " has been uploaded.";
                        echo'<br><a href="home.php"> Retour </a>';
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    }    
                } 
            } else {
                echo "mannque le fichier !";
            }
        } else {
            echo 'remplissez tous les champs !';
        }
    } else {
        echo 'pour accéder à cette page, vous devez publier un projet';
    }
} else {
    echo 'vous n\'êtes pas identifié';}