<?php /* Smarty version Smarty-3.1.13, created on 2017-01-20 05:08:34
         compiled from "application_content/views/templates/load/detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8954908058818b25a941f6-03714586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb44b7af295ab2a173ee2ff000b993fd59e34f8a' => 
    array (
      0 => 'application_content/views/templates/load/detalle.tpl',
      1 => 1484885310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8954908058818b25a941f6-03714586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58818b25af7a71_96316374',
  'variables' => 
  array (
    'folio' => 0,
    'fecha' => 0,
    'area_destino' => 0,
    'destinatario' => 0,
    'usuario_destino' => 0,
    'detalle_envio' => 0,
    'observaciones' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58818b25af7a71_96316374')) {function content_58818b25af7a71_96316374($_smarty_tpl) {?><div class="panel panel-default" style="margin-bottom:0px;">
  <div class="panel-heading"></div>
  <div class="panel-body">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group"><label>FOLIO</label><br/><?php echo $_smarty_tpl->tpl_vars['folio']->value;?>
</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group"><label>FECHA</label><br/><?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group"><label>ÁREA DESTINO</label><br/><?php echo $_smarty_tpl->tpl_vars['area_destino']->value;?>
</div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group"><label>DESTINATARIO</label><br/><?php echo $_smarty_tpl->tpl_vars['destinatario']->value;?>
</div>
        </div>
      </div>
      <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group"><label>USUARIO</label><br/><?php echo $_smarty_tpl->tpl_vars['usuario_destino']->value;?>
</div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group"><label>DETALLE ENVÍO</label><br/><?php echo $_smarty_tpl->tpl_vars['detalle_envio']->value;?>
</div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group"><label>OBSERVACIONES</label><br/><?php echo $_smarty_tpl->tpl_vars['observaciones']->value;?>
</div>
        </div>
      </div>
  </div>
</div><?php }} ?>