<?php
/* Smarty version 3.1.32, created on 2018-11-01 00:45:16
  from 'D:\xamppp\htdocs\jms_storm\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bda84dc020387_79562252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2598ed656e728bb6e3caaaf94687b2e93d5d70' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\pdf\\invoice.shipping-tab.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bda84dc020387_79562252 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
