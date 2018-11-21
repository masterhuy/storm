<?php
/* Smarty version 3.1.32, created on 2018-11-21 02:40:34
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf50bf2c51b93_90750526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '868e308b7c3fa0154ba0f547db03c0a6917b7892' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\page.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf50bf2c51b93_90750526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layout']->value, ENT_QUOTES, 'UTF-8');?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178445bf50bf2c4dd18_55630886', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_300345bf50bf2c4dd16_14102923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_82275bf50bf2c4dd15_79203279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_137895bf50bf2c4dd18_43100474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300345bf50bf2c4dd16_14102923', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82275bf50bf2c4dd15_79203279', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_23365bf50bf2c51b93_97919588 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_178445bf50bf2c4dd18_55630886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_178445bf50bf2c4dd18_55630886',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_137895bf50bf2c4dd18_43100474',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_300345bf50bf2c4dd16_14102923',
  ),
  'page_content' => 
  array (
    0 => 'Block_82275bf50bf2c4dd15_79203279',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_23365bf50bf2c51b93_97919588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
	
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137895bf50bf2c4dd18_43100474', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23365bf50bf2c51b93_97919588', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
