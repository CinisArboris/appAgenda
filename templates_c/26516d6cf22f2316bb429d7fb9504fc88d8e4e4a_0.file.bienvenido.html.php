<?php
/* Smarty version 3.1.33, created on 2021-02-09 00:30:07
  from '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/bienvenido.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6021d78fa8c703_52089394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26516d6cf22f2316bb429d7fb9504fc88d8e4e4a' => 
    array (
      0 => '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/bienvenido.html',
      1 => 1612829006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6021d78fa8c703_52089394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11390134276021d78fa86a14_98844944', 'contenido');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_11390134276021d78fa86a14_98844944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_11390134276021d78fa86a14_98844944',
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
