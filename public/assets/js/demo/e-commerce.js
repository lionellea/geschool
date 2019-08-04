
// Widgets.js
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
	// http://rendro.github.io/easy-pie-chart/
	// =================================================================

    $('#usa-map-markers').vectorMap({
        map: 'us_aea_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        backgroundColor: '#fff',
		zoomButtons: false,
        regionsSelectable: true,
        markersSelectable: true,
        markerStyle: {
            initial: {
                fill: '#a288d5',
				stroke: '#b49ae0',
				"fill-opacity": 1,
				"stroke-width": 10,
				"stroke-opacity": 0.3,
                 r: 3
            },
            hover: {
                stroke: 'black',
				"stroke-width": 2
            },
            selected: {
              fill: 'blue'
            }
        },
        regionStyle: {
            initial: {
                fill: '#E5E5E5'
            },
            hover: {
                "fill-opacity": 0.3
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
        markers: [{
            latLng: [40.71, -74.00],
            name: 'New York'
        }, {
            latLng: [34.05, -118.24],
            name: 'Los Angeles'
        }, {
            latLng: [41.87, -87.62],
            name: 'Chicago'
        }, {
            latLng: [29.76, -95.36],
            name: 'Houston'
        }, {
            latLng: [39.95, -75.16],
            name: 'Philadelphia'
        }, {
            latLng: [38.62, -90.19],
            name: 'St. Louis,MO'
       },  {
            latLng: [38.90, -77.03],
            name: 'Washington'
       },  {
            latLng: [37.36, -122.03],
            name: 'Silicon Valley'
        }]
    });

        // Manual code to alter the Vector map plugin to 
        // allow for individual coloring of countries
        var states = ['US-MT', 'US-TX', 'US-MO',
          'US-NY'
        ];
        var colors = ["#F6BB42", "#83AEE7", "#74C6E5", "#C0B0EA"];
        var colors2 = ["#F6BB42", "#4A89DC", "#3BAFDA", "#967ADC"];
        $.each(states, function(i, e) {
          $("#usa-map-markers path[data-code=" + e + "]").css({
            fill: colors[i]
          });
        });
        $('#usa-map-markers').find('.jvectormap-marker')
          .each(function(i, e) {
            $(e).css({
              fill: colors2[i],
              stroke: colors2[i]
            });
          });

});