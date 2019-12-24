<html>
    <head>
        <title>Reporte</title>
        <style type="text/css">
            body {
                font-family: helvetica, Sans-Serif;
                font-size: 11px;
                line-height: 1;
            }
        </style>
    </head>
    <body>
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