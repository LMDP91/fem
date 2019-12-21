$(function () {
    var AJAX_PATH = WEB_ROOT+"/ajax/poll.php";
    $("ul.steps a").on("click",function () {
        var id = $(this).data("id");
        var victimaId  = $("#id").length ? $("#id").val() : "";
        var name = $(this).data("name");
        $.ajax({
            type: "POST",
            url: AJAX_PATH,
            data: "type=getQuestions&id="+id+"&victimaId="+victimaId,
            beforeSend: function(){
            },
            success: function(response) {
                $("#"+name).html(response);
            },
            error:function(){
                alert(msgError);
            }
        });
    });
    $(".btnSaveDataVictima").on(
        "click",
        function () {
          var form = $(this).parents("form:first");
          $.ajax({
              type: "POST",
              url: AJAX_PATH,
              data: form.serialize(true),
              beforeSend: function(){
              },
              success: function(response) {
                  var splitResp = response.split("[#]");
                  if(splitResp[0] == "ok"){
                      location.href = WEB_ROOT+"/do-poll/id/"+splitResp[1];
                  }else{
                      $("#txtErrMsg").show();
                      $("#txtErrMsg").html(splitResp[1]);
                  }
              },
              error:function(){
                  alert(msgError);
              }
          });
        }
    );
    $('#frm-poll-wizard').bootstrapWizard();
});
$(document).on(
    "click",
    ".btnPoll",
    function(){
        var form = $(this).parents("form:first");
        console.log(form);
    }
);