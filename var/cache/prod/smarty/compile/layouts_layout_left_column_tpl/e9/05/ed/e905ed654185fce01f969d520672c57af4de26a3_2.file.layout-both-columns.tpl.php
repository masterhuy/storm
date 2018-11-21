<?php
/* Smarty version 3.1.32, created on 2018-11-21 02:33:22
  from 'D:\xamppp\htdocs\jms_storm\themes\jms_storm\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf50a42513497_27612542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e905ed654185fce01f969d520672c57af4de26a3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\themes\\jms_storm\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1537323326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5bf50a42513497_27612542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106985bf50a424e8512_07260515', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value) && $_smarty_tpl->tpl_vars['jpb_homeclass']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
		<div class="preloader">
			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
				<div class="dot1"></div>
				<div class="dot2"></div>
			    <div class="bounce1"></div>
			    <div class="bounce2"></div>
			    <div class="bounce3"></div>
			</div>
		</div>
	<?php }?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
		<div class="menu-wrap hidden-lg hidden-md">
			<button id="close-button" class="close-button"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</button>
				<nav id="off-canvas-menu">					
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

				</nav>				
				
			</div>
	<?php }?>
    <div class="main-site">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18515bf50a424f7f10_74047715', 'product_activation');
?>

      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159605bf50a424f7f19_16354682', 'header');
?>

      </header>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29935bf50a424f7f17_93358244', 'notifications');
?>

		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62945bf50a424fbd99_06349632', 'breadcrumb');
?>

		<?php }?>
        <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>class="container"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		<div class="row">
		<?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_235755bf50a424ffc17_52755908', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_266285bf50a42503a92_89430466', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102745bf50a42507910_25793367', "right_column");
?>

			
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {?>
		</div>
		<?php }?>
      </div>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88835bf50a4250b795_34732539', "footer");
?>

      </footer>

    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1125bf50a4250b792_08481510', 'javascript_bottom');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'cms') {?>		 
		 <?php echo '<script'; ?>
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9p77jYCRrlLa3xx1hwemtEjUyH3YcZo&callback=initMap">
        <?php echo '</script'; ?>
>
		<?php }?>
  </body>

</html>
<?php }
/* {block 'head'} */
class Block_106985bf50a424e8512_07260515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_106985bf50a424e8512_07260515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'product_activation'} */
class Block_18515bf50a424f7f10_74047715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_18515bf50a424f7f10_74047715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_159605bf50a424f7f19_16354682 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_159605bf50a424f7f19_16354682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_29935bf50a424f7f17_93358244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_29935bf50a424f7f17_93358244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_62945bf50a424fbd99_06349632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_62945bf50a424fbd99_06349632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			   <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_235755bf50a424ffc17_52755908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_235755bf50a424ffc17_52755908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="page-column col-sm-12 col-md-3 col-lg-3 col-xs-12 col-sm-12">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_127815bf50a42503a95_99000546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_266285bf50a42503a92_89430466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_266285bf50a42503a92_89430466',
  ),
  'content' => 
  array (
    0 => 'Block_127815bf50a42503a95_99000546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-6">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127815bf50a42503a95_99000546', "content", $this->tplIndex);
?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_102745bf50a42507910_25793367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_102745bf50a42507910_25793367',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-12 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_88835bf50a4250b795_34732539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_88835bf50a4250b795_34732539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_1125bf50a4250b792_08481510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_1125bf50a4250b792_08481510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
}
