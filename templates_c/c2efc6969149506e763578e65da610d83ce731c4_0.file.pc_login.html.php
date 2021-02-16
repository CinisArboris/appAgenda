<?php
/* Smarty version 3.1.33, created on 2021-02-13 03:27:01
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/pc_login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602747059edd62_60605448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2efc6969149506e763578e65da610d83ce731c4' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/pc_login.html',
      1 => 1612829363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602747059edd62_60605448 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1174300430602747059e4571_25659884', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_1174300430602747059e4571_25659884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_1174300430602747059e4571_25659884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form  method="get" action="<?php echo $_smarty_tpl->tpl_vars['pslogin']->value;?>
">
   
      <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<br></h2>
 
    <table >
      <tr>
        <td width="89">Usuario:</td>
        <td width="145"><input name="user" type="text"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input name="password" type="password"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <input type="reset" name="Reset" value="Limpiar">
            <input type="submit" name="Submit" value="Ingresar">
        </div></td>
      </tr>
    </table>
</form>
<br>

<?php
}
}
/* {/block 'contenido'} */
}
