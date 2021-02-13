<?php
    include('env.php');
    require '/usr/share/php/Smarty/Smarty.class.php';
    
    $smarty = new Smarty;
    $smarty->compile_check = true;
    $smarty->debugging = false;
    $smarty->assign("titulo","Agenda Personal (3C)");
    
    /* MENU */
    $menu=array(array('name'=>'Ingreso','url'=>'pc_login.php'));
    $smarty->assign("menu",$menu);
    $smarty->assign("path",$path);
    
    /* CONTENIDO */
    $smarty->assign("pslogin","ps_login.php");
    $smarty->display('pc_login.html');
?>