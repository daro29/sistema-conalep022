new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { grupo: '2008', value: 0, 1203: 0, 1204: 0, 1105: 0},
      { grupo: '2009', value: 10, 1203: 5, 1204: 5, 1105: 20},
      { grupo: '2010', value: 5, 1203: 10, 1203: 6, 1105: 15},
      { grupo: '2011', value: 5, 1203: 5, 1204: 10, 1105: 8},
      { grupo: '2012', value: 20, 1203: 15, 1204: 18, 1105: 6}
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'grupo',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value','1203','1204','1105','2203','2204'],
    lineWidth: 1,
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['1203'],
    labels: ['1204'],
    labels: ['1105'],
    labels: ['2203'],
    labels: ['2204'],
    resize: true,
    lineColors: ['#334CFF','#7A33FF','#514149','#414D51','#158104']
    
  });