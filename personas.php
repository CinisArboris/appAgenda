<?php
include('/usr/share/php/adodb/adodb-errorpear.inc.php');
require '/usr/share/php/Smarty/Smarty.class.php';
include('/usr/share/php/adodb/tohtml.inc.php');
include("/usr/share/php/adodb/adodb.inc.php");
include('env.php');

if(isset($_GET['opcion'])){
    $op     =$_GET['opcion'];
}else{
    $op     =$_REQUEST['opcion'];
    $user   =$_REQUEST['per_cod'];
}

$user   =$_REQUEST['per_cod'];
switch($_REQUEST['opcion']){
    case 1:{
        /* carga de recursos para :: nueva persona*/
        session_start();
        
        /*propietario :: root*/
        if ($_SESSION['nivel'] == 0){
            $smarty = new Smarty;
            $smarty->compile_check = true;
            $smarty->debugging = false;
            $smarty->assign(
                "titulo",
                "[nueva_persona :: AGENDA PERSONAL :: 3_CAPAS]"
            );

            /*menu :: root*/
            $menu=array(
                array('name'=>'Personas',  'url'=>'personas.php'),
                array('name'=>'Mensajes',  'url'=>'mensajes.php'),
                array('name'=>'modificar',  'url'=>'modificar.html'),
                array('name'=>'Aniversarios',  'url'=>'aniversarios.php'),
                array('name'=>'Salir',     'url'=>'ps_logout.php')
            );
            $smarty->assign("menu",$menu);
            $smarty->assign("path",$path);
            $smarty->assign("ps","personas.php");
            
            #Visualizar la informacion en el TEMPLATE
            $smarty->display('personas-nuevo.html');
        }
    }
    break;
    
    
    case 2:{
        $user   =$_REQUEST['per_cod'];
        echo ":: Mostrar: <br> Cod:".$user;
    }
    
    
    break;
    case 3:{
        /*preparar MODIFICAR persona*/
        session_start();
        
        /*ROOT*/
        if ($_SESSION['nivel'] == 0){
            $smarty = new Smarty;
            $smarty->compile_check = true;
            $smarty->debugging = false;
            $smarty->assign(
                "titulo",
                "[modificar :: AGENDA PERSONAL :: 3_CAPAS]"
            );
            
            /*mandamos los datos previos*/
            //***AHORA UTILIZAMOS ADODB PARA CONECTAR A LA BASE DE DATOS Y LOGRAR INDEPENDENCIA DE LA DB Y LA LG
            $db = ADONewConnection($dbdriver);
            $db->debug = false;
            $codigoBuscar = $_GET[per_cod];
            $sql=
                "select *
                from e_persona
                where per_cod = '".$codigoBuscar."';"
            ;
            $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
            $rs = $db->Execute($sql);
            $db->Close();
            
            /*menu*/
            $menu=array(
                array('name'=>'Personas',       'url'=>'personas.php'),
                array('name'=>'Mensajes',       'url'=>'mensajes.php'),
                array('name'=>'Aniversarios',   'url'=>'aniversarios.php'),
                array('name'=>'Salir',          'url'=>'ps_logout.php')
            );
            $smarty->assign("menu",$menu);
            $smarty->assign("path",$path);
            $smarty->assign("ps","personas.php");
            $rs = $rs->GetArray();
            $smarty->assign("rs", $rs);
            
            $smarty->display('personas-modificar.html');
        }
    }
    
    
    break;
    case 4:{
        echo "Eliminar <br> Cod:".$user;
    }
    
    
    break;
    case 10:{
        $cod=$_GET['cod'];
        $nom=$_GET['nom'];
        $appm=$_GET['appm'];
        $prof=$_GET['prof'];
        $tel=$_GET['tel'];
        $cel=$_GET['cel'];
        $email=$_GET['email'];
        $dir=$_GET['dir'];
        $fnac=$_GET['fnac'];
        $lnac=$_GET['lnac'];
        $tipo=$_GET['tipo'];
        $pass=$_GET['pass'];
        
        //***AHORA UTILIZAMOS ADODB PARA CONECTAR A LA BASE DE DATOS Y LOGRAR INDEPENDENCIA DE LA DB Y LA LG
        $db = ADONewConnection($dbdriver);
        $db->debug = false;
        $sql="
            INSERT INTO
            e_persona
            VALUES ('$cod','$nom', '$appm','$prof', '$tel', '$cel', '$email', '$dir', '$fnac', '$lnac', '$tipo', '$pass', NULL, now(), now() );";
        //echo $sql;
        $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
        $rs = $db->Execute($sql);
        $content="<h1>La Operacion se realizo con Exito.</h1>";
        $db->Close();
        
        if (!$rs){
            //print $db->ErrorMsg();
            //header ("Location: ps_mensaje.php?def=Detalle&error=No se pudo realzar el Registro");
            $e = ADODB_Pear_Error();
            //echo '<p>',$e->message,'</p>';
            $p1=stripos($e->message, '[');
            $p2=stripos($e->message, ']');
            $msg_error=substr($e->message, $p1,$p2-$p1+1);
            $content="<h1>No se pudo realizar la Operacion.</h1> <h4>".$msg_error."</h4>";
        }
        //echo $content;
        
        $smarty = new Smarty;
        $smarty->compile_check = true;
        $smarty->debugging = false;
        $smarty->assign("titulo","Agenda Personal (tres capas)");
        //Menu
        $menu=array(
            array('name'=>'Personas','url'=>'personas.php'),
            array('name'=>'Mensajes','url'=>'mensajes.php'),
            array('name'=>'Aniversarios','url'=>'aniversarios.php'),
            array('name'=>'Salir','url'=>'ps_logout.php'));
        $smarty->assign("menu",$menu);
        $smarty->assign("path",$path);
        //Contenido
        $smarty->assign("contenido",$content);
        $smarty->display('bienvenido.html');
    }
    
    break;
    case 11:{
        /*recibo datos :: MODIFICAR persona*/
        $codA   =$_GET['codA'];
        $codB   =$_GET['codB'];
        $nom    =$_GET['nom'];
        $appm   =$_GET['appm'];
        $prof   =$_GET['prof'];
        $tel    =$_GET['tel'];
        $cel    =$_GET['cel'];
        $email  =$_GET['email'];
        $dir    =$_GET['dir'];
        $fnac   =$_GET['fnac'];
        $lnac   =$_GET['lnac'];
        $tipo   =$_GET['tipo'];
        $pass   =$_GET['pass'];
        $foto   =$_GET['foto'];
        
        /*procesando la foto*/
        $nombre_foto = $foto;
        //$locati_foto = "C:\\Users\\eyver-dev\\Pictures\\kali_7.jpeg";
        $binari_foto = fopen($nombre_foto,'rb')
            or die($nombre_foto."<br>[error::fopen]<br>");
        
        $foto = fread($binari_foto, filesize($nombre_foto))
            or die($nombre_foto."<br>[error::fread]<br>");
        
        $foto = pg_escape_bytea($foto);

        //***AHORA UTILIZAMOS ADODB PARA CONECTAR A LA BASE DE DATOS Y LOGRAR INDEPENDENCIA DE LA DB Y LA LG
        $db = ADONewConnection($dbdriver);
        $db->debug = false;
        $sql = "update"." e_persona"." set"." per_cod = '".$codB."', per_nom = '".$nom."', per_appm = '".$appm."', per_prof = '".$prof."', per_telf = '".$tel."', per_cel = '".$cel."', per_email = '".$email."', per_dir = '".$dir."', per_fnac = '".$fnac."', per_flug = '".$lnac."', per_type = '".$tipo."', per_pass = '".$pass."', per_foto = '".$foto."' where per_cod = '".$codA."';";

        
        $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
        $rs = $db->Execute($sql);
        $content="<h1>La Operacion se realizo con Exito.</h1>";
        $db->Close();
        
        if (!$rs){
            //print $db->ErrorMsg();
            //header ("Location: ps_mensaje.php?def=Detalle&error=No se pudo realzar el Registro");
            $e = ADODB_Pear_Error();
            //echo '<p>',$e->message,'</p>';
            $p1=stripos($e->message, '[');
            $p2=stripos($e->message, ']');
            $msg_error=substr($e->message, $p1,$p2-$p1+1);
            $content="<h1>No se pudo realizar la Operacion.</h1> <h4>".$msg_error."</h4>";
        }
        
        $smarty = new Smarty;
        $smarty->compile_check = true;
        $smarty->debugging = false;
        $smarty->assign("titulo","Agenda Personal (tres capas)");

        /*menu*/
        $menu=array(
            array('name'=>'Personas','url'=>'personas.php'),
            array('name'=>'Mensajes','url'=>'mensajes.php'),
            array('name'=>'Aniversarios','url'=>'aniversarios.php'),
            array('name'=>'Salir','url'=>'ps_logout.php'));
        $smarty->assign("menu",$menu);
        $smarty->assign("path",$path);
        $smarty->assign("sql",$sql);
        
        /*contenido*/
        $smarty->assign("contenido",$content);
        $smarty->display('bienvenido.html');
    }
    
    
    break;
    default:{
        session_start();
        /*ROOT*/
        if ($_SESSION['nivel'] == 0) {
           
            $db = ADONewConnection($dbdriver);
            $db->debug = false;
            $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
            $result = $db->Execute(
                "SELECT *
                FROM e_persona;"
            );
            $amigos=$result->GetArray();
            $titulo2="Listado de Amigos..";
            $smarty = new Smarty;
            $smarty->compile_check = true;
            $smarty->debugging = false;
            $smarty->assign(
                "titulo",
                "[lista_personas :: AGENDA PERSONAL :: 3_CAPAS]"
            );
            
            /*MENU*/
            $menu=array(
                array('name'=>'Personas','url'=>'personas.php'),
                array('name'=>'Mensajes','url'=>'mensajes.php'),
                array('name'=>'Aniversarios','url'=>'aniversarios.php'),
                array('name'=>'Salir','url'=>'ps_logout.php'));
            $smarty->assign("menu",$menu);
            $smarty->assign("path",$path);
            $smarty->assign("titulo2",$titulo2);
            $smarty->assign("amigos",$amigos);
            
            /*visualizar la informacion en el TEMPLATE*/
            $smarty->display('personas-listar.html');
        }else{
            /*NOT_ROOT*/
            $db = ADONewConnection($dbdriver);
            $db->debug = false;
            $db->Connect($dbserver, $dbuser, $dbpassword, $dbname);
            $result = $db->Execute("SELECT * FROM e_persona WHERE per_cod='".$_SESSION['cod']."';");
            $amigos=$result->GetArray();
           
            $titulo2="Listado de Amigos..";
           
            $smarty = new Smarty;
            $smarty->compile_check = true;
            $smarty->debugging = false;
            $smarty->assign("titulo","Agenda Personal (tres capas)");
            //Menu
            $menu=array(
                array('name'=>'Personas','url'=>'personas.php'),
                array('name'=>'Mensajes','url'=>'mensajes.php'),
                array('name'=>'Salir','url'=>'ps_logout.php'));
            $smarty->assign("menu",$menu);
            $smarty->assign("path",$path);
            $smarty->assign("titulo2",$titulo2);
            $smarty->assign("amigos",$amigos);
            #Visualizar la informacion en el TEMPLATE
            $smarty->display('personas-listar.html');
        }
    }
}   
?>