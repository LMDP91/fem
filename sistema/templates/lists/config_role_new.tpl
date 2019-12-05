<form name="frmConfigRole" id="frmConfigRole" action="#" class="form-horizontal ">
    <div class="form-body">
            <input type="hidden" name="type" value="saveConfig" />
            <input type="hidden" name="role_id" value="{$row.ID}" />
            <table class="table table-hover">
             <thead>
               <th></th>
               <th>Modulo</th>
               <th>Asignar</th>
             </thead>
             <tbody>
             {foreach from=$listReq item=item key=key}
              <tr>
               <td>
					<a href="javascript:void(0)" onClick="verNivel({$item.ID})">
					[+]
					</a>
				</td>
               <td>{$item.Title}</td>
               <td>
              <input class="make-switch" type="checkbox" value="{$item.ID}" {if $item.check}checked{/if} name="permisos_assign[]" data-off-color="warning" data-on-color="success">
               </td>
              </tr>
			  <tr style="display:none" id="td_{$item.ID}">
				<td colspan="3">
					<table>
						<tr>
							<td></td>
							<td>SECCIONES</td>
							<td></td>
						</tr>
						 {foreach from=$item.secciones item=item2 key=key}
						 <tr>
							<td>
								<a href="javascript:void(0)" onClick="verNivel({$item2.ID})">
								[+]
								</a>
							</td>
							<td>{$item2.Title}</td>
							<td>
							<input class="make-switch" type="checkbox" value="{$item2.ID}" {if $item2.check}checked{/if} name="permisos_assign[]" data-off-color="warning" data-on-color="success">
							</td>
						 </tr>
						 <tr id="td_{$item2.ID}" style="display:none">
							<td colspan="3" >
								<table>
									<tr>
										<td></td>
										<td>ACCIONES</td>
										<td></td>
									</tr>
									{foreach from=$item2.acciones item=item3 key=key}
									<tr>
										<td>
											
										</td>
										<td>{$item3.Title}</td>
										<td></td>
									</tr>
									{/foreach}
								</table>
							</td>
						 </tr>
						 {/foreach}
					</table>
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