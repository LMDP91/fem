<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <a href="javascript:;" class="close" data-dismiss="modal" aria-hidden="true"></a>
            <h4 class="modal-title">Violentometro</h4>
        </div>
        <div class="modal-body">
            <div id="modal-chart" style="min-height: 250px"></div>
            <div class="row">
                <div class="col-md-4 text-justify" style="background: yellow;min-height: 39px">Riesgo bajo</div>
                <div class="col-md-4 text-justify" style="background: orange;min-height: 39px">Riesgo moderado</div>
                <div class="col-md-4 text-justify " style="background: red;min-height: 39px">Riesgo severo</div>
            </div>
            <hr class="clearfix" />
            <form action="" onsubmit="return false;" name="frmComentario" id="frmComentario" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-3"><span class="reqIcon"></span>Comentarios adicionales</label>
                    <div class="col-md-9">
                        <textarea name = "comentario_adicional"  id="comentario_adicional" class="form-control">{$info.comentario_adicional}</textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>