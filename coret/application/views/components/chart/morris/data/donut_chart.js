

// Use Morris.Area instead of Morris.Line
Morris.Donut({
    element: 'graph-donut',
    data: [
        {value: 70, label: 'foo', formatted: 'at least 70%' },
        {value: 15, label: 'bar', formatted: 'approx. 15%' },
        {value: 10, label: 'baz', formatted: 'approx. 10%' },
        {value: 5, label: 'A really really long label', formatted: 'at most 5%' }
    ],
    backgroundColor: '#fff',
    labelColor: '#1fb5ac',
    colors: [
        '#E67A77','#D9DD81','#79D1CF','#95D7BB'
    ],
    formatter: function (x, data) { return data.formatted; }
});


