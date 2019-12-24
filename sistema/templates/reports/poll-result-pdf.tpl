<html>
    <head>
        <title>Reporte</title>
        <style type="text/css">
            body {
                font-family: helvetica, Sans-Serif;
                font-size: 11px;
                line-height: 1;
            }
            table {
                font-size: 14px;
                line-height: 20px;
                border:1px solid;
            }
            table.outline-table {
                border: 2px solid #ccc;
                border-spacing: 0;
            }
            tr.border-bottom td, td.border-bottom {
                border-bottom: 1px solid #ccc;
            }
            tr.border-top td, td.border-top {
                border-top: 1px solid #ccc;
            }
            tr.border-right td, td.border-right {
                border-right: 1px solid #ccc;
            }
            tr.border-left td, td.border-left {
                border-left: 1px solid #ccc;
            }
            tr.border-right td:last-child {
                border-right: 0px;
            }
            tr.center td, td.center {
                text-align: center;
                vertical-align: text-top;
            }
            td.pad-left {
                padding-left: 5px;
            }
            tr.right-center td, td.right-center {
                text-align: right;
                padding-right: 50px;
            }
            tr.right td, td.right {
                text-align: right;
            }
        </style>
    </head>
    <body>
    <table width="100%">
       <tr>
           <td width="10%"><b>Nombre completo</b></td>
           <td width="35%">{$info.nombre} {$info.apaterno} {$amaterno}</td>
           <td width="10%"><b>Edad</b></td>
           <td>{$info.edad}</td>
       </tr>
        <tr>
            <td width="35%"><b>Municipio</b></td>
            <td width="35%">{$info.municipio}</td>
            <td width="10%"><b>Zona</b></td>
            <td>{$info.tipo}</td>
        </tr>
        <tr>
            <td  colspan="2"><b>Diagnostico</b></td>
            <td></td>
        </tr>
    </table>
    {foreach from=$encuestas item=encu key=kenc}
        <h3>{$encu.nombre}</h3>
        {foreach from=$encu.preguntas item=item key=key}
            <div class="form-group">
            <label class="font-hg">{$key+1}.- {$item.pregunta}</label>
            {if $item.tiporespuesta eq 'punto'}
                {$item.rango1}
                {$item.rango2}
                <div id="slider"></div>
            {elseif $item.tiporespuesta eq 'opcional'}
                <div class="form-group form-md-radios has-success">
                    <div class="col-md-12">
                        <div class="md-radio-inline">
                            {foreach from=$item.opciones item=item2 key=key}
                                <div class="md-radio">
                                    <input type="radio" name="question_{$item.preguntaId}" id="question_{$item.preguntaId}_{$key}" value='{$item2}' class="md-radiobtn" {if $item.currentAnswer eq $item2}checked{/if}>
                                    <label for="question_{$item.preguntaId}_{$key}">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        {$item2}
                                    </label>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
                </div>
            {else}
                <textarea name='check_{$item.preguntaId}'  class="form-control"></textarea>
            {/if}
        {/foreach}
    {/foreach}
    </body>
</html>