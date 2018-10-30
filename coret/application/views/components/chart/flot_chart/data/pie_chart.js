 $(function() {
        var data = [{
            label: "Paid Signup",
            data: 60
        }, {
            label: "Free Signup",
            data: 30
        }, {
            label: "Guest Signup",
            data: 10
        }];
        var options = {
            series: {
                pie: {
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
            colors: ["#79D1CF", "#D9DD81", "#E67A77"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            }
        };
        $.plot($("#pie-chart #pie-chartContainer"), data, options);
    });
