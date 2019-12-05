var AJAX_PATH = WEB_ROOT+"/ajax/pedido.php";

function doSearch(){
    $.ajax({
        type: "POST",
        url: AJAX_PATH,
        data: $("#frmFiltroRankin").serialize(true),
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