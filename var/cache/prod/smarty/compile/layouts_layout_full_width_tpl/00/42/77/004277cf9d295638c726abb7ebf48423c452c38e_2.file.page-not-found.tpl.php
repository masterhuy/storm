<?php
/* Smarty version 3.1.32, created on 2018-11-19 05:25:59
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\errors\page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf28fb77f4140_33844919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '004277cf9d295638c726abb7ebf48423c452c38e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\errors\\page-not-found.tpl',
      1 => 1542266622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf28fb77f4140_33844919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
	<span class="icon">
		<i class="fa fa-frown"></i>
	</span>
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'error 404 not found','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are sorry but the page you are looking for does not exist.','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You could return to homepage or using search!','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171685bf28fb77f4146_79065855', 'hook_not_found');
?>

	</div>
</section>
<?php }
/* {block 'hook_not_found'} */
class Block_171685bf28fb77f4146_79065855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_171685bf28fb77f4146_79065855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
}
