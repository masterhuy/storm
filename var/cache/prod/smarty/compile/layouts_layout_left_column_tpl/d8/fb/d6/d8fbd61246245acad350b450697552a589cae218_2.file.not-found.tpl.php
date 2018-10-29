<?php
/* Smarty version 3.1.32, created on 2018-10-29 05:11:28
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd6cec0f2f1e3_56924633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8fbd61246245acad350b450697552a589cae218' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\errors\\not-found.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd6cec0f2f1e3_56924633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"> 
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h4>
	<p class="large-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'page not found','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<p class="small-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</p>
	<div class="search-box">
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126065bd6cec0f2b367_66870657', 'search');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29755bd6cec0f2f1e6_03066389', 'hook_not_found');
?>

	</div>
</section>
<?php }
/* {block 'search'} */
class Block_126065bd6cec0f2b367_66870657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'search' => 
  array (
    0 => 'Block_126065bd6cec0f2b367_66870657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_29755bd6cec0f2f1e6_03066389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_29755bd6cec0f2f1e6_03066389',
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
