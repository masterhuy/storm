<?php
/* Smarty version 3.1.32, created on 2018-11-19 05:25:57
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf28fb5b52f74_05337223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634bbad4adbf2a9c89cdeefc3d636475d45c0689' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\errors\\404.tpl',
      1 => 1535598448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:errors/page-not-found.tpl' => 1,
  ),
),false)) {
function content_5bf28fb5b52f74_05337223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39445bf28fb5b43560_16945875', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285455bf28fb5b473e6_68456440', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_39445bf28fb5b43560_16945875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_39445bf28fb5b43560_16945875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8');?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_285455bf28fb5b473e6_68456440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_285455bf28fb5b473e6_68456440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:errors/page-not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'page_content_container'} */
}
