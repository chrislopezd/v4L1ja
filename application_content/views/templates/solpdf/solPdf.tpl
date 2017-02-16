<style type="text/css">
@page :first{
margin-top: 0;margin-bottom:0;margin-left: 0;margin-right: 0;padding-bottom:100px;page-break-inside:avoid;}
body{
width:100%;font-family:Arial;font-size:10pt;margin:0;padding:0;}
p{
margin:0;padding:0;}
.wrapper{
width:80%;margin:0 auto;display:block;clear:both;}
.tablaHead{
border-collapse: collapse !important;border:1px solid #000;width: 100%;}
.tablaHead td{
border: 1px solid #000 !important;}
.tablaHead td{
padding:5px; font-size:7pt !important;}
.tablaHead th{
padding:5px;font-size: 7pt !important;}
.tablaHead th {
border: 1px solid #000 !important;}
.tablaHead th{
color:#000;}
.center{
text-align:center !important;}
.left{
text-align:left !important;}
.right{
text-align:right !important;}
.headding td.right, .right {
text-align:right !important;}
.verde{
    background: #92D050 !important;
}
.amarillo{
    background: #FFFF00 !important;
}
.naranja{
    background: #FFC000 !important;
}

.w5{
    width: 5% !important
}
.w6{
    width: 6% !important
}
.w7{
    width: 7% !important
}
.w8{
    width: 8% !important
}
.w9{
    width: 9% !important
}
.w10{
    width: 10% !important
}
.w11{
    width: 11% !important
}
.w12{
    width: 12% !important
}
.w15{
    width: 55% !important
}
.tablaEncabezado{
border-collapse: collapse !important;border:1px solid #D6D6D6;width: 100%;}
.tablaEncabezado th, .tablaEncabezado td{
border: 1px solid #D6D6D6 !important;}
.tablaEncabezado td,.tablaEncabezado th{
    padding: 8px;
}

.tablaSB{
border-collapse: collapse !important;width: 100%;}
.mspan {
    font-size: 10pt;
  padding-bottom: 10px;
  border-bottom: 1px solid #D6D6D6;
  line-height: 30px !important;
}
</style>
{nocache}
<div class="wrapper">
    <table class="headding" style="width:100%;" border="0">
        <tr>
            <td style="width:20%;" valign="top"><br/><img src="{$raiz}resources/images/logoSegey.png" alt="SEGEY" style="width:160px;">
            </td>
            <td style="width:50%;" valign="top" class="center"><br/><h2>SOLICITUD VALIJA</h2><br/><div style="float:left">FOLIO ÚNICO VALIJA
                <span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f1}&nbsp;&nbsp;</span><span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f2}&nbsp;&nbsp;</span><span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f3}&nbsp;&nbsp;</span>
            </div></td>
            <td style="width:20%;" valign="top">&nbsp;<br/><img src="{$raiz}resources/images/cede.png" alt="CEDE" style="width:140px;">
            </td>
       </tr>
    </table>
    <div style="padding:5px;"></div>
    <div style="text-align:center">
        <i>Nota: PARA ESTE ENVÍO EL USUARIO ENTREGA EL PAQUETE AL CHOFER PARA SU TRASLADO.</i>
    </div>
    <div style="padding:20px;"></div>
    <table class="tablaEncabezado">
        <tr>
            <th style="width:28%;text-align:left">FECHA ELABORACIÓN</th>
            <td>{$datos->fecha}</td>
        </tr>
        <tr>
            <th style="width:28%;text-align:left">ÁREA QUE ENVÍA</th>
            <td>{$envia->cede_envia} - {$envia->area_envia} - {$envia->usuario_envia}</td>
        </tr>
    </table>
    <div style="padding:10px;"></div>
    <table class="tablaSB">
        <tr>
            <th style="width:28%;text-align:left">ÁREA DESTINO:</th>
            <td style="border-bottom:1px solid #D6D6D6;">{$datos->area_destino} - {$datos->destinatario} - {$datos->usuario_destino}</td>
        </tr>
    </table>
    <div style="padding:10px;"></div>
    <h5 style="margin-bottom:0px !important;">DETALLE DEL ENVÍO:</h5>
    <div style="border:1px solid #D6D6D6; height:180px; width:100%;padding:20px;margin-top:0px;">
    {$datos->detalle_envio}
    </div>
    <div style="padding:10px;"></div>
    <div style="background:#ccc;padding:5px;border:1px solid #D6D6D6;margin-bottom:5px;"><h5 style="margin-top: 0px !important;margin-bottom:0px !important;">OBSERVACIONES:</h5></div>
    <div style="line-height:25px;">
        <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>

    <div style="position:absolute;margin-top:-99px;">
        {$datos->observaciones}
    </div>
        {*<span class="mspan" style="width:700px;">observaciobes</span>*}
    </div>
    <br/><br/><br/>
    <div style="padding:10px;"></div>
    <div  style="border:0px solid;">
        <div style="width:33%;float:left;border-right:1px solid;border-left:1px solid;border-bottom:1px solid;border-top:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">REMITENTE<br/>&nbsp;</td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;border-right:1px solid;border-bottom:1px solid;border-top:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">ENLACE CEDE (RECEPCIÓN)<br/>&nbsp;</td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;border-right:1px solid;border-bottom:1px solid;border-top:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">CHOFER VALIJA<br/><span style="font-size:7pt;">Recibo paquete cerrado</span></td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
    </div>

     <div  style="border:0px solid;">
        <div style="width:33%;float:left;border-right:1px solid;border-left:1px solid;border-bottom:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">CHOFER VALIJA<br/><span style="font-size:7pt;">Recibo paquete cerrado</span></td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;border-right:1px solid;border-bottom:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">ENLACE CEDE (RECEPCIÓN)<br/>&nbsp;</td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;border-right:1px solid;border-bottom:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">DESTINATARIO<br/>&nbsp;</td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
    </div>

    <div  style="border:0px solid;">
        <div style="width:33%;float:left;border-right:1px solid;border-left:1px solid;border-bottom:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">VALIJA MÉRIDA<br/><span style="font-size:7pt;">Recibo paquete cerrado</span></td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">&nbsp;<br/>&nbsp;</td>
                </tr>
            </table>
        </div>
        <div style="width:33%;float:left;border-left:1px solid;border-right:1px solid;border-bottom:1px solid;">
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:center;">ENLACE ÁREA<br/>&nbsp;</td>
                </tr>
            </table>
            <div style="padding:5px"></div>
            <div style="padding-left:10px;padding-right:10px;">
             <table style="width:100%;text-align:center;" class="center" align="center;">
                <tr>
                    <td style="width:33%;"></td>
                </tr>
                <tr>
                    <td style="width:33%;border-bottom:1px solid #000;padding-right:10px"></td>
                </tr>
                <tr>
                    <td style="width:33%;text-align:center;">NOMBRE Y FIRMA</td>
                </tr>
            </table>
            </div>
            <table style="width:100%" border="0">
                <tr>
                    <td style="width:33%;text-align:left;">FECHA:</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<pagebreak type="NEXT-ODD" resetpagenum="1" orientation="P" />

<div class="wrapper">

    <table class="headding" style="width:100%;" border="0">
        <tr>
            <td style="width:20%;" valign="top"><br/><img src="{$raiz}resources/images/logoSegey.png" alt="SEGEY" style="width:160px;">
            </td>
            <td style="width:50%;" valign="top" class="center"><br/><h2>TICKET DE ENVÍO VALIJA</h2><br/><div style="float:left">FOLIO ÚNICO VALIJA
                <span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f1}&nbsp;&nbsp;</span><span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f2}&nbsp;&nbsp;</span><span style="border:1px solid;height:10;width:10px;">&nbsp;&nbsp;{$f3}&nbsp;&nbsp;</span>
            </div></td>
            <td style="width:20%;" valign="top">&nbsp;<br/><img src="{$raiz}resources/images/cede.png" alt="CEDE" style="width:140px;">
            </td>
       </tr>
    </table>
    <div style="padding:5px;"></div>
    <div style="text-align:center">
        <i>Nota: POR REQUERIMIENTOS DEL ÁREA EL USUARIO ENTREGA EL PAQUETE AL CHOFER PARA SU TRASLADO.</i>
    </div>
    <div style="padding:20px;"></div>
    <table class="tablaEncabezado">
        <tr>
            <th style="width:28%;text-align:left">FECHA ELABORACIÓN</th>
            <td>{$datos->fecha}</td>
        </tr>
        <tr>
            <th style="width:28%;text-align:left">ÁREA QUE ENVÍA</th>
            <td>{$envia->cede_envia} - {$envia->area_envia} - {$envia->usuario_envia}</td>
        </tr>
    </table>
    <div style="padding:10px;"></div>
    <table class="tablaSB">
        <tr>
            <th style="width:28%;text-align:left">ÁREA DESTINO:</th>
            <td style="border-bottom:1px solid #D6D6D6;">{$datos->area_destino} - {$datos->destinatario} - {$datos->usuario_destino}</td>
        </tr>
    </table>
    <div style="padding:10px;"></div>
    <h5 style="margin-bottom:0px !important;">DETALLE DEL ENVÍO:</h5>
    <div style="border:1px solid #D6D6D6; height:180px; width:100%;padding:20px;margin-top:0px;">
    {$datos->detalle_envio}
    </div>
    <div style="padding:10px;"></div>
    <div style="background:#ccc;padding:5px;border:1px solid #D6D6D6;margin-bottom:5px;"><h5 style="margin-top: 0px !important;margin-bottom:0px !important;">OBSERVACIONES:</h5></div>
    <div style="line-height:25px;">
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>
    <div style="border-bottom:1px solid #D6D6D6;width:100%">&nbsp;</div>

    <div style="position:absolute;margin-top:-99px;">
    {$datos->observaciones}
    </div>

    {*<span class="mspan" style="width:700px;">observaciobes</span>*}
    </div>



</div>

{nocache}