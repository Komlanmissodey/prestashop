<?php
/* Smarty version 3.1.48, created on 2024-07-16 17:34:41
  from 'C:\wamp64\www\prestashop\modules\ps_emailsubscription\views\templates\admin\list_action_enable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696af31dfee49_92913236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f823824681a6275e393b41de9a51e85c3dce97c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_emailsubscription\\views\\templates\\admin\\list_action_enable.tpl',
      1 => 1720434732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696af31dfee49_92913236 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="list-action-enable<?php if ((isset($_smarty_tpl->tpl_vars['ajax']->value)) && $_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }
if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_enable']->value,'html','UTF-8' ));?>
"<?php if ((isset($_smarty_tpl->tpl_vars['confirm']->value))) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','d'=>'Admin.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','d'=>'Admin.Global'),$_smarty_tpl ) );
}?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }
}
