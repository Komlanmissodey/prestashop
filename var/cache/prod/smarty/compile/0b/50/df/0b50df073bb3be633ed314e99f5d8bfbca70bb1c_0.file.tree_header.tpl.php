<?php
/* Smarty version 3.1.48, created on 2024-07-16 16:22:00
  from 'C:\wamp64\www\prestashop\admin536vfl25j\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66969e28585936_12002968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b50df073bb3be633ed314e99f5d8bfbca70bb1c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin536vfl25j\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1720434730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66969e28585936_12002968 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
