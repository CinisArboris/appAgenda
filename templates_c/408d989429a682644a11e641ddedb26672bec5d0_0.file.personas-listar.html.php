<?php
/* Smarty version 3.1.33, created on 2021-02-14 23:26:10
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-listar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6029b192898ad8_25973248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408d989429a682644a11e641ddedb26672bec5d0' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-listar.html',
      1 => 1613343398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6029b192898ad8_25973248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19335422776029b192862707_78501474', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_19335422776029b192862707_78501474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_19335422776029b192862707_78501474',
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

		<style>
			.center {
  				margin-left: auto;
  				margin-right: auto;
			}
		</style>
		<table class="center">
	<tr>
		<td ><b>Foto</b></td>
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
		<td ><?php echo $_smarty_tpl->tpl_vars['amigos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_foto'];?>
</td>
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
