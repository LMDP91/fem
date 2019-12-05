var AJAX_PATH = WEB_ROOT+"/ajax/pedido.php";
$(document).ready(function(){
    $("#proDescrip").typeahead({
          hint:false,
          highlight: true,
          minLength: 1
        },
        {
            displayKey: 'name',
            source:function (query,res,result) {
                   return  $.ajax({
                    url: AJAX_AUTOCOMPLETE,
                    type: 'POST',
                    data: 'type=suggestionProducto&query=' + query + '&categoria=' + $('#categoria').val(),
                    beforeSend:function(){
                        $('#productoId').val("");
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        var resultList = response.map(function (item) {
                            return (item);
                        });
                        return result(resultList);
                    }
                });
            },
            limit:20,
            templates: {
                empty: ['<div class="empty-message">',
                    'No se encontraron coincidencias con las caracterisitas proporcionadas.',
                    '</div>'
                ].join('\n'),
            }
        });
   $('#proDescrip').on('typeahead:selected', function (e, element) {
        $('#productoId').val(element.id);
    });
});
function doSearch(){
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: $("#frmFiltroSales").serialize(true),
        beforeSend: function(){
            $("#tblContent").html('');
            $("#tblContent").html(LOADER3);
            //$("#txtErrMsg").hide(0);
        },
        success: function(response) {

            console.log(response)
            var splitResp = response.split("[#]");
            $("#tblContent").html(LOADER3);

            if(splitResp[0] == "ok"){
                $("#tblContent").html(splitResp[1]);

            }else if(splitResp[0] == "fail"){
                $("#tblContent").html(splitResp[1]);
            }else{
                console.log("dddd");
                alert(msgFail);
            }

        },
        error:function(){
            alert(msgError);
        }
    });

}//SaveReg