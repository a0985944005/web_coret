
    $(function() {
        var data = [{
            label: "Premium Member",
            data: 40
        }, {
            label: "Gold Member",
            data: 20
        }, {
            label: "Platinum Member",
            data: 10
        }, {
            label: "Silver Member",
            data: 30
        }];
        var options = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0.5,
                    show: true
                }
            },
            legend: {
                show: true
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            colors: ["#79D1CF", "#D9DD81", "#E67A77","#9972B5"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            }
        };
        $.plot($("#pie-chart-donut #pie-donutContainer"), data, options);
    });

    