<?php
/* Smarty version 3.1.32, created on 2018-11-19 05:28:55
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf2906762b484_62736377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2250477e1be4eccc1401794ad60f1a6bfb530e07' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\index.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf2906762b484_62736377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165095bf29067627604_54881997', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_152185bf29067627604_31559952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_152995bf2906762b483_92795107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_165095bf29067627604_54881997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_165095bf29067627604_54881997',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_152185bf29067627604_31559952',
  ),
  'page_content' => 
  array (
    0 => 'Block_152995bf2906762b483_92795107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152185bf29067627604_31559952', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152995bf2906762b483_92795107', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
