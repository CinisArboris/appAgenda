<?php
/* Smarty version 3.1.33, created on 2021-02-14 17:03:54
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/pc_menu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602957fa5e2fa5_68423662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f177a79ef86aa2251d375245f8379669c5d2bb4a' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/pc_menu.html',
      1 => 1613256604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602957fa5e2fa5_68423662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1615195414602957fa5dc253_69802477', 'contenido');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_1615195414602957fa5dc253_69802477 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_1615195414602957fa5dc253_69802477',
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
