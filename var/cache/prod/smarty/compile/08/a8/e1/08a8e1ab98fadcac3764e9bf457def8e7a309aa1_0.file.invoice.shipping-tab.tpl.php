<?php
/* Smarty version 3.1.32, created on 2018-11-08 04:30:53
  from 'D:\xamppp\htdocs\jms_storm\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be4024da93069_13558416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08a8e1ab98fadcac3764e9bf457def8e7a309aa1' => 
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
function content_5be4024da93069_13558416 (Smarty_Internal_Template $_smarty_tpl) {
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
