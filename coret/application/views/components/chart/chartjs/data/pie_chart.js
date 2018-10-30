/**
 * Created by westilian on 1/19/14.
 */

(function(){
    var t;
    function size(animate){
        if (animate == undefined){
            animate = false;
        }
        clearTimeout(t);
        t = setTimeout(function(){
            $("canvas").each(function(i,el){
                $(el).attr({
                    "width":$(el).parent().width(),
                    "height":$(el).parent().outerHeight()
                });
            });
            redraw(animate);
            var m = 0;
            $(".chartJS").height("");
            $(".chartJS").each(function(i,el){ m = Math.max(m,$(el).height()); });
            $(".chartJS").height(m);
        }, 30);
    }
    $(window).on('resize', function(){ size(false); });


    function redraw(animation){
        var options = {};
        if (!animation){
            options.animation = false;
        } else {
            options.animation = true;
        }


        var pieData = [
            {
                value: 30,
                color:"#E67A77"
            },
            {
                value : 50,
                color : "#D9DD81"
            },
            {
                value : 100,
                color : "#79D1CF"
            }

        ];

        var myPie = new Chart(document.getElementById("pie-chart-js").getContext("2d")).Pie(pieData);

    }




    size(true);

}());
