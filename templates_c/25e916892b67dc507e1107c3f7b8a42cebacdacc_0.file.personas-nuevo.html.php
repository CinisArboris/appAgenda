<?php
/* Smarty version 3.1.33, created on 2021-02-14 16:54:37
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-nuevo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602955cd382176_11231595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e916892b67dc507e1107c3f7b8a42cebacdacc' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-nuevo.html',
      1 => 1613321676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602955cd382176_11231595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1092623397602955cd374d54_53721163', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_1092623397602955cd374d54_53721163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_1092623397602955cd374d54_53721163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form  method="get" action="<?php echo $_smarty_tpl->tpl_vars['ps']->value;?>
">
    <input type="hidden" name="opcion" value="10"> 
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<br></h2>
		<style>
			.center {
  				margin-left: auto;
  				margin-right: auto;
			}
		</style>
		<table class="center">
    <tr>
      <td><div align="left">C.I. :</div></td>
      <td><input type="text" name="cod"></td>
    </tr>
    <tr>
      <td>Nombre :</td>
      <td><input type="text" name="nom"></td>
    </tr>
    <tr>
      <td>Apellidos :</td>
      <td><input type="text" name="appm"></td>
    </tr>
    <tr>
      <td>Profesion :</td>
      <td><input type="text" name="prof"></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><input type="text" name="tel"></td>
    </tr>
    <tr>
      <td>Celular :</td>
      <td><input type="text" name="cel"></td>
    </tr>
    <tr>
      <td>E-Mail :</td>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <td>Direccion :</td>
      <td><input type="text" name="dir"></td>
    </tr>
    <tr>
      <td>Fecha Nac. :</td>
      <td><input type="text" name="fnac"></td>
    </tr>
    <tr>
      <td>Lugar Nac. :</td>
      <td><input type="text" name="lnac"></td>
    </tr>
    <tr>
      <td>Tipo :</td>
      <td><input type="text" name="tipo"></td>
    </tr>
    <tr>
      <td>Contrasena :</td>
      <td><input type="password" name="pass"></td>
    </tr>
    <tr>
    <td>
          <input type="submit" name="Submit" value="Registrar">
    </td>
    </tr>
    </table>
</form>
<br>

<?php
}
}
/* {/block 'contenido'} */
}
