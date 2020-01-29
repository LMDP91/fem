$(function(){
    $(".btn-chart").on(
        "click",
        function () {
            var id = this.id;
            $.ajax({
                type: "POST",
                url: WEB_ROOT+"/ajax/do-poll.php",
                data: "type=showChart&id="+id,
                success: function(response) {
                    var splitResp = response.split("[#]");
                    if(splitResp[0] == "ok") {
                        $("#draggable").modal("show");
                        $("#draggable").html(splitResp[1]);
                        drawChart(splitResp[2]);
                    }
                },
                error:function(){
                    alert(msgError);
                }
            });
        }
    );
});

function drawChart(value) {
    am4core.ready(function() {
// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end
// create chart
        var chart = am4core.create("modal-chart", am4charts.GaugeChart);
        chart.innerRadius = -15;

        var axis = chart.xAxes.push(new am4charts.ValueAxis());
        axis.min = 0;
        axis.max = 100;
        axis.strictMinMax = true;

        var colorSet = new am4core.ColorSet();
        var gradient = new am4core.LinearGradient();
        gradient.stops.push({color:am4core.color("yellow")})
        gradient.stops.push({color:am4core.color("orange")})
        //gradient.stops.push({color:am4core.color("purple")})
        gradient.stops.push({color:am4core.color("red")})

        axis.renderer.line.stroke = gradient;
        axis.renderer.line.strokeWidth = 15;
        axis.renderer.line.strokeOpacity = 1;

        axis.renderer.grid.template.disabled = true;

        var hand = chart.hands.push(new am4charts.ClockHand());
        hand.radius = am4core.percent(97);
        hand.showValue(parseInt(value), 0, am4core.ease.cubicOut);
    });
}
