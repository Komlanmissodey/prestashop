<?php
/* Smarty version 3.1.48, created on 2024-07-16 17:08:36
  from 'C:\wamp64\www\prestashop\admin536vfl25j\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696a914379fe3_48010612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36e23a6c707c0949c29f3ca6a29321344d9e1d2' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin536vfl25j\\themes\\default\\template\\content.tpl',
      1 => 1720434729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696a914379fe3_48010612 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}