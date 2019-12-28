<html>
    <head>
        <title>Reporte</title>
        <style type="text/css">
            body {
                font-family: helvetica, Sans-Serif;
                font-size: 12px;
                line-height: 1;
            }
            #page-wrap {
                width: 700px;
                margin: 0 auto;
                page-break-inside: avoid;
            }
            table {
                font-size: 12px;
                line-height: 20px;
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
    <div class="page-wrap">
        <table width="100%">
            <tbody>
            <tr>
                <td rowspan="2" width="30%" valign="middle" style="text-align: center">
                    <img src={$logo}" width="130px">
                </td>
                <td width="70%" valign="top">
                    <div style="text-transform: uppercase;font-weight: bold;text-align: center">
                        <p>Fiscalia General del Estado de Chiapas</p>
                        <p>Guia para la identificacion de riesgo de violencia feminicida</p>
                    </div>

                </td>
            </tr>
            </tbody>
        </table>
        <table width="100%">
            <tr class="border-bottom">
                <td width="10%"><b>Nombre completo</b></td>
                <td width="35%">{$info.nombre} {$info.apaterno} {$amaterno}</td>
                <td width="10%"><b>Edad</b></td>
                <td>{$info.edad}</td>
            </tr>
            <tr class="border-bottom">
                <td width="35%"><b>Municipio</b></td>
                <td width="35%">{$info.municipio}</td>
                <td width="10%"><b>Zona</b></td>
                <td>{$info.tipo}</td>
            </tr>
            <tr class="border-bottom">
                <td  colspan="2"><b>Diagnostico</b></td>
                <td colspan="2">{if $resultGeneral>=75}Riesgo Severo{elseif $resultGeneral>34&&$resultGeneral<75}Riesgo moderado{else}Riesgo bajo{/if}

                </td>
            </tr>
        </table>
        {foreach from=$encuestas item=encu key=kenc}
            <table width="100%" >
                    <tr class="border-bottom">
                        <td><b>Encuesta</b></td>
                        <td>{$encu.nombre}</td>
                    </tr>
                    <tr class="border-bottom">
                        <td><b>Resultado encuesta</b></td>
                        <td>{$encu.resultado}</td>
                    </tr>
                <tbody>
                {foreach from=$encu.preguntas item=item key=key}
                    <tr><td colspan="2">{$key+1}.- {$item.pregunta}</td></tr>
                    <tr><td colspan="2">
                            {foreach from=$item.opciones item=item2 key=key}
                                <div class="md-radio">
                                    <input type="radio" name="question_{$item.preguntaId}" id="question_{$item.preguntaId}_{$key}" value='{$item2}' class="md-radiobtn" {if $item.currentAnswer eq $item2}checked{/if}>
                                    <label for="question_{$item.preguntaId}_{$key}">
                                        <span class="inc"></span>
                                        <span class="check"></span>
                                        <span class="box"></span>
                                        {$item2|strtolower|ucfirst}
                                    </label>
                                </div>
                            {/foreach}
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        {/foreach}
    </div>

    </body>
</html>