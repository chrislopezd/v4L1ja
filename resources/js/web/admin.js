$.extend({alert: function (message, title) {$("<div></div>").dialog( {buttons:{"Cerrar": function (){$(this).dialog("close"); } },close: function (event, ui) {$(this).remove(); },open : function() {var t = $(this).parent();var  w = $(window);var www = (t.width() / 2);t.offset({top:  (w.height() / 2) - (t.height() / 2),left: (w.width() / 2) - (t.width() / 2)});},resizable: false,position:"center",title: title,witdh:'auto',height: 'auto',overflow: 'auto',fluid:true,modal: true}).html(message);}});
$.fn.extend({onNumeric: function(fn){if($.isFunction(fn)){$(this).bind("paste", function(e){return false;});$(this).bind("drop", function(e){return false;});this.each(function(){$(this).keypress(function(e){var isFf = !(window.mozInnerScreenX == null);if(isFf){if((e.which >= 48 && e.which <= 57) || (e.which == 0) || (e.which == 8)){}else{e.preventDefault();}}else{if(e.which >= 48 && e.which <= 57){}else{e.preventDefault();}}});});}}});
$.fn.extend({onEnter: function(fn){if($.isFunction(fn)){this.each(function(){$(this).keypress(function(e){if(e.which == 13){e.preventDefault();return fn.call(this,e);}});$(this).bind('onEnter',fn)});}else{$(this).trigger('onEnter');}return this;}});
function scrollToTop(){verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = $('body');offset = element.offset();offsetTop = offset.top;$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
function fluidDialog(){var $visible = $(".ui-dialog:visible");$(".ui-dialog-titlebar-close").attr('title','Cerrar');$visible.each(function (){var $this = $(this);var dialog = $this.find(".ui-dialog-content").data("ui-dialog");if (dialog.options.fluid){var wWidth = $(window).width();if (wWidth < (parseInt(dialog.options.maxWidth) + 50)){$this.css("max-width", "90%");} else {$this.css("max-width", dialog.options.maxWidth + "px");}dialog.option("position", dialog.options.position);}});}
function validate(){
	if($.trim($("#fechai").val()).length == 10 && $.trim($("#fechaf").val()).length == 10){
		var arr = $.trim($("#fechai").val()).split("/");var fi = arr[2]+arr[1]+arr[0];var _ar = $.trim($("#fechaf").val()).split("/");var ff = _ar[2]+_ar[1]+_ar[0];
		if(parseInt(ff) < parseInt(fi)){$.alert('<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert">×</button><span class="glyphicon glyphicon-exclamation-sign"></span><strong> Las fechas del rango están incorrectas</strong></div>', 'Mensaje');fluidDialog();return false;}else{return true;}
	}else{return true;}
}
function correoV(ce){
	var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	return (filter.test(ce)) ? true : false;
}
function showErro(o){o.parent('DIV').addClass('has-error');}function hideErro(o){o.parent('DIV').removeClass('has-error');}
$(document).ready(function(){
	$('*').tooltip();$(window).resize(function(){fluidDialog();});$(document).on( 'scroll', function(){if($(window).scrollTop() > 100) {$('.scrollTop').addClass('showUp');}else{$('.scrollTop').removeClass('showUp');}});
	$('.scrollTop').on('click', scrollToTop);$(".header").find("A").remove();
	$(".selectCombo").chosen({allow_single_deselect: true});
	$("#mytabs").tabs();
	var modulo = "";
	$(".fecha").datepicker({dateFormat: 'dd/mm/yy',changeMonth: true,changeYear: true,dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']}).blur(function(){var filter = /^\d{2}\/\d{2}\/\d{4}$/;if(!filter.test($(this).val())){$(this).val(null);}});
	$(".ajaxer").each(function(){$(this).attr("href","#tab_"+$(this).attr("id").replace("link_",""));});
	$("#mytabs").tabs("destroy").tabs();
	$("#link_nuevas, .ajaxer").click(function(event){
		var modu = $(this).attr("id").replace("link_","");
		if(modulo == "" || modulo != modu){
			if(modu == "nuevas"){

			}
			if(modu == "recibidas"){

			}


			$("#tab_cargando").show();$("#tab_"+modu).hide();$("#tab_"+modu).toggle();$("#tab_cargando").toggle();
		}modulo = modu;
	});
	$("#link_nuevas").click();
});