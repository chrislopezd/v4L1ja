<style type="text/css">
@page :first{
margin-top: 0;margin-bottom:0;margin-left: 0;margin-right: 0;padding-bottom:100px;}
body{
width:100%;font-family:Arial;font-size:10pt;margin:0;padding:0;}
p{
margin:0;padding:0;}
.wrapper{
width:95%;margin:0 auto;display:block;clear:both;}
.tabla,.tablaEncabezado, .tablaHead{
border-collapse: collapse !important;border:1px solid #D6D6D6;width: 100% !important;}
.tablaEncabezado th, .tablaEncabezado td,.tablaHead td{
border: 1px solid #D6D6D6 !important;}
.tablaHead td{
padding:5px;font-size:8pt !important; min-height: 55px !important;}
.tablaHead th{
padding:5px; font-size: 12pt !important;}
.tablaEncabezado td{
padding-left: 5px}
.tablaEncabezado th{
padding-right: 5px}
.tabla td, .tabla th, .tablaHead th {
border: 1px solid #D6D6D6 !important;}
.tabla tr:first-child th {
border-top: 0 !important;}
.tabla tr:last-child td {
border-bottom: 0 !important;}
.tabla tr td:first-child,.tabla tr th:first-child {
border-left: 0 !important;}
.tabla tr td:last-child,.tabla tr th:last-child {
border-right: 0 !important;}
.tabla th,.tablaEncabezado th, .tablaHead th{
background:#1E6647;color:#FFF; font-size: 8pt;}
.tabla caption{
background:#000;color:#FFF; text-align:center; font-weight:bold;}
.tabla td{
font-size:8pt !important; padding:3px;}
.center{
text-align:center !important;}
.left{
text-align:left !important;}
.headding td.right, .right {
text-align:right !important;}
.tdLetter{
    font-size: 12pt;
}
.alert-danger {
    background-image: -webkit-linear-gradient(top,#f2dede 0,#e7c3c3 100%);
    background-image: linear-gradient(to bottom,#f2dede 0,#e7c3c3 100%);
    background-repeat: repeat-x;
    border-color: #dca7a7;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede',endColorstr='#ffe7c3c3',GradientType=0);
}
.alert {
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.25), 0 1px 2px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 0 rgba(255,255,255,0.25), 0 1px 2px rgba(0,0,0,0.05);
}
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
</style>
{nocache}
{if !empty($listado)}
<div class="wrapper">
<div class="table-responsive">
<table class="tablaHead" width="100%" cellspacing="2" cellpadding="2">
    <thead>
    <tr>
        <th>FECHA DE ENVÍO / RECEPCIÓN</th>
        <th>FOLIO</th>
        <th>CEDE</th>
        <th>OFICINA / DEPENDENCIA QUE ENVÍA</th>
        <th>OBSERVACIONES</th>
    </tr>
    </thead>
    <tbody>
        {foreach from=$listado key=k item=res}
        <tr>
            <td>{$res['fecha']}</td>
            <td>{$res['folio']}</td>
            <td>{$res['cede']}</td>
            <td>{$res['area']}</td>
            <td>{$res['observaciones']}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
</div>
</div>
{else}
    <div class="wrapper">
        <div class="alert alert-danger">
            No hay información para mostrar.
        </div>
    </div>
{/if}
{nocache}