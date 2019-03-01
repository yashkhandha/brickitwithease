$(document).ready(function(){

    $.ajax({
        url: "https://brickit.tk/load-user-pain.php",
        type: "GET",
        dataType: "JSON",
        success:function (data) {
            console.log(data);
            //var data=[{"id":"1","user_id":"1","pain_date":"2018-10-02","pain_level":"painful"},{"id":"3","user_id":"1","pain_date":"2018-10-01","pain_level":"painful"},{"id":"7","user_id":"1","pain_date":"2018-10-03","pain_level":"less painful"}];
            console.log(data.length);

            var pains = [];
            var dates = [];
            for (var i=0; i < data.length; i++){
                pains.push(data[i].pain_level);
                dates.push(data[i].pain_date);
            }

            var painLevels = [];
            for(var i = 0; i < pains.length; i++){
                if (pains[i] == "no pain"){
                    painLevels[i] = 0;
                }
                else if (pains[i] == "less painful"){
                    painLevels[i] = 1
                }
                else if (pains[i] == "not so bad"){
                    painLevels[i] = 2;
                }
                else if (pains[i] == "painful"){
                    painLevels[i] = 3;
                }
                else if (pains[i] == "very painful"){
                    painLevels[i] = 4;
                }
            }

            console.log(pains);
            console.log(painLevels);
            console.log(dates);

            var ctx = $("#line-chartcanvas");

            var linedata = {
                labels : dates,
                datasets : [{
                    label : "Pain levels",
                    data: painLevels,
                    backgroundColor: "blue",
                    borderColor : "lightblue",
                    fill : false,
                    lineTension: 0,
                    pointRadius:5
                }]
            };


            var chart = new Chart(ctx,{
                type : "line",
                data : linedata,
                options : {
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Days'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Value'
                            },
                            ticks: {
                                min: 0,
                                max: 5,
                                stepSize: 1,
                                suggestedMin: 0.5,
                                suggestedMax: 5.5,
                                callback: function(label, index, labels) {
                                    switch (label) {
                                        case 0:
                                            return 'No pain';
                                        case 1:
                                            return 'Less painful';
                                        case 2:
                                            return 'Not so bad';
                                        case 3:
                                            return 'Painful';
                                        case 4:
                                            return 'Very painful';
                                    }
                                }
                            },
                            gridLines: {
                                display: false
                            }
                        }]
                    }
                }
            });


        },
        error: function (data) {
            console.log('error');
            console.log(data);
        }
    });
});