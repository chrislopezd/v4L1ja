﻿String.prototype.capitalize = function() { return this.charAt(0).toUpperCase() + this.slice(1); }
;(function( $ ){
	$.fn.captcha = function(options){
	var mitext = "tijeras".capitalize();
	var defaults = {borderColor: "",captchaDir: _raiz+"resources",url: "captcha",formId: "loginform",text: "Arrastre el/la <span>"+mitext+"</span> en el círculo.",items: Array("lapiz", "tijera", "reloj", "libro", "nota")};
	var options = $.extend(defaults, options);
	$(this).html("<b class='ajax-fc-rtop'><b class='ajax-fc-r1'></b> <b class='ajax-fc-r2'></b><b class='ajax-fc-r3'></b><b class='ajax-fc-r4'></b></b><div id='ajax-fc-content'><div id='ajax-fc-left'><p id='ajax-fc-task'>" + options.text + "</p><ul id='ajax-fc-task'><li class='ajax-fc-0'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-1'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-2'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-3'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-4'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li></ul></div><div id='ajax-fc-right'><p id='ajax-fc-circle'></p></div></div><div id='ajax-fc-corner-spacer'></div><b class='ajax-fc-rbottom'><b class='ajax-fc-r4'></b> <b class='ajax-fc-r3'></b> <b class='ajax-fc-r2'></b> <b class='ajax-fc-r1'></b></b>");
	var rand = "";var took = $("#token").val();$.ajaxSetup({async:false});$.post('captcha',{csrf_vali_tok_name:took},function(r){rand = r;});$.ajaxSetup({async:true});
	var pic = randomNumber();$(".ajax-fc-" + rand).html( "<img src=\"" + options.captchaDir +"/imgs/item-" + options.items[pic] + ".png\" alt=\"\" />");
	$("p#ajax-fc-task span").html(options.items[pic].capitalize());$(".ajax-fc-" + rand).addClass('ajax-fc-highlighted');$(".ajax-fc-" + rand).draggable({ containment: '#ajax-fc-content' });var used = Array();
	for(var i=0;i<5;i++){
		if(i != rand && i != pic){
			$(".ajax-fc-" +i).html( "<img src=\"" + options.captchaDir +"/imgs/item-" + options.items[i] + ".png\" alt=\"\" />");used[i] = options.items[i];
		}
	}
	$(".ajax-fc-container, .ajax-fc-rtop *, .ajax-fc-rbottom *").css("background-color", options.borderColor);
	$("#ajax-fc-circle").droppable({
		drop: function(event, ui) {
			$(".ajax-fc-" + rand).draggable("disable");$("#" + options.formId).append("<input type=\"hidden\" style=\"display: none;\" id=\"captcha\" name=\"captcha\" value=\"" + rand + "\">");
			setTimeout( function(){
				$("#btnLog").click();
			},10);
		},
		tolerance: 'touch'
	});
	};
})( jQuery );
function randomNumber() {
	var chars = "01234";chars += ".";var size = 1;var i = 1;var ret = "";
	while ( i <= size ){$max = chars.length-1;$num = Math.floor(Math.random()*$max);$temp = chars.substr($num, 1);ret += $temp;i++;}
	return ret;
}