<?php
/* Smarty version 3.1.32, created on 2018-11-21 02:33:22
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf50a424d8b08_10717697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da0755ece015ebc7d0479e4664d19f35770559a6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\layouts\\layout-left-column.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf50a424d8b08_10717697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204145bf50a424d8b05_81129465', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20795bf50a424d8b05_38891896', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_204145bf50a424d8b05_81129465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_204145bf50a424d8b05_81129465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_59965bf50a424d8b07_15007432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_20795bf50a424d8b05_38891896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_20795bf50a424d8b05_38891896',
  ),
  'content' => 
  array (
    0 => 'Block_59965bf50a424d8b07_15007432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59965bf50a424d8b07_15007432', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
