<form name="frmConfigRole" id="frmConfigRole" action="#" class="form-horizontal ">
    <div class="form-body">
            <input type="hidden" name="type" value="saveConfig" />
            <input type="hidden" name="role_id" value="{$row.ID}" />
            <table class="table table-hover">
             <thead>
               <th>Grupo</th>
               <th>Permiso</th>
               <th>Si/No</th>
             </thead>
             <tbody>
             {foreach from=$listReq item=item key=key}
              <tr>
               <td>{$item.Description}</td>
               <td>{$item.Title}</td>
               <td>
                <input class="make-switch" type="checkbox" value="{$item.ID}" {if $item.add}checked{/if} name="permisos_assign[]" data-off-color="warning" data-on-color="success">
               </td>
              </tr>
             {/foreach}
             </tbody>
            </table>
    </div>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <div align="center" id="loader"></div>
                    <a href="javascript:;" onClick="SaveConfig()" type="button" class="btn blue">
                        <i class="fa fa-check"></i>Guardar Cambios</a>
                    <a type="button" class="btn default" href="{$WEB_ROOT}/rol">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>