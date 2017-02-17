<?php /* Smarty version Smarty-3.1.13, created on 2017-02-17 01:11:25
         compiled from "application_content/views/templates/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237937907587827339fba81-91085147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aa4cf8ad3c790897c6c0d99a8791364cd5c4e04' => 
    array (
      0 => 'application_content/views/templates/inicio.tpl',
      1 => 1487289539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237937907587827339fba81-91085147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58782733a593e9_98733863',
  'variables' => 
  array (
    'raiz' => 0,
    'cedes' => 0,
    'res' => 0,
    'estatus' => 0,
    'choferes' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58782733a593e9_98733863')) {function content_58782733a593e9_98733863($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/fontello/css/fontello.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/chosen.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/plugs/ui.jqgrid.css" rel="stylesheet" />
<div class="container">
<div class="row"><div class="col-lg-12"><ol class="breadcrumb"><li><i class="glyphicon glyphicon-home"></i><a href="inicio"> Inicio</a></li></ol></div></div>

<button type="button" id="btnMsg" class="btn btn-raised btn-default-bright hide" data-toggle="modal" data-target="#modalDialog"></button>

<div id="mytabs">
  <ul>
      <li><a class="ajaxer" id="link_nuevas">Solicitudes</a></li>
      <!--li><a class="ajaxer" id="link_recibidas">En espera</a></li-->
  </ul>
  <div id="tab_nuevas">
  	<div class="mbot10">
  		<a href="nuevaSolicitud" class="btn btn-success btn-lg" style="color:#FFF;"><span class="glyphicon glyphicon-plus"></span> Nueva solicitud</a>
  	</div>
    <div class="panel panel-success">
          <div class="panel-heading">
            <h1 class="panel-title"><b>Filtros</b></h1>
          </div>
          <div class="panel-body">
              <div class="row mbot10">
                  <div class="col-xs-6 col-sm-3">
                  <select data-placeholder='ÁREA ELABORA' name='fareae' id='fareae' class='form-control selectCombo upper'>
	                <option></option>
	                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cedes']->value['DATOS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_cede'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['cede'];?>
</option>
	                <?php } ?>
	              </select>
                  </div>
                  <div class="col-xs-6 col-sm-3 mbot10">
                    <select data-placeholder='ÁREA DESTINO' name='faread' id='faread' class='form-control selectCombo upper'>
	                	<option></option>
	                	<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cedes']->value['DATOS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_cede'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['cede'];?>
</option>
	                <?php } ?>
	              	</select>
                  </div>
                  <div class="col-xs-6 col-sm-2">
                    <select data-placeholder='ESTATUS' name='festatus' id='festatus' class='form-control selectCombo upper'>
	                <option></option>
	                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['estatus']->value['DATOS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_estatus'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['siglas'];?>
</option>
	                <?php } ?>
	              	</select>
                  </div>
                  <div class="col-xs-6 col-sm-2">
                    <input type="text" name="fechai" id="fechai" placeholder="FECHA INICIO" class="form-control fecha fsize10" autocomplete="off" maxlength="10" />
                  </div>
                  <div class="col-xs-6 col-sm-2 mbot10">
                    <input type="text" name="fechaf" id="fechaf" placeholder="FECHA FIN" class="form-control fecha fsize10" autocomplete="off" maxlength="10" />
                  </div>
                  <div class="col-xs-6 col-sm-6">
                    <select data-placeholder='CHOFER' name='fchofer' id='fchofer' class='form-control selectCombo upper'>
	                <option></option>
	                <?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['choferes']->value['DATOS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['res']->key;
?>
	                	<option value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id_chofer'];?>
"><?php echo $_smarty_tpl->tpl_vars['res']->value['nombreChofer'];?>
</option>
	                <?php } ?>
	              	</select>
                  </div>
                  <div class="col-xs-6 col-sm-2 mbot10">
                    <input type="text" name="ffechae" id="ffechae" placeholder="FECHA ENVÍO" class="form-control fecha fsize10" autocomplete="off" maxlength="10" />
                  </div>
                  <div class="col-xs-6 col-sm-2 mbot10">
                    <input type="text" name="ffechar" id="ffechar" placeholder="FECHA RECEPCIÓN" class="form-control fecha fsize10" autocomplete="off" maxlength="10" />
                  </div>
                  <div class="col-xs-4 col-sm-2 mbot10">
                    <button type="button" name="btnFilter" id="btnFilter" class="btn btn-success fontbtn"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                    <button type="button" name="btnPrint" id="btnPrint" title="Imprimir reporte" class="btn btn-success fontbtn"><span class="glyphicon glyphicon-print"></span> </button>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <table id="tablaListado"></table>
          <div id="paginaccion"></div>
        </div>
      </div>
  </div>
  <!--div id="tab_recibidas">
    2
  </div-->
  <div id="tab_cargando" class="tab_cargando"><b>Cargando...</b>&nbsp;<img src='<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/images/loading.gif' /></div>
</div>


<div id="modalDialog" class="modal fade" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModal"></h4>
      </div>
      <div class="modal-body" id="msgModal">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-flat btn-ripple" data-dismiss="modal">Cerrar</button>
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
<?php echo $_smarty_tpl->getSubTemplate ("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
function editarSolicitud(id){
	var token = $('#token').val();
	var div = $("<div><form name='_form' id='_formulario' method='post' action='editaSolicitud'><input type='hidden' name='ids' id='ids' value='"+id+"' /><input type='hidden' name='csrf_vali_tok_name' id='csrf_vali_tok_name' value='"+token+"' /></form></div>");
	$('body').append(div);
	$('body').find("#_formulario").submit();
}
function detalleSolicitud(id){
	$.ajax({
        url: 'ajax/verDetalle',
        	data : {
            'ids' : id,
            'csrf_vali_tok_name' : function(){ return ($('#token').val() != "") ? $('#token').val() : "";}
          },
          dataType : "json", type: "POST",
            beforeSend: function(){
              $.blockUI({ message: '<div class="alert alert-success"><h5> Cargando..., por favor espere un momento...</h5></div><div><img src="resources/images/loadAjax.gif" /><br/><br/></div>',});
            },
            success: function(data){
                $("#btnCerrar").addClass("hide");
                $("#btnAceptar").removeClass("hide");
                $("#modalDialog").find("#titleModal").html("Detalle de la solicitud");
                $("#modalDialog").find("#msgModal").html(data.HTML);
                $.unblockUI();
                $("#btnMsg").click();
            },
            error: function(d){
              $.unblockUI();
              $("#btnEnviar").prop('disabled',false);
              $("#btnEnviar").removeClass('disabled');
              $("#modalDialog").find("#titleModal").html("Mensaje");
              $("#modalDialog").find("#msgModal").html("<div class='alert alert-warning alert-callout' id='malert' role='alert'><strong>Intente más tarde, hay errores!!!!</strong></div>");
              $("#btnMsg").click();
            }
      });
}
function descargarPdf(id){
	var token = $('#token').val();
	var div = $("<div><form name='_form' id='_formulario' method='post' action='ajax/descargarPdf'><input type='hidden' name='ids' id='ids' value='"+id+"' /><input type='hidden' name='csrf_vali_tok_name' id='csrf_vali_tok_name' value='"+token+"' /></form></div>");
	$('body').append(div);
	$('body').find("#_formulario").submit();
	$('body').find("#_formulario").remove();
}
function loadGrid(){
	$("#tablaListado").jqGrid({url:'listadoSolicitudes',postData: {csrf_vali_tok_name : function(){ return ($('#token').val() != "") ? $('#token').val() : "0";},fareae : function(){ return ($('#fareae').val() != "") ? $('#fareae').val() : "";},faread : function(){ return ($('#faread').val() != "") ? $('#faread').val() : "";},fechai : function(){ return ($('#fechai').val() != "") ? $('#fechai').val() : "";},fechaf : function(){ return ($('#fechaf').val() != "") ? $('#fechaf').val() : "";},estatus : function(){ return ($('#festatus').val() != "") ? $('#festatus').val() : "";},chofer : function(){ return ($('#fchofer').val() != "") ? $('#fchofer').val() : "";},fechae : function(){ return ($('#ffechae').val() != "") ? $('#ffechae').val() : "";},ffechar : function(){ return ($('#ffechar').val() != "") ? $('#ffechar').val() : "";}},
	datatype: 'json',mtype: 'POST',height:'auto',colNames:['Id','Folio','Fecha','Fecha Envío','Elaboró','Área destino','Destinatario','Usuario destino','Detalle envío','Observaciones','Estatus','Acciones'],
	colModel:[
		{name:'id_sol',index:'id_sol',align:'center',hidden:true,title:false,width:0,resizable:false},
		{name:'folio',index:'folio',width:150,resizable:false},
		{name:'fecha',index:'fecha',width:70,resizable:false},
		{name:'fecha_envio',index:'fecha_envio',width:96,resizable:false},
		{name:'usuario',index:'usuario',width:120,resizable:false},
		{name:'area_destino',index:'area_destino',align:'left',width:100,resizable:false},
		{name:'destinatario',index:'destinatario',align:'left',width:100,resizable:false},
		{name:'usuario_destino',index:'usuario_destino',align:'left',width:120,resizable:false},
		{name:'detalle_envio',index:'detalle_envio',hidden:true,align:'left',width:230,resizable:false},
		{name:'observaciones',index:'observaciones',hidden:true,align:'left',width:120,resizable:false},
		{name:'estatus',index:'estatus',align:'center',width:60,resizable:false},
		{name:'acciones',index:'acciones',width:100,align:'center',resizable:false}
	 ],
	 gridComplete: function() {$("#paginaccion").attr('style','height:38px');$("#paginaccion").find('DIV.ui-pg-div').html('<a class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span></a>');

		var gridx = jQuery("#tablaListado");	var ids = gridx.jqGrid('getDataIDs');
		for (var i = 0; i < ids.length; i++){
			var rowId = ids[i];	var ret = $("#tablaListado").getRowData(rowId);
			var	edit = "<button type='button' class='btn btn-default' title='Editar' onclick=\"editarSolicitud('" + rowId + "');\"><span class='glyphicon glyphicon-pencil'></span></button> <button type='button' title='Descargar documento' class='btn btn-default' onclick=\"descargarPdf('" + rowId + "');\"><span class='glyphicon glyphicon-file'></span></button>";
			gridx.jqGrid('setRowData', rowId, {acciones:edit});
		}
		$("#tablaListado").find(".cambiarEstatus").off('click').click(function(){cambiarEstatus($(this));});

	},
	shrinkToFit: false,loadtext: 'Cargando...',pager: '#paginaccion',rowNum:25,rowList:[25,50,100,150,200,250,500],viewrecords: true,width: '100%',caption: 'Listado solicitudes',multiselect: false,subGrid : true,subGridUrl: 'listadoSubGrid',
	subgridPostData:{csrf_vali_tok_name : function(){ return $("#token").val()}},
	serializeSubGridData: function(postdata) { return $.extend(postdata, this.p.subgridPostData);},
    subGridModel: [{ name  : ['Usuario','Estatus','Fecha'], align : ['left','center','left'], width : [200,100,150]}]
	}).navGrid('#paginaccion', { view: false, del: false, add: false, edit: false, refresh:true,search:false });
}
$().ready( function(){
	loadGrid();
	$("#btnPrint").click( function(){
		var token = $('#token').val();
		var _estatus = ($('#festatus').val() != "") ? $('#festatus').val() : "";
		var _fechai = ($('#fechai').val() != "") ? $('#fechai').val() : "";
		var _fechaf = ($('#fechaf').val() != "") ? $('#fechaf').val() : "";
		var _fchofer = ($('#fchofer').val() != "") ? $('#fchofer').val() : "";
		var _ffechae = ($('#ffechae').val() != "") ? $('#ffechae').val() : "";
		var _ffechar = ($('#ffechar').val() != "") ? $('#ffechar').val() : "";
		var div = $("<div><form name='_form' id='_formulario' method='post' action='ajax/reportePdf'><input type='hidden' name='estatus' value='"+_estatus+"' /><input type='hidden' name='fechai' value='"+_fechai+"' /><input type='hidden' name='fechaf' value='"+_fechaf+"' /><input type='hidden' name='fchofer' value='"+_fchofer+"' /><input type='hidden' name='ffechae' value='"+_ffechae+"' /><input type='hidden' name='ffechar' value='"+_ffechar+"' /><input type='hidden' name='csrf_vali_tok_name' value='"+token+"' /></form></div>");
		$('body').append(div);
		$('body').find("#_formulario").submit();
		$('body').find("#_formulario").remove();
	});
	$("#btnFilter").click( function(){if(validate())$('#tablaListado').trigger('reloadGrid');});
});
</script>
<?php }} ?>