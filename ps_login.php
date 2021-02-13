<?php
    include('/usr/share/php/adodb/adodb.inc.php');
    include('env.php');
    
    $user       =$_GET['user'];
    $password   =$_GET['password'];
    
    /*Ahora utilizamos ADODB para conectar a la BD*/
    $db = ADONewConnection($dbdriver);
    $db->debug = false;
    $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
    $rs = $db->Execute(
        "SELECT *
        FROM agenda_persona
        WHERE per_cod='$user' AND per_pass='$password';"
    );
    $db->Close();
    $user=$rs->GetArray();
    
    if (!$rs){
        header ("Location: pc_mensaje.php?ref=Detalle&error=?".$db->ErrorMsg());
        print $db->ErrorMsg();
    }else{
        if (count($user)!=0){
            /*Si el usuario existe crea una session*/
            session_start();
            $_SESSION['nivel']  =   $user[0]['per_type'];
            $_SESSION['ci']     =   $user[0]['per_cod'];
            header ("Location: pc_menu.php");
        }else{
            require '/usr/share/php/Smarty/Smarty.class.php';
            $smarty = new Smarty;
            $smarty->compile_check = true;
            $smarty->debugging = false;
            $smarty->assign("titulo","Agenda Personal (tres capas)");
            
            /*MENU*/
            $menu=array(
                array(
                    'name'=>'Ingreso',
                    'url'=>'pc_login.php'
                )
            );
            
            $smarty->assign("menu",$menu);
            $smarty->assign("path",$path);
            
            //Contenido
            $smarty->assign(
                "contenido",
                "<h1>No tiene Acceso al Sistema</h1>"
            );
            $smarty->display('bienvenido.html');
        }
    }
?>