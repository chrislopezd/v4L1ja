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
    <link href="{$raiz}resources/css/loggin.css" rel="stylesheet" />
    <link href="{$raiz}resources/plugs/captcha.css" rel="stylesheet" />
    <script src="{$raiz}resources/js/jquery.js"></script>
    <script src="{$raiz}resources/dist/js/bootstrap.min.js"></script>
    <script src="{$raiz}resources/js/jquery-ui.min.js"></script>
    <script src="{$raiz}resources/js/web/loggin.js"></script>
     <!--[if lt IE 9]>
      <script src="{$raiz}resources/dist/js/html5shiv.min.js"></script>
      <script src="{$raiz}resources/dist/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title center" style="font-size: 22pt;font-weight: bold;">BIENVENIDO</div>
            </div>
            <div style="padding-top:30px" class="panel-body">
            	<div class="row mbot10">
            	<div class="col-md-6 col-md-offset-3 center">
            		<img class="pull-left" src="{$raiz}resources/images/logon.png" width="225px" alt="Logo">
            	</div>
            	</div>
                <div id="login-alert" class="alert alert-danger col-sm-12 {if $rem eq 0}hiden{/if}">{$msg}</div>
                <form name="loginform" id="loginform" method="post" action="iniciarSession" class="form-horizontal" role="form">
                	<input type="hidden" name="csrf_vali_tok_name" id="token" value="{$token}" />
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="user" id="user" type="text" class="form-control" placeholder="USUARIO">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="pass" id="pass" type="password" class="form-control" placeholder="CONTRASEÑA">
                    </div>
					<div class="row" style="margin:0px">
        				<div class="ajax-fc-container"></div>
    				</div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">                            
                            <button type="submit" id="btnLog" class="btn btn-success mbot10 btn-lg">Iniciar sesión <span class="glyphicon glyphicon-ok-circle"></span></button>
                        </div>
                    </div>
                    <div class="form-group center">
                        <div class="col-md-12 width100 center">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" class="center">
                                <p class="text-muted white space">© Derechos Reservados 2016</p>
    							<p class="text-muted white">Secretaría de Educación del Gobierno del Estado de Yucatán</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div>    
</div>{literal}
<script type="text/javascript">var _raiz = {/literal}'{$raiz}'{literal};</script>{/literal}
<script type="text/javascript" src="{$raiz}resources/plugs/jquery.touch.js"></script>
<script type="text/javascript" src="{$raiz}resources/plugs/jquery.captcha.js"></script>{literal}
<script type="text/javascript">$().ready(function(){$("#captcha").show();$(".ajax-fc-container").captcha();});</script>{/literal}
</body>
</html>