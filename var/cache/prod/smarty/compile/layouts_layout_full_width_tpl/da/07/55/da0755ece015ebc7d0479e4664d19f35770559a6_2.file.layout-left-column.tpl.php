<?php
/* Smarty version 3.1.32, created on 2018-11-21 01:39:40
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\layouts\layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf4fdac062e08_79878050',
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
function content_5bf4fdac062e08_79878050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_251175bf4fdac05ef88_34488645', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196025bf4fdac062e00_45670706', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_251175bf4fdac05ef88_34488645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_251175bf4fdac05ef88_34488645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_180195bf4fdac062e09_76099200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_196025bf4fdac062e00_45670706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_196025bf4fdac062e00_45670706',
  ),
  'content' => 
  array (
    0 => 'Block_180195bf4fdac062e09_76099200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="left-column col-sm-12 col-md-9 col-lg-9 col-xs-12">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180195bf4fdac062e09_76099200', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
