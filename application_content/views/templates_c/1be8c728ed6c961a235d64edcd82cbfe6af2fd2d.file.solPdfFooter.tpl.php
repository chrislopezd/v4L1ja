<?php /* Smarty version Smarty-3.1.13, created on 2017-01-20 06:28:25
         compiled from "application_content/views/templates/reporte/solPdfFooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134671546658819ff9180456-60847254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be8c728ed6c961a235d64edcd82cbfe6af2fd2d' => 
    array (
      0 => 'application_content/views/templates/reporte/solPdfFooter.tpl',
      1 => 1484887243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134671546658819ff9180456-60847254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGENO' => 1,
    'nb' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58819ff91864b0_82225309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58819ff91864b0_82225309')) {function content_58819ff91864b0_82225309($_smarty_tpl) {?>
<div class="wrapper">
    <div style="padding:10px; text-align:right; font-size:8pt"><i>Página <?php echo $_smarty_tpl->tpl_vars['PAGENO']->value;?>
 de <?php echo $_smarty_tpl->tpl_vars['nb']->value;?>
</i></div>
</div>
<?php }} ?>