<?php
/* Smarty version 3.1.32, created on 2018-09-25 05:52:53
  from 'D:\xamppp\htdocs\jms_storm\modules\hotdeals\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5baa05750f21b9_28067829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aedecb277149309b7da7ece013d8c0319009bc3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\hotdeals\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1537260447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa05750f21b9_28067829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138455baa05750d2db1_58275735', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_138455baa05750d2db1_58275735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_138455baa05750d2db1_58275735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'product_search') {?>		
		<div class="input-group search-product-input">
			<input type="text" id="product" value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['product_name'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['product_name'],'html' ));
}?>" />
			<input type="hidden" id="id_product" name="id_product" value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_product'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['id_product'],'html' ));
}?>" />
			<span class="input-group-addon">
				<i class="icon-search"></i>
			</span>			
			<div id="result_products"></div>	
		</div>
		
				<?php echo '<script'; ?>
>				
				$(document).ready(function() {
					$( "#product" ).keyup(function() {		
						var search_key = $( "#product" ).val();	
						$.ajax({
							type: 'GET',
							url: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url']->value,'html' ));?>
' + 'modules/hotdeals/ajax_productsearch.php',
							headers: { "cache-control": "no-cache" },
							async: true,    	
							data: 'search_key=' + search_key,
							success: function(data)
							{		
								$('#result_products').innerHTML = data;		
							}
						}) .done(function( msg ) {
							$( "#result_products" ).html(msg);
						});
					})	
					$('html').click(function() {
						$( "#result_products" ).html('');
					});

					$('#result_products').click(function(event){
						event.stopPropagation();
					});					
				});
				<?php echo '</script'; ?>
>			
	
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
