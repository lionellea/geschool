
// Homepage 3.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - squaredesigns.net -


$(document).ready(function() {



	// EASY PIE CHART
	// =================================================================
	// Require easyPieChart
	// -----------------------------------------------------------------
	// http://rendro.github.io/easy-pie-chart/
	// =================================================================

	$('#demo-pie-2').easyPieChart({
		barColor :'#F3565D',
		scaleColor:false,
		trackColor:'#eee',
		lineCap : 'round',
		   size : '70',
		lineWidth :8,
		onStep: function(from, to, percent) {
			$(this.el).find('.pie-value').text(Math.round(percent) + '%');
		}
	});

	$('#demo-pie-3').easyPieChart({
		barColor :'#F3565D',
		scaleColor:false,
		trackColor:'#eee',
		lineCap : 'round',
		   size : '70',
		lineWidth :8,
		onStep: function(from, to, percent) {
			$(this.el).find('.pie-value').text(Math.round(percent) + '%');
		}
	});

	$('#demo-pie-4').easyPieChart({
		barColor :'#F3565D',
		scaleColor:false,
		trackColor:'#eee',
		lineCap : 'round',
		   size : '70',
		lineWidth :8,
		onStep: function(from, to, percent) {
			$(this.el).find('.pie-value').text(Math.round(percent) + '%');
		}
	});



	// JVECTOR MAP
	// =================================================================
	// Require jvectormap.js
	// -----------------------------------------------------------------
	// https://github.com/bjornd/jvectormap
	// =================================================================

    $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        scaleColors: ['#C8EEFF', '#0071A4'],
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
	    zoomButtons: false,
        markerStyle: {
            initial: {
                fill: '#fad733'
            },
            selected: {
                fill: '#ffffff'
            }
        },
        regionStyle: {
            initial: {
                fill: '#23b7e5'
            },
            selected: {
                fill: '#27c24c'
            }
        },
        series: {
            markers: [{
                attribute: 'r',
                scale: [5, 15],
                values: [
                    187.70,
                    255.16,
                    310.69,
                    605.17,
                    248.31,
                    107.35,
                    217.22
                ]
            }]
        },
        backgroundColor: '#fff',
        regionsSelectable: true,
        markersSelectable: true,
        markers: [{
            latLng: [41.90, 12.45],
            name: 'Vatican City'
        }, {
            latLng: [55.75, 37.61],
            name: 'Moscow'
        }, {
            latLng: [52.52, 13.40],
            name: 'Berlin'
        }, {
            latLng: [37.77, -122.41],
            name: 'San Francisco'
        }, {
            latLng: [3.2, 73.22],
            name: 'Maldives'
        }, {
            latLng: [32.71, -117.16],
            name: 'San Diego'
        }, {
            latLng: [40.71, -74.00],
            name: 'New York'
        }, {
            latLng: [47.60, -122.33],
            name: 'Seattle'
        }, {
            latLng: [1.3, 103.8],
            name: 'Singapore'
        }, {
            latLng: [41.87, -87.62],
            name: 'Chicago'
        }, {
            latLng: [26.02, 50.55],
            name: 'Bahrain'
        }, {
            latLng: [43.73, 7.41],
            name: 'Monaco'
        }, {
            latLng: [-0.52, 166.93],
            name: 'Nauru'
        }, {
            latLng: [-8.51, 179.21],
            name: 'Tuvalu'
        }, {
            latLng: [43.93, 12.46],
            name: 'San Marino'
        }, {
            latLng: [47.14, 9.52],
            name: 'Liechtenstein'
        }, {
            latLng: [40.71, -74.00],
            name: 'New York'
        }, {
            latLng: [29.76, -95.36],
            name: 'Houston'
        }, {
            latLng: [1.46, 173.03],
            name: 'Kiribati'
        }, {
            latLng: [-21.13, -175.2],
            name: 'Tonga'
        }, {
            latLng: [15.3, -61.38],
            name: 'Dominica'
        }]
    });


    // FLOT BAR CHART - NEGATIVE
    // =================================================================
    // Require flot Charts
    // -----------------------------------------------------------------
    // http://www.flotcharts.org/
    // =================================================================

    var negativebar = [
        [0, 0.1],
        [1, 0.6],
        [2, 0.8],
        [3, 0.2],
        [4, -0.8],
        [5, -1.0],
        [6, -0.3],
        [7, 0.7],
        [8, 1],
        [9, 0.4],
        [10, -0.5],
        [11, -1],
        [12, -0.5],
        [13, 0.4],
        [14, 1],
        [15, 0.7],
        [16, -0.3],
        [17, -1.0],
        [18, -0.8],
        [19, 0.1],
    ];

    var data = [{
        label: "value A",
        data: negativebar
    }, ];

    $.plot($("#demo-negativebar"), data, {
        series: {
            bars: {
                show: true,
                barWidth: 0.6,
                horizontal: false,
                order: 1,
                fillColor: {
                    colors: [{
                        opacity: 0.5
                    }, {
                        opacity: 0.9
                    }]
                }
            }
        },
        legend: {
            show: true
        },
        grid: {
            borderWidth: 1,
            tickColor: "#eeeeee",
            borderColor: "#eeeeee",
            hoverable: true,
            clickable: true
        },
        xaxis: {
            font: {
                color: "#ccc"
            }
        },
        yaxis: {
            font: {
                color: "#ccc"
            }
        },
        colors: ['#29b7d3'],
    });


    // EARNING STATISTICS
    // =================================================================
    // Require Flot Charts
    // -----------------------------------------------------------------
    // http://www.flotcharts.org/
    // =================================================================
    var earning = [['Jan', 5], ['Feb', 8], ['March', 6], ['April', 9], ['May', 7], ['June', 4], ['July', 8], ['Aug', 12], ['Sept', 6], ['Oct', 8], ['Nov', 6], ['Dec', 10]];

    var plot = $.plot("#demo-earning-statistics", [{
        label: 'Net Earning',
        data: earning,
       }], {
        series: {
            lines: {
                show: true,
				lineWidth: 2,
				fill: false
            },
            points: {
                show: true,
				lineWidth: 2,
				fill: true,
				fillColor: "#ffffff",
				symbol: "circle",
				radius: 5
            },
            shadowSize: 0 // Drawing is faster without shadows
        },
        colors: ['#248aaf'],
        tooltip: true,
        tooltipOpts: {
            defaultTheme: false
        },
        legend: {
            show: true,
            position: 'nw',
            margin: [15]

        },
        grid: {
            hoverable: true,
            clickable: true,
            tickColor: "#eeeeee",
            borderWidth: 1,
            borderColor: "#eeeeee"
        },
        xaxis: {
            mode: "categories"
        }
    });


    // FLOT REAL TIME CHART
    // =================================================================
    // Require Flot realtime Chart
    // -----------------------------------------------------------------
    // http://www.flotcharts.org/
    // =================================================================

        var data1 = [];
        var totalPoints = 300;
        function GetData() {
        data1.shift();
        while (data1.length < totalPoints) {
        var prev = data1.length > 0 ? data1[data1.length - 1] : 50;
        var y = prev + Math.random() * 10 - 5;
        y = y < 0 ? 0 : (y > 100 ? 100 : y);
        data1.push(y);
        }
    var result = [];
    for (var i = 0; i < data1.length; ++i) {
        result.push([i, data1[i]])
        }
    return result;
    }
    var updateInterval = 100;
    var plot = $.plot($("#demo-realtime"), [
            GetData()], {
            series: {
                lines: {
                    show: true,
                    fill: true
                },
                shadowSize: 0
            },
            yaxis: {
                min: 0,
                max: 100,
                ticks: 10
            },
            xaxis: {
                show: true
            },
            grid: {
                hoverable: true,
                clickable: true,
                tickColor: "#eeeeee",
                borderWidth: 1,
                borderColor: "#eeeeee"
            },
            colors: ["#5abcdf", "#ff8673"],
            tooltip: true,
            tooltipOpts: {
                defaultTheme: false
            }
        });
        function update() {
            plot.setData([GetData()]);
            plot.draw();
            setTimeout(update, updateInterval);
        }
        update();


    // FOOTABLE FILTERING
    // =================================================================
    // Require footable.js
    // -----------------------------------------------------------------
    // http://fooplugins.com/plugins/footable-jquery/
    // =================================================================

	var filtering = $('#demo-foo-filtering');
	filtering.footable().on('footable_filtering', function (e) {
		var selected = $('#demo-foo-filter-status').find(':selected').val();
		e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
		e.clear = !e.filter;
	});

	// Filter status
	$('#demo-foo-filter-status').change(function (e) {
		e.preventDefault();
		filtering.trigger('footable_filter', {filter: $(this).val()});
	});

	// Search input
	$('#demo-foo-search').on('input', function (e) {
		e.preventDefault();
		filtering.trigger('footable_filter', {filter: $(this).val()});
	});


});