<?php /* Smarty version Smarty-3.1.13, created on 2017-02-01 15:40:23
         compiled from "application_content/views/templates/formulario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:420188816587a9fee2ce9c5-38701120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d699e0ac5fa39881b084447c5504a120d868037' => 
    array (
      0 => 'application_content/views/templates/formulario.tpl',
      1 => 1485409829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420188816587a9fee2ce9c5-38701120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_587a9fee31aaa2_36701331',
  'variables' => 
  array (
    'raiz' => 0,
    'idSolTxt' => 0,
    'idSol' => 0,
    'fecha' => 0,
    'cedes' => 0,
    'res' => 0,
    'area_destino' => 0,
    'edit' => 0,
    'optiones' => 0,
    'destinatario' => 0,
    'usuariosAreas' => 0,
    'usuario_destino' => 0,
    'detalle_envio' => 0,
    'observaciones' => 0,
    'token' => 0,
    'url' => 0,
    'perfil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587a9fee31aaa2_36701331')) {function content_587a9fee31aaa2_36701331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/fontello/css/fontello.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/chosen.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/ui.jqgrid.css" rel="stylesheet" />
<div class="container">
<div class="row"><div class="col-lg-12"><ol class="breadcrumb"><li><i class="glyphicon glyphicon-home"></i><a href="inicio"> Inicio</a></li>
<li><span class="disabled"> Nueva solicitud</span></li>
</ol></div></div>
        <button type="button" id="btnMsg" class="btn btn-raised btn-default-bright hide" data-toggle="modal" data-target="#modalDialog" data-backdrop="static" data-keyboard="false"></button>
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Solicitud valija</h3>
            </div>
            <div class="panel-body">
              <form role="form" id="mForm">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="foliForm" id="foliForm" value="<?php echo $_smarty_tpl->tpl_vars['idSolTxt']->value;?>
" class="form-control input-sm disbaled" disabled placeholder="FOLIO: N/D">
                      <input type="hidden" name="idSolForm" id="idSolForm" value="<?php echo $_smarty_tpl->tpl_vars['idSol']->value;?>
" class="form-control input-sm disbaled">
                      <input type="hidden" name="folioForm" id="folioForm" value="<?php echo $_smarty_tpl->tpl_vars['idSolTxt']->value;?>
" class="form-control input-sm disbaled">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="fechaForm" id="fechaForm" class="form-control input-sm fecha fsize10" placeholder="FECHA" value="<?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select data-placeholder='ÁREA DESTINO' name='areaDesForm' id='areaDesForm' class='form-control input-sm selectCombo upper'>
                        <option></option>
                        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cedes']->value['DATOS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_cede'];?>
" <?php if ($_smarty_tpl->tpl_vars['res']->value['id_cede']==$_smarty_tpl->tpl_vars['area_destino']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['res']->value['cede'];?>
</option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select data-placeholder='DESTINATARIO' name='desForm' id='desForm' class='form-control input-sm selectCombo upper'>
                        <option></option>
                        <?php if ($_smarty_tpl->tpl_vars['edit']->value==1){?>
                        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['optiones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_area'];?>
" <?php if ($_smarty_tpl->tpl_vars['res']->value['id_area']==$_smarty_tpl->tpl_vars['destinatario']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['res']->value['area'];?>
</option>
                        <?php } ?>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <select data-placeholder='USUARIO' name='usuForm' id='usuForm' class='form-control input-sm selectCombo upper'>
                        <option></option>
                        <?php if ($_smarty_tpl->tpl_vars['edit']->value==1){?>
                        <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['usuariosAreas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['res']->value['usuario']==$_smarty_tpl->tpl_vars['usuario_destino']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['res']->value['usuario'];?>
</option>
                        <?php } ?>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <textarea name="detalleForm" id="detalleForm" class="form-control" style="resize: none;" placeholder="DETALLE DE ENVÍO" rows="6"><?php echo $_smarty_tpl->tpl_vars['detalle_envio']->value;?>
</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <textarea name="observaForm" id="observaForm" maxlength="254" class="form-control" style="resize: none;" placeholder="OBSERVACIONES" rows="3"><?php echo $_smarty_tpl->tpl_vars['observaciones']->value;?>
</textarea>
                    </div>
                  </div>
                </div>

                <button type="button" name="btnEnviar" id="btnEnviar" class="btn btn-lg btn-block btn-success fontbtn"><span class="glyphicon glyphicon-send"></span> Enviar solicitud</button>
              </form>
            </div>
          </div>
        </div>
        </div>
    <div id="modalDialog" class="modal fade" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="titleModal"></h4>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning alert-callout" id="malert" role="alert">
              <strong id="msgModal"></strong>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnCerrar" class="btn btn-primary btn-flat btn-ripple" data-dismiss="modal">Cerrar</button>
            <button type="button" id="btnAceptar" class="btn btn-primary btn-flat btn-ripple hide" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

<input type="hidden" name="csrf_vali_tok_name" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
<div class="scrollTop"><span class="glyphicon glyphicon-chevron-up"></span></div>
</div>
<script type="text/javascript">var _raiz = '<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
';</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/timepicki.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/grid.locale-es.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/jquery.jqGrid.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/chosen.jquery.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/amcharts.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/serial.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/js/web/admin.js"></script>


<script type="text/javascript">
var _edit = '<?php echo $_smarty_tpl->tpl_vars['edit']->value;?>
';
var _url = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
var _raiz = '<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
';
var _perfil = '<?php echo $_smarty_tpl->tpl_vars['perfil']->value;?>
';
</script>

<script type="text/javascript">
  $().ready( function(){
    $("#areaDesForm").change( function(){
      if($(this).val() != ""){
        $.ajax({
          url : "ajax/optionHtml",
          data : {
            'id' : $('#areaDesForm').val(),
            'csrf_vali_tok_name' : function(){ return ($('#token').val() != "") ? $('#token').val() : "";}
          },
          dataType : "json", type: "POST",
          beforeSend: function(){
          },
          success: function(data){
            if(data.error){
              $("#desForm").html('<option>Intente más tarde.</option>');
            }
            else{
              $("#desForm").html(data.HTML);
            }
            $("#desForm").trigger("liszt:updated");
          },
          error: function (){$('#desForm').html('<option>Intente más tarde.</option>');$("#desForm").trigger("liszt:updated");}
        });
      }else{
        $("#desForm").html('<option></option>');
        $("#desForm").trigger("liszt:updated");
        $("#usuForm").html('<option></option>');
        $("#usuForm").trigger("liszt:updated");
      }
    });
    $("body").on("click","#btnAceptar", function(){
      var token = $('#token').val();
      var data = $("#mIdiSol").val();
      var div = $("<div><form name='_form' id='_formulario' method='post' action='editaSolicitud'><input type='hidden' name='ids' id='ids' value='"+data+"' /><input type='hidden' name='csrf_vali_tok_name' value='"+token+"' /></form></div>");
      $('body').append(div);
      $('body').find("#_formulario").submit();
    });
    $("#desForm").change( function(){
      if($(this).val() != ""){
        $.ajax({
          url : "ajax/optionHtmlUsuario",
          data : {
            'id' : $('#desForm').val(),
            'csrf_vali_tok_name' : function(){ return ($('#token').val() != "") ? $('#token').val() : "";}
          },
          dataType : "json", type: "POST",
          beforeSend: function(){
          },
          success: function(data){
            if(data.error){
              $("#usuForm").html('<option>Intente más tarde.</option>');
            }
            else{
              $("#usuForm").html(data.HTML);
            }
            $("#usuForm").trigger("liszt:updated");
          },
          error: function (){$('#usuForm').html('<option>Intente más tarde.</option>');$("#usuForm").trigger("liszt:updated");}
        });
      }else{
        $("#usuForm").html('<option></option>');
        $("#usuForm").trigger("liszt:updated");
      }
    });
    $("#btnEnviar").click( function(){
      var _res = "";var _ii = 0;
      if(_edit == 1){
        var _myid = $("#idSolForm").val();
        var _mytoken = $('#token').val();
        $.post("ajaX/verificarEstatus",{csrf_vali_tok_name: _mytoken,ids:_myid}, function(r){
          _res = r;
          _ii++;
        });
      }else{
        _ii++;
      }
      var _timer = setInterval( function(){
      if(_ii == "1"){
        clearInterval(_timer);
        if(_res != ""){
          if(parseInt(_res) > 1){
            $("#modalDialog").find("#titleModal").html("Mensaje");
            $("#modalDialog").find("#msgModal").html("span class='glyphicon glyphicon-warning-sign'></span> El estatus de la solicitud ha cambiado, ya no puede editar la solicitud.");
            $("#btnMsg").click();
            return false;
          }
        }
        var _data = new FormData();
        _data.append('csrf_vali_tok_name', $("#token").val());
        _data.append('idSol', $("#idSolForm").val());
        _data.append('folio', $("#folioForm").val());
        _data.append('fecha', $("#fechaForm").val());
        _data.append('area', $("#areaDesForm").val());
        _data.append('usuario', $("#usuForm").val());
        _data.append('destinatario', $("#desForm").val());
        _data.append('detalle', $("#detalleForm").val());
        _data.append('observaciones', $("#observaForm").val());
        if($.trim($("#fechaForm").val()).length == 0){
          $("#modalDialog").find("#titleModal").html("Mensaje");
          $("#modalDialog").find("#msgModal").html("<span class='glyphicon glyphicon-warning-sign'></span> El campo Fecha no puede quedar vacio, favor de verificar.");
          $("#btnMsg").click();
          return false;
        }
        if($("#areaDesForm").val() == ""){
          $("#modalDialog").find("#titleModal").html("Mensaje");
          $("#modalDialog").find("#msgModal").html("<span class='glyphicon glyphicon-warning-sign'></span> El campo Área destino no pueda quedar vacio, favor de verificar.");
          $("#btnMsg").click();
          return false;
        }
        if($("#desForm").val() == ""){
          $("#modalDialog").find("#titleModal").html("Mensaje");
          $("#modalDialog").find("#msgModal").html("<span class='glyphicon glyphicon-warning-sign'></span> El campo Destinatario no pueda quedar vacio, favor de verificar.");
          $("#btnMsg").click();
          return false;
        }
        if($("#usuForm").val() == ""){
          $("#modalDialog").find("#titleModal").html("Mensaje");
          $("#modalDialog").find("#msgModal").html("<span class='glyphicon glyphicon-warning-sign'></span> El campo Usuario no pueda quedar vacio, favor de verificar.");
          $("#btnMsg").click();
          return false;
        }
        if($.trim($("#detalleForm").val()).length == 0){
          $("#modalDialog").find("#titleModal").html("Mensaje");
          $("#modalDialog").find("#msgModal").html("<span class='glyphicon glyphicon-warning-sign'></span> El campo Detalle de envìo no pueda quedar vacio, favor de verificar.");
          $("#btnMsg").click();
          return false;
        }
        $("#btnEnviar").prop('disabled',true);
        $("#btnEnviar").addClass("disabled");
              $.ajax({
                url: 'ajax/'+_url,type: 'POST',data: _data,cache: false,contentType: false,processData: false,
                    beforeSend: function(){
                      $.blockUI({ message: '<div class="alert alert-success"><h5> Guardando, por favor espere un momento...</h5></div><div><img src="resources/images/loadAjax.gif" /><br/><br/></div>',});
                    },
                    success: function(data){
                      //alert(data);
                     // console.log(data);return false;
                      if(parseInt(data) > 0){
                          $("#btnCerrar").addClass("hide");
                          $("#btnAceptar").removeClass("hide");
                          $("#modalDialog").find("#titleModal").html("Mensaje");
                          $("#modalDialog").find("#malert").removeClass("alert-warning").addClass("alert-success");
                          $("#modalDialog").find("#msgModal").html("<input type='hidden' value='"+data+"' id='mIdiSol' /><span class='glyphicon glyphicon-ok'></span> Los datos de la solicitud se han guardando correctamente.");
                          $.unblockUI();
                          $("#btnMsg").click();
                          //window.location = 'inicio';
                      }else{
                        $.unblockUI();
                        $("#btnEnviar").prop('disabled',false);
                        $("#btnEnviar").removeClass('disabled');
                        $("#modalDialog").find("#titleModal").html("Mensaje");
                        $("#modalDialog").find("#msgModal").html("Intente más tarde, hay errores!!!!");
                        $("#btnMsg").click();
                      }
                    },
                    error: function(d){
                      $.unblockUI();
                      $("#btnEnviar").prop('disabled',false);
                      $("#btnEnviar").removeClass('disabled');
                      $("#modalDialog").find("#titleModal").html("Mensaje");
                      $("#modalDialog").find("#msgModal").html("Intente más tarde, hay errores!!!!");
                      $("#btnMsg").click();
                    }
              });
          }
        },100);
      });
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>