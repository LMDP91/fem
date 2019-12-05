<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	{include file="{$DOC_ROOT}/templates/1-default-meta.tpl"}
	{include file="{$DOC_ROOT}/templates/2-default-css.tpl"}
	{include file="{$DOC_ROOT}/templates/header.tpl"}

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#slider").slider();
        });
    </script>
</head>

<body class="">
<div id="wrap" class="colorskin-0">
    {include file="{$DOC_ROOT}/templates/menus/main.tpl"}
    <section id="headline">
        <div class="container">
            <div class="container iniciar">
                <p class="text-center">
                	<h1>Por favor, Tómate unos minutos para compatir tus ideas con nosotros</h1>
                </p>
            </div>
    </section>
    <section class="container page-content">
        <hr class="vertical-space2">
        <section class="eleven columns">
            <div class="shop-wrap">
                <p class="result-count">{$InfoCategoria.info}</p>
                <div class="shop-wrap">
                    <div id="divRegistro">
                        <div id="loader"></div>
                        <div id="txtErrMsg" style="color:red"></div>
                        <button class="button small iniciar" style="background:#008080" onclick="iniciarEncuesta()">
                            Iniciar
                        </button>
                    </div>
                    <div id='msjEncuesta'>
                    </div>
                    <div id='div_encuesta' style="display:none">
                        <form id="frmGral">
                            <input type='hidden' name='encuestaId' id='encuestaId' value='{$ultima.encuestaId}'/>
                            {foreach from=$registros item=item key=key}
                                <h3>{$key+1}.- {$item.pregunta}</h3>
                                <br>
                                <center>
                                    {if $item.tiporespuesta eq 'punto'}
                                        {$item.rango1}
                                        {$item.rango2}
                                        <div id="slider"></div>
                                    {else if $item.tiporespuesta eq 'opcional'}
                                        {foreach from=$item.opciones item=item2 key=key}
                                            <input type='radio' name='check_{$item.preguntaId}'
                                                   id='check_{$item.preguntaId}' value='{$item2}'/>
                                            <font style='font-size:18px'>{$item2}</font>
                                        {/foreach}
                                    {else}
                                        <textarea name='check_{$item.preguntaId}'
                                                  style='width:100px !important; width:150px'></textarea>
                                    {/if}
                                    <br>
                                    <br>
                                </center>
                            {/foreach}
                        </form>
                        <div id='msj'>
                        </div>
                        <button class="button small" style="background:#008080" onclick="SaveEncuesta()">Enviar
                            Encuesta
                        </button>
                    </div>
                </div>
                <hr class="vertical-space1">
                <div class="pagination2">
                </div>
                <hr class="vertical-space2">
        </section>
    </section>

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