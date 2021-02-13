<?php
/* Smarty version 3.1.33, created on 2021-02-13 02:06:43
  from '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/personas-listar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602734335c9333_85967831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2d7e15fb3e785679afcbf0cea8be617a7c96a4' => 
    array (
      0 => '/home/grupo06sc/practica_4.1/eyver/appAgenda/templates/personas-listar.html',
      1 => 1613181720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602734335c9333_85967831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_345302757602734335a0240_75678601', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_345302757602734335a0240_75678601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_345302757602734335a0240_75678601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p align="left">
Listado de Amigos : 
<b><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</b>

<br>

<?php if ($_SESSION['nivel'] == 0) {?>
	<a href="personas.php?opcion=1"> Nuevo</a>
<?php }?>

<table>
	<tr>
		<td ><b>C.I.</b></td>
		<td ><b>Nombres Completo</b></td>
		<td ><b>Mostrar</b></td>
		<td ><b>Modificar</b></td>
		<td ><b>Eliminar</b></td>
	</tr>

<?php
$__section_pos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['amigos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pos_0_total = $__section_pos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pos'] = new Smarty_Variable(array());
if ($__section_pos_0_total !== 0) {
for ($__section_pos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] = 0; $__section_pos_0_iteration <= $__section_pos_0_total; $__section_pos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']++){
?>

	<tr>
		<td ><?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
</td>
		<td ><?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_appm'];?>
 <?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_nom'];?>
</td>
		<td ><a href="personas.php?opcion=2&per_cod=<?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
"> Mostrar</a></td>
		<td ><a href="personas.php?opcion=3&per_cod=<?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
"> Editar</a></td>
		<td ><a href="personas.php?opcion=4&per_cod=<?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
"> Eliminar</a></td>
	</tr>

<?php
}
}
?>

</table><br>

<?php
}
}
/* {/block 'contenido'} */
}
