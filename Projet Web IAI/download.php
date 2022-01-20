<?php
include 'database.php';
global $db;
$sql = "SELECT * FROM files";
$result = mysqli_query($db, $sql);

$candidats = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $sql = "SELECT * FROM candidat WHERE Id=$id";
    $result = mysqli_query($conn, $sql);

    $candidats = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $candidat['Fichier'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $candidat['Fichier']));
        readfile('uploads/' . $candidat['Fichier']);

        // Now update downloads count
        
        
        exit;
    }

}

?>