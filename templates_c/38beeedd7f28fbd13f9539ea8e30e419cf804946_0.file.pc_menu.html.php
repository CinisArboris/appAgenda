<?php
/* Smarty version 3.1.33, created on 2021-02-09 01:59:17
  from '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/pc_menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6021ec75a0dfd5_47301902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38beeedd7f28fbd13f9539ea8e30e419cf804946' => 
    array (
      0 => '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/pc_menu.html',
      1 => 1612835206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6021ec75a0dfd5_47301902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13504201576021ec75a08503_14753140', 'contenido');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_13504201576021ec75a08503_14753140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_13504201576021ec75a08503_14753140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['contenido']->value;?>

<?php
}
}
/* {/block 'contenido'} */
}
