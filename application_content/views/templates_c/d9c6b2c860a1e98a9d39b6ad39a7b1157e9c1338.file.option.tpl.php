<?php /* Smarty version Smarty-3.1.13, created on 2017-01-18 04:49:17
         compiled from "application_content/views/templates/load/option.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200991320587ee5bd653329-05826699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9c6b2c860a1e98a9d39b6ad39a7b1157e9c1338' => 
    array (
      0 => 'application_content/views/templates/load/option.tpl',
      1 => 1484710786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200991320587ee5bd653329-05826699',
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
  'unifunc' => 'content_587ee5bd6ad488_43294378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ee5bd6ad488_43294378')) {function content_587ee5bd6ad488_43294378($_smarty_tpl) {?><option></option>
<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['optiones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_area'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['area'];?>
</option>
<?php } ?><?php }} ?>