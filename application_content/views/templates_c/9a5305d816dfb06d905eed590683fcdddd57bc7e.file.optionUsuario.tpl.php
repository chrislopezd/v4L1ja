<?php /* Smarty version Smarty-3.1.13, created on 2017-01-20 02:45:18
         compiled from "application_content/views/templates/load/optionUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45636011558816baedc09a8-57369849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a5305d816dfb06d905eed590683fcdddd57bc7e' => 
    array (
      0 => 'application_content/views/templates/load/optionUsuario.tpl',
      1 => 1484876430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45636011558816baedc09a8-57369849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'optiones' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58816baedf5305_31570500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58816baedf5305_31570500')) {function content_58816baedf5305_31570500($_smarty_tpl) {?><option></option>
<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['optiones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
<option><?php echo $_smarty_tpl->tpl_vars['res']->value['usuario'];?>
</option>
<?php } ?><?php }} ?>