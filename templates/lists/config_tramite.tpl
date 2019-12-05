<div class="row">
 <div class="col-md-12">
   <h3>Requisitos</h3>
    <form name="frmConfigTramite" id="frmConfigTramite" action="#" class="form-horizontal form-bordered">
        <div class="form-body">
                <input type="hidden" name="type" value="saveConfig" />
                <input type="hidden" name="catalogo_tramite_id" value="{$row.catalogo_tramite_id}" />
                 {foreach from=$listReq item=item key=key}
                  <div class="form-group">
                   <label class="control-label col-md-9"><span class="reqIcon"></span>{$item.nombre}</label>
                    <div class="col-md-3">
                     <input class="make-switch" type="checkbox" {if $item.agregado}checked{/if} value="{$item.requisito_id}" name="requisito[]" data-off-color="warning" data-on-color="success">
                    </div>
                    </div>
                 {/foreach}
        </div>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <div align="center" id="loader"></div>
                        <a href="javascript:;" onClick="SaveConfig()" type="button" class="btn green">
                            <i class="fa fa-check"></i>Guardar Cambios</a>
                        <a type="button" class="btn default" href="{$WEB_ROOT}/cat_tramite">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>
<div class="row">
 <div class="col-md-12">
       <h3>Procesos</h3>
    <form name="frmProcesoTramite" id="frmProcesoTramite" action="#" class="form-horizontal form-bordered">
        <div class="form-body">
                <input type="hidden" name="type" value="saveConfigProceso" />
                <input type="hidden" name="catalogo_tramite_id" value="{$row.catalogo_tramite_id}" />
                 {foreach from=$procesos item=item key=key}
                  <div class="form-group">
                   <label class="control-label col-md-6"><span class="reqIcon"></span>{$item.nombre}</label>
                    <div class="col-md-1">
                     <input class="make-switch" type="checkbox" {if $item.agregado}checked{/if} value="{$item.procesoId}" name="proceso[]" data-off-color="warning" data-on-color="success">
                    </div>
                    <div class="col-md-1">
                      {if $item.agregado}
                        <input type="text" value="{$item.orden}" class="form-control" name="orden_{$item.procesoId}">
                      {else}
                         <input type="text" class="form-control" name="orden_{$item.procesoId}">
                      {/if}
                    </div>
                  </div>
                 {/foreach}
        </div>

    <div class="form-actions">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                        <div align="center" id="loader"></div>
                        <a href="javascript:;" onClick="SaveConfigProceso()" type="button" class="btn green">
                            <i class="fa fa-check"></i>Guardar Cambios</a>
                        <a type="button" class="btn default" href="{$WEB_ROOT}/cat_tramite">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>