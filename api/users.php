<?php

include('GlobalCtrl.php');

if(isset($_POST["submit"])) 
{
    session_start();

    $global = new GlobalCtrl();
    $namaUser = $_POST["namaUser"];

    if(!$global->findUser($namaUser)) {
        $global->setUser(strtolower($namaUser));
    }

    $_SESSION["namaUser"] = $namaUser;
    $global->redirectToRoute('', '/story.php');
}
