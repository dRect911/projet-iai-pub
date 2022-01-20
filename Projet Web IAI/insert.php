<!DOCTYPE html>
<html lang="en">
<?php include 'head-header.php';
include('banner.php');
banner('', 'small-banner');
?>

<body class="gray-bg">


    <div class="w-100 mb-20"></div>
    <?php


    include 'database.php';
    global $db;

    if (isset($_POST['formsend'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $dateNaiss = $_POST['dateNaiss'];
        $nationalite = $_POST['nationalite'];
        $serieBac = $_POST['serieBac'];
        $anneeBac = $_POST['anneeBac'];

        // file management
        $filename = $_FILES['file']['name'];
        $destination = 'uploads/' . $filename;
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file = $_FILES['file']['tmp_name'];
        $q = $db->prepare("INSERT INTO candidat (Nom,Prenom,Sexe,DateNaiss,Nationalite,SerieBac,AnneeBac,Fichier) values(?,?,?,?,?,?,?,?)");

        if (!in_array($extension, ['pdf'])) {
            echo '<p class="subheading-text centered mb-20">Votre fichier doit être d\'extenstion .pdf!<br/>
        <a href="submission.php">Cliquez ici pour réessayer</a></p><br/>
        <div class="w-100 mb-20"> </div>
        <div class="w-100 mb-20"> </div>';
        } else {
            if (move_uploaded_file($file, $destination)) {                
                    $q->execute(
                        array($nom, $prenom, $sexe, $dateNaiss, $nationalite, $serieBac, $anneeBac, $file));
                    include 'insert_succeed.php';
                
            }
        }
    } else {
        echo 'bruh wtf';
    }





    ?>






    <?php include 'footer.php' ?>
</body>

</html>