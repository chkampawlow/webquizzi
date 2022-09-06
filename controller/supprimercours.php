<?php
include "ajoutercours.php";

$cours = new courC();

if (isset($_POST['idcours'])) {
    $cours->supprimercour($_POST['idcours']);
    header('location:../back/Modifiercour.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idcours'];
}
?>