<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
// Verifica se o token de acesso está na URL
if(isset($_GET['pg']) && $_GET['pg'] != ""){ 
    $page = $_GET['pg'];
    $page_public = "app/public/{$page}.php";
    $page_private = "app/private/{$page}.php";

    //logout do usuário
    if($page == 'logout'){
        include "logout.php";
    }

    if(file_exists($page_public)) {        
        include "app/public/{$page}.php";        
    }
    if(file_exists($page_private)) { 
        if(isset($_SESSION['cliente_info']['user_info'][0])) {
            include "app/private/{$page}.php";
        }else{
            header('Location: login');
        }
        
    }
}else{
    include "app/public/login.php";
}