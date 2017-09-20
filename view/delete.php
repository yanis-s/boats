<?php session_start(); ?>

<?php
    if (!isset($_SESSION['valid'])) {
        header('Location: login.php');
    }

    require_once '../controller/BoatController.php';

    $id = $_GET['id'];
    $bc = new BoatController();

    $result = $bc->deleteBoat($id);

    header("Location:view.php");
?>

