<?php
/* Smarty version 3.1.33, created on 2021-02-13 03:24:30
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/bienvenido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6027466e7d8912_61431801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65875b77aeaeb93d0cc7cd57fe8d8a13827a2a76' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/bienvenido.html',
      1 => 1612829006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6027466e7d8912_61431801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12997220286027466e7cf7e9_48020185', 'contenido');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_12997220286027466e7cf7e9_48020185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_12997220286027466e7cf7e9_48020185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

<?php
}
}
/* {/block 'contenido'} */
}
