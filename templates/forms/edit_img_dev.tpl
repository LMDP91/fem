<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
            <h4 class="modal-title">Editar</h4>
        </div>
        <div class="modal-body">
			<form id="frmGral">
			<input type="hidden" id="type" name="type" value="upFile">
			<input type="hidden" id="id" name="id" value="{$Id}">
            <!-- START FORM a-->
				
				<font color='red'>{$info.observacion}</font>
				<input type="file" name="img" id="img" onChange="upFile()">

            <!-- END FORM -->
			</form>
        </div>
		<progress id="progress" value="0"></progress>
		<div id="porcentaje"></div>
        <div class="modal-footer">
           <!-- <span class="reqIcon">*</span> Campos requeridos
            
            <div align="center" id="loader"></div>
            <div align="center" id="txtErrMsg" class="alert alert-danger" style="display:none"></div>
            <button class="btn dark-btn-outline" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn green" onclick="SaveReg()">{if $info}Actualizar{else}Guardar{/if}</button>-->
        </div>
    </div>
</div>