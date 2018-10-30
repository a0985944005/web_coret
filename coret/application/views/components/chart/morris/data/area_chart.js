// Use Morris.Area instead of Morris.Line
Morris.Area({
    element: 'graph-area-line',
    behaveLikeLine: false,
    data: [
        {x: '2011 Q1', y: 3, z: 3},
        {x: '2011 Q2', y: 2, z: 1},
        {x: '2011 Q3', y: 2, z: 4},
        {x: '2011 Q4', y: 3, z: 3},
        {x: '2011 Q5', y: 3, z: 4}
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['Y', 'Z'],
    lineColors:['#E67A77','#79D1CF']



});


