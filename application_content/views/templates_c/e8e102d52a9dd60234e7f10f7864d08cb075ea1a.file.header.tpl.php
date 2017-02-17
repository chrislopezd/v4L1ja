<?php /* Smarty version Smarty-3.1.13, created on 2017-02-17 01:11:25
         compiled from "application_content/views/templates/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174868123558782733a61461-98609295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8e102d52a9dd60234e7f10f7864d08cb075ea1a' => 
    array (
      0 => 'application_content/views/templates/layout/header.tpl',
      1 => 1487289539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174868123558782733a61461-98609295',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58782733a83129_84355281',
  'variables' => 
  array (
    'title' => 0,
    'raiz' => 0,
    'active' => 0,
    'sp_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58782733a83129_84355281')) {function content_58782733a83129_84355281($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-type" value="text/html; charset=utf-8">
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" media="all" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/favicon/apple-touch-icon-114x114.png" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/js/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/css/design.css" rel="stylesheet" />
    <script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/js/jquery.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/js/jquery-ui.min.js"></script>
    <script type="text/javascript">var _raizP = '<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
';</script>
     <!--[if lt IE 9]>
      <script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/dist/js/html5shiv.min.js"></script>
      <script src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/dist/js/respond.min.js"></script>
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
      <a class="navbar-brand" href="inicio"><img src="<?php echo $_smarty_tpl->tpl_vars['raiz']->value;?>
resources/images/logoSegey.png" title="SEGEY" class="logoHeader"></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
         <li class="<?php if ($_smarty_tpl->tpl_vars['active']->value=='inicio'){?>active<?php }?>"><a href="inicio"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
         <li class="<?php if ($_smarty_tpl->tpl_vars['active']->value=='nuevaSolicitud'){?>active<?php }?>"><a href="nuevaSolicitud"><i class="glyphicon glyphicon-plus"></i> Nueva solicitud</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <ul class="breadcrumb mtopneg">
                <ul class="breadcrumb pull-right">
                    <li class="<?php if ($_smarty_tpl->tpl_vars['active']->value=='inicio'){?>active<?php }?>"> <span class="label label-success label-fill" style="width: 1px !important;position: absolute;margin-left: -10px;margin-top: 5px"> </span><span class="marginRight6 glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['sp_name']->value;?>
</li>
                    <li><a href="cerrarSession"><span class="marginRight6 glyphicon glyphicon-off"></span> Salir</a></li>
                </ul>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</div>



<?php }} ?>