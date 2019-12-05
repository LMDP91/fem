{foreach from=$preguntas item=item key=key}
    <h3>{$key+1}.- {$item.pregunta}</h3><br>
    <center>
        {if $item.tiporespuesta eq 'punto'}
            {$item.rango1}
            {$item.rango2}
            <div id="slider"></div>
        {elseif $item.tiporespuesta eq 'opcional'}
            {foreach from=$item.opciones item=item2 key=key}
                <input  class="form-control" type='radio' name='check_{$item.preguntaId}' id='check_{$item.preguntaId}' value='{$item2}'/><font style='font-size:18px'>{$item2}</font>
            {/foreach}
        {else}
            <textarea name='check_{$item.preguntaId}'  class="form-control"></textarea>
        {/if}
        <br>
        <br>
    </center>
{/foreach}