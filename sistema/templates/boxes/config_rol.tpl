<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
            <h4 class="modal-title">Configurar Rol</h4>
        </div>
        <div class="modal-body">
            <!-- START FORM -->
            {include file="{$DOC_ROOT}/templates/forms/config_rol.tpl"}
            <!-- END FORM -->
        </div>
        <div class="modal-footer">
            <span class="reqIcon">*</span> Campos requeridos
            <div align="center" id="loader"></div>
            <div align="center" id="txtErrMsg" class="alert alert-danger" style="display:none"></div>
            <button class="btn dark-btn-outline" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn green"  id="saveConfig">Guardar permisos</button>
        </div>
    </div>
</div>