<?php
/* Smarty version 3.1.33, created on 2021-02-14 23:41:47
  from '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-modificar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6029b53b4d5210_26164896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05486d586d8a77abc837e8fbbb05322bc1664483' => 
    array (
      0 => '/home/grupo06sc/practica_4.3/eyver/appAgenda/templates/personas-modificar.html',
      1 => 1613346106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6029b53b4d5210_26164896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20229997856029b53b487506_65924010', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block 'contenido'} */
class Block_20229997856029b53b487506_65924010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_20229997856029b53b487506_65924010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$__section_pos_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pos_0_total = $__section_pos_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pos'] = new Smarty_Variable(array());
if ($__section_pos_0_total !== 0) {
for ($__section_pos_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] = 0; $__section_pos_0_iteration <= $__section_pos_0_total; $__section_pos_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']++){
?>

	<form
		method="get"
		action="<?php echo $_smarty_tpl->tpl_vars['ps']->value;?>
"
		enctype="multipart/form-data">
		
		<input type="hidden" name="opcion" value="11">
		<input type="hidden" name="codA" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
>
		
		<h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<br></h2>
		
		<style>.center { margin-left: auto; margin-right: auto; }</style>
		
		<table class="center">
			<h3><?php echo $_smarty_tpl->tpl_vars['sql']->value;?>
</h3>
			<tr>
				<td><div align="left">C.I. :</div></td>
				<td><input type="text" name="codB" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cod'];?>
></td>
			</tr>
			
			<tr>
				<td>Nombre :</td>
				<td><input type="text" name="nom" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_nom'];?>
></td>
			</tr>
			
			<tr>
				<td>Apellidos :</td>
				<td><input type="text" name="appm" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_appm'];?>
></td>
			</tr>
    
    		<tr>
      			<td>Profesion :</td>
      			<td><input type="text" name="prof" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_prof'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>Telefono:</td>
      			<td><input type="text" name="tel" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_telf'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>Celular :</td>
      			<td><input type="text" name="cel" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_cel'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>E-Mail :</td>
      			<td><input type="text" name="email" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_email'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>Direccion :</td>
      			<td><input type="text" name="dir" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_dir'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>Fecha Nac. :</td>
      			<td><input type="text" name="fnac" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_fnac'];?>
></td>
    			</tr>
    
    		<tr>
      			<td>Lugar Nac. :</td>
      			<td><input type="text" name="lnac" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_flug'];?>
></td>
    		</tr>
    
    		<tr>
      			<td>Tipo :</td>
      			<td><input type="text" name="tipo" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_type'];?>
></td>
    		</tr>

    		<tr>
      			<td>Contrasena :</td>
      			<td><input type="password" name="pass" value=<?php echo $_smarty_tpl->tpl_vars['rs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pos']->value['index'] : null)]['per_pass'];?>
></td>
    		</tr>

    		<tr>
      			<td>Imagen :</td>
      			<td>
      				<input
      					type="file"
      					onchange="imgchange(this)"
      					id="foto"
      					name="foto"
      					accept="image/*"
   					>
				</td>
      			<td><img src="" width="200" style="display:none;" /></td>
      			<?php echo '<script'; ?>
 type="text/javascript">
					function imgchange(f){
						var filePath = document.getElementById('foto').value;
						console.log(filePath);
						var reader = new FileReader();
						console.log(reader);
						reader.onload = function (e) {
							alert(e.target.result);
						};
					}
					alert("asdf");
    			<?php echo '</script'; ?>
>
    		</tr>

    		<tr>
    			<td><input type="submit" name="Submit" value="Registrar"></td>
    		</tr>

    	</table>
    </form>
<?php
}
}
?>

<br>

<?php
}
}
/* {/block 'contenido'} */
}
