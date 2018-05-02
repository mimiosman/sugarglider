$(document).ready(function(){
	$.ajax({
		url: "/laporan/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var player = [];
			var score = [];

			for(var i in data) {
				player.push(data[i].sakit);
				score.push(data[i].kira);
			}

			var chartdata = {
				labels: player,
				datasets : [
					{
						label: 'Penyakit',
            backgroundColor: "rgba(2,117,216,1)",
            borderColor: "rgba(2,117,216,1)",
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: score
					}
				]
			};

      var customOption = {
        scales: {
          xAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Penyakit'
            },
            ticks: {
              autoSkip: false
            }
          }],
          yAxes: [{
            display: true,
            scaleLabel: {
              display: true,
              labelString: 'Kekerapan'
            },
            ticks: {
              // min: 0,
              // max: 10,

              // forces step size to be 5 units
              stepSize: 1 // <----- This prop sets the stepSize
            }
          }]
        }
      }

			var ctx = $("#graphSick");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
        options: customOption
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
