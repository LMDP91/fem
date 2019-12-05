{foreach from=$preguntas item=item key=key}
    <h3>{$key+1}.- {$item.pregunta}</h3><br>
    <center>
        {if $item.tiporespuesta eq 'punto'}
            {$item.rango1}
            {$item.rango2}
            <div id="slider"></div>
        {elseif $item.tiporespuesta eq 'opcional'}
            {foreach from=$item.opciones item=item2 key=key}
                <div class="form-group form-md-radios has-success">
                    <div class="col-md-12">
                        <div class="md-radio-inline">
                            <div class="md-radio">
                                <input type="radio" name='check_{$item.preguntaId}' id='check_{$item.preguntaId}' value='{$item2}' class="md-radiobtn">
                                <label for="check_{$item.preguntaId}">
                                    <span class="inc"></span>
                                    <span class="check"></span>
                                    <span class="box"></span>
                                    {$item2}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            {/foreach}
        {else}
            <textarea name='check_{$item.preguntaId}'  class="form-control"></textarea>
        {/if}
        <br>
        <br>
    </center>
{/foreach}