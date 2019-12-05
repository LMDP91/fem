<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/header.tpl"}
    {include file="{$DOC_ROOT}/templates/2-default-css.tpl"}

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>s

<body class="">
<div id="wrap" class="colorskin-0">
    {include file="{$DOC_ROOT}/templates/menus/main.tpl"}
    <section id="headline">
        <div class="container">
            <div class="container iniciar">
                <p class="text-center">
                	<h4>Estas preguntas deberan deberá resguardarse conforme a lo establecido bajo la Ley  General de Protección de Datos Personales en Posesión de Sujetos Obligados, Artículo 45 Fracción 1,  de la Constitución Política del Estado de Chiapas</h4>
                </p>
            </div>
    </section>
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <div class="portlet light bordered" id="form_wizard_1">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-layers font-red"></i>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <form action="#" id="submit_form"  method="post" class="form-horizontal">
                            <div class="form-wizard">
                                <div class="form-body">
                                    <ul class="nav nav-pills nav-justified steps">
                                        <li>
                                            <a href="#tab1" data-toggle="tab" class="step">
                                                <span class="number">1</span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> Datos Personales
                                            </span>
                                            </a>
                                        </li>
                                        {foreach from=$encuestas item=item key=key}
                                        <li>
                                            <a href="#tab{$item.encuestaId}" data-toggle="tab" class="step" data-id="{$item.encuestaId}" data-name="tab{$item.encuestaId}">
                                                <span class="number">{$key+1+1}</span>
                                                <span class="desc">
                                                <i class="fa fa-check"></i> {$item.nombre}
                                            </span>
                                            </a>
                                        </li>
                                        {/foreach}
                                    </ul>
                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                        <div class="progress-bar progress-bar-success"> </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="alert alert-danger display-none">
                                            <button class="close" data-dismiss="alert"></button> Errores encontrados. </div>
                                        <div class="alert alert-success display-none">
                                            <button class="close" data-dismiss="alert"></button> Validacion de formulario realizado! </div>
                                        <div class="tab-pane active" id="tab1">
                                            <h3>Datos personales</h3>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Nombre
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="username" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Apellido Paterno
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="password" class="form-control" name="password" id="submit_form_password" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Apellido Materno
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="password" class="form-control" name="rpassword" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Fecha de nacimiento
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" name="email" />
                                                </div>
                                            </div>
                                        </div>
                                        {foreach from=$encuestas item=item key=key}
                                            <div class="tab-pane active" id="tab{$item.encuestaId}"></div>
                                        {/foreach}
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <a href="javascript:;" class="btn default button-previous">
                                                <i class="fa fa-angle-left"></i> Anterior </a>
                                            <a href="javascript:;" class="btn btn-outline green button-next"> Siguiente
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <a href="javascript:;" class="btn green button-submit"> Enviar
                                                <i class="fa fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="{$DOC_ROOT}/templates/footer.tpl"}
{include file="{$DOC_ROOT}/templates/3-default-js.tpl"}
<script type="text/javascript">
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
    });
</script>
</body>
</html>