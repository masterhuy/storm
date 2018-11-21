<?php
/* Smarty version 3.1.32, created on 2018-11-20 22:51:37
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\layouts\layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf4d649bfae50_34069864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e25881acb04756c88a732c9d64d71ef49c1ed08' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\layouts\\layout-right-column.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf4d649bfae50_34069864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73495bf4d649bf6fd1_37335976', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39145bf4d649bfae50_05424724', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_73495bf4d649bf6fd1_37335976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_73495bf4d649bf6fd1_37335976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_160595bf4d649bfae56_46575619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_39145bf4d649bfae50_05424724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_39145bf4d649bfae50_05424724',
  ),
  'content' => 
  array (
    0 => 'Block_160595bf4d649bfae56_46575619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper" class="right-column col-xs-12 col-sm-12 col-md-9">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160595bf4d649bfae56_46575619', 'content', $this->tplIndex);
?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
