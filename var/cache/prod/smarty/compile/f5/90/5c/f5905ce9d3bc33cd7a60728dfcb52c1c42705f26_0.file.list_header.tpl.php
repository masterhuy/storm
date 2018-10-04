<?php
/* Smarty version 3.1.32, created on 2018-10-03 21:55:15
  from 'D:\xamppp\htdocs\jms_storm\admin063ihraim\themes\default\template\controllers\tracking\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb573039a9955_18406151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5905ce9d3bc33cd7a60728dfcb52c1c42705f26' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\admin063ihraim\\themes\\default\\template\\controllers\\tracking\\helpers\\list\\list_header.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb573039a9955_18406151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218835bb573039a9957_67134952', "preTable");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_218835bb573039a9957_67134952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_218835bb573039a9957_67134952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.','d'=>'Admin.Catalog.Help'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
