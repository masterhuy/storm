<?php
/* Smarty version 3.1.32, created on 2018-10-04 23:27:06
  from 'D:\xamppp\htdocs\jms_storm\modules\jmstestimonials\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb6da0ab0dfe2_30583562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a54603350d03357a603f9118bc14bc40f4b2758' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_storm\\modules\\jmstestimonials\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1537260448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6da0ab0dfe2_30583562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270505bb6da0aae6ee2_66936969', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_270505bb6da0aae6ee2_66936969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_270505bb6da0aae6ee2_66936969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
		<div class="row">
			<div class="translatable-field " >
				<div class="col-lg-6">
					<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'image' && isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'])) {?>
					<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'],'html','UTF-8' ));?>
" class="img-thumbnail" />
					<input type="hidden" name="image_old" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'],'html','UTF-8' ));?>
" />
					<?php }?>
											
					<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" type="file" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
" class="hide" />
					<div class="dummyfile input-group">
						<span class="input-group-addon"><i class="icon-file"></i></span>
						<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-name" type="text" class="disabled" name="filename" readonly />
						<span class="input-group-btn">
							<button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
								<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Modules.JmsTestimonials'),$_smarty_tpl ) );?>

							</button>
						</span>
					</div>
				</div>
			</div>
				<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-selectbutton').click(function(e){
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').trigger('click');
					});
					$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
-name').val(file[file.length-1]);
					});
				});
			<?php echo '</script'; ?>
>
			
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
