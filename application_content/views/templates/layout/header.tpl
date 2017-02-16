<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-type" value="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" media="all" type="image/x-icon" href="{$raiz}resources/favicon/favicon.ico" />
    <link rel="apple-touch-icon" href="{$raiz}resources/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{$raiz}resources/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{$raiz}resources/favicon/apple-touch-icon-114x114.png" />
    <link href="{$raiz}resources/js/jquery-ui.min.css" rel="stylesheet" />
    <link href="{$raiz}resources/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{$raiz}resources/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="{$raiz}resources/css/design.css" rel="stylesheet" />
    <script src="{$raiz}resources/js/jquery.js"></script>
    <script src="{$raiz}resources/dist/js/bootstrap.min.js"></script>
    <script src="{$raiz}resources/js/jquery-ui.min.js"></script>
    <script type="text/javascript">var _raizP = '{$raiz}';</script>
     <!--[if lt IE 9]>
      <script src="{$raiz}resources/dist/js/html5shiv.min.js"></script>
      <script src="{$raiz}resources/dist/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
 <div class="navbar navbar-default " role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="inicio"><img src="{$raiz}resources/images/logoSegey.png" title="SEGEY" class="logoHeader"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
         <li class="{if $active == 'inicio'}active{/if}"><a href="inicio"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
         <li class="{if $active == 'nuevaSolicitud'}active{/if}"><a href="nuevaSolicitud"><i class="glyphicon glyphicon-plus"></i> Nueva solicitud</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <ul class="breadcrumb mtopneg">
                <ul class="breadcrumb pull-right">
                    <li class="{if $active == 'inicio'}active{/if}"> <span class="label label-success label-fill" style="width: 1px !important;position: absolute;margin-left: -10px;margin-top: 5px"> </span><span class="marginRight6 glyphicon glyphicon-user"></span> {$sp_name}</li>
                    <li><a href="cerrarSession"><span class="marginRight6 glyphicon glyphicon-off"></span> Salir</a></li>
                </ul>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</div>



